<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->revealable()
                    ->label('Password')
                    ->required(fn($context) => $context === 'create')
                    ->dehydrated(fn($state) => filled($state))
                    ->dehydrateStateUsing(fn($state) => bcrypt($state))
                    ->helperText('Kosongkan jika tidak ingin mengubah password'),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                Select::make('role')
                    ->options(['admin' => 'Admin', 'user' => 'User'])
                    ->required(),
            ]);
    }
}
