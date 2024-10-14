<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKINGG WorkSpace</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> <!-- Adding Alpine.js for easy interactivity -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body x-data="{ sidebarOpen: true }"> <!-- Alpine.js data to manage sidebar visibility -->
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar (desktop and mobile toggleable) -->
        <div
            x-cloak
            x-show="sidebarOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-x-full"
            x-transition:enter-end="opacity-100 transform translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform translate-x-0"
            x-transition:leave-end="opacity-0 transform -translate-x-full"
            class="lg:block lg:fixed lg:inset-y-0 lg:z-50 lg:w-72 lg:flex lg:flex-col bg-gray-100 border-r border-gray-200"
            x-ref="sidebar" <!-- Adding a reference for manual control -->

            @livewire('sidebar')
        </div>

        <!-- Main Content Area -->
        <div :class="sidebarOpen ? 'lg:pl-72' : 'flex-1'" class="flex flex-col w-full transition-all duration-300 ease-in-out">
            <!-- Header for all screen sizes -->
            <div class="sticky top-0 z-40 flex h-16 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
                <button @click="sidebarOpen = !sidebarOpen" class="p-2 text-gray-500 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Toggle sidebar</span>
                    <svg x-show="!sidebarOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
                    <svg x-show="sidebarOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
                    
                </button>

                <!-- Header Content -->
                <div class="flex-1">
                    test 
                </div>
            </div>

            <!-- Main content area -->
            <main class="flex-grow py-10">
                <div class="px-4 sm:px-6 lg:px-8">
                    <!-- Page-specific content will be inserted here -->
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    @livewireScripts
    <script>
        document.addEventListener('turbolinks:load', () => {
            if (window.Livewire) {
                window.Livewire.restart();
                window.Livewire.rescan();
            }
        });
    </script>
</body>

</html>