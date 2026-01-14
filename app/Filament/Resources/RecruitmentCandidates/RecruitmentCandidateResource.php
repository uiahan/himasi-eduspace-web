<?php

namespace App\Filament\Resources\RecruitmentCandidates;

use App\Filament\Resources\RecruitmentCandidates\Pages\CreateRecruitmentCandidate;
use App\Filament\Resources\RecruitmentCandidates\Pages\EditRecruitmentCandidate;
use App\Filament\Resources\RecruitmentCandidates\Pages\ListRecruitmentCandidates;
use App\Filament\Resources\RecruitmentCandidates\Schemas\RecruitmentCandidateForm;
use App\Filament\Resources\RecruitmentCandidates\Tables\RecruitmentCandidatesTable;
use App\Models\RecruitmentCandidate;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RecruitmentCandidateResource extends Resource
{
    protected static ?string $model = RecruitmentCandidate::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return RecruitmentCandidateForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RecruitmentCandidatesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListRecruitmentCandidates::route('/'),
            'create' => CreateRecruitmentCandidate::route('/create'),
            'edit' => EditRecruitmentCandidate::route('/{record}/edit'),
        ];
    }
}
