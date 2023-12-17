<?php

namespace Database\Seeders;

use App\Models\WayToPay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WayToPaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $way_to_pay = new WayToPay();
        $way_to_pay->way_to_pay_description = "Efectivo";
        $way_to_pay->save();

        $way_to_pay2 = new WayToPay();
        $way_to_pay2->way_to_pay_description = "Tarjeta de débito";
        $way_to_pay2->save();

        $way_to_pay3 = new WayToPay();
        $way_to_pay3->way_to_pay_description = "Tarjeta de crédito";
        $way_to_pay3->save();

        $way_to_pay4 = new WayToPay();
        $way_to_pay4->way_to_pay_description = "Yape";
        $way_to_pay4->save();

        $way_to_pay5 = new WayToPay();
        $way_to_pay5->way_to_pay_description = "Plin";
        $way_to_pay5->save();
    }
}
