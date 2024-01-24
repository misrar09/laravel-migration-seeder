<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => $faker->time(),
                'arrival_time' => $faker->time(),
                'train_code' => $faker->unique()->randomNumber(4),
                'number_of_coaches' => $faker->numberBetween(5, 15),
                'cancelled' => $faker->boolean(),
                'on_time' => $faker->boolean(),
            ]);

            $train->save();
        }
    }
}
