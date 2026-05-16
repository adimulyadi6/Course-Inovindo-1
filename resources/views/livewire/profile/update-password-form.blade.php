<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Livewire\Volt\Component;

new class extends Component
{
    public string $current_password = '';
    public string $password = '';
    public string $password_confirmation = '';

    public function updatePassword(): void
    {
        try {

            $validated = $this->validate([
                'current_password' => ['required', 'string', 'current_password'],
                'password' => ['required', 'string', Password::defaults(), 'confirmed'],
            ]);
        } catch (ValidationException $e) {

            $this->reset(
                'current_password',
                'password',
                'password_confirmation'
            );

            throw $e;
        }

        Auth::user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        $this->reset(
            'current_password',
            'password',
            'password_confirmation'
        );

        $this->dispatch('password-updated');
    }
};

?>

<section>

    <form wire:submit="updatePassword" class="space-y-6">

        <div>

            <flux:heading size="lg">
                Update Password
            </flux:heading>

            <flux:text class="text-sm text-zinc-500 mt-1">
                Use a strong password to secure your account.
            </flux:text>

        </div>

        <flux:field>

            <flux:label>Current Password</flux:label>

            <flux:input
                wire:model="current_password"
                type="password" />

            <flux:error name="current_password" />

        </flux:field>

        <flux:field>

            <flux:label>New Password</flux:label>

            <flux:input
                wire:model="password"
                type="password" />

            <flux:error name="password" />

        </flux:field>

        <flux:field>

            <flux:label>Confirm Password</flux:label>

            <flux:input
                wire:model="password_confirmation"
                type="password" />

            <flux:error name="password_confirmation" />

        </flux:field>

        <div class="flex items-center gap-4">

            <flux:button
                type="submit"
                variant="filled">

                Save Password

            </flux:button>

            <x-action-message on="password-updated">
                Saved.
            </x-action-message>

        </div>

    </form>

</section>