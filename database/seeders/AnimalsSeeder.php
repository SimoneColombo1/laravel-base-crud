<?php

namespace Database\Seeders;
use App\Models\Animals;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class AnimalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 100 ; $i++) {
            $animals = new Animals();
            $animals-> Nome= $faker ->words(1,true);
            $animals-> Specie= $faker ->words(1,true);
            $animals-> Eta = $faker -> randomDigit();
            $animals-> DataArrivo= $faker ->words(1,true);
            $animals-> Peso = $faker -> randomDigit();
            $animals-> Sesso =$faker->words(1,true);
            $animals-> Habitat =$faker->words(1,true);
            $animals-> save();
        }
    }
}