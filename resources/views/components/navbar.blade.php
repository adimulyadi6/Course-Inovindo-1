<flux:header class="bg-zinc-900 border-b border-zinc-800 px-6 py-2 z-20">
    <div class="flex items-center gap-4">
        <div class="flex items-center gap-2 cursor-pointer group">
            <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Inovindo Course" class="text-white" />
            <button type="button" @click="sidebarOpen = ! sidebarOpen" class="p-1 hover:bg-zinc-800 rounded transition-colors">
                <flux:icon.chevron-down variant="micro" class="text-zinc-400 transition-transform" ::class="sidebarOpen ? '' : '-rotate-90'" />
            </button>
        </div>

    </div>

    <flux:spacer />

    <flux:navbar class="-mb-px">
        <flux:navbar.item href="{{ route('home') }}">Home</flux:navbar.item>
        <flux:navbar.item href="{{ route('courses.index') }}">Courses</flux:navbar.item>
        <flux:navbar.item href="{{ route('events.index') }}">Events</flux:navbar.item>
        <flux:navbar.item href="#">Leaderboard</flux:navbar.item>
    </flux:navbar>

    <flux:spacer />

    <flux:navbar class="gap-2">
        <div class="relative max-lg:hidden">
            <flux:input variant="filled" placeholder="Search" icon="magnifying-glass" class="bg-zinc-800 border-none text-sm w-48" />
        </div>
        <div class="relative inline-block">
            <flux:navbar.item icon="bell" href="#" />
            <span class="absolute top-1 right-3.5 block h-1.5 w-1.5 rounded-full ring-2 ring-white bg-red-500"></span>
        </div>
        <flux:navbar.item icon="chat-bubble-left-right" href="#" />
        <flux:navbar.item icon="user-group" href="#" />
        <flux:navbar.item icon="bookmark" href="#" />

        <flux:dropdown position="top" align="end">
            <flux:profile circle avatar="https://fluxui.dev/img/demo/user.png" class="ml-2" />
            <flux:menu>
                <flux:menu.item icon="user-circle">My Profile</flux:menu.item>
                <flux:menu.separator />
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <flux:menu.item
                        as="button"
                        type="submit"
                        icon="arrow-right-start-on-rectangle">
                        Logout
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:navbar>
</flux:header>