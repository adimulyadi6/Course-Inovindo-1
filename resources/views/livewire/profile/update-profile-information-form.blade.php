<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Livewire\Volt\Component;

new class extends Component
{
    use WithFileUploads;

    public string $name = '';
    public string $email = '';
    public string $headline = '';
    public string $bio = '';

    public $avatar;

    public function mount(): void
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->headline = Auth::user()->headline ?? '';
        $this->bio = Auth::user()->bio ?? '';
    }

    public function updateProfileInformation(): void
    {
        $user = Auth::user();

        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($user->id)
            ],
            'headline' => ['nullable', 'string', 'max:255'],
            'bio' => ['nullable', 'string', 'max:1000'],
            'avatar' => ['nullable', 'image', 'max:2048'],
        ]);

        $user->fill($validated);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        if ($this->avatar) {
            $path = $this->avatar->store('avatars', 'public');
            $user->avatar = $path;
        }

        $user->save();

        $this->dispatch('profile-updated');
    }

    public function sendVerification(): void
    {
        $user = Auth::user();

        if ($user->hasVerifiedEmail()) {
            return;
        }

        $user->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }
};

?>

<section>

    <form wire:submit="updateProfileInformation" class="space-y-6">

        <div>

            <flux:heading size="lg">
                Profile Information
            </flux:heading>

            <flux:text class="text-sm text-zinc-500 mt-1">
                Update your personal information.
            </flux:text>

        </div>

        <!-- Avatar -->
        <div>

            <flux:text class="mb-2">
                Profile Photo
            </flux:text>

            <input
                type="file"
                wire:model="avatar"
                class="block w-full text-sm">

            @if ($avatar)

            <img
                src="{{ $avatar->temporaryUrl() }}"
                class="w-20 h-20 rounded-full mt-4 object-cover">

            @endif

        </div>

        <!-- Name -->
        <flux:field>

            <flux:label>Name</flux:label>

            <flux:input
                wire:model="name"
                type="text"
                placeholder="Your name" />

            <flux:error name="name" />

        </flux:field>

        <!-- Email -->
        <flux:field>

            <flux:label>Email</flux:label>

            <flux:input
                wire:model="email"
                type="email"
                placeholder="Your email" />

            <flux:error name="email" />

        </flux:field>

        <!-- Headline -->
        <flux:field>

            <flux:label>Headline</flux:label>

            <flux:input
                wire:model="headline"
                type="text"
                placeholder="Frontend Developer" />

            <flux:error name="headline" />

        </flux:field>

        <!-- Bio -->
        <flux:field>

            <flux:label>Bio</flux:label>

            <flux:textarea
                wire:model="bio"
                rows="5"
                placeholder="Tell something about yourself..." />

            <flux:error name="bio" />

        </flux:field>

        <div class="flex items-center gap-4">

            <flux:button
                type="submit"
                variant="filled">

                Save Changes

            </flux:button>

            <x-action-message on="profile-updated">
                Saved.
            </x-action-message>

        </div>

    </form>

</section>