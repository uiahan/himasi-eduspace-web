<?php

namespace App\Filament\Resources\RecruitmentCandidates\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RecruitmentCandidateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('full_name')
                    ->required(),
                TextInput::make('nim')
                    ->required(),
                TextInput::make('photo'),
                TextInput::make('class')
                    ->required(),
                TextInput::make('prodi')
                    ->required()
                    ->default('Sistem Informasi'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('reason')
                    ->required(),
                TextInput::make('portofolio')
                    ->required(),
                TextInput::make('department'),
                TextInput::make('department_second'),
            ]);
    }
}
