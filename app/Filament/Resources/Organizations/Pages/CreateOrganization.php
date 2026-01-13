<?php

namespace App\Filament\Resources\Organizations\Pages;

use App\Filament\Resources\Organizations\OrganizationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOrganization extends CreateRecord
{
    protected static string $resource = OrganizationResource::class;
    protected static ?string $breadcrumb = 'Buat Visi Misi & Tentang Kabinet';
    protected static ?string $title = 'Buat Visi Misi & Tentang Kabinet';
}
