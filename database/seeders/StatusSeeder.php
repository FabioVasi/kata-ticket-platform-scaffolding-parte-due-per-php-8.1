<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statusNames = [
            'Chiuso',
            'Aperto',
            'In sospeso',
            'In lavorazione'
        ];

        foreach ($statusNames as $statusName) {
            $status = new Status();
            $status->name = $statusName;
            $status->save();
        }
    }
}
