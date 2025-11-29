<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePhoneRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'category_id' => ['required', 'exists:categories,id'],
            'title'       => ['required', 'string', 'max:255'],
            'brand'       => ['nullable', 'string', 'max:100'],
            'price'       => ['required', 'integer', 'min:0'],
            'description' => ['nullable', 'string'],
            'image'       => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'is_active'   => ['sometimes', 'boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'category_id.required' => 'Категория обязательна.',
            'category_id.exists'   => 'Выбрана несуществующая категория.',
            'title.required'       => 'Название телефона обязательно.',
            'price.required'       => 'Цена обязательна.',
            'price.integer'        => 'Цена должна быть целым числом.',
            'price.min'            => 'Цена не может быть отрицательной.',
            'image.image'          => 'Файл должен быть изображением.',
            'image.mimes'          => 'Изображение должно быть в формате JPG, JPEG, PNG или WEBP.',
            'image.max'            => 'Изображение не должно быть больше 2MB.',
        ];
    }
}
