<?php

namespace Database\Seeders;

use App\Models\Category;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
        Category::insert([
            "name" => "Technology",
            "description" => fake()->text(80)
        ]);
        Category::insert([
            "name" => "Education",
            "description" => fake()->text(80)
        ]);
        Category::insert([
            "name" => "Health",
            "description" => fake()->text(80)
        ]);
        Category::insert([
            "name" => "Entertainment",
            "description" => fake()->text(80)
        ]);
        Category::insert([
            "name" => "Business",
            "description" => fake()->text(80)
        ]);
    }
}
