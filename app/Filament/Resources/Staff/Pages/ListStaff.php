<?php

namespace App\Filament\Resources\Staff\Pages;

use App\Filament\Resources\Staff\StaffResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStaff extends ListRecords
{
    protected static string $resource = StaffResource::class;
    protected static ?string $title = 'Daftar Pengurus';
    protected static ?string $breadcrumb = 'Daftar Pengurus';
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
