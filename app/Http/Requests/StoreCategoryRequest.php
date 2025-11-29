<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Разрешаем ли этому запросу выполняться.
     */
    public function authorize(): bool
    {
        // Пока без прав — всем разрешаем.
        // Позже здесь можно будет проверить роль admin.
        return true;
    }

    /**
     * Правила валидации для формы создания категории.
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:150'],
            // чекбокс может вообще не прийти — поэтому sometimes
            'is_active' => ['sometimes', 'boolean'],
        ];
    }

    /**
     * При желании можно задать свои тексты ошибок.
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Название категории обязательно.',
            'title.max'      => 'Название категории не должно быть длиннее 150 символов.',
            'is_active.boolean' => 'Некорректное значение поля "Активна".',
        ];
    }
}

