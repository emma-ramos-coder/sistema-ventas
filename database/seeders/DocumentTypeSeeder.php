<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $document_type = new DocumentType();
        $document_type->description = "DNI";
        $document_type->save();

        $document_type2 = new DocumentType();
        $document_type2->description = "RUC";
        $document_type2->save();

        $document_type3 = new DocumentType();
        $document_type3->description = "Pasaporte";
        $document_type3->save();

        $document_type4 = new DocumentType();
        $document_type4->description = "CI";
        $document_type4->save();
    }
}
