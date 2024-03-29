<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
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
//    public function follow(){
//
//        return $this->hasMany(Follow::class,'user_id','id');
//    }
    public function followings() {
        return $this->belongsToMany(User::class, 'users_followers', 'follower_id', 'leader_id');
    }

// users that follow this user
    public function followers() {
        return $this->belongsToMany(User::class, 'users_followers', 'leader_id', 'follower_id');
    }

    public function following_categories() {
        return $this->belongsToMany(Category::class, 'category_followers', 'follower_id', 'leader_id');
    }

    public function category_followers() {
        return $this->belongsToMany(Category::class, 'category_followers', 'leader_id', 'follower_id');
    }

    public function following_posts() {
        return $this->belongsToMany(Post::class, 'post_followers', 'follower_id', 'leader_id');
    }

    public function post_followers() {
        return $this->belongsToMany(Post::class, 'post_followers', 'leader_id', 'follower_id');
    }

    public function liking_posts() {
        return $this->belongsToMany(Post::class, 'post_likes', 'liker_id', 'leader_id');
    }

    public function post_likers() {
        return $this->belongsToMany(Post::class, 'post_likes', 'leader_id', 'liker_id');
    }

    public function liking_comments() {
        return $this->belongsToMany(Comment::class, 'comment_likes', 'liker_id', 'leader_id');
    }

    public function comment_likers() {
        return $this->belongsToMany(Comment::class, 'comment_likes', 'leader_id', 'liker_id');
    }
    public function transactions() {

        return $this->hasMany(Transaction::class,'user_id','id');
    }
    public function messages()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }
}
