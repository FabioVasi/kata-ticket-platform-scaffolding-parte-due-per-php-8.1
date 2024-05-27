<?php

namespace Database\Seeders;

use App\Models\Operator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 27; $i++) {
            $operator = new Operator;
            $operator->first_name = $faker->firstName();
            $operator->last_name = $faker->lastName();
            $operator->email = $faker->email();
            $operator->available = $faker->boolean(75);
            $operator->save();
        }
    }
}
