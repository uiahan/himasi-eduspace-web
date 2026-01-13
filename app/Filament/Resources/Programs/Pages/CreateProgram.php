<?php

namespace App\Filament\Resources\Programs\Pages;

use App\Filament\Resources\Programs\ProgramResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProgram extends CreateRecord
{
    protected static string $resource = ProgramResource::class;
    protected static ?string $breadcrumb = 'Buat Program Kerja';
    protected static ?string $title = 'Buat Program Kerja';
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
