<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    // Define relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Retrieve all posts from the database
    public static function getAllPosts()
    {
        return self::orderBy('created_at', 'desc')->get();
    }
}
