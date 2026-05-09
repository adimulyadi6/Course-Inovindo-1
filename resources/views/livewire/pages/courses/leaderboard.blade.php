```blade
<x-app-layout>

    <flux:main class="flex-1 p-8 bg-[#121214] min-h-screen">

        {{-- PAGE HEADER --}}
        <div class="mb-8">
            <flux:heading size="xl" class="text-white">
                Leaderboard
            </flux:heading>
        </div>

        <flux:separator class="mb-10" />

        <div class="max-w-5xl mx-auto">

            {{-- HERO CARD --}}
            <flux:card class="bg-zinc-900 border border-zinc-800 rounded-3xl p-8">

                <div class="flex items-start justify-between">

                    {{-- LEFT PROFILE --}}
                    <div class="flex items-start gap-5">

                        <div class="relative">
                            <flux:avatar
                                size="xl"
                                circle
                                src="https://i.pravatar.cc/300" />

                            <div class="absolute -bottom-1 -right-1">
                                <div class="w-8 h-8 rounded-full bg-amber-500 text-black text-sm font-bold flex items-center justify-center border-4 border-zinc-900">
                                    1
                                </div>
                            </div>
                        </div>

                        <div>
                            <flux:heading size="xl" class="text-white">
                                Hendriawan
                            </flux:heading>

                            <flux:text class="text-zinc-400 mt-1">
                                0 points
                            </flux:text>
                        </div>

                    </div>

                    {{-- RIGHT LEVEL --}}
                    <div class="text-right">

                        <flux:badge
                            rounded
                            color="amber"
                            class="gap-2 px-4 py-1">

                            <flux:icon.trophy variant="mini" />

                            Level 1

                            <flux:separator vertical />

                            Newbie

                        </flux:badge>

                        <div class="flex items-center justify-end gap-2 mt-3">

                            <flux:text class="text-sm text-zinc-400">
                                10 points to level up
                            </flux:text>

                            <flux:icon.question-mark-circle
                                class="size-4 text-zinc-500" />

                        </div>

                    </div>

                </div>

                {{-- RANK GRID --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">

                    @php
                    $ranks = [
                    ['Newbie', '0 points', true],
                    ['Explorer', '10 points', false],
                    ['Contributor', '80 points', false],
                    ['Player', '160 points', false],
                    ['Builder', '320 points', false],
                    ['Catalyst', '600 points', false],
                    ['Operator', '900 points', false],
                    ['Pro', '1800 points', false],
                    ['Legend', '3000 points', false],
                    ];
                    @endphp

                    @foreach ($ranks as [$name, $points, $active])

                    <div class="flex items-center gap-4">

                        <div class="w-10 h-10 rounded-full border border-zinc-700 flex items-center justify-center
                                {{ $active ? 'bg-amber-500 text-black border-amber-500' : 'text-zinc-500' }}">

                            @if ($active)
                            1
                            @else
                            <flux:icon.lock-closed variant="mini" />
                            @endif

                        </div>

                        <div>
                            <flux:heading
                                size="sm"
                                class="{{ $active ? 'text-white' : 'text-zinc-500' }}">

                                {{ $name }}

                            </flux:heading>

                            <flux:text class="text-sm text-zinc-500">
                                {{ $points }}
                            </flux:text>
                        </div>

                    </div>

                    @endforeach

                </div>

            </flux:card>

            {{-- FILTERS --}}
            <div class="flex items-center justify-between mt-8 mb-6">

                <div class="flex gap-3">

                    <flux:button
                        size="sm"
                        variant="filled"
                        class="rounded-full bg-zinc-800">
                        7 days
                    </flux:button>

                    <flux:button
                        size="sm"
                        variant="ghost"
                        class="rounded-full">
                        30 days
                    </flux:button>

                    <flux:button
                        size="sm"
                        variant="ghost"
                        class="rounded-full">
                        All time
                    </flux:button>

                </div>

                <flux:text class="text-zinc-500 text-sm">
                    How do points work?
                </flux:text>

            </div>

            {{-- LEADERBOARD LIST --}}
            <div class="border border-zinc-800 rounded-3xl overflow-hidden divide-y divide-zinc-800 bg-zinc-900">

                @php
                $leaders = [
                ['Muhammad Tanzil', 'Never stop learning until you die', 60],
                ['Ahmad Suyudi', 'AI Explorer', 60],
                ['Wiwid Wahyudi', 'Creative Builder', 60],
                ['Keri Yanto', 'AI bukan pengganti manusia 🚀', 60],
                ];
                @endphp

                @foreach ($leaders as $index => [$name, $bio, $points])

                <div class="flex items-center justify-between p-5 hover:bg-zinc-800/40 transition">

                    <div class="flex items-center gap-5">

                        {{-- RANK --}}
                        <div class="w-10 text-center">

                            @if ($index < 3)

                                <div class="w-8 h-8 rounded-full bg-amber-500 text-black font-bold flex items-center justify-center">
                                {{ $index + 1 }}
                        </div>

                        @else

                        <div class="text-white font-bold">
                            {{ $index + 1 }}
                        </div>

                        @endif

                    </div>

                    {{-- AVATAR --}}
                    <flux:avatar
                        size="md"
                        circle
                        src="https://i.pravatar.cc/150?img={{ $index + 10 }}" />

                    {{-- USER --}}
                    <div>

                        <flux:heading size="sm" class="text-white">
                            {{ $name }}
                        </flux:heading>

                        <flux:text class="text-zinc-500 text-sm">
                            {{ $bio }}
                        </flux:text>

                    </div>

                </div>

                {{-- POINTS --}}
                <div class="text-indigo-400 font-bold">
                    +{{ $points }}
                </div>

            </div>

            @endforeach

        </div>

        </div>

    </flux:main>

</x-app-layout>
```