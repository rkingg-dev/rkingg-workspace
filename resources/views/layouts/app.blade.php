<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKINGG WorkSpace</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> <!-- Adding Alpine.js for easy interactivity -->
</head>
<body x-data="{ sidebarOpen: true }"> <!-- Alpine.js data to manage sidebar visibility -->
    <div class="flex">
        <!-- Sidebar (desktop and mobile toggleable) -->
        <div 
            x-show="sidebarOpen" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-x-full"
            x-transition:enter-end="opacity-100 transform translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform translate-x-0"
            x-transition:leave-end="opacity-0 transform -translate-x-full"
            class="lg:block lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col bg-gray-100 border-r border-gray-200"
        >
            @livewire('sidebar')
        </div>

        <!-- Main Content Area -->
        <div :class="sidebarOpen ? 'lg:pl-72' : ''" class="flex-grow transition-all duration-300 ease-in-out">
            <!-- Header for all screen sizes -->
            <div class="sticky top-0 z-40 flex h-16 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">


                <button @click="sidebarOpen = true" class="lg:block p-2 text-gray-500 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Open sidebar</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75h15m-15 6h15m-15-12h15" />
                    </svg>
                </button>

                <!-- Header Content -->
                <div class="flex-1">
                    <!-- Add additional content here if needed -->
                </div>
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
