<?php

namespace App\Filament\Resources\Departments\Schemas;

use App\Models\Organization;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DepartmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('logo')
                    ->image()
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp'])
                    ->maxSize(2048) // 2 MB (dalam KB)
                    ->required(),

                TextInput::make('name')
                    ->required(),

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
