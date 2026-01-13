<?php

namespace App\Filament\Resources\Staff\Schemas;

use App\Models\Department;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StaffForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('photo')
                    ->image()
                    ->imagePreviewHeight('150')
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp'])
                    ->maxSize(2048) // 2 MB (dalam KB)
                    ->required(), // size in KB (2 MB)

                TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->required(),

                TextInput::make('position')
                    ->label('Jabatan')
                    ->required(),

                Select::make('department_id')
                    ->required()
                    ->label('Departemen')
                    ->options(Department::pluck('name', 'id')->toArray()),
            ]);
    }
}
