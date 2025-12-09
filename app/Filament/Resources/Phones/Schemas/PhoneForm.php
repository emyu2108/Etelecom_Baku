<?php

namespace App\Filament\Resources\Phones\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PhoneForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Название телефона')
                    ->required()
                    ->maxLength(150)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set, $get) {
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

                Select::make('category_id')
                    ->label('Категория')
                    ->relationship('category', 'title')
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('price')
                    ->label('Цена, ₼')
                    ->numeric()
                    ->required()
                    ->rule('integer')
                    ->minValue(0),

                FileUpload::make('image')
                    ->label('Изображение')
                    ->image()
                    ->directory('phones')
                    ->disk('public')
                    ->visibility('public')
                    ->imageEditor()
                    ->imagePreviewHeight('200'),

                Textarea::make('description')
                    ->label('Описание')
                    ->rows(4)
                    ->columnSpanFull(),

                Toggle::make('is_active')
                    ->label('Активен')
                    ->default(true),
            ]);
    }
}
