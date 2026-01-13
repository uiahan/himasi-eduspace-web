<?php

namespace App\Filament\Resources\Programs\Schemas;

use App\Models\Department;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProgramForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                FileUpload::make('photo')
                    ->image()
                    ->disk('public')
                    ->visibility('public')
                    ->directory('program-photos')
                    ->required(),
                RichEditor::make('background')
                    ->columnSpanFull(),
                RichEditor::make('activity')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('location')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('date')
                    ->required(),
                Select::make('department_id')
                    ->required()
                    ->label('Departemen')
                    ->options(Department::pluck('name', 'id')->toArray()),
            ]);
    }
}
