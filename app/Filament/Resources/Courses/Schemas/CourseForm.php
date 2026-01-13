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
                TextInput::make('name')
                    ->required(),
                \Filament\Forms\Components\FileUpload::make('photo')
                    ->image()
                    ->maxSize(2048)
                    ->required(),
                \Filament\Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('video')
                    ->required()->columnSpanFull(),
                \Filament\Forms\Components\RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                \Filament\Forms\Components\FileUpload::make('file')
                    ->required(),
                \Filament\Forms\Components\Select::make('program_id')
                    ->required()
                    ->options(\App\Models\Program::pluck('name', 'id')->toArray())
                    ->searchable(),
            ]);
    }
}
