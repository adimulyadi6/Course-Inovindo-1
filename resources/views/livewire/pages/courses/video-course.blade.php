    <x-app-layout>
        <div class="flex flex-1">
            <div class="flex flex-col w-full pt-5">
                <div class="flex justify-between items-center gap-2 text-zinc-400 px-6 mb-6">
                    <div class="flex items-center gap-3">
                        <flux:navbar.item href="{{ route('courses.show', $course->id) }}">
                            <flux:icon.arrow-left variant="micro" />
                        </flux:navbar.item>
                        <flux:heading size="xl" class="dark:text-white">{{ $course->title }}</flux:heading>
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

                <div class="flex items-center justify-evenly mt-6">
                    <div>
                        <flux:text>
                            Lesson {{ $currentLessonIndex + 1 }} of {{ $totalLessons }}
                        </flux:text>
                        <flux:heading size="xl" class="mt-3">
                            {{ $lesson->title }}
                        </flux:heading>
                    </div>
                    <div class="flex items-center gap-4">
                        {{-- PREVIOUS --}}
                        @if ($previousLesson)
                        <a href="{{ route('courses.video', ['course' => $course->id,'lesson' => $previousLesson->id]) }}">
                            <flux:button
                                icon="arrow-left"
                                variant="ghost"
                                class="border">
                            </flux:button>
                        </a>
                        @else
                        <flux:button
                            icon="arrow-left"
                            variant="subtle"
                            disabled
                            class="border opacity-40 cursor-not-allowed">
                        </flux:button>
                        @endif
                        {{-- NEXT --}}
                        @if ($nextLesson)
                        <a href="{{ route('courses.video', ['course' => $course->id,'lesson' => $nextLesson->id]) }}">
                            <flux:button
                                icon="arrow-right"
                                variant="ghost"
                                class="border">
                            </flux:button>
                        </a>
                        @else
                        <flux:button
                            icon="arrow-right"
                            variant="subtle"
                            disabled
                            class="border opacity-40 cursor-not-allowed">
                        </flux:button>
                        @endif
                    </div>
                </div>
                <div class="flex justify-center mt-10">
                    <div class="w-2/3 rounded-2xl overflow-hidden border border-zinc-800 bg-zinc-900">
                        <iframe
                            width="100%"
                            height="500"
                            src="{{ $lesson->youtube_embed_url }}"
                            frameborder="0"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <flux:separator class="mt-6" />
                <div class=" flex items-center self-center mt-6">
                    <flux:button variant="filled">Complete Lesson<flux:icon.arrow-right variant="micro" /></flux:button>
                </div>
            </div>

            <flux:sidebar sticky class="w-80 h-screen bg-white text-zinc-900 dark:bg-zinc-900 dark:text-white border-l border-zinc-800 p-4 overflow-y-auto">
                <flux:heading size="lg" class="mb-6 dark:text-white">
                    Course Content
                </flux:heading>
                <div class="border border-zinc-800 rounded-xl overflow-hidden divide-y divide-zinc-800">
                    @foreach ($course->modules as $module)
                    <div
                        x-data="{ open: true }"
                        class="bg-zinc-900">
                        {{-- MODULE HEADER --}}
                        <button
                            @click="open = !open"
                            class="w-full flex items-center justify-between p-4 bg-white text-zinc-900 dark:bg-zinc-900 dark:text-white hover:bg-zinc-700 transition">
                            <div class="flex items-center gap-3">
                                <flux:icon.chevron-right
                                    variant="micro"
                                    class="transition-transform duration-300"
                                    x-bind:class="open ? 'rotate-90' : ''" />
                                <div class="text-left">
                                    <p class="font-semibold dark:text-white">
                                        {{ $module->title }}
                                    </p>
                                    <p class="text-xs text-zinc-400">
                                        {{ $module->lessons->count() }} lessons
                                    </p>
                                </div>
                            </div>
                        </button>
                        {{-- LESSON LIST --}}
                        <div
                            x-show="open"
                            x-transition
                            class="divide-y divide-zinc-800 bg-white text-zinc-900 dark:bg-zinc-900 dark:text-white">
                            @foreach ($module->lessons as $lesson)
                            <a
                                href="{{ route('courses.video', ['course' => $course->id,'lesson' => $lesson->id]) }}"
                                class="p-4 flex items-center gap-3 hover:bg-zinc-800 transition cursor-pointer
                                {{ request()->route('lesson') == $lesson->id ? 'bg-zinc-800' : '' }}">
                                <input
                                    type="checkbox"
                                    name="lesson"
                                    class="accent-indigo-500"
                                    {{ request()->route('lesson') == $lesson->id ? 'checked' : '' }}>
                                <span class="text-sm dark:text-zinc-200">
                                    {{ $lesson->title }}
                                </span>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </flux:sidebar>
        </div>
    </x-app-layout>