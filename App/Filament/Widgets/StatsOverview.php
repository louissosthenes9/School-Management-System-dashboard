<?php

namespace App\Filament\Widgets;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{

    protected function getStats(): array
    {
        $students =  count(Student::all());
        $teachers = count(Teacher::all());
        $subjects = count(Subject::all());

        return [
            Stat::make("Total Student","$students")
                ->description("Increase in number of students")
                ->descriptionColor("success")
                ->descriptionIcon("heroicon-m-arrow-trending-up")
                ->chart([23,27,29,32,35,40])
                ->chartColor("primary"),
            Stat::make("Available teachers", "$teachers")
                ->description("Decrease in number of teachers")
                ->descriptionColor("warning")
                ->descriptionIcon("heroicon-m-arrow-trending-down")
                ->chart(array_reverse([23,27,29,32,35,40]))
                ->chartColor("danger"),
            Stat::make("Enrolled subjects", "$subjects")

        ];
    }
}
