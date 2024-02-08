<?php

namespace App\Filament\Resources\StudentResource\Widgets;

use Filament\Widgets\ChartWidget;

class StudentsOverview extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
