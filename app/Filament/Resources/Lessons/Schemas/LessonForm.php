<?php

namespace App\Filament\Resources\Lessons\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class LessonForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('module_id')
                    ->relationship('module', 'title')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('description')
                    ->default(null),
                TextInput::make('video_url')
                    ->url()
                    ->default(null),
                TextInput::make('duration')
                    ->numeric()
                    ->default(null),
                Toggle::make('is_preview')
                    ->required(),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
