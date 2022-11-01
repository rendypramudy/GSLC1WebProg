<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            [
                'name' => "Lion",
                'type' => "Carnivore",
                'food' => "Beef"
            ],
            [
                'name' => "Sheep",
                'type' => "Herbivore",
                'food' => "Grass"
            ],
            [
                'name' => "Turtle",
                'type' => "Omnivore",
                'food' => "Beef & Grass"
            ],
            [
                'name' => "Rabbit",
                'type' => "Herbivore",
                'food' => "Carrot"
            ],
            [
                'name' => "Wolf",
                'type' => "Carnivore",
                'food' => "Beef"
            ],
            [
                'name' => "Monkey",
                'type' => "Omnivore",
                'food' => "Banana"
            ],
        ]);
    }
}
