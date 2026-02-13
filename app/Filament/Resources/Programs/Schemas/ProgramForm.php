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
                    ->columnSpanFull()
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
