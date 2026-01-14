<?php

namespace App\Filament\Resources\Aspirations\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AspirationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
                TextInput::make('category')
                    ->required(),
                Textarea::make('message')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
