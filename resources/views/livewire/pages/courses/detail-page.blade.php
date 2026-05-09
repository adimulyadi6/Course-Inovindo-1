<x-app-layout>
    <flux:navbar class="flex items-center gap-2 text-zinc-400 px-6">
        <flux:navbar.item href="{{ route('courses.index') }}">
            <flux:icon.arrow-uturn-left variant="micro" />
        </flux:navbar.item>
        <flux:heading size="lg" class="dark:text-white">
            {{ $course->title }}
        </flux:heading>
    </flux:navbar>

    <flux:separator />

    <div class="max-w-4xl mx-auto mt-6 py-6">
        <div class=" flex justify-between text-center mb-12">
            <flux:heading size="xl" class="text-4xl mb-4">Welcome, {{ auth()->user()->name }}.</flux:heading>
            @php
            $firstLesson = $course->firstLesson();
            @endphp

            @if ($firstLesson)
            <a href="{{ route('courses.video', [
        'course' => $course->id,
        'lesson' => $firstLesson->id
    ]) }}">
                <flux:button>Start</flux:button>
            </a>
            @endif
        </div>

        <flux:heading size="lg" class="text-zinc-300 my-6">Progress</flux:heading>
        <div class="bg-zinc-900/40 border border-zinc-800 p-8 rounded-2xl mb-10">
            <div class="flex justify-between items-end mb-4">
                <flux:text class="dark:text-white text-sm">Completed 0 of 174 lessons </flux:text>
                <span class="ml-2 font-bold text-white">0%</span>
            </div>
            <div class="w-full bg-zinc-800 h-2.5 rounded-full overflow-hidden">
                <div class="bg-indigo-500 h-full w-[2%] shadow-[0_0_10px_rgba(99,102,241,0.5)]"></div>
            </div>
        </div>

        <div class="space-y-6">
            <div class="flex justify-between items-center">
                <div class="flex flex-col gap-4">
                    <flux:heading size="lg">Content</flux:heading>
                    <div class="flex gap-2">
                        <flux:text class="text-zinc-500">
                            {{ $course->modules->count() }} Modules
                        </flux:text>
                        <flux:separator vertical />
                        <flux:text class="text-zinc-500">
                            {{ $course->modules->sum(fn ($module) => $module->lessons->count()) }} Lessons
                        </flux:text>
                    </div>
                </div>
                <flux:button variant="ghost" size="sm" class="text-zinc-500">Collapse all modules</flux:button>
            </div>

            <div class="border border-zinc-800 rounded-xl bg-zinc-900/20 overflow-hidden">

                @foreach ($course->modules as $module)

                <div
                    x-data="{ open: false }"
                    class="border-b border-zinc-800 last:border-b-0">

                    <!-- Module Header -->
                    <button
                        @click="open = !open"
                        class="w-full p-4 bg-zinc-800/30 flex justify-between items-center hover:bg-zinc-800/50 transition">
                        <div class="flex items-center gap-3">

                            <flux:icon.chevron-right
                                variant="micro"
                                class="transition-transform duration-300"
                                ::class="open ? 'rotate-90' : ''" />

                            <span class="font-semibold">
                                {{ $module->title }}
                            </span>

                        </div>

                        <span class="text-xs text-zinc-500">
                            {{ $module->lessons->count() }} lessons
                        </span>
                    </button>

                    <!-- Lessons -->
                    <div
                        x-show="open"
                        x-transition
                        class="divide-y divide-zinc-800/40 bg-zinc-900/40">

                        @foreach ($module->lessons as $lesson)

                        <div class="p-4 flex items-center gap-4 hover:bg-zinc-800/40 cursor-pointer group">

                            <div class="w-2.5 h-2.5 rounded-full border border-zinc-600 bg-zinc-200 group-hover:bg-white transition-colors"></div>

                            <flux:text size="sm">
                                {{ $lesson->title }}
                            </flux:text>

                        </div>

                        @endforeach

                    </div>

                </div>

                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>