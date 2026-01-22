<?php

namespace App\Filament\Resources\Recruitments\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RecruitmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                DatePicker::make('deadline')
                    ->required(),
                FileUpload::make('photo')
                    ->disk('public')
                    ->visibility('public')
                    ->directory('recruitment-cover')
                    ->columnSpanFull()
                    ->required(),
                RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('term')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}