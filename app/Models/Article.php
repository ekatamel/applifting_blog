<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;
use App\Models\Image;

class Article extends Model
{
    use HasFactory;

    public function user()
    {
      return $this->belongsTo(User::class);
    }
    
    public function comments()
    {
      return $this->hasMany(Comment::class);
    }

    public function image()
    {
      return $this->hasOne(Image::class);
    }
}
