<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    public function definition(): array
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

        $title = $this->faker->randomElement($categories);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'is_active' => true,
        ];
    }
}
