<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Phone;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    public function run(): void
    {
        // для каждой категории создаём телефоны
        Category::all()->each(function ($category) {
            Phone::factory()
                ->count(20)
                ->create([
                    'category_id' => $category->id,
                ]);
        });
    }
}
