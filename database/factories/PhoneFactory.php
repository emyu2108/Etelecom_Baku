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
            'iPhone 15',
            'Samsung Galaxy S24 Ultra',
            'Samsung Galaxy A55',
            'Xiaomi 14 Pro',
            'Xiaomi Redmi Note 13',
            'Nothing Phone 2',
            'Huawei P60 Pro',
            'Google Pixel 8 Pro',
        ];

        $title = $this->faker->randomElement($models);

        return [
            'category_id' => 1,
            'title' => $title,
            'slug' => Str::slug($title . '-' . $this->faker->unique()->numberBetween(1000, 9999)),
            'brand' => explode(' ', $title)[0],
            'price' => $this->faker->numberBetween(400, 3500),
            'description' => $this->faker->realText(300),
            'image' => null,
            'is_active' => true,
        ];
    }
}
