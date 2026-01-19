<?php

namespace App\Filament\Resources\Recruitments\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RecruitmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('photo'),
                TextInput::make('description')
                    ->required(),
                TextInput::make('term')
                    ->required(),
                DatePicker::make('deadline')
                    ->required(),
            ]);
    }
}
