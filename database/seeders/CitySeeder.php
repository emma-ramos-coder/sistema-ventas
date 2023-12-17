<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $city = new City();
        $city->city_name = "Arequipa";
        $city->save();

        $city2 = new City();
        $city2->city_name = "Cusco";
        $city2->save();

        $city3 = new City();
        $city3->city_name = "Lima";
        $city3->save();

        $city4 = new City();
        $city4->city_name = "Puno";
        $city4->save();
    }
}
