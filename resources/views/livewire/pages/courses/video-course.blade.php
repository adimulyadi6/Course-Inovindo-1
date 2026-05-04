<x-app-layout>
    <div class="flex flex-1">
        <div class="flex flex-col w-full pt-5">
            <div class="flex justify-between items-center gap-2 text-zinc-400 px-6 mb-6">
                <div class="flex items-center gap-3">
                    <flux:navbar.item href="{{ route('courses.show', $id) }}">
                        <flux:icon.arrow-left variant="micro" />
                    </flux:navbar.item>
                    <flux:heading size="xl" class="text-white">{{ $course['title'] }}</flux:heading>
                </div>
                <div class="flex items-center gap-1 mr-5">
                    <flux:navbar.item>
                        <flux:icon.chat-bubble-bottom-center-text />
                    </flux:navbar.item>
                    <flux:navbar.item>
                        <flux:icon.list-bullet />
                    </flux:navbar.item>
                    <flux:navbar.item>
                        <flux:icon.bookmark />
                    </flux:navbar.item>
                </div>
            </div>

            <flux:separator />

            <div class="flex items-center justify-around mt-12">
                <div>
                    <flux:text>Lesson 1 of 4</flux:text>
                    <flux:heading size="xl" class="mt-3">{{ $course['title'] }} Fundamental</flux:heading>
                </div>
                <div class="flex items-center gap-4">
                    <flux:button icon="arrow-left" variant="subtle" class="border"></flux:button>
                    <flux:button icon="arrow-right" variant="ghost" class="border"></flux:button>
                </div>
            </div>

            <div class="flex justify-center mt-10">
                <div class="w-3/4 rounded-2xl overflow-hidden border border-zinc-800 bg-zinc-900">
                    <video
                        controls
                        class="w-full aspect-video bg-black">
                        <source src="{{ asset('videos/sample-video.mp4') }}" type="video/mp4">
                        Browser kamu tidak mendukung video.
                    </video>
                </div>
            </div>
        </div>
        <flux:sidebar sticky class="w-80 h-screen bg-zinc-900 border-l border-zinc-800 p-4">
            <flux:heading size="lg" class="mb-6 text-white"> Course Content </flux:heading>
            <div x-data="{ open: true }" class="border border-zinc-800 rounded-xl overflow-hidden">
                <button @click="open = !open" class="w-full flex items-center justify-between p-4 bg-zinc-800 hover:bg-zinc-700 transition">
                    <flux:icon.chevron-right variant="micro" class="transition-transform duration-300" ::class="open ? 'rotate-90' : ''" />
                    <div>
                        <p class="font-semibold text-white"> Basic Of Generative AI </p>
                        <p class="text-xs text-zinc-400"> 3 lessons </p>
                    </div>
                </button>
                <div x-show="open" x-transition class="bg-zinc-900 divide-y divide-zinc-800">
                    <div class="p-4 flex items-center gap-3 hover:bg-zinc-800 transition cursor-pointer"> <input type="radio" name="lesson" class="accent-indigo-500"> <span class="text-sm text-zinc-200"> Generative AI Fundamental </span> </div>
                    <div class="p-4 flex items-center gap-3 hover:bg-zinc-800 transition cursor-pointer"> <input type="radio" name="lesson" class="accent-indigo-500"> <span class="text-sm text-zinc-200"> Generative AI Model Analysis </span> </div>
                    <div class="p-4 flex items-center gap-3 hover:bg-zinc-800 transition cursor-pointer"> <input type="radio" name="lesson" class="accent-indigo-500"> <span class="text-sm text-zinc-200"> AI Prompt Engineering </span> </div>
                </div>
            </div>
        </flux:sidebar>
    </div>

</x-app-layout>