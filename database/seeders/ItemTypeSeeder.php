<?php

namespace Database\Seeders;

use App\Models\ItemType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item_type = new ItemType();
        $item_type->item_type_description = "Bebidas";
        $item_type->save();

        $item_type2 = new ItemType();
        $item_type2->item_type_description = "Lacteos";
        $item_type2->save();

        $item_type3 = new ItemType();
        $item_type3->item_type_description = "Pastas";
        $item_type3->save();

        $item_type4 = new ItemType();
        $item_type4->item_type_description = "Conservas";
        $item_type4->save();

        $item_type5 = new ItemType();
        $item_type5->item_type_description = "Reposteria y Pasteleria";
        $item_type5->save();

        $item_type6 = new ItemType();
        $item_type6->item_type_description = "Carnes";
        $item_type6->save();
    }
}
