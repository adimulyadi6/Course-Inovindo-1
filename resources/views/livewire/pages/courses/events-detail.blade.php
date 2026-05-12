<x-app-layout>
    <flux:navbar class="flex items-center gap-2 text-zinc-400 px-6">
        <flux:navbar.item href="{{ route('events.index') }}">
            <flux:icon.arrow-uturn-left variant="micro" />
        </flux:navbar.item>
        <flux:heading size="lg" class="dark:text-white">
            Live Mentoring: Daily Office Hours
        </flux:heading>
    </flux:navbar>

    <flux:separator />

    <div class="max-w-5xl mx-auto w-full px-6 py-8">

            <!-- Hero Image -->
            <div class="w-full h-64 bg-zinc-900 rounded-3xl overflow-hidden border border-zinc-200 dark:border-zinc-800 shadow-xl">
                <img
                    src="https://images.unsplash.com/photo-1777047023610-570a81998609?q=80&w=1170&auto=format&fit=crop"
                    class="w-full h-full object-cover" 
                    alt="Event Banner" />
            </div>

            <div class="flex flex-col lg:flex-row gap-8 mt-8">

                <!-- Main Content -->
                <flux:card class="flex-1 bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 p-8">
                    <flux:heading size="xl" class="text-zinc-900 dark:text-white !font-bold">
                        Live Mentoring: Daily Office Hours
                    </flux:heading>

                    <flux:heading size="lg" class="mt-10 mb-3 text-zinc-900 dark:text-white !font-bold">
                        Details
                    </flux:heading>
                    <flux:heading size="xl" class="text-zinc-900 dark:text-white !font-bold">
                        Daily Live Mentoring
                    </flux:heading>

                    <flux:text class="text-zinc-600 dark:text-zinc-400 mt-5 text-justify leading-relaxed">
                        Sesi Mentoring Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, cum?
                    </flux:text>
                    <flux:text class="text-zinc-600 dark:text-zinc-400 mt-4 text-justify leading-relaxed">
                        Join our live mentoring session every weekday for daily office hours! Get your questions answered, receive personalized guidance, and connect with our expert mentors in real-time. Don't miss this opportunity to accelerate your learning and achieve your goals faster.
                    </flux:text>

                    <flux:separator class="my-8" />

                    <flux:heading size="lg" class="mb-4 text-zinc-900 dark:text-white !font-bold">
                        Recording
                    </flux:heading>
                    
                    <div class="aspect-video bg-black rounded-2xl overflow-hidden">
                        <iframe
                            class="w-full h-full"
                            src="example.com/recording"
                            title="Recording"
                            frameborder="0"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <flux:text variant="strong" class="mt-4 block text-zinc-900 dark:text-white">
                        Halo teman teman
                    </flux:text>
                    <flux:text class="mt-1">
                        <flux:link href="#">Show Transcript</flux:link>
                    </flux:text>
                </flux:card>

                <!-- Sidebar Info -->
                <flux:card class="w-full lg:w-96 bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 p-6 h-fit">
                    <div class="flex items-center gap-4">
                        <flux:card variant="subtle" class="flex flex-col items-center justify-center !p-4 w-[68px] bg-zinc-100 dark:bg-zinc-800">
                            <span class="text-3xl font-bold text-zinc-900 dark:text-white">28</span>
                            <span class="text-xs uppercase font-semibold tracking-widest text-zinc-500 dark:text-zinc-400">Apr</span>
                        </flux:card>
                        <div>
                            <flux:heading level="3" class="font-semibold text-zinc-900 dark:text-white">
                                Tuesday, April 28
                            </flux:heading>
                            <flux:text class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">
                                08:00 PM - 08:30 PM WIB
                            </flux:text>
                        </div>
                    </div>

                    <flux:separator class="my-6" />

                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="p-3 bg-zinc-100 dark:bg-zinc-800 rounded-2xl">
                                <flux:icon.video-camera class="size-5 text-zinc-500 dark:text-zinc-400" />
                            </div>
                            <div>
                                <flux:heading class="text-base font-medium text-zinc-900 dark:text-white">Live Stream</flux:heading>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="p-3 bg-zinc-100 dark:bg-zinc-800 rounded-2xl">
                                <flux:icon.calendar-date-range class="size-5 text-zinc-500 dark:text-zinc-400" />
                            </div>
                            <div>
                                <flux:heading class="text-base font-medium text-zinc-900 dark:text-white">
                                    Repeats every weekday
                                </flux:heading>
                                <flux:text class="text-sm text-zinc-500 dark:text-zinc-400">(Monday to Friday)</flux:text>
                                <flux:link href="#" class="text-blue-600 dark:text-blue-500 text-sm mt-2 inline-block">
                                    Show all events
                                </flux:link>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="p-3 bg-zinc-100 dark:bg-zinc-800 rounded-2xl">
                                <flux:icon.calendar-days class="size-5 text-zinc-500 dark:text-zinc-400" />
                            </div>
                            <flux:heading class="text-base font-medium text-zinc-900 dark:text-white">
                                This event ended 18 hours ago
                            </flux:heading>
                        </div>
                    </div>
                </flux:card>

            </div>
        </div>
</x-app-layout>