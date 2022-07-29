<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Vote;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $votes = [
          [
            "user_id" => 1,
            "comment_id" => 1,
            "value" => 1
          ],
          [
            "user_id" => 2,
            "comment_id" => 1,
            "value" => 1
          ],
          [
            "user_id" => 3,
            "comment_id" => 1,
            "value" => 1
          ],
          [
            "user_id" => 1,
            "comment_id" => 2,
            "value" => 1
          ],
          [
            "user_id" => 2,
            "comment_id" => 2,
            "value" => 1
          ],
          [
            "user_id" => 3,
            "comment_id" => 2,
            "value" => 1
          ],
          [
            "user_id" => 4,
            "comment_id" => 2,
            "value" => 1
          ],
          [
            "user_id" => 5,
            "comment_id" => 2,
            "value" => 1
          ],
          [
            "user_id" => 4,
            "comment_id" => 3,
            "value" => 1
          ],
          [
            "user_id" => 1,
            "comment_id" => 3,
            "value" => 1
          ],
          [
            "user_id" => 2,
            "comment_id" => 4,
            "value" => 1
          ],
        ];

        foreach ($votes as $vote) {
          $vote = Vote::create($vote);
          $vote->save();
        }
    }
}
