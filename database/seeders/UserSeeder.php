<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [
        [
          "id" => 1,
          "path" => "/images/avatars/strain.png",
          "role" => "admin"
        ],
        [
          "id" => 2,
          "path" => "/images/avatars/hawkins.png",
          "role" => "admin"
        ],
        [
          "id" => 3,
          "path" => "/images/avatars/bell.png",
          "role" => "admin"
        ],
        [
          "id" => 4,
          "path" => "/images/avatars/simmmons.png",
          "role" => "admin"
        ],
        [
          "id" => 5,
          "path" => "/images/avatars/miles.png",
          "role" => "admin"
        ],
      ];

      foreach ($users as $user) {
        $user_db = User::findOrFail($user["id"]);
        $user_db->path = $user["path"];
        $user_db->role = $user["role"];
        $user_db->save();
      }
    }
}
