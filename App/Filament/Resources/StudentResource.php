<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make("first_name"),
                                Forms\Components\TextInput::make("middle_name"),
                                Forms\Components\TextInput::make("last_name")
                            ])->columns(3),
                         Forms\Components\Section::make()
                             ->schema([
                                 Forms\Components\Radio::make("sex")->options([
                                     'Male'=>'M',
                                     'Female'=>'F'
                                     ]),
                                 Forms\Components\DatePicker::make("birth_day"),
                                 Forms\Components\Select::make("Academic_year")->options(['1','2','3','4'])
                             ])->columns(2)
                    ]),
                 Forms\Components\Group::make()->schema([
                     Forms\Components\Section::make()->schema([
                     Forms\Components\TextInput::make("Mobile-no"),
                     Forms\Components\TextInput::make("email"),
                   ])
                 ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               Tables\Columns\TextColumn::make("first_name"),
               Tables\Columns\TextColumn::make("last_name"),
               Tables\Columns\TextColumn::make("sex"),
               Tables\columns\TextColumn::make("Mobile-no"),
               Tables\Columns\TextColumn::make("email"),
               Tables\Columns\TextColumn::make("Academic_year"),
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            StudentResource\Widgets\StudentsOverview::class,
        ];
    }
}
