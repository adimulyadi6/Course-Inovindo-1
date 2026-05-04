<x-app-layout>
    <flux:navbar class="flex items-center gap-2 text-zinc-400 mb-6">
        <flux:navbar.item href="{{ route('courses.index') }}">
            <flux:icon.arrow-uturn-left variant="micro" />
        </flux:navbar.item>
        <flux:heading size="lg" class="text-white">
            {{ $course['title'] }}
        </flux:heading>
    </flux:navbar>

    <div class="max-w-4xl mx-auto py-6">
        <div class=" flex justify-between text-center mb-12">
            <flux:heading size="xl" class="text-4xl mb-4">Welcome, Hendriawan.</flux:heading>
            <a href="{{ route('courses.video', $id) }}">
                <flux:button
                    variant="filled"
                    class="bg-indigo-600 hover:bg-indigo-700 px-10 rounded-full">
                    Start
                </flux:button>
            </a>
        </div>

        <flux:heading size="lg" class="text-zinc-300 my-6">Progress</flux:heading>
        <div class="bg-zinc-900/40 border border-zinc-800 p-8 rounded-2xl mb-10">
            <div class="flex justify-between items-end mb-4">
                <flux:text class="text-zinc-400 text-sm">Completed 0 of 174 lessons </flux:text>
                <span class="ml-2 font-bold text-white">0%</span>
            </div>
            <div class="w-full bg-zinc-800 h-2.5 rounded-full overflow-hidden">
                <div class="bg-indigo-500 h-full w-[2%] shadow-[0_0_10px_rgba(99,102,241,0.5)]"></div>
            </div>
        </div>

        <div class="space-y-6">
            <div class="flex justify-between items-center">
                <div>
                    <flux:heading size="lg">Content</flux:heading>
                    <flux:text class="text-zinc-500">5 sections • {{ $course['lessons'] }} lessons</flux:text>
                </div>
                <flux:button variant="ghost" size="sm" class="text-zinc-500">Collapse all sections</flux:button>
            </div>

            <div class="border border-zinc-800 rounded-xl bg-zinc-900/20 overflow-hidden">
                <div class="p-4 bg-zinc-800/30 flex justify-between items-center border-b border-zinc-800">
                    <div class="flex items-center gap-3">
                        <flux:icon.chevron-down variant="micro" />
                        <span class="font-semibold">Instalasi & Setup CapCut PC</span>
                    </div>
                    <span class="text-xs text-zinc-500">4 lessons</span>
                </div>
                <div class="divide-y divide-zinc-800/40">
                    <div class="p-4 flex items-center gap-4 hover:bg-zinc-800/40 cursor-pointer group">
                        <div class="w-2.5 h-2.5 rounded-full border border-zinc-600 bg-zinc-200 group-hover:bg-white transition-colors"></div>
                        <flux:text size="sm">Perbedaan CapCut Versi PC dan Mobile</flux:text>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>