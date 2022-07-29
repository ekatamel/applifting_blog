<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("articles")->truncate();
        $articles = [
        [
          "title" => "Why Do Cats Have Whiskers?",

          "perex" => "A cat's whiskers — or vibrissae — are a well-honed sensory tool that helps a cat see in the dark and steer clear of hungry predators. Whiskers are highly sensitive tactile hairs that grow in patterns on a cat's muzzle, above its eyes and elsewhere on its body, like the ears, jaw and forelegs",

          "content" => " Men might grow a beard or maintain a mustache just for extra style points, but the facial hair of the cat has nothing to do with fashion. A cat's whiskers — or vibrissae — are a well-honed sensory tool that helps a cat see in the dark and steer clear of hungry predators.
          Whiskers are highly sensitive tactile hairs that grow in patterns on a cat's muzzle, above its eyes and elsewhere on its body, like the ears, jaw and forelegs. At the root of each of these long, stiff hairs is a follicle loaded with nerves.
          By brushing its whiskers against an object, a cat can detect the precise location, size and texture of the object, even in the dark. This feature proves particularly useful for a cat trying to gauge whether it can fit into a tight space. Whiskers also detect changes in air currents, helping cats detect approaching dangers.
          Whiskers not only make cats aware of their surroundings, but can also provide humans with some insight into their pet's state of mind. For example, a set of taut whiskers, pulled back across the face, is a good indication that Kitty feels threatened, while relaxed whiskers, pointing away from the face, indicate a content cat.
          Of course, cats aren't the only mammals with whiskers. Most mammalian species, including primates, are equipped with these extrasensory receptors. Biologists think mammals developed whiskers because they needed help sensing their environments at night.
          The first small mammals shared the world with dinosaurs and had to adapt to hunting nocturnally, when their predators were less active. Whiskers helped these hungry animals find food and navigate dark terrain. This evolutionary adaptation also helps to explain why the whiskers of many nocturnal or aquatic carnivores — like rats, seals and walruses — are so prominent.",
          "user_id" => 1,
          "created_at" => "2017-02-13 08:00:00"
        ], 
        [
          "title" => "Wet vs. Dry Cat Food: Which is Better?",

          "perex" => "If you aren’t sure how much wet food you should feed your cat, Purina’s expert nutritionists can help. Plus, they offer guidance on food safety and provide serving ideas your cat will love.",

          "content" => "If you aren’t sure how much wet food you should feed your cat, Purina’s expert nutritionists can help. Plus, they offer guidance on food safety and provide serving ideas your cat will love.",
          "user_id" => 1,
          "created_at" => "2016-07-16 08:00:00"
        ], 
        [
          "title" => "How Much Wet Food Should I Feed My Cat?",

          "perex" => "Some cat owners prefer to feed their cats wet food. Others prefer dry kibble. Trying to decide between wet vs. dry cat food? Find out what our experts recommend when it comes to feeding your cat.",

          "content" => "Some cat owners prefer to feed their cats wet food. Others prefer dry kibble. Trying to decide between wet vs. dry cat food? Find out what our experts recommend when it comes to feeding your cat." ,
          
          "user_id" => 1,
          "created_at" => "2019-06-25 08:00:00"
        ], 
        [
          "title" => "Do Cats Drink Water? Cat Hydration & Dehydration Prevention",

          "perex" => "Do cats drink water? Yes, like humans and many other animals, cats need water to survive. Many cats don’t drink as much as they should, though. Find out why they need water and how to get your own kitty to drink more.",

          "content" => "Do cats drink water? Yes, like humans and many other animals, cats need water to survive. Many cats don’t drink as much as they should, though. Find out why they need water and how to get your own kitty to drink more." ,
          
          "user_id" => 1,
          "created_at" => "2017-03-17 08:00:00"
        ], 
        [
          "title" => "What Is the Difference Between Natural and Organic Cat Food?",

          "perex" => "If you prefer your own diet to be natural or organic, you’re probably considering feeding your cat a natural or organic cat food, too. What’s the difference between the two, though, and how do you decide which is right for your cat? Find out here.",

          "content" => "If you prefer your own diet to be natural or organic, you’re probably considering feeding your cat a natural or organic cat food, too. What’s the difference between the two, though, and how do you decide which is right for your cat? Find out here." ,
          
          "user_id" => 1,
          "created_at" => "2016-01-03 08:00:00"
        ], 

      ];

      foreach ($articles as $article) {
        $article = Article::create($article);
        $article->save();
      }
    }
}
