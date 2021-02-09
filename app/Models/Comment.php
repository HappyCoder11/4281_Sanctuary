<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'user_id',
        'files',
        'category_id'
    ];
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id','id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function likes()
    {
        return $this->hasMany(Like::class, 'comment_id');
    }
}
