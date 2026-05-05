<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        // otomatis role student
        $validated['role'] = 'student';

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $this->redirect(route('home', absolute: false));
    }
};
?>

<div class="flex min-h-screen items-center justify-center bg-zinc-950 p-6">

    <form wire:submit="register" class="w-full max-w-md">
        <flux:card class="space-y-6">

            <div>
                <flux:heading size="lg">
                    Create your account
                </flux:heading>

                <flux:text class="mt-2 text-zinc-400">
                    Join the learning platform.
                </flux:text>
            </div>

            <!-- Name -->
            <flux:field>
                <flux:label>Name</flux:label>

                <flux:input
                    wire:model="name"
                    type="text"
                    placeholder="Your full name"
                    autocomplete="name" />

                <flux:error name="name" />
            </flux:field>

            <!-- Email -->
            <flux:field>
                <flux:label>Email</flux:label>

                <flux:input
                    wire:model="email"
                    type="email"
                    placeholder="Your email address"
                    autocomplete="username" />

                <flux:error name="email" />
            </flux:field>

            <flux:field>
                <flux:label>Password</flux:label>

                <flux:input
                    wire:model="password"
                    type="password"
                    placeholder="Create a password"
                    autocomplete="new-password" />

                <flux:error name="password" />
            </flux:field>

            <flux:field>
                <flux:label>Confirm Password</flux:label>

                <flux:input
                    wire:model="password_confirmation"
                    type="password"
                    placeholder="Repeat your password"
                    autocomplete="new-password" />

                <flux:error name="password_confirmation" />
            </flux:field>

            <div class="space-y-3">
                <flux:button
                    type="submit"
                    variant="primary"
                    class="w-full">
                    Register
                </flux:button>

                <flux:button
                    href="{{ route('login') }}"
                    wire:navigate
                    variant="ghost"
                    class="w-full">
                    Already have an account?
                </flux:button>
            </div>

        </flux:card>
    </form>

</div>