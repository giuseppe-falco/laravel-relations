<?php

use Illuminate\Database\Seeder;
use App\Comic;
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
        //$faker = Faker\Factory::create();


        for ($i=0; $i < 10; $i++) { 

            $newComic = new Comic;

            $newComic->title = $faker->word;
            
            $newComic->original_title = $faker->word;

            $newComic->author = $faker->name;
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
