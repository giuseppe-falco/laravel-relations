<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $newAuthor = new Author();
            $newAuthor->name = $faker->firstName;
            $newAuthor->lastname = $faker->lastName;
            $newAuthor->nationality = $faker->countryCode;
            $newAuthor->date_of_birth = $faker->date;

            $newAuthor->save();
        }
    }
}