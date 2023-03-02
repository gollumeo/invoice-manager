<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Companies;
use App\Models\Invoices;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Companies::factory()
            ->count(20)
            ->create();

        Invoices::factory()
            ->count(50)
            ->create();
    }
}
