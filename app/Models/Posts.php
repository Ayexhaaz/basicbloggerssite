<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;


    protected $fillable = [
        'writer_id',
    	'title',
        'slug',
        'category_id',
        'sdescription',
        'description',
        'status',
        'image',
    ];

    public function writer()
    {
        return $this->belongsTo(Writer::class, 'writer_id');
    }

public function category()
{
    return $this->belongsTo(Category::class, 'category_id');
}
   



    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = Str::slug($post->title);
        });

        static::updating(function ($post) {
            $post->slug = Str::slug($post->title);
        });
        
    }

 
    public function comments()
{
    return $this->hasMany(Comment::class, 'post_id'); // Ensure the foreign key matches the column in the comments table
}
/**
 * Get all of thn socials for the Posts
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */


}
