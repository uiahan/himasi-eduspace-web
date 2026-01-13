<?php

namespace App\Filament\Resources\Departments\Pages;

use App\Filament\Resources\Departments\DepartmentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDepartments extends ListRecords
{
    protected static string $resource = DepartmentResource::class;
    protected static ?string $title = 'Daftar Departemen';
    protected static ?string $breadcrumb = 'Daftar Departemen';
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
