<x-layouts.frontend.app>
    <x-slot name="title">Resources - Cybersecurity & Innovations Club</x-slot>
    
    @section('styles')
    <style>
        .resource-card {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.05) 0%, rgba(6, 182, 212, 0.05) 100%);
            transition: all 0.3s ease;
        }
        .resource-card:hover {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(6, 182, 212, 0.1) 100%);
            transform: translateY(-5px);
        }
    </style>
    @endsection

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-gray-900 via-cyan-900 to-gray-900 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(6, 182, 212, 0.3) 2px, rgba(6, 182, 212, 0.3) 4px), repeating-linear-gradient(90deg, transparent, transparent 2px, rgba(6, 182, 212, 0.3) 2px, rgba(6, 182, 212, 0.3) 4px); background-size: 50px 50px;"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="text-center">
                <div class="inline-block mb-6">
                    <span class="px-4 py-2 bg-cyan-500/20 border border-cyan-400/30 rounded-full text-sm font-medium text-cyan-300 backdrop-blur-sm">
                        📚 Knowledge Base
                    </span>
                </div>
                
                <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                    <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">Resources</span> Hub
                </h1>
                
                <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Curated learning materials, tools, and platforms to accelerate your cybersecurity journey from beginner to expert.
                </p>
                
                <div class="mt-8 flex justify-center">
                    <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg p-2 flex">
                        <button class="px-6 py-2 bg-cyan-500 text-white rounded-md transition">All</button>
                        <button class="px-6 py-2 text-gray-300 hover:text-white rounded-md transition">Beginner</button>
                        <button class="px-6 py-2 text-gray-300 hover:text-white rounded-md transition">Advanced</button>
                        <button class="px-6 py-2 text-gray-300 hover:text-white rounded-md transition">Tools</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="currentColor" class="text-gray-50 dark:text-gray-900"/>
            </svg>
        </div>
    </section>

    <!-- Resource Categories -->
    <section class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $categories = [
                        [
                            'title' => 'Learning Platforms',
                            'icon' => '🎯',
                            'color' => 'blue',
                            'resources' => [
                                ['name' => 'TryHackMe', 'desc' => 'Guided rooms for beginners', 'url' => '#'],
                                ['name' => 'HackTheBox', 'desc' => 'Advanced penetration testing labs', 'url' => '#'],
                                ['name' => 'picoCTF', 'desc' => 'Beginner-friendly CTF platform', 'url' => '#'],
                                ['name' => 'OverTheWire', 'desc' => 'Wargames for skill building', 'url' => '#']
                            ]
                        ],
                        [
                            'title' => 'Study Materials',
                            'icon' => '📚',
                            'color' => 'cyan',
                            'resources' => [
                                ['name' => 'Security+ Guide', 'desc' => 'Complete certification prep', 'url' => '#'],
                                ['name' => 'Web Hacking 101', 'desc' => 'Modern web exploitation', 'url' => '#'],
                                ['name' => 'Binary Exploitation', 'desc' => 'From buffer overflows to ROP', 'url' => '#'],
                                ['name' => 'Crypto Basics', 'desc' => 'Classical to modern cryptography', 'url' => '#']
                            ]
                        ],
                        [
                            'title' => 'Tools & Software',
                            'icon' => '🛠️',
                            'color' => 'purple',
                            'resources' => [
                                ['name' => 'Kali Linux', 'desc' => 'Penetration testing distro', 'url' => '#'],
                                ['name' => 'Burp Suite', 'desc' => 'Web proxy and scanner', 'url' => '#'],
                                ['name' => 'Ghidra', 'desc' => 'NSA reverse engineering tool', 'url' => '#'],
                                ['name' => 'Wireshark', 'desc' => 'Network protocol analyzer', 'url' => '#']
                            ]
                        ],
                        [
                            'title' => 'Writeups & Archives',
                            'icon' => '📝',
                            'color' => 'pink',
                            'resources' => [
                                ['name' => 'UCC CyberStars 2024', 'desc' => 'Our podium finish writeup', 'url' => '#'],
                                ['name' => 'picoCTF 2023', 'desc' => 'All challenge solutions', 'url' => '#'],
                                ['name' => 'Internal CTFs', 'desc' => 'Previous competition archives', 'url' => '#'],
                                ['name' => 'Weekly Challenges', 'desc' => 'Practice problems with solutions', 'url' => '#']
                            ]
                        ],
                        [
                            'title' => 'Video Tutorials',
                            'icon' => '🎥',
                            'color' => 'green',
                            'resources' => [
                                ['name' => 'Workshop Recordings', 'desc' => 'Past club workshop videos', 'url' => '#'],
                                ['name' => 'LiveOverflow', 'desc' => 'Binary exploitation series', 'url' => '#'],
                                ['name' => 'IppSec', 'desc' => 'HackTheBox walkthroughs', 'url' => '#'],
                                ['name' => 'John Hammond', 'desc' => 'CTF challenge solutions', 'url' => '#']
                            ]
                        ],
                        [
                            'title' => 'Community',
                            'icon' => '👥',
                            'color' => 'yellow',
                            'resources' => [
                                ['name' => 'Discord Server', 'desc' => 'Club communication hub', 'url' => '#'],
                                ['name' => 'GitHub Org', 'desc' => 'Open source projects', 'url' => '#'],
                                ['name' => 'CTFtime Team', 'desc' => 'Track our competition history', 'url' => '#'],
                                ['name' => 'Newsletter', 'desc' => 'Weekly security news roundup', 'url' => '#']
                            ]
                        ]
                    ];
                @endphp
                
                @foreach($categories as $category)
                <div class="resource-card bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-200 dark:border-gray-700">
                    <div class="flex items-center mb-6">
                        <div class="text-4xl mr-4">{{ $category['icon'] }}</div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $category['title'] }}</h3>
                    </div>
                    
                    <div class="space-y-4">
                        @foreach($category['resources'] as $resource)
                        <div class="flex items-start justify-between p-4 bg-gray-50 dark:bg-gray-900 rounded-lg hover:bg-{{ $category['color'] }}-50 dark:hover:bg-{{ $category['color'] }}-900/30 transition-all duration-200">
                            <div>
                                <div class="font-semibold text-gray-900 dark:text-white">{{ $resource['name'] }}</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">{{ $resource['desc'] }}</div>
                            </div>
                            <a href="{{ $resource['url'] }}" class="px-3 py-1 bg-{{ $category['color'] }}-100 dark:bg-{{ $category['color'] }}-900/50 text-{{ $category['color'] }}-700 dark:text-{{ $category['color'] }}-300 rounded text-xs hover:bg-{{ $category['color'] }}-200 dark:hover:bg-{{ $category['color'] }}-900/70 transition">
                                Access
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Quick Links -->
            <div class="mt-16 bg-gradient-to-r from-cyan-50 to-blue-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 border border-cyan-200 dark:border-cyan-800">
                <div class="text-center mb-6">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Quick Access</h3>
                    <p class="text-gray-600 dark:text-gray-400">Most requested resources by members</p>
                </div>
                
                <div class="grid md:grid-cols-4 gap-4">
                    @php
                        $quick_links = [
                            ['name' => 'Discord', 'icon' => '💬', 'color' => 'blue'],
                            ['name' => 'GitHub', 'icon' => '🐙', 'color' => 'gray'],
                            ['name' => 'Calendar', 'icon' => '📅', 'color' => 'cyan'],
                            ['name' => 'Drive', 'icon' => '📁', 'color' => 'green']
                        ];
                    @endphp
                    
                    @foreach($quick_links as $link)
                    <a href="#" class="flex flex-col items-center p-4 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 hover:border-{{ $link['color'] }}-400 dark:hover:border-{{ $link['color'] }}-400 transition-all duration-300">
                        <div class="text-3xl mb-2">{{ $link['icon'] }}</div>
                        <span class="font-medium text-gray-900 dark:text-white">{{ $link['name'] }}</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-layouts.frontend.app>