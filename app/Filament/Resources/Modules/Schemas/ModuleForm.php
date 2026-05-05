<?php

namespace App\Filament\Resources\Modules\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;

class ModuleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            Select::make('course_id')
                ->label('Course')
                ->relationship('course', 'title')
                ->preload()
                ->searchable()
                ->required(),

            TextInput::make('title')
                ->required(),

            TextInput::make('order')
                ->numeric()
                ->default(0),

            Textarea::make('description')
                ->nullable(),

            Toggle::make('is_published')
                ->default(true),

        ]);
    }
}
