<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\models\train;
class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $train = new train();
            $train->agency = $faker->company();
            $train->departureStation = $faker->city();
            $train->arrivalStation = $faker->city();
            $train->departureTime = $faker->time();
            $train->arrivalTime = $faker->time();
            $train->trainCode = $faker->randomNumber(2, true);
            $train->numberOfCarriages = $faker->randomDigit();
            $train->inTime = $faker->numberBetween(0, 1);
            $train->deleted = $faker->numberBetween(0, 1);
            $train->save();
        }
    }
}
