<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['title' => 'Sport']);
        Category::create(['title' => 'Fashion']);
        Category::create(['title' => 'Weather']);
        Category::create(['title' => 'Politics']);
        Category::create(['title' => 'Lifestyle']);
    }
}
