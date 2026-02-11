<?php

namespace App\Filament\Resources\Courses\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->columnSpanFull(),
                \Filament\Forms\Components\FileUpload::make('thumbnail')
                    ->image()
                    ->disk('public')
                    ->visibility('public')
                    ->directory('thumbnail-course')
                    ->required()
                    ->columnSpanFull(),
                \Filament\Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpanFull()
                    ->disableAllToolbarButtons(false),
            ]);
    }
}
