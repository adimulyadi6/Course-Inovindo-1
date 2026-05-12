<x-app-layout>
    <flux:main class="flex-1 p-8 bg-zinc-50 dark:bg-zinc-950 min-h-screen">

        <!-- Page Header -->
        <div class="flex items-center justify-between mb-6">
            <flux:heading size="xl" class="text-zinc-900 dark:text-white">Events</flux:heading>
        </div>

        <flux:separator class="mb-8" />

        <!-- Konten Utama yang di Tengah -->
        <div class="max-w-3xl mx-auto w-full">

            <!-- Filter Tabs -->
            <div class="flex items-center gap-2 mb-8">
                <flux:button variant="filled">Upcoming</flux:button>
                <flux:button variant="subtle">Past Events</flux:button>
            </div>

            <!-- Featured Event -->
            <flux:heading size="xl" class="mb-4 text-zinc-900 dark:text-white !font-bold">
                New Event
            </flux:heading>

            <a href="{{ route('events-detail') }}">
                <flux:card class="mb-10 bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 hover:shadow-xl transition-all">
                    <!-- Event Image -->
                    <div class="relative w-full h-80 bg-zinc-900 rounded-t-2xl overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1777047023610-570a81998609?q=80&w=1170&auto=format&fit=crop"
                            class="w-full h-full object-cover"
                            alt="Event Thumbnail" />
                    </div>

                    <div class="p-6">
                        <div class="flex items-start justify-between gap-4">
                            <flux:heading size="xl" class="text-zinc-900 dark:text-white !font-bold leading-tight">
                                Live Mentoring: Daily Office Hours
                            </flux:heading>
                            <flux:badge rounded color="purple" class="px-5 py-1 whitespace-nowrap font-medium">
                                RSVP
                            </flux:badge>
                        </div>

                        <flux:text class="text-zinc-500 dark:text-zinc-400 mt-2">
                            Wednesday, April 29, 2026 • 8:00 - 8:30 PM WIB
                        </flux:text>

                        <div class="flex flex-wrap items-center gap-3 mt-6">
                            <!-- Badge 1: Starts in 6 hours -->
                            <flux:badge
                                rounded
                                color="green"
                                class="px-5 py-2.5 text-sm font-semibold bg-green-100 dark:bg-white text-green-700 dark:text-green-600">
                                Starts in 6 hours
                            </flux:badge>

                            <!-- Badge 2: Live Stream -->
                            <flux:badge
                                rounded
                                color="zinc"
                                class="px-5 py-2.5 text-sm font-medium border border-zinc-300 dark:border-zinc-700">
                                <div class="flex items-center gap-2">
                                    <flux:icon.video-camera variant="micro" />
                                    <span>Live Stream</span>
                                </div>
                            </flux:badge>
                        </div>
                    </div>
                </flux:card>
            </a>

            <!-- Monthly Section -->
            <flux:heading size="xl" class="mb-5 text-zinc-900 dark:text-white !font-bold">
                April 2026
            </flux:heading>

            <flux:card class="bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 p-6 hover:shadow-xl transition-all">
                <div class="flex flex-col md:flex-row gap-6 items-start">
                    <!-- Thumbnail -->
                    <img
                        src="https://images.unsplash.com/photo-1777047023610-570a81998609?q=80&w=1170&auto=format&fit=crop"
                        alt="Event"
                        class="w-full md:w-56 h-24 object-cover rounded-2xl" />

                    <!-- Content -->
                    <div class="flex-1 min-w-0">
                        <flux:heading size="lg" class="text-zinc-900 dark:text-white">
                            Live Mentoring: Daily Office Hours
                        </flux:heading>

                        <div class="flex items-center gap-2 mt-3 text-zinc-500 dark:text-zinc-400">
                            <flux:icon.calendar-days variant="micro" />
                            <flux:text class="text-sm">Thursday, April 30, 2026 • 8:00 - 8:30 PM WIB</flux:text>
                        </div>

                        <div class="flex items-center gap-2 mt-2 text-zinc-500 dark:text-zinc-400">
                            <flux:icon.video-camera variant="micro" />
                            <flux:text class="text-sm">Live Stream</flux:text>
                        </div>
                    </div>

                    <!-- Status -->
                    <flux:dropdown>
                        <flux:button
                            icon-trailing="chevron-down"
                            variant="ghost"
                            class="!rounded-full border border-zinc-300 dark:border-zinc-700 whitespace-nowrap">
                            <div class="flex items-center gap-2">
                                <flux:icon.check-circle variant="micro" class="text-green-500" />
                                <span class="font-medium text-zinc-700 dark:text-zinc-200">Going</span>
                            </div>
                        </flux:button>
                        <flux:menu>
                            <flux:menu.radio.group>
                                <flux:menu.radio checked>Going</flux:menu.radio>
                                <flux:menu.radio>Interested</flux:menu.radio>
                                <flux:menu.radio>Not Going</flux:menu.radio>
                            </flux:menu.radio.group>
                        </flux:menu>
                    </flux:dropdown>
                </div>
            </flux:card>

        </div>

    </flux:main>
</x-app-layout>