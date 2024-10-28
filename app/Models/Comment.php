<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $dates = ['deleted_at'];
    protected $fillable = ['user_id','parent_id', 'post_id', 'body'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
  
    public function post()
    {
        return $this->belongsTo(Posts::class, 'post_id'); 
    }


    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }
    
   
}
