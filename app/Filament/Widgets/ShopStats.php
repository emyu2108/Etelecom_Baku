<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Phone;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ShopStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Категории', Category::count())
                ->description('Всего категорий')
                ->descriptionIcon('heroicon-m-rectangle-stack')
                ->color('primary'),

            Stat::make('Телефоны', Phone::count())
                ->description('Всего товаров')
                ->descriptionIcon('heroicon-m-device-phone-mobile')
                ->color('success'),

            Stat::make('Активные телефоны', Phone::where('is_active', true)->count())
                ->description('Доступны на сайте')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('info'),
        ];
    }
}
