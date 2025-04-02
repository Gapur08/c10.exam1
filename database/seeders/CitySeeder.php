<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = ['Ashgabat','Anew','Mary','Arkadag'];

        foreach ($cities as $city) {
            City::create(['name' => $city]);
        }
        //
    }
}
