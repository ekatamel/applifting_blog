<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('images')->truncate();

      $images = [
        [
          // "name" => "Big cat looking to the side",
          "path" => "/images/articles/cat.png",
          "article_id" => 1
        ],
        [
          // "name" => "Small kitten playing in the grass",
          "path" => "/images/articles/kitten-grass.png",
          "article_id" => 2
        ],
        [
          // "name" => "Small kitten scrathing",
          "path" => "/images/articles/kitten-scratching.png",
          "article_id" => 3
        ],
        [
          // "name" => "Three little kittens looking at the camera",
          "path" => "/images/articles/three-kittens.png",
          "article_id" => 4
        ],
        [
          // "name" => "Kittens staring at the floor",
          "path" => "/images/articles/kute-kitten.png",
          "article_id" => 5
        ],
      ];

      foreach ($images as $image) {
        $image = Image::create($image);
        $image->save();
      }
    }
}
