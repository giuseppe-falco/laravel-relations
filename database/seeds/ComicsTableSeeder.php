<?php

use Illuminate\Database\Seeder;
use App\Comic;
use App\Author;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {


        for ($i=0; $i < 10; $i++) { 

            $randomAuthor = Author::inRandomOrder()
                                 ->first();


            $newComic = new Comic;

            $newComic->title = $faker->word;
            
            $newComic->original_title = $faker->word;

            $newComic->author_id = $randomAuthor->id;
            $newComic->number = $faker->numberBetween(1,1000);
            $newComic->n_pages = $faker->numberBetween(20,400);
            $newComic->edition = $faker->company();
            $newComic->reading = (rand(0,1) == 1) ? "ltr" : "rtl";
            $newComic->price = $faker->numberBetween(1,100);
            $newComic->color = ( rand(0,1) == 1) ? true : false ;
            $newComic->release = $faker->year($max = 'now');
            $newComic->cover = $faker->imageUrl($width = 300, $height = 300);

            $newComic->save();

        }
    }
}
