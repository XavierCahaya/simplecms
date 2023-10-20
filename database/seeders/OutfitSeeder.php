<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutfitSeeder extends Seeder
{
    public function run()
    {
        $outfit = [
            [
                'outfit_name' => 'Sasuke',
                'size' => 'L',
                'price' => '100000',
                'stock' => '20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'outfit_name' => 'Sakura',
                'size' => 'S',
                'price' => '120000',
                'stock' => '20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'outfit_name' => 'Kakashi',
                'size' => 'XL',
                'price' => '150000',
                'stock' => '20',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('outfit')->insert($outfit);
    }
}