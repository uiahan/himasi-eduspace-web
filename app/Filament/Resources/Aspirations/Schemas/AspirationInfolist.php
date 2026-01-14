<?php

namespace App\Filament\Resources\Aspirations\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AspirationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->placeholder('-')
                    ->extraAttributes([
                        'class' => 'border border-gray-300 rounded-lg px-3 py-2 bg-gray-50',
                    ]),

                TextEntry::make('category')
                    ->extraAttributes([
                        'class' => 'border border-gray-300 rounded-lg px-3 py-2 bg-gray-50',
                    ]),

                TextEntry::make('message')
                    ->columnSpanFull()
                    ->extraAttributes([
                        'class' => 'border border-gray-300 rounded-lg px-3 py-2 bg-gray-50',
                    ]),

                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-')
                    ->extraAttributes([
                        'class' => 'border border-gray-300 rounded-lg px-3 py-2 bg-gray-50',
                    ]),

                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-')
                    ->extraAttributes([
                        'class' => 'border border-gray-300 rounded-lg px-3 py-2 bg-gray-50',
                    ]),
            ]);
    }
}
