<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryNames = [
            'Tecnico',
            'Legale',
            'Funzionale',
            'Approfondimento',
            'Segnalazione',
            'Generico'
        ];

        foreach ($categoryNames as $categoryName) {
            $category = new Category();
            $category->name = $categoryName;
            $category->save();
        }

    }
}
