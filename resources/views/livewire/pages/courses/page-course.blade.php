<x-app-layout>
    <flux:main class="flex-1 p-8 bg-[#121214]">
        <div class="flex items-center justify-between mb-6">
            <flux:heading size="xl">Courses</flux:heading>
        </div>

        <flux:separator />

        <div class="flex gap-2 my-8">
            <flux:button size="sm" variant="filled" class="rounded-full bg-zinc-800">All courses</flux:button>
            <flux:button size="sm" variant="ghost" class="rounded-full text-zinc-400">My courses</flux:button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($courses as $course)
            <a href="{{ route('courses.show', $course->id) }}">
                <div class="bg-zinc-900 border border-zinc-800 rounded-xl overflow-hidden hover:border-zinc-600 transition-all">
                    <div class="aspect-video bg-black flex items-center justify-center text-center">
                        <img
                            src="{{ asset('storage/' . $course->thumbnail) }}"
                            class="w-full h-full object-cover" />
                    </div>
                    <div class="p-4">
                        <flux:text class="text-white font-medium text-sm">
                            {{ $course->title }}
                        </flux:text>
                        <flux:text class="text-xs text-zinc-500 uppercase mt-2">
                            Courses
                        </flux:text>
                        <div class="mt-6">
                            <div class="flex justify-between text-xs text-zinc-400 mb-1"> <span>0% Complete</span> </div>
                            <div class="w-full bg-zinc-800 h-1 rounded-full overflow-hidden">
                                <div class="bg-indigo-500 h-full w-[0%]"></div>
                            </div>
                        </div>
                        <div class="mt-3 flex items-center gap-1">
                            @if (!$course->is_published)
                            <flux:icon.lock-closed variant="micro" class="text-zinc-500" />
                            <span class="text-xs text-zinc-500">Private Course</span>
                            @else
                            <flux:icon.eye variant="micro" class="text-zinc-500" />
                            <span class="text-xs text-green-500">Published</span>
                            @endif
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </flux:main>
</x-app-layout>