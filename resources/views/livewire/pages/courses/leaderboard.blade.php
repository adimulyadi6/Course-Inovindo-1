<x-app-layout>
    <flux:main class="flex-1 p-8 bg-[#121214]">
        <div class="flex items-center justify-between mb-6">
            <flux:heading size="xl">Leaderboard</flux:heading>
        </div>
        <flux:separator />
    </flux:main>

    <flux:main class="w-1/2 mx-auto">
        <flux:card>
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-4">
                    <flux:avatar size="xl" circle badge="1" badge:circle name="Hendriawan" />
                    <flux:heading size="xl">Hendriawan</flux:heading>
                </div>
                <div>
                    <flux:badge rounded icon="trophy" color="amber" class="gap-2 mr-12">
                        1
                        <flux:separator vertical />
                        Newbie
                    </flux:badge>
                    <div class="flex items-center gap-2 mt-2">
                        <flux:text>10 point to level up </flux:text>
                        <flux:icon.question-mark-circle class="size-4" />
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-4 mt-6">
                <div class="flex">
                    <div class="p-2 rounded-full">
                        <flux:badge rounded color="orange">1</flux:badge>
                    </div>
                    <div>
                        <flux:heading size="lg" class="!font-bold">Newbie</flux:heading>
                        <flux:text class="text-sm">0 points</flux:text>
                    </div>
                </div>
                <div class="flex">
                    <div class="p-2 rounded-full">
                        <flux:badge rounded color="orange">1</flux:badge>
                    </div>
                    <div>
                        <flux:heading size="lg" class="!font-bold">Newbie</flux:heading>
                        <flux:text class="text-sm">0 points</flux:text>
                    </div>
                </div>
                <div class="flex">
                    <div class="p-2 rounded-full">
                        <flux:badge rounded color="orange">1</flux:badge>
                    </div>
                    <div>
                        <flux:heading size="lg" class="!font-bold">Newbie</flux:heading>
                        <flux:text class="text-sm">0 points</flux:text>
                    </div>
                </div>
                <div class="flex">
                    <div class="p-2 rounded-full">
                        <flux:badge rounded color="orange">1</flux:badge>
                    </div>
                    <div>
                        <flux:heading size="lg" class="!font-bold">Newbie</flux:heading>
                        <flux:text class="text-sm">0 points</flux:text>
                    </div>
                </div>
                <div class="flex">
                    <div class="p-2 rounded-full">
                        <flux:badge rounded color="orange">1</flux:badge>
                    </div>
                    <div>
                        <flux:heading size="lg" class="!font-bold">Newbie</flux:heading>
                        <flux:text class="text-sm">0 points</flux:text>
                    </div>
                </div>
                <div class="flex">
                    <div class="p-2 rounded-full">
                        <flux:badge rounded color="orange">1</flux:badge>
                    </div>
                    <div>
                        <flux:heading size="lg" class="!font-bold">Newbie</flux:heading>
                        <flux:text class="text-sm">0 points</flux:text>
                    </div>
                </div>
                <div class="flex">
                    <div class="p-2 rounded-full">
                        <flux:badge rounded color="orange">1</flux:badge>
                    </div>
                    <div>
                        <flux:heading size="lg" class="!font-bold">Newbie</flux:heading>
                        <flux:text class="text-sm">0 points</flux:text>
                    </div>
                </div>
                <div class="flex">
                    <div class="p-2 rounded-full">
                        <flux:badge rounded color="orange">1</flux:badge>
                    </div>
                    <div>
                        <flux:heading size="lg" class="!font-bold">Newbie</flux:heading>
                        <flux:text class="text-sm">0 points</flux:text>
                    </div>
                </div>
                <div class="flex">
                    <div class="p-2 rounded-full">
                        <flux:badge rounded color="orange">1</flux:badge>
                    </div>
                    <div>
                        <flux:heading size="lg" class="!font-bold">Newbie</flux:heading>
                        <flux:text class="text-sm">0 points</flux:text>
                    </div>
                </div>
            </div>
        </flux:card>
        <div class=" flex justify-between items-center mt-6">
            <div class="flex gap-2">
                <flux:badge as="button" rounded size="lg">7 Days</flux:badge>
                <flux:badge as="button" rounded size="lg">30 Days</flux:badge>
                <flux:badge as="button" rounded size="lg">All time</flux:badge>
            </div>
            <flux:text>How do Points Work?</flux:text>
        </div>
        
    </flux:main>
</x-app-layout>