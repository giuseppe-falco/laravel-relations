<?php

use Illuminate\Database\Seeder;
use App\Genre;
class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();



        for ($i=0; $i < 10; $i++) { 
            $newGenre = new Genre;
            $newGenre->name = $faker->word;
            $newGenre->save();

        }

    }
}
