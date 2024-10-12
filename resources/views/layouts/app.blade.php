<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKINGG WorkSpace</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <div x-data="{ sidebarOpen: false }">
        <!-- Sidebar (mobile and desktop) -->
        @livewire('sidebar')

        <!-- Main Content Area -->
        <div class="lg:pl-72">
            <!-- Header for all screen sizes -->
            <div class="sticky top-0 z-40 flex h-16 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
                <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden" @click="sidebarOpen = true">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>

            <!-- Main content area -->
            <main class="py-10">
                <div class="px-4 sm:px-6 lg:px-8">
                    <!-- Page-specific content will be inserted here -->
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    @livewireScripts
</body>
</html>
