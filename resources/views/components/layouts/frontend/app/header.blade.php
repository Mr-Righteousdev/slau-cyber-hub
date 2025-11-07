<!-- Header -->
<header class="bg-white dark:bg-gray-800 shadow-sm z-20 border-b border-gray-200 dark:border-gray-700">
    <div class="flex items-center justify-between h-16 px-4">
        <!-- Left side: Logo and toggle -->
        <div class="flex items-center">       
            <div>
                logo
            </div>
            <div class="ml-4 font-semibold text-xl text-blue-600 dark:text-blue-400">{{ config('app.name') }}</div>
        </div>

        <!-- Middle Section: Nav links to different pages -->
        <div class="flex items-center space-x-4">
            <a href="{{ route('home') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200">{{ __('Home') }}</a>
            <a href="{{ route('about') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200">{{ __('About') }}</a>
            <a href="{{ route('contact') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200">{{ __('Contact') }}</a>
            <a href="{{ route('projects') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200">{{ __('Projects') }}</a>
            <a href="{{ route('competitions') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200">{{ __('Competitions') }}</a>
            <a href="{{ route('resources') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200">{{ __('Resources') }}</a>
            <a href="{{ route('join') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200">{{ __('Join') }}</a>
        </div>

        <!-- Right side: Search, notifications, profile -->
        <div class="flex items-center space-x-4">
            <!-- Profile -->
            <div class="relative">
                
                <button onclick="setAppearance('light')">Light</button>
                <button onclick="setAppearance('dark')">Dark</button>
                <button onclick="setAppearance('system')">System</button>
            </div>
        </div>
    </div>
</header>
