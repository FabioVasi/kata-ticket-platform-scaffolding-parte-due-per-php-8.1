<?php

namespace Database\Seeders;

use App\Models\Priority;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $priorityNames = [
            'Bloccante',
            'Urgente',
            'Alta',
            'Media',
            'Bassa',
            'Informativa'
        ];

        $priorityColors = [
            '#9f2222',
            '#673622',
            '#805012',
            '#a88b22',
            '#619a28',
            '#566658'
        ];


        foreach ($priorityNames as $index => $priorityName) {
            $priority = new Priority();
            $priority->level = $index + 1;
            $priority->name = $priorityName;
            $priority->color = $priorityColors[$index];
            $priority->save();
        }
    }
}
