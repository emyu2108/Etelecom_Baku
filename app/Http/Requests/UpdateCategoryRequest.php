<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:150'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Название категории обязательно.',
            'title.max'      => 'Название категории не должно быть длиннее 150 символов.',
            'is_active.boolean' => 'Некорректное значение поля "Активна".',
        ];
    }
}
