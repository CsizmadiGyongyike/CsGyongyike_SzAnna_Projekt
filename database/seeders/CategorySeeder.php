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
        Category::insert([
            [
                "name" => "Egér",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Billentyűzet",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Fejhallgató",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Játék konzol",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}
