<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Schemas\Schema;

use Filament\Forms\Components\TextInput;

use Illuminate\Validation\Rules\Unique;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // NAME
                TextInput::make('name')
                    ->label('Full Name')
                    ->required()
                    ->maxLength(255),

                // EMAIL
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                // PASSWORD
                TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->revealable()

                    // wajib hanya saat create
                    ->required(fn (string $operation): bool => $operation === 'create')

                    // kosong saat edit = tidak update password
                    ->dehydrated(fn ($state) => filled($state))

                    // hash password otomatis
                    ->dehydrateStateUsing(fn ($state) => bcrypt($state))

                    ->maxLength(255),

                // CONFIRM PASSWORD
                TextInput::make('password_confirmation')
                    ->label('Confirm Password')
                    ->password()
                    ->revealable()
                    ->same('password')

                    // jangan simpan ke database
                    ->dehydrated(false)

                    ->required(fn (string $operation): bool => $operation === 'create'),

            ]);
    }
}
