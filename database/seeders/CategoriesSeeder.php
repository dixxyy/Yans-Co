<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'nama' => 'Sling Bag',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Handbag',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Shoulder Bag',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Totebag',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Backpack',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Clutch',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}