<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('photo')
                    ->label('Foto')
                    ->image()
                    ->disk('public')
                    ->directory('gallery-himasi')
                    ->visibility('public')
                    ->required(),
            ]);
    }
}
