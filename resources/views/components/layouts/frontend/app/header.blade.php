<!-- Header -->
<header class="bg-white dark:bg-gray-900 shadow-md sticky top-0 z-50 border-b border-gray-200 dark:border-gray-700 transition-colors duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Left side: Logo and Brand -->
            <div class="flex items-center space-x-3">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-lg flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                </div>
                <!-- Brand Name -->
                <div class="hidden sm:block">
                    <h1 class="font-bold text-lg text-gray-900 dark:text-white">
                        {{ config('app.name') }}
                    </h1>
                    <p class="text-xs text-gray-500 dark:text-gray-400 -mt-1">Cybersecurity Club</p>
                </div>
            </div>

            <!-- Middle Section: Nav links (Desktop) -->
            <nav class="hidden lg:flex items-center space-x-1">
                <a href="{{ route('home') }}"
                   class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 {{ request()->routeIs('home') ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400' : '' }}">
                    {{ __('Home') }}
                </a>
                <a href="{{ route('about') }}"
                   class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 {{ request()->routeIs('about') ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400' : '' }}">
                    {{ __('About') }}
                </a>
                <a href="{{ route('projects') }}"
                   class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 {{ request()->routeIs('projects') ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400' : '' }}">
                    {{ __('Projects') }}
                </a>
                <a href="{{ route('competitions') }}"
                   class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 {{ request()->routeIs('competitions') ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400' : '' }}">
                    {{ __('Competitions') }}
                </a>
                <a href="{{ route('resources') }}"
                   class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 {{ request()->routeIs('resources') ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400' : '' }}">
                    {{ __('Resources') }}
                </a>
                <a href="{{ route('contact') }}"
                   class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 {{ request()->routeIs('contact') ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400' : '' }}">
                    {{ __('Contact') }}
                </a>
                <a href="{{ route('join') }}"
                   class="ml-2 px-4 py-2 rounded-md text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-700 hover:to-cyan-700 shadow-sm hover:shadow-md transition-all duration-200">
                    {{ __('Join Us') }}
                </a>
            </nav>

            <!-- Right side: Theme Toggle & Mobile Menu -->
            <div class="flex items-center space-x-2">
                <!-- Theme Toggle Dropdown -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                            class="p-2 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="open"
                         @click.away="open = false"
                         x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700 py-1 z-50">
                        <button @click="setAppearance('light'); open = false"
                                class="w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                            <span>Light</span>
                        </button>
                        <button @click="setAppearance('dark'); open = false"
                                class="w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                            </svg>
                            <span>Dark</span>
                        </button>
                        <button @click="setAppearance('system'); open = false"
                                class="w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>System</span>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="lg:hidden p-2 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-1"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-1"
         class="lg:hidden border-t border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}"
               class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400 {{ request()->routeIs('home') ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400' : '' }}">
                {{ __('Home') }}
            </a>
            <a href="{{ route('about') }}"
               class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400 {{ request()->routeIs('about') ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400' : '' }}">
                {{ __('About') }}
            </a>
            <a href="{{ route('projects') }}"
               class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400 {{ request()->routeIs('projects') ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400' : '' }}">
                {{ __('Projects') }}
            </a>
            <a href="{{ route('competitions') }}"
               class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400 {{ request()->routeIs('competitions') ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400' : '' }}">
                {{ __('Competitions') }}
            </a>
            <a href="{{ route('resources') }}"
               class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400 {{ request()->routeIs('resources') ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400' : '' }}">
                {{ __('Resources') }}
            </a>
            <a href="{{ route('contact') }}"
               class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400 {{ request()->routeIs('contact') ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400' : '' }}">
                {{ __('Contact') }}
            </a>
            <a href="{{ route('join') }}"
               class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-700 hover:to-cyan-700 text-center mt-2">
                {{ __('Join Us') }}
            </a>
        </div>
    </div>
</header>

<!-- Add this script in your layout file if not already present -->
<script>
    function setAppearance(theme) {
        if (theme === 'dark') {
            document.documentElement.classList.add('dark');
            localStorage.theme = 'dark';
        } else if (theme === 'light') {
            document.documentElement.classList.remove('dark');
            localStorage.theme = 'light';
        } else {
            localStorage.removeItem('theme');
            if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
    }

    // Initialize theme on page load
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
</script>
