<?php

namespace App\Filament\Resources\Courses\Pages;

use App\Filament\Resources\Courses\CourseResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCourse extends CreateRecord
{
    protected static string $resource = CourseResource::class;
    protected static ?string $breadcrumb = 'Buat Course';
    protected static ?string $title = 'Buat Course';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
