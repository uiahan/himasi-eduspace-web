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
                    ->imagePreviewHeight('150')
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp'])
                    ->maxSize(2048) // 2 MB (dalam KB)
                    ->required(), // size in KB (2 MB)
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
