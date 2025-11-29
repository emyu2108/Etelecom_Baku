<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Смартфоны',
            'Планшеты',
            'Наушники',
            'Аксессуары',
            'Умные часы',
            'Ноутбуки',
            'Мониторы',
            'Телевизоры',
        ];

        foreach ($categories as $title) {
            \App\Models\Category::create([
                'title' => $title,
                'slug' => \Illuminate\Support\Str::slug($title),
                'is_active' => true,
            ]);
        }
    }
}
