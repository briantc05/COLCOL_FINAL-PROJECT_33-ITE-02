<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['blog_title', 'blog_content', 'user_id' , 'image_path'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
