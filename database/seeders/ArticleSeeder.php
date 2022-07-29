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

          "perex" => "When it comes to cat food, there are so many options. Loving cat owners must choose from a variety of different flavors, decide between wet and dry, among many other considerations.",

          "content" => "If you’ve wondered which is better when it comes to wet vs. dry cat food, they’re both excellent choices. Just make sure the food you select is 100 percent complete and balanced for your cat’s age and life stage. While some cats (and cat owners) prefer one over the other, the best option may be to feed your cat both.
          Wet vs. Dry Cat Food
          Wet Cat Food
          You’re probably familiar with the wet food in cans, but you may also find it in pouches. Both “come in small sizes, making it easy to provide a variety of different flavors, and for some, smaller sizes may make portion control easier,” says Purina Veterinary Nutritionist Dr. Dorothy Laflamme.
          Wet cat food has at least 65 percent or more moisture content. As a result, “wet food should not be left out for more than 30 to 60 minutes at a time to prevent bacterial growth,” according to Laflamme.
          Wet cat food offers many benefits, though, including:
          Textures and ingredients cats love
          Easier for cats to chew
          More variety in diet
          Helps increase total water intake
          Although feeding wet food to your cat seems special or indulgent, it’s more than a snack or treat. Wet cat food is 100 percent complete and balanced and can be an essential part of any cat’s diet.
          Dry Cat Food
          Dry kibble is popular among many cat owners because it’s convenient. It comes in larger bags and because its moisture content is less than 20 percent, it has a longer shelf life, even after opening. This makes it more cost effective.
          There’s less risk of bacterial growth with dry food, so you can leave it out all day for your cat to graze on while you’re at work. Crunchy kibble also helps reduce plaque and tartar buildup on cats’ teeth. Dry cat food may be more difficult for older cats to chew, however.
          Is Wet or Dry Food Better for Cats?
          Ultimately, your cat will decide whether she prefers dry or wet cat food. Purina nutritionists recommend feeding a combination of wet and dry food, though. This helps ensure she gets plenty of moisture in her diet, plus the dental benefits of dry food, all while adding variety to keep her interested. 
          Cats are neophiliacs, meaning they appreciate trying new things. They may get bored eating the same food the same way day in and day out. Mixing wet and dry cat food for a meal or feeding them at separate meals is a good way to give your cat the variety she not only wants, but also needs.
          Catering to your cat’s needs and desires also strengthens your emotional connection. One reviewer wrote: “My kitties love Fancy Feast already and they quickly gobbled up the Creamy Delights! Received extra kitty lovin’ after this awesome treat!”
          Shop Wet Cat Food
          If you’ve never tried feeding wet cat food, explore the wide variety of options Purina offers. You may need to try several brands until you find a couple your cat likes. Fortunately, Laflamme reminds, “there are hundreds—if not thousands—of good quality cat foods available at grocery stores, pet specialty stores, online and through veterinarians.”
          It’s also a good idea to try a few different serving methods. Some cats prefer their wet food “fluffed” and served on a flat plate or wide, low-edged bowl. Others will eat straight out of the can. Once you find a food and serving method your cat loves, she’ll enjoy eating a mix of wet and dry cat food on a regular basis.",
          "user_id" => 1,
          "created_at" => "2016-07-16 08:00:00"
        ], 
        [
          "title" => "How Much Wet Food Should I Feed My Cat?",

          "perex" => "Many cat owners think of wet cat food as a treat because their cats love it so much. In reality, you can feed your cat wet food regularly, not just as an occasional treat.",

          "content" => "ause their cats love it so much. In reality, you can feed your cat wet food regularly, not just as an occasional treat.
          It can be tricky to determine how much wet food to feed a cat at a time, though. The total amount of wet food you should provide them can depend on several factors. They include how much dry kibble you feed them, their overall health and more, including:
          Age and Life Stage: Kittens have different nutritional needs than adult or senior cats and need a specially formulated kitten food. How much wet food to feed a kitten is different from how much to feed an adult cat. Cats who are pregnant or nursing also have different nutritional needs.
          Weight: If your cat is not at their ideal weight, you may need to give them smaller or larger portions to help them achieve and maintain a healthy weight.
          Energy Level: Cats who are active and playful throughout the day may require more calories than those who prefer to spend their time napping.
          Type of Food: Wet and dry cat food differ in calories, as well as portion sizes. You’ll want to ensure you’re feeding an appropriate amount of food, whether you feed wet, dry or a combination of the two.
          How Often Should I Feed My Cat Wet Food?
          You can feed your cat wet food daily. If you’re wondering, “how much wet food should I feed my cat?” check the can or consult your veterinarian for feeding recommendations. In general, you can feed an average-sized adult cat one 3-ounce can per 3 to 3½ pounds of body weight daily.
          You should adjust this amount depending on whether you also feed your cat dry kibble. Your veterinarian may also recommend feeding more or less wet food depending on your cat’s weight, health and other factors.
          You can feed your cat wet food any time of day. It’s important to remember, though, that canned food cannot sit out for more than a half hour to an hour or it will spoil. So, it’s best to feed at a time where you can clean up after your cat if they don’t eat it all.
          You can leave dry kibble out all day, so some owners serve it in the morning for their cats to graze on while they’re at work. At night, they feed wet food and refrigerate any leftovers. You could do the opposite, or even serve a mix of wet and dry food at each meal. It all depends on your schedule and your cat’s preferences.
          How to Store Wet Cat Food
          “If you only feed your cat a partial can, or they don’t consume everything at one sitting, you can store it in a sealed container in the refrigerator for up to three days,” according to Purina Nutritionist Karina Carbo-Johnson, MS. “If you have a special lid for canned goods, you can use that as well. Be sure to store unopened cans at room temperature.”
          Unopened cans will keep for up to two years in the pantry. Product shelf life may vary, however, so check the manufacturer’s website for more information.
          How to Serve Wet Cat Food
          Most cats will enjoy wet food at room temperature. Your cat may not like cold food, so after refrigerating it, you may want to set it out for about 15 minutes to allow it to come up to room temperature before serving.
          Your cat may also enjoy a combination of textures, so try mixing her wet and dry cat food. To keep things interesting, consider adding a topper or complement to her wet food. This adds even greater variety and makes mealtime more exciting.
          “These recommendations are a simple and fun way to supplement your cat’s diet and to give them a special treat,” Carbo-Johnson explains. “Remember not to exceed their total daily caloric recommendations, though. Refer to the brand’s website and nutrition label for further instructions on combining wet and dry food. This will tell you how much to decrease dry kibble as you add wet cat food to their diet,” she says.
          How to Choose a High-Quality Wet Cat Food
          You want nothing but the best for your cat, so you want to choose the highest quality wet cat food possible. To do so, look for cans stating they are “complete and balanced.” This means they will meet all your cat’s nutritional requirements to keep them healthy.
          Some cats are picky, so you may need to try several different varieties and brands before you find something your cat loves. Once you do, you can feel confident making wet food a regular part of their diet.
          For more feeding tips from our experts, visit our Pet Expertise page." ,
          
          "user_id" => 1,
          "created_at" => "2019-06-25 08:00:00"
        ], 
        [
          "title" => "Do Cats Drink Water? Cat Hydration & Dehydration Prevention",

          "perex" => "Yes, they do. Although movies and other media often show cats drinking a bowl of milk, it’s not good for most felines. ",

          "content" => "Water, however, is as vital to a cat’s survival as it is to that of humans. 60-70% of their body weight is water. Despite being good for them, many cats don’t like drinking water, especially if it’s still or standing water. This dislike for water can lead to a dehydrated cat, so it’s important to monitor your cat’s water intake. 
          Why is Proper Hydration Important for Cats?
          Hydration is the physiological state of balanced electrolytes, specific minerals and fluids within the body, and maintaining this balance is important. Water is vital because it affects everything from organ function and nutrient transportation to circulation and digestion.  
          It also helps decrease the likelihood of urinary stones and helps the kidneys flush out toxins.  
          All cats are different and have their own preferences, though. As a result, you may need to try a few different methods of providing water to find something your kitty likes.  
          What Causes Dehydration in Cats?
          Cats can become dehydrated for a number of reasons. One of the primary reasons is it’s in their genes. Felines evolved from desert dwellers, and therefore have a low thirst drive and can survive on less water than their canine counterparts.  
          Cats have near-sightedness issues, so it may be hard for cats to visualize the edge of the water in a bowl. Additionally, when cats lap water from a bowl, they curve their tongue into a J-shape and bite off a column of water, which is incredibly inefficient. Cats only end up with 3/100 of a teaspoon per lap!* 
          Plus, cats are sensitive to the taste and presentation of water. Most cats instinctively gravitate toward fresh, moving water.  
          Conditions that make cats more prone to dehydration include chronic kidney disease and other conditions, such as diarrhea or diabetes.  
          Signs of Dehydration in Cats
          If your cat neglects her water bowl, she may become dehydrated. Signs of a dehydrated cat include:  
          Dry gums 
          Lethargy or depression 
          Loss of appetite 
          Decrease in skin elasticity 
          Elevated heart rate 
          You may have a dehydrated cat on your hands if you gently pinch the skin over her shoulders and the skin stays gathered when you release it. This is known as “skin tenting” and is a sign of dehydration.  
          If you notice any of the above signs, call your veterinarian. They can give your cat fluids, rule out any potential illnesses and offer guidance on preventing dehydration in the future.  
          How Much Water Should a Cat Drink?
          Cats need varying amounts of water based on their weight and the type of food they eat (dry kibble or canned wet food).  
          It’s difficult for even the healthiest of cats to drink the right amount of water because of the unique shape of their tongues. A single lap of water only provides a cat with 3/100 of a teaspoon.
          Although many cats struggle to stay hydrated, some cats can drink too much water. If your cat drinks more water than usual, it may be a sign of feline hyperthyroidism or diabetes.  
          How to Get a Cat to Drink Water
          Getting your cat to drink more water can be tricky. You may have to experiment until you find something she likes. Start with one or more of the following suggestions to see how your cat reacts.   
          Choose the Right Water Bowl: If your cat’s current water bowl is deep and narrow, it may touch her whiskers, which is uncomfortable. Try switching your cat’s water bowl to a wider, shallower dish with a smaller lip to see if she drinks more.  
          Place it in the Right Location: Although it’s tempting to stick your cat’s food and water bowls in an out-of-the-way area, cats don’t like being boxed into a corner. They prefer locations where they can see their surroundings with a quick glance and don’t have to worry about anyone sneaking up behind them. See if moving her water bowl to a new location helps. 
          Keep it Fresh: The longer water sits, the more particles it collects. Dust, dirt, hair and more can all collect in your cat’s water bowl, making her less inclined to drink from it. Put fresh water in her bowl one to two times a day.  
          Try a Cat Water Fountain: Cats love running water and there are many theories why. It may also appeal to more of their senses, as they can see it move, hear the sound it makes and even taste a difference. A cat water fountain can make drinking water more exciting and pleasurable for your kitty.  
          Add Wet Cat Food to Her Diet: Water isn’t the only way to keep your cat hydrated. If you’ve tried all the above and she’s still not drinking enough, try hydrating with wet cat food or broths. Although it can’t replace water altogether, supplementing with wet food can help increase her overall water intake to help prevent dehydration.  
          For some cats, even the fanciest water bowls and cat fountains and the most delicious wet foods aren’t enough. If your cat still isn’t drinking enough water, talk to your veterinarian. They may recommend a cat hydration supplement or give you more tips to help increase your cat’s water intake.  
          Not only do cats drink water, but it’s vital for their survival. Keeping your cat hydrated will help keep her happy and healthy. Explore all the wet cat food options we offer to help increase your cat’s total water consumption. Always check with your veterinarian before adding new food to your cat’s diet." ,
          
          "user_id" => 1,
          "created_at" => "2017-03-17 08:00:00"
        ], 
        [
          "title" => "What Is the Difference Between Natural and Organic Cat Food?",

          "perex" => "More than ever, people are seeking out natural and organic cat food options for their cats.",

          "content" => "That’s because people are more aware of unwanted ingredients in their food. There are plenty of natural and organic dry and wet cat food options on the shelves. Understanding the difference between the two can be a challenge, though.
          Knowing the difference will help you choose the right kind of food for your cat.
          Natural vs. Organic Cat Food
          Natural Cat Food
          The U.S. Food & Drug Administration (FDA) has not yet defined the term “natural” as it applies to human food. There is a definition for pet food, though.
          The Association of American Feed Control Officials (AAFCO) says “natural” ingredients cannot be produced by or subjected to chemically synthetic processes.
          It also cannot contain any chemically synthetic additives or processing aids. Amounts that occur unavoidably through good manufacturing practices are the exception.  
          Ingredients derived from plant, animal or mined sources are “natural” according to AAFCO.
          Ingredients subjected to physical or heat processing, purification, extraction, hydrolysis, enzymolysis or fermentation may also be called “natural.”
          Pets do need low levels of some synthetic microingredients and nutrients, like vitamins and minerals. As such, AAFCO recognizes this and allows them in natural dry and wet cat food.
          Organic Cat Food
          Even though there are no definitions or regulations around “natural” human food, the U.S. Department of Agriculture (USDA) defines the term “organic” for both human and pet food products.
          According to the USDA’s National Organic Program, “organic” crops must be grown on land free from pesticides for three years. “Organic” livestock eats organic feed, does not receive antibiotics or growth hormones and has access to the outdoors.
          Although you may see the term “organic” on a cat food (or human food) label, the product may contain non-organic ingredients. The USDA defines four distinct levels of organic foods:
          100% Organic: This means every ingredient on the label is organic.
          Organic: If a label says “organic,” it means 95 percent of the ingredients are organic.
          Made with Organic: Labels that say “made with organic” mean 70 to 95 percent of the ingredients are organic.
          Less than 70% Organic: This statement means 30 percent or more of the ingredients are not organic.
          When shopping for organic cat food, look for the USDA organic seal. Pet foods with that seal must contain 95 to 100 percent organic ingredients.
          Is Natural or Organic Cat Food Better?
          The decision between natural and organic cat food comes down to personal preference. Choose whichever option you feel most comfortable and confident feeding your cat.
          Just make sure any food you choose is complete and balanced for your cat’s particular life stage. Pet food must meet or exceed AAFCO’s standard nutrient profiles to claim it’s complete and balanced.
          Purina complies with, and often exceeds, AAFCO’s standards for our cat food formulas. Explore all our natural dry and wet cat food options to find the right food for your cat." ,
          
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
