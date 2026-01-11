<?php

namespace App\Filament\Resources\Organizations\Pages;

use App\Filament\Resources\Organizations\OrganizationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOrganizations extends ListRecords
{
    protected static string $resource = OrganizationResource::class;
    protected static ?string $title = 'Kelola Visi Misi & Tentang Kabinet';
    protected static ?string $breadcrumb = null;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
            ->label('Tambah Visi Misi & Tentang Kabinet'),
        ];
    }
}
