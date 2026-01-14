<?php

namespace App\Filament\Resources\Aspirations\Pages;

use App\Filament\Resources\Aspirations\AspirationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAspiration extends ViewRecord
{
    protected static string $resource = AspirationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
