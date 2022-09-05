<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>I have a good knowledge</p>',
            'body' => '<p>The inhabitants of Radiator Springs are now convinced of the goodness of Lightning, except Doc, who, as Lightning himself discovered, had a glorious past as a runner finished, however, in a tragic way: it is in fact the great Hudson Hornet, who won consecutively three Piston Cups in the early 1950s and then had a terrible accident in 1954, following which he retired having been sidelined, so he began to consider racing cars selfish and indifferent to the feelings of others.

The next day, Saetta finishes repairing the road, but before leaving he decides to make a series of purchases at the shops in the city, thus becoming the first customer many years later, and to surprise Sally once the evening falls. , revealing that he had the inhabitants adjusted the neon signs for the occasion. Doc, unable to bear the presence of the race car in town, contacts the press and reports that Lightning is in Radiator Springs. Soon, a huge crowd of reporters invades the city and Mack arrives, who loads Lightning on the trailer and takes him to the race. Sally finds out and accuses the judge of being selfish and acting according to what is best for him rather than what is best for others. The inhabitants, sad for the departure of their new friend</p>',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>I have a good knowledge</p>',
            'body' => '<p>The inhabitants of Radiator Springs are now convinced of the goodness of Lightning, except Doc, who, as Lightning himself discovered, had a glorious past as a runner finished, however, in a tragic way: it is in fact the great Hudson Hornet, who won consecutively three Piston Cups in the early 1950s and then had a terrible accident in 1954, following which he retired having been sidelined, so he began to consider racing cars selfish and indifferent to the feelings of others.

The next day, Saetta finishes repairing the road, but before leaving he decides to make a series of purchases at the shops in the city, thus becoming the first customer many years later, and to surprise Sally once the evening falls. , revealing that he had the inhabitants adjusted the neon signs for the occasion. Doc, unable to bear the presence of the race car in town, contacts the press and reports that Lightning is in Radiator Springs. Soon, a huge crowd of reporters invades the city and Mack arrives, who loads Lightning on the trailer and takes him to the race. Sally finds out and accuses the judge of being selfish and acting according to what is best for him rather than what is best for others. The inhabitants, sad for the departure of their new friend</p>',
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
