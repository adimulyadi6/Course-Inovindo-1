<?php

namespace App\Filament\Pages;

use BackedEnum;

use Filament\Pages\Page;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Profile extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationLabel = 'Profile';

    protected static ?string $title = 'My Profile';

    protected static string $view = 'livewire.filament.pages.profile';

    public ?array $data = [];

    public function mount(): void
    {
        $user = Auth::user();

        $this->form->fill([
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Profile Information')
                    ->schema([

                        FileUpload::make('avatar')
                            ->label('Profile Photo')
                            ->image()
                            ->disk('public')
                            ->directory('avatars')

                            ->moveFiles()

                            ->imageEditor()

                            ->imageEditorAspectRatios([
                                '1:1',
                            ])

                            ->circleCropper()

                            ->previewable(false),

                        TextInput::make('name')
                            ->required(),

                        TextInput::make('email')
                            ->email()
                            ->required(),

                        TextInput::make('password')
                            ->password()
                            ->revealable()
                            ->label('New Password')
                            ->dehydrated(fn ($state) => filled($state))
                            ->dehydrateStateUsing(
                                fn ($state) => Hash::make($state)
                            ),

                    ])
                    ->columns(2),

            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $user = Auth::user();

        $user->update(
            $this->form->getState()
        );

        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Profile updated successfully',
        ]);
    }
}
