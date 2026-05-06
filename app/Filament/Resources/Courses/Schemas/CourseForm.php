<?php

namespace App\Filament\Resources\Courses\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            // TITLE (WAJIB)
            TextInput::make('title')
                ->label('Judul Course')
                ->required()
                ->maxLength(255),

            // DESCRIPTION
            Textarea::make('description')
                ->label('Deskripsi')
                ->rows(4)
                ->nullable(),

            // PRICE
            TextInput::make('price')
                ->label('Harga')
                ->numeric()
                ->default(0)
                ->required(),

            // THUMBNAIL (jika kolom ada)
            FileUpload::make('thumbnail')
                ->label('Thumbnail')
                ->image()
                ->disk('public')
                ->directory('courses')
                ->nullable(),

            // PUBLISH STATUS
            Toggle::make('is_published')
                ->label('Publish')
                ->default(false),

            // INSTRUCTOR (opsional, kalau ada user_id)
            Select::make('user_id')
                ->label('Instructor')
                ->relationship(
                    name: 'instructor',
                    titleAttribute: 'name',
                    modifyQueryUsing: fn ($query) => $query->where('role', 'instructor')
                )
                ->searchable()
                ->nullable()
                ->preload()

        ]);
    }
}
