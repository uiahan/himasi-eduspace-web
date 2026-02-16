<?php

namespace App\Filament\Resources\Programs\Schemas;

use App\Models\Department;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProgramForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state))),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->helperText('Auto-generated dari name, harus unik'),
                FileUpload::make('photo')
                    ->image()
                    ->disk('public')
                    ->visibility('public')
                    ->directory('program-photos')
                    ->columnSpanFull(),
                RichEditor::make('background')
                    ->columnSpanFull(),
                RichEditor::make('activity')
                    ->columnSpanFull(),
                RichEditor::make('description')
                    ->columnSpanFull(),
                RichEditor::make('location')
                    ->columnSpanFull(),
                DatePicker::make('date'),
                Select::make('department_id')
                    ->label('Departemen')
                    ->options(Department::pluck('name', 'id')->toArray()),
            ]);
    }
}
