<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Passenger;
use Faker\Factory as Faker;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Passenger::create([
                'nome' => $faker->firstName(),
                'cognome' => $faker->lastName(),
                'email' => $faker->unique()->safeEmail(),
                'data_di_nascita' => $faker->date(),
            ]);
        }
    }
}
