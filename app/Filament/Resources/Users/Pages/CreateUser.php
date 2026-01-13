<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
    protected static ?string $breadcrumb = 'Buat Pengguna';
    protected static ?string $title = 'Buat Pengguna';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
