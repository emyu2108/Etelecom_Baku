<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PhoneFactory extends Factory
{
    public function definition(): array
    {
        $models = [
            'iPhone 17 Pro Max',
            'iPhone 17',
            'Samsung Galaxy S25 Ultra',
            'Samsung Galaxy A56',
            'Xiaomi 14 Pro',
            'Xiaomi Redmi Note 14',
            'Nothing Phone 2',
            'Huawei P60 Pro',
            'Google Pixel 8 Pro',
        ];

        $title = $this->faker->randomElement($models);

        return [
            'category_id' => 1,
            'title' => $title,
            'slug' => Str::slug($title),
            'brand' => explode(' ', $title)[0],
            'price' => $this->faker->numberBetween(400, 3500),
            'description' => $this->faker->realText(300), // ← теперь русский текст
            'image' => null,
            'is_active' => true,
        ];
    }
}
