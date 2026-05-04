<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('home', absolute: false));
    }
}; ?>

<div class="flex min-h-screen items-center justify-center bg-zinc-950 p-6">

    <form wire:submit="login" class="w-full max-w-md">
        <flux:card class="space-y-6">
            <div>
                <flux:heading size="lg">
                    Log in to your account
                </flux:heading>
                <flux:text class="mt-2 text-zinc-400">
                    Welcome back!
                </flux:text>
            </div>

            <x-auth-session-status
                class="mb-4"
                :status="session('status')" />

            <flux:field>
                <flux:label>Email</flux:label>
                <flux:input
                    wire:model="form.email"
                    type="email"
                    placeholder="Your email address"
                    autocomplete="username" />
                <flux:error name="form.email" />
            </flux:field>

            <flux:field>
                <div class="mb-3 flex justify-between items-center">
                    <flux:label>Password</flux:label>
                    @if (Route::has('password.request'))
                    <flux:link
                        href="{{ route('password.request') }}"
                        wire:navigate
                        variant="subtle"
                        class="text-sm">
                        Forgot password?
                    </flux:link>
                    @endif
                </div>
                <flux:input
                    wire:model="form.password"
                    type="password"
                    placeholder="Your password"
                    autocomplete="current-password" />
                <flux:error name="form.password" />
            </flux:field>

            <label class="flex items-center gap-2 text-sm text-zinc-400">
                <input
                    wire:model="form.remember"
                    type="checkbox"
                    class="rounded border-zinc-700 bg-zinc-900">
                Remember me
            </label>

            <div class="space-y-3">
                <flux:button
                    type="submit"
                    variant="primary"
                    class="w-full">
                    Log in
                </flux:button>
                <flux:button
                    href="{{ route('register') }}"
                    wire:navigate
                    variant="ghost"
                    class="w-full">
                    Sign up for a new account
                </flux:button>
            </div>
        </flux:card>
    </form>
</div>