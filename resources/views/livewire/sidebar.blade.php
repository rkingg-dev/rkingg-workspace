<!-- Desktop Sidebar -->
<div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col bg-gray-100 border-r border-gray-200">
    <div class="flex grow flex-col gap-y-5 overflow-y-auto px-6 pb-4">
        <!-- Logo and Three Dots Menu -->
        <div class="flex h-16 shrink-0 items-center justify-between">
            <img class="h-8 w-auto rounded-full" src="https://rkingg.com/wp-content/uploads/2023/02/apple-touch-icon-150x150.png" alt="RKINGG WorkSpace">
            <a href="" class="text-gray-700 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                RKINGG WorkSpace
            </a>

            <!-- Updated Three Dots Icon -->
            <button @click="sidebarOpen = false" class="hidden lg:block p-2 text-gray-500 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                <span class="sr-only">Close sidebar</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
            </button>
        </div>

        <!-- Navigation Section -->
        <nav class="flex-1 mt-8">
            <h2 class="text-sm font-semibold text-gray-500">Navigation</h2>
            <ul role="list" class="mt-4">
                <!-- What's New Link -->
                <li>
                    <x-nav-link route="{{ route('whats-new') }}" label="What's New">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z"/>
                    </x-nav-link>
                </li>
                <!-- Projects Link -->
                <li>
                    <x-nav-link route="{{ route('projects') }}" label="Projects">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z"/>
                    </x-nav-link>
                </li>
                <!-- Websites Link -->
                <li>
                    <x-nav-link route="{{ route('websites') }}" label="Websites">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418"/>
                    </x-nav-link>
                </li>
                <!-- Notes Link -->
                <li>
                    <x-nav-link route="{{ route('notes') }}" label="Notes">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </x-nav-link>
                </li>
                <!-- Tasks Link -->
                <li>
                    <x-nav-link route="{{ route('tasks') }}" label="Tasks">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </x-nav-link>
                </li>
            </ul>
        </nav>

        <!-- Admin Section -->
        <nav class="mt-8">
            <h2 class="text-sm font-semibold text-gray-500">Other Links</h2>
            <ul role="list" class="mt-1">
                <!-- Portfolio Link -->
                <li>
                    <a href="https://rkingg.com" class="text-gray-700 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold hover:bg-gray-50 hover:text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m3-6v12" />
                        </svg>
                        Portfolio
                    </a>
                </li>
                <!-- Github Link -->
                <li>
                    <a href="https://github.com" class="text-gray-700 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold hover:bg-gray-50 hover:text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m3-6v12" />
                        </svg>
                        Github
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Profile Section -->
        <div class="flex items-center gap-x-4">
            <img class="h-10 w-10 rounded-full" src="https://rkingg.com/wp-content/uploads/2023/02/apple-touch-icon-150x150.png" alt="Profile Picture">
            <div>
                <div class="flex items-center">
                    <span class="text-sm font-semibold text-gray-900">RKINGG</span>
                </div>
                <div class="flex items-center gap-x-2 text-xs leading-5 text-gray-500">
                    <span>@rkin6g</span>
                </div>
            </div>
        </div>
    </div>
</div>
