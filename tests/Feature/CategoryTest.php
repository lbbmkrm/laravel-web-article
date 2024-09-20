<?php

namespace Tests\Feature;

use App\Models\Category;
use Database\Seeders\CategorySeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    public function testCategories()
    {
        $this->seed(CategorySeeder::class);
        $categories = Category::all();
        $categories->each(function ($item) {
            Log::info(json_encode($item));
        });
        self::assertTrue(true);
    }
}
