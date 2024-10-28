<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            Train::create([
                'azienda' => $faker->company(),
                'stazione_partenza' => $faker->city(),
                'stazione_arrivo' => $faker->city(),
                'orario_partenza' => $faker->time(),
                'orario_arrivo' => $faker->time(),
                'codice_treno' => $faker->bothify('??#####'),
                'numero_carrozze' => $faker->numberBetween(5, 15),
                'in_orario' => $faker->boolean(),
                'cancellato' => $faker->boolean()
            ]);
        }
    }
}