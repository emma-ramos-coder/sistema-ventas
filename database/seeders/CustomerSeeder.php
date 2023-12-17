<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = new Customer();
        $customer->document_number = "45484679";
        $customer->document_type_id = 1;
        $customer->names = "Juan Luis";
        $customer->surnames = "Perez Santos";
        $customer->address = "Calle El Sol 526";
        $customer->city_id = 1;
        $customer->phone = "956821456";
        $customer->save();

        $customer2 = new Customer();
        $customer2->document_number = "45487596";
        $customer2->document_type_id = 2;
        $customer2->names = "Luis Alberto";
        $customer2->surnames = "Gonzales Pastor";
        $customer2->address = "Av. El pardo 789";
        $customer2->city_id = 1;
        $customer2->phone = "956978125";
        $customer2->save();
    }
}
