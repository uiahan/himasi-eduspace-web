<?php

namespace App\Filament\Resources\Programs\Schemas;

use Filament\Forms\Components\DatePicker;
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
                TextInput::make('photo'),
                Textarea::make('background')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('activity')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('location')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('date')
                    ->required(),
                TextInput::make('department_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
