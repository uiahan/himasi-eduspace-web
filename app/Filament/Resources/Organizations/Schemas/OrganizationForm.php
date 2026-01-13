<?php

namespace App\Filament\Resources\Organizations\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;

class OrganizationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                RichEditor::make('about')
                    ->toolbarButtons([
                        ['bold', 'italic'],
                        ['h1', 'h2', 'h3', 'alignStart', 'alignCenter', 'alignEnd'],
                        ['blockquote', 'bulletList', 'orderedList'],
                        ['undo', 'redo'],
                    ])
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('vision')
                    ->toolbarButtons([
                        ['bold', 'italic'],
                        ['h1', 'h2', 'h3', 'alignStart', 'alignCenter', 'alignEnd'],
                        ['blockquote', 'bulletList', 'orderedList'],
                        ['undo', 'redo'],
                    ])
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('mission')
                    ->toolbarButtons([
                        ['bold', 'italic'],
                        ['h1', 'h2', 'h3', 'alignStart', 'alignCenter', 'alignEnd'],
                        ['blockquote', 'bulletList', 'orderedList'],
                        ['undo', 'redo'],
                    ])
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
