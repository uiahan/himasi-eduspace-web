<?php

namespace App\Filament\Resources\Departments\Schemas;

use App\Models\Organization;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class DepartmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('logo')
                    ->image()
                    ->disk('public')
                    ->visibility('public')
                    ->columnSpanFull()
                    ->directory('logo-departement')
                    ->required(),

                TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state))),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->helperText('Auto-generated dari name, harus unik'),
                RichEditor::make('about')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('vision')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('mision')
                    ->required()
                    ->columnSpanFull(),
                Hidden::make('organization_id')
                    ->default(fn() => Organization::first()->id),
            ]);
    }
}
