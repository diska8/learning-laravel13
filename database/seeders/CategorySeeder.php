<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Backend', 'Frontend', 'Database', 'Tools & DevOps'];

        foreach ($categories as $category) {
            Category::firstOrCreate(['name' => $category]);
        }
    }
}