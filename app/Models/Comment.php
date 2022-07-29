<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use App\Models\User;
use App\Models\Vote;

class Comment extends Model
{
    use HasFactory;

    public function article()
    {
      $this->belongsTo(Article::class);
    }
    
    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function votes()
    {
      return $this->hasMany(Vote::class);
    }
}
