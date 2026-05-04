<div x-data="{ sidebarOpen: true }" x-cloak class="min-h-screen bg-zinc-900 text-white">
    <!-- Header / Navbar -->
    <flux:header class="bg-zinc-900 border-b border-zinc-800 px-6 py-2">
        <div class="flex items-center gap-4">
            <!-- Brand & Toggle Dropdown -->
            <flux:dropdown>
                <div class="flex items-center gap-2 cursor-pointer group">
                    <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="AI Creator Labs" class="text-white" />
                    <button type="button" @click="sidebarOpen = ! sidebarOpen" class="p-1 hover:bg-zinc-800 rounded transition-colors">
                        <flux:icon.chevron-down variant="micro" class="text-zinc-400 transition-transform" ::class="sidebarOpen ? '' : '-rotate-90'" />
                    </button>
                </div>
                <flux:navmenu>
                    <flux:navmenu.item href="#">Switch Workspace</flux:navmenu.item>
                    <flux:navmenu.item href="#">Organization Settings</flux:navmenu.item>
                </flux:navmenu>
            </flux:dropdown>
        </div>

        <flux:spacer />

        <!-- Center Navigation -->
        <flux:navbar class="-mb-px">
            <flux:navbar.item href="#">Home</flux:navbar.item>
            <flux:navbar.item href="#" current>Courses</flux:navbar.item>
            <flux:navbar.item href="#">Events</flux:navbar.item>
            <flux:navbar.item href="#">Leaderboard</flux:navbar.item>
        </flux:navbar>

        <flux:spacer />

        <!-- Right Side Items -->
        <flux:navbar class="gap-4">
            <div class="relative max-lg:hidden">
                <flux:input variant="filled" placeholder="Search" icon="magnifying-glass" class="bg-zinc-800 border-none text-sm w-48" />
            </div>
            <flux:navbar.item icon="bell" href="#" badge="1" />
            <flux:navbar.item icon="chat-bubble-left-right" href="#" />
            <flux:navbar.item icon="user-group" href="#" />
            <flux:navbar.item icon="bookmark" href="#" />

            <flux:dropdown position="top" align="end">
                <flux:profile avatar="https://fluxui.dev/img/demo/user.png" class="ml-2" />
                <flux:menu>
                    <flux:menu.item>My Profile</flux:menu.item>
                    <flux:menu.separator />
                    <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
                </flux:menu>
            </flux:dropdown>
        </flux:navbar>
    </flux:header>

    <div class="flex">
        <div x-show="sidebarOpen"
            class="w-64 bg-zinc-900 border-r border-zinc-800 h-full overflow-y-auto transition-all duration-300"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="-ml-64"
            x-transition:enter-end="ml-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="ml-0"
            x-transition:leave-end="-ml-64">
            <!-- Sidebar Navigation -->
            <flux:sidebar sticky class="w-64 bg-zinc-900 border-r border-zinc-800 h-[calc(100vh-65px)]">
                <flux:sidebar.nav>
                    <flux:sidebar.item icon="pencil-square" href="#">Feed</flux:sidebar.item>

                    <flux:sidebar.group heading="WELCOME" class="mt-6">
                        <flux:sidebar.item icon="map-pin" href="#">Start Here</flux:sidebar.item>
                        <flux:sidebar.item icon="list-bullet" href="#">Welcome Checklist</flux:sidebar.item>
                        <flux:sidebar.item icon="megaphone" href="#">Announcements</flux:sidebar.item>
                    </flux:sidebar.group>

                    <flux:sidebar.group heading="NEWS & UPDATES" class="mt-6">
                        <flux:sidebar.item icon="newspaper" href="#">AI News</flux:sidebar.item>
                        <flux:sidebar.item icon="document-text" href="#" badge="1">Prompt Updates</flux:sidebar.item>
                    </flux:sidebar.group>

                    <flux:sidebar.group heading="COURSES" class="mt-6">
                        <flux:sidebar.item icon="sparkles" href="#">AI-Driven Content Crea...</flux:sidebar.item>
                        <flux:sidebar.item icon="variable" href="#">Content Creation 2.0</flux:sidebar.item>
                        <flux:sidebar.item icon="cpu-chip" href="#">AI Mastery</flux:sidebar.item>
                        <flux:sidebar.item icon="video-camera" href="#">Video Editing Mastery</flux:sidebar.item>
                        <flux:sidebar.item icon="microphone" href="#">Generative AI</flux:sidebar.item>
                    </flux:sidebar.group>
                </flux:sidebar.nav>
            </flux:sidebar>
        </div>
        <!-- Main Content: Courses Section -->
        <flux:main class="flex-1 min-h-screen p-8 bg-[#121214]">
            <div class="flex items-center justify-between mb-6">
                <flux:heading size="xl">Courses</flux:heading>
            </div>

            <div class="flex gap-2 mb-8">
                <flux:button size="sm" variant="filled" class="rounded-full bg-zinc-800">All courses</flux:button>
                <flux:button size="sm" variant="ghost" class="rounded-full text-zinc-400">My courses</flux:button>
            </div>

            <!-- Course Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Course Card Template -->
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

                <!-- Card 2: Generative AI -->
                <div class="bg-zinc-900 border border-zinc-800 rounded-xl overflow-hidden group hover:border-zinc-600 transition-all">
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

                <!-- Card 3: Welcome Checklist -->
                <div class="bg-zinc-900 border border-zinc-800 rounded-xl overflow-hidden group hover:border-zinc-600 transition-all">
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

                <!-- Card 4: AI Driven -->
                <div class="bg-zinc-900 border border-zinc-800 rounded-xl overflow-hidden group hover:border-zinc-600 transition-all">
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
            </div>
        </flux:main>
    </div>
</div>