<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Technology', 'slug' => 'technology'],
            ['name' => 'Business', 'slug' => 'business'],
            ['name' => 'Science', 'slug' => 'science'],
            ['name' => 'Health', 'slug' => 'health'],
            ['name' => 'Entertainment', 'slug' => 'entertainment'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}