<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("comments")->truncate();

        $comments = [
          [
            "article_id" => 1,
            "user_id" => 2,
            // "author" => "Lily Hawkins",
            "content" => "You see, wire telegraph is a kind of a very, very long cat. You pull his tail in New York and his head is meowing in Los Angeles. Do you understand this? And radio operates exactly the same way: you send signals here, they receive them there. The only difference is that there is no cat.",
            "votes" => 3
          ],
          [
            "article_id" => 1,
            "user_id" => 3,
            // "author" => "Annette Bell",
            "content" => "A cat has absolute emotional honesty: human beings, for one reason or another, may hide their feelings, but a cat does not",
            "votes" => 5
          ],
          [
            "article_id" => 1,
            "user_id" => 4,
            // "author" => "Priscilla Simmmons",
            "content" => "In its flawless grace and superior self-sufficiency I have seen a symbol of the perfect beauty and bland impersonality of the universe itself, objectively considered, and in its air of silent mystery there resides for me all the wonder and fascination of the unknown",
            "votes" => 2
          ],
          [
            "article_id" => 1,
            "user_id" => 5,
            // "author" => "Pat Miles",
            "content" => "I regard cats as one of the great joys in the world. I see them as a gift of highest order",
            "votes" => 1
          ]
          ];

          foreach ($comments as $comment) {
            $comment = Comment::create($comment);
            $comment->save();
          }
    }
}
