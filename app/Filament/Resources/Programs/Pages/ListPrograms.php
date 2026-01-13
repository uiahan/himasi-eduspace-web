<?php

namespace App\Filament\Resources\Programs\Pages;

use App\Filament\Resources\Programs\ProgramResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPrograms extends ListRecords
{
    protected static string $resource = ProgramResource::class;
    protected static ?string $title = 'Daftar Program Kerja';
    protected static ?string $breadcrumb = 'Daftar Program Kerja';
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
