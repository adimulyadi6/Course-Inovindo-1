<x-app-layout>
    <flux:navbar class="flex items-center gap-2 text-zinc-400 px-6">
        <flux:navbar.item href="{{ route('events.index') }}">
            <flux:icon.arrow-uturn-left variant="micro" />
        </flux:navbar.item>
        <flux:heading size="lg" class="text-white">
            Live Mentoring: Daily Office Hours
        </flux:heading>
    </flux:navbar>

    <flux:separator />

    <flux:main class="w-4/6 mx-auto">
        <div class="w-full h-64 bg-black flex items-center justify-center text-center border-2 border-zinc-700 rounded-lg overflow-hidden">
            <img
                src="https://images.unsplash.com/photo-1777047023610-570a81998609?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="w-full h-full object-cover" />
        </div>
        <div class="flex gap-6 mt-6">
            <flux:card class="w-2/3 border-2 border-zinc-700">
                <flux:heading size="xl" class="!font-bold">Live Mentoring: Daily Office Hours</flux:heading>
                <flux:heading size="lg" class="mt-8 !font-bold">Details</flux:heading>
                <flux:heading size="xl" class="mt-2 !font-bold">Daily Live Mentoring</flux:heading>
                <flux:text class="text-sm text-justify mt-4">Sesi Mentoring Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, cum?</flux:text>
                <flux:text class="text-sm text-justify mt-4">Join our live mentoring session every weekday for daily office hours! Get your questions answered, receive personalized guidance, and connect with our expert mentors in real-time. Don't miss this opportunity to accelerate your learning and achieve your goals faster.</flux:text>
                <flux:separator class="my-4" />
                <flux:heading size="lg" class="!font-bold">Recording</flux:heading>
                <iframe
                    class="w-full aspect-video rounded mt-4"
                    src="example.com/recording"
                    title="YouTube video player"
                    frameborder="0"
                    allowfullscreen>
                </iframe>
                <flux:text variant="strong" class="mt-2">Halo teman teman</flux:text>
                <flux:text class="mt-2">
                    <flux:link href="#">Show Transcript</flux:link>
                </flux:text>
            </flux:card>
            <flux:card class="w-1/3 border-2 border-zinc-700 h-fit">
                <div class="flex items-center gap-4">
                    <flux:card variant="subtle" class="flex flex-col items-center justify-center !p-2 w-[50px] h-fit">
                        <span class="text-xl font-bold leading-none text-zinc-800 dark:text-white">28</span>
                        <span class="text-[10px] uppercase font-semibold text-zinc-500 dark:text-zinc-400 mt-1">Apr</span>
                    </flux:card>
                    <div>
                        <flux:heading level="3" class="text-sm font-semibold">Tuesday, Apr 28</flux:heading>
                        <flux:text class="text-xs mt-2 text-slate-400">08:00 PM - 08:30 PM WIB</flux:text>
                    </div>
                </div>

                <flux:separator class="mt-4" />

                <div class="space-y-4 mt-4">
                    <div class="flex items-center gap-4 text-sm font-medium">
                        <div class="p-2 bg-zinc-600 rounded-lg">
                            <flux:icon.video-camera class="size-4" />
                        </div>
                        <flux:heading>Live stream</flux:heading>
                    </div>


                    <div class="flex items-start gap-4">
                        <div class="p-2 bg-zinc-600 rounded-lg">
                            <flux:icon.calendar-date-range class="size-4" />
                        </div>
                        <div class="flex flex-col">
                            <flux:heading class="text-sm font-medium">Repeats every weekday</flux:heading>
                            <flux:text class="text-xs text-slate-400">(Monday to Friday)</flux:text>
                            <flux:link href="#" class="text-blue-500 text-xs mt-1 no-underline">Show all events</flux:link>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 text-sm font-medium">
                        <div class="p-2 bg-zinc-600 rounded-lg">
                            <flux:icon.calendar-days class="size-4" />
                        </div>
                        <flux:heading>This event ended 18 hours ago</flux:heading>
                    </div>
                </div>
            </flux:card>
        </div>
    </flux:main>
</x-app-layout>