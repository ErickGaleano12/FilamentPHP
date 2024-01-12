<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ProductsChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';
    protected static ?int $sort = 3;


    protected function getData(): array
    {
        return [
            'datasets'=> [
                [
                    'label' => 'Blog posts created',
                    'data' => [0, 4, 5, 7 , 9, 7, 3, 4]
                ]
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
