<x-app-layout>
    <flux:main class="flex-1 p-8 bg-[#121214]">
        <div class="flex items-center justify-between mb-6">
            <flux:heading size="xl">Courses</flux:heading>
        </div>

        <flux:separator/>

        <div class="flex gap-2 my-8">
            <flux:button size="sm" variant="filled" class="rounded-full bg-zinc-800">All courses</flux:button>
            <flux:button size="sm" variant="ghost" class="rounded-full text-zinc-400">My courses</flux:button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="{{ route('courses.show', 1) }}" class="block">
                <div class="bg-zinc-900 border border-zinc-800 rounded-xl overflow-hidden group hover:border-zinc-600 transition-all">
                    <div class="aspect-video bg-black flex items-center justify-center p-4 text-center">
                        <span class="font-bold text-lg tracking-tighter">VIDEO EDITING<br />MASTERY</span>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 mb-1">
                            <flux:icon.play-circle variant="micro" class="text-zinc-400" />
                            <flux:text class="text-white font-medium text-sm">Video Editing Mastery</flux:text>
                        </div>
                        <flux:text class="text-xs text-zinc-500 uppercase">Courses</flux:text>

                        <div class="mt-6">
                            <div class="flex justify-between text-xs text-zinc-400 mb-1">
                                <span>0% Complete</span>
                            </div>
                            <div class="w-full bg-zinc-800 h-1 rounded-full overflow-hidden">
                                <div class="bg-indigo-500 h-full w-[0%]"></div>
                            </div>
                        </div>
                        <div class="mt-3 flex items-center gap-1">
                            <flux:icon.lock-closed variant="micro" class="text-zinc-500" />
                            <span class="text-xs text-zinc-500">Private space</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ route('courses.show', 2) }}">
                <div class="bg-zinc-900 border border-zinc-800 rounded-xl overflow-hidden hover:border-zinc-600 transition-all">
                    <div class="aspect-video bg-black flex items-center justify-center p-4 text-center">
                        <span class="font-bold text-lg tracking-tighter uppercase">Generative AI</span>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 mb-1">
                            <flux:icon.microphone variant="micro" class="text-zinc-400" />
                            <flux:text class="text-white font-medium text-sm">Generative AI</flux:text>
                        </div>
                        <flux:text class="text-xs text-zinc-500 uppercase">Courses</flux:text>
                        <div class="mt-6">
                            <div class="flex justify-between text-xs text-zinc-400 mb-1">
                                <span>0% Complete</span>
                            </div>
                            <div class="w-full bg-zinc-800 h-1 rounded-full overflow-hidden">
                                <div class="bg-indigo-500 h-full w-[0%]"></div>
                            </div>
                        </div>
                        <div class="mt-3 flex items-center gap-1 text-zinc-500 text-xs">
                            <flux:icon.eye-slash variant="micro" /> Secret space
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ route('courses.show', 3) }}">
                <div class="bg-zinc-900 border border-zinc-800 rounded-xl overflow-hidden hover:border-zinc-600 transition-all">
                    <div class="aspect-video bg-black flex items-center justify-center p-4 text-center">
                        <span class="font-bold text-lg tracking-tighter uppercase">Welcome<br />Checklist</span>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 mb-1">
                            <flux:icon.list-bullet variant="micro" class="text-zinc-400" />
                            <flux:text class="text-white font-medium text-sm">Welcome Checklist</flux:text>
                        </div>
                        <flux:text class="text-xs text-zinc-500 uppercase">Welcome</flux:text>
                        <div class="mt-6">
                            <div class="flex justify-between text-xs text-zinc-400 mb-1">
                                <span>0% Complete</span>
                            </div>
                            <div class="w-full bg-zinc-800 h-1 rounded-full overflow-hidden">
                                <div class="bg-indigo-500 h-full w-[0%]"></div>
                            </div>
                        </div>
                        <div class="mt-3 flex items-center gap-1 text-zinc-500 text-xs">
                            <flux:icon.lock-closed variant="micro" /> Private space
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ route('courses.show', 4) }}">
                <div class="bg-zinc-900 border border-zinc-800 rounded-xl overflow-hidden hover:border-zinc-600 transition-all">
                    <div class="aspect-video bg-black flex items-center justify-center p-4 text-center">
                        <span class="font-bold text-lg tracking-tighter uppercase">AI-Driven<br />Content Creation</span>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 mb-1">
                            <flux:icon.sparkles variant="micro" class="text-zinc-400" />
                            <flux:text class="text-white font-medium text-sm">AI-Driven Content...</flux:text>
                        </div>
                        <flux:text class="text-xs text-zinc-500 uppercase">Courses</flux:text>
                        <div class="mt-6">
                            <div class="flex justify-between text-xs text-zinc-400 mb-1">
                                <span>0% Complete</span>
                            </div>
                            <div class="w-full bg-zinc-800 h-1 rounded-full overflow-hidden">
                                <div class="bg-indigo-500 h-full w-[0%]"></div>
                            </div>
                        </div>
                        <div class="mt-3 flex items-center gap-1 text-zinc-500 text-xs">
                            <flux:icon.lock-closed variant="micro" /> Private space
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </flux:main>
</x-app-layout>