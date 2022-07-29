<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Vote;
use App\Models\User;

class ApiController extends Controller
{
    public function loadArticles()
    {
      $articles = Article::query()
                          ->with("user", "image", "comments")
                          ->orderBy("created_at", "DESC")
                          ->get();

      return $articles;
    }

    public function showArticle($id)
    {
      $article = Article::query()
                           ->with("user", "image", "comments")
                           ->findOrFail($id);

      return $article;
    }

    public function displayRelated($word)
    {
      $article = Article::whereRaw("MATCH (`title`) AGAINST ('$word')")->get();
                        

      return $article;
    }

    public function loadComments($id)
    {
      $comments = Comment::query()
                    ->where("article_id", "=", $id)
                    ->with("user")
                    ->orderBy("created_at", "DESC")
                    ->get();

      return $comments;
    }

    public function changeVotes($id, Request $request)
    {
      $comment = Comment::findOrFail($id);
      $user = User::findOrFail($request->input("user_id"));

      $vote_db = Vote::query()
                  ->where("comment_id", "=", $id)
                  ->where("user_id", "=", $user->id)
                  ->first();
      
      if ($vote_db != null) {
        return response()->json(['errors' => [
          "duplicate" => ['You have been voted on this comment!']
        ]],422);
      } else {
        $vote = new Vote;
        $vote->user_id = $user->id;
        $vote->comment_id = $comment->id;
        $vote->value = $request->input("value");

        $vote->save();
      }


      

      $comment->votes = $request->input("votes");
      
      $comment->save();

      // Return 200 response
      
    }

    public function storeComment(Request $request)
    {
      $comment = new Comment;
      $comment->article_id = $request->input("article_id");
      $comment->user_id = $request->input("user_id");
      $comment->content = $request->input("content");
      $comment->votes = 0;

      $comment->save();

      // Return 200 response
    }
}
