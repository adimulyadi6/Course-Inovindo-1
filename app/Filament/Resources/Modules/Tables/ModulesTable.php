<?php

namespace App\Filament\Resources\Modules\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class ModulesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('course.title')
                    ->label('Course')
                    ->searchable(),

                TextColumn::make('title')
                    ->label('Module Title')
                    ->searchable(),

                TextColumn::make('order')
                    ->label('Order'),

                IconColumn::make('is_published')
                    ->boolean()
                    ->label('Published'),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                \Filament\Actions\EditAction::make(),
            ])
            ->toolbarActions([
                \Filament\Actions\BulkActionGroup::make([
                    \Filament\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
