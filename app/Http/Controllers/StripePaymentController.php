<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use mysql_xdevapi\Exception;
use Session;
use Stripe;
use Stripe\Customer;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('payment');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function card_create(Request $request)
    {
        $user = $request->user();
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $stripe=new \Stripe\StripeClient('sk_test_51IDT1rLV6S2YaGRAJ4BLZcGt468ETmMzHuGWlHVv7MBTjjLda3pXurPbmwD74BalNTuV7kLhiqbiwKBfKTuRnjqq00pKL4vtzv');
        try {
            if (!$user->stripe_id) {
                $customer = \Stripe\Customer::create([
                    'source' => $request->stripeToken,
                    'email' => 'paying.useruser@gmail.com',
                ]);

                $user->stripe_id = $customer->id;
                $user->save();


                $card_payment=$stripe->customers->createSource(
                    $user->stripe_id,
                    ['source' => $request->stripeToken]
                );

                $card=new Card();
                $card->id=$card_payment->id;
                $card->card_number=$card_payment->last4;
                $card->cvc=$card_payment->cvc_check;
                $card->month=$card_payment->exp_month;
                $card->year=$card_payment->exp_year;
                $card->brand=$card_payment->brand;
                $card->save();
            } else {
                $card_payment=$stripe->customers->createSource(
                    $user->stripe_id,
                    ['source' => $request->stripeToken]
                );

                $card=new Card();
                $card->card_id=$card_payment->id;
                $card->user_id=Auth::id();
                $card->card_number=$card_payment->last4;
                $card->cvc=$card_payment->cvc_check;
                $card->month=$card_payment->exp_month;
                $card->year=$card_payment->exp_year;
                $card->brand=$card_payment->brand;
                $card->save();
            }
        }
        catch (\Stripe\Exception\CardException $e) {
            echo 'Status is:' . $e->getHttpStatus() . '\n';
            echo 'Type is:' . $e->getError()->type . '\n';
            echo 'Code is:' . $e->getError()->code . '\n';
            // param is '' in this case
            echo 'Param is:' . $e->getError()->param . '\n';
            echo 'Message is:' . $e->getError()->message . '\n';

//            return back(with($e));
        }
        return $card;

    }
    public function stripePost(Request $request)
    {
        $user=$request->user();
        $charged_user=User::where('id',$request->id)->first();
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $customer = Customer::retrieve($user->stripe_id);
        $customer->default_source = $request->card;
        $customer->save();
        if($user->balance > $request->price) {
            $transaction = Stripe\Charge::create([
                "amount" => 100 * $request->price,
                "currency" => "usd",
                "description" => "Test payment.",
                'customer' => $user->stripe_id,
                'source' => $request->card,
            ]);

            if ($transaction) {
                $amount = floatval($request->price);
                $charged_user->balance += $amount - ($amount * 10) / 100;
                $charged_user->save();
                $user->balance -= $amount;
                $user->save();

                $user_transaction = new Transaction();
                $user_transaction->transaction_id = $transaction->id;
                $user_transaction->user_id = $user->id;
                $user_transaction->to_id = $charged_user->id;
                $user_transaction->amount = $amount;
                $user_transaction->date = date('Y-m-d H:i:s');
                $user_transaction->save();
            }

            Session::flash('success', 'Payment created successfully. Your balance has been decreased by $' . $amount . '!');
        }
        /*}*/
//        } else {
////            Session::flash('Your balance is smaller than the price requested by you!','alert-danger');
////        }
        return back();
    }
    public function payout(Request $request)
    {
        $user = $request->user();
        $price = floatval($request->price);
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        if ($user->balance += $price) {
            Stripe\Payout::create([
                'amount' => 100 * $price,
                'currency' => 'usd',
            ]);

        }
    }
    public function history(){
        $user = User::where('id', Auth::user()->getId())->first();
        $transactions = Transaction::with('user','seller')->where('user_id',$user->id)->get();
        $seller_transactions = Transaction::with('user','seller')->where('to_id',$user->id)->get();
        return view('history',compact('user','transactions','seller_transactions'));
    }
    public function pay(Request $request)
    {
        $user = Auth::user();
        if ($user->balance > $request->price) {
            $amount = floatval($request->price);
            $charged_user=User::where('id',$request->id)->first();
            $charged_user->balance += $amount;
            $charged_user->save();
            $user->balance -= $amount;
            $user->save();

            Session::flash('success', 'Payment created successfully. Your balance has been decreased by $' . $amount . '!');
        }
    }
}
