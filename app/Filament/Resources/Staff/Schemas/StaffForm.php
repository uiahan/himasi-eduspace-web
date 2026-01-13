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
                    ->disk('public')
                    ->visibility('public')
                    ->directory('staff-photos')
                    ->required(),

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
