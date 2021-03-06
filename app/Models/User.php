<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Category;
use Laravel\Cashier\Billable;
class User extends Authenticatable
{
    use HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'about',
        'follower_id',
        'name',
        'stripe_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getId()
    {
        return $this->id;
    }
    public function follow(){

        return $this->hasMany(Follow::class,'user_id','id');
    }
    public function transactions() {

        return $this->hasMany(Transaction::class,'user_id','id');
    }
}
