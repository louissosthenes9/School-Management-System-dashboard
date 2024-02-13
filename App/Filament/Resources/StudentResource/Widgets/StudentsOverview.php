<?php

namespace App\Filament\Resources\StudentResource\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class StudentsOverview extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        // Get the academic years and student counts from the database
        $studentCounts = DB::table('students')
            ->select('Academic_year', DB::raw('count(*) as total'))
            ->groupBy('Academic_year')
            ->orderBy('Academic_year')
            ->pluck('total', 'Academic_year');

        // Convert the results to arrays for Chart.js
        $labels = $studentCounts->keys()->toArray();
        $data = $studentCounts->values()->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Students per Year',
                    'data' => $data,
                ],
            ],
            'labels' => $labels,
        ];
    }


    protected function getType(): string
    {
        return 'bar';
    }
}
