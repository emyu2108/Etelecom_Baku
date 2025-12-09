<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->label('Название категории')
                    ->required()
                    ->maxLength(150)
                    ->live(onBlur: true) // <— вместо reactive()
                    ->afterStateUpdated(function ($state, callable $set, $get) {
                        // Генерировать slug только если пользователь его не менял вручную
                        if (! $get('slug')) {
                            $set('slug', Str::slug($state));
                        }
                    }),

                TextInput::make('slug')
                    ->label('Slug (URL)')
                    ->required()
                    ->unique(
                        table: 'phones',
                        column: 'slug',
                        ignoreRecord: true,
                    )
                    ->maxLength(150)
                    ->helperText(function ($record) {
                        if (! $record) {
                            return 'Публичная ссылка станет доступна после сохранения товара.';
                        }

                        return 'Публичная ссылка: ' . url('/phone/' . $record->slug);
                    }),

                Toggle::make('is_active')
                    ->label('Активна')
                    ->default(true),

            ]);
    }
}
