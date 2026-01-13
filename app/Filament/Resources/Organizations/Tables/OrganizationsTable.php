<?php

namespace App\Filament\Resources\Organizations\Tables;

use App\Models\Organization;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class OrganizationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')
                    ->disk('public')
                    ->visibility('public'),
                TextColumn::make("name"),
                ToggleColumn::make('status')
                    ->label('Status Aktif')
                    ->tooltip('Hanya satu kabinet yang boleh aktif')
                    ->onColor('success')
                    ->offColor('danger')
                    ->onIcon('heroicon-o-check-circle')
                    ->offIcon('heroicon-o-x-circle')
                    ->updateStateUsing(function ($record, $state) {
                        if ($state) {
                            Organization::where('id', '!=', $record->id)
                                ->where('status', 'active')
                                ->update(['status' => 'nonactive']);

                            $record->update(['status' => 'active']);
                        } else {
                            $record->update(['status' => 'nonactive']);
                        }
                    })
                    ->getStateUsing(fn($record) => $record->status === 'active'),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
