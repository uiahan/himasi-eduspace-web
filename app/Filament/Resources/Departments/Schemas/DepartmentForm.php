<?php

namespace App\Filament\Resources\Departments\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DepartmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('logo')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                Textarea::make('about')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('vision')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('mision')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('organization_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
