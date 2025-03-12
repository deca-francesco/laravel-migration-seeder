<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importo il faker e gli assegno un alias e lo passo alla funzione run()
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // uso il faker
        for ($i = 0; $i < 20; $i++) {
            // istanza della classe
            $newTrain = new Train();

            // popolo i campi
            $newTrain->company = $faker->company();
            $newTrain->train_code = strtoupper($faker->bothify("??####"));
            $newTrain->carriages = $faker->numberBetween(4, 10);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();

            // salvo il record
            $newTrain->save();
        }
    }
}
