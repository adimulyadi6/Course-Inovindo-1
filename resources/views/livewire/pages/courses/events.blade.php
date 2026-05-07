<x-app-layout>
    <flux:main class="flex-1 p-8 bg-[#121214]">
        <div class="flex items-center justify-between mb-6">
            <flux:heading size="xl">Events</flux:heading>
        </div>
        <flux:separator />
    </flux:main>

    <flux:main class="w-1/2 mx-auto">
        <div>
            <flux:button>Upcoming</flux:button>
            <flux:button variant="subtle">Past</flux:button>
        </div>
        <flux:heading size="xl" class="mt-6 !font-bold">New Event</flux:heading>
        <a href="{{ route('events-detail') }}">
            <flux:card class="mt-6">
                <div class="w-full h-64 bg-black flex items-center justify-center text-center rounded-lg overflow-hidden">
                    <img
                        src="https://images.unsplash.com/photo-1777047023610-570a81998609?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="w-full h-full object-cover" />
                </div>
                <div class="flex items-center justify-between mt-6">
                    <flux:heading size="xl" class="!font-bold">Live Mentoring: Daily Office Hours</flux:heading>
                    <flux:badge color="purple" size="lg" class="!rounded-full !px-4">RSVP</flux:badge>
                </div>
                <flux:text class="text-xs mt-2">Wednesday, Apr 29, 8:00-8:30 PM WIB</flux:text>
                <div class="flex items-center gap-2 mt-6">
                    <flux:button
                        variant="ghost"
                        class="!rounded-full !bg-white !text-green-500 px-4 py-2.5 text-sm font-semibold hover:!bg-white">
                        Starts in 6 hours
                    </flux:button>
                    <flux:button
                        variant="ghost"
                        class="!rounded-full px-4 py-2.5 text-sm font-semibold text-gray-400 border">
                        <div class="flex items-center gap-2">
                            <flux:icon.video-camera variant="micro" />
                            <span>Live stream</span>
                        </div>
                    </flux:button>
                </div>
            </flux:card>
        </a>
        <flux:heading size="xl" class="mt-8 !font-bold">April 2026 </flux:heading>
        <flux:card class="mt-6">
            <div class="flex justify-between">
                <img src="https://images.unsplash.com/photo-1777047023610-570a81998609?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Gambar" class="w-56 h-20 object-cover rounded-lg" />
                <div class="flex flex-col">
                    <flux:heading size="lg">Live Mentoring: Daily Office Hours</flux:heading>
                    <div class="flex items-center mt-2 gap-2">
                        <flux:icon.calendar-days variant="micro" class="text-gray-400" />
                        <flux:text class="text-xs">Thursday, Apr 30, 8:00-8:30 PM WIB</flux:text>
                    </div>
                    <div class="flex items-center mt-2 gap-2">
                        <flux:icon.video-camera variant="micro" class="text-gray-400" />
                        <flux:text class="text-xs">Live Stream</flux:text>
                    </div>
                </div>
                <flux:dropdown>
                    <flux:button icon:trailing="chevron-down" class="gap-2 !rounded-full">
                        <div class="flex items-center gap-1">
                            <flux:icon.check-circle
                                variant="micro"
                                class="translate-y-[1px] text-green-500" />
                            <span>Going</span>
                        </div>
                    </flux:button>
                    <flux:menu>
                        <flux:menu.radio.group wire:model="sortBy">
                            <flux:menu.radio checked>Latest activity</flux:menu.radio>
                            <flux:menu.radio>Date created</flux:menu.radio>
                            <flux:menu.radio>Most popular</flux:menu.radio>
                        </flux:menu.radio.group>
                    </flux:menu>
                </flux:dropdown>
            </div>
        </flux:card>
    </flux:main>
</x-app-layout>