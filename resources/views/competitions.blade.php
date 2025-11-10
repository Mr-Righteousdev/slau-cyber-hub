<x-layouts.frontend.app>
    <x-slot name="title">Competitions - Cybersecurity & Innovations Club</x-slot>
    
    @section('styles')
    <style>
        .trophy-glow {
            filter: drop-shadow(0 0 20px rgba(251, 191, 36, 0.5));
        }
        .timeline-dot {
            background: linear-gradient(135deg, #3b82f6, #06b6d4);
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
        }
    </style>
    @endsection

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(168, 85, 247, 0.3) 2px, rgba(168, 85, 247, 0.3) 4px), repeating-linear-gradient(90deg, transparent, transparent 2px, rgba(168, 85, 247, 0.3) 2px, rgba(168, 85, 247, 0.3) 4px); background-size: 50px 50px;"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-block mb-6">
                        <span class="px-4 py-2 bg-purple-500/20 border border-purple-400/30 rounded-full text-sm font-medium text-purple-300 backdrop-blur-sm">
                            🏆 Competition Team
                        </span>
                    </div>
                    
                    <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                        We <span class="bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">Compete</span>
                    </h1>
                    
                    <p class="text-xl text-gray-300 leading-relaxed mb-8">
                        From picoCTF to national championships, we hunt flags and break challenges. Our team has 3+ years of CTF experience and podium finishes.
                    </p>
                    
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('join') }}" class="px-8 py-4 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 rounded-lg font-semibold shadow-lg shadow-purple-500/50 transform hover:scale-105 transition-all duration-200">
                            Join the Team
                        </a>
                        <a href="#upcoming" class="px-8 py-4 bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 rounded-lg font-semibold transition-all duration-200">
                            Upcoming Events
                        </a>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="bg-gradient-to-br from-purple-500/10 to-pink-500/10 backdrop-blur-lg border border-purple-400/30 rounded-2xl p-8 shadow-2xl">
                        <div class="text-center mb-6">
                            <div class="text-6xl trophy-glow mb-4">🥉</div>
                            <h3 class="text-2xl font-bold text-white">UCC CyberStars 2024</h3>
                            <p class="text-purple-300">National Podium Finish</p>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex justify-between p-3 bg-white/5 rounded-lg">
                                <span class="text-sm">Global Rank</span>
                                <span class="text-purple-400 font-bold">#87</span>
                            </div>
                            <div class="flex justify-between p-3 bg-white/5 rounded-lg">
                                <span class="text-sm">Team Score</span>
                                <span class="text-cyan-400 font-bold">12,450 pts</span>
                            </div>
                            <div class="flex justify-between p-3 bg-white/5 rounded-lg">
                                <span class="text-sm">Challenges Solved</span>
                                <span class="text-pink-400 font-bold">47/52</span>
                            </div>
                        </div>
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

    <!-- Upcoming Events -->
    <section id="upcoming" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Upcoming Competitions</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400">Mark your calendars for these exciting events</p>
            </div>
            
            <div class="relative">
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-purple-500 to-pink-500 hidden md:block"></div>
                
                @php
                    $events = [
                        ['date' => 'Nov 15, 2025', 'title' => 'SLU Internal CTF', 'desc' => 'Beginner-friendly CTF to recruit new talent. 20+ challenges across all categories.', 'type' => 'Internal'],
                        ['date' => 'Dec 8, 2025', 'title' => 'HackTheBox University CTF', 'desc' => 'International competition. Qualifying round for global finals.', 'type' => 'International'],
                        ['date' => 'Mar 12, 2026', 'title' => 'picoCTF 2026', 'desc' => 'Our 4th year competing. Aiming for top 50 global ranking.', 'type' => 'Global'],
                        ['date' => 'May 15, 2026', 'title' => 'DEF CON CTF Quals', 'desc' => 'The most prestigious CTF in the world. Our ultimate goal.', 'type' => 'Elite']
                    ];
                @endphp
                
                @foreach($events as $index => $event)
                <div class="relative mb-12 md:mb-16">
                    <div class="md:flex {{ $index % 2 == 0 ? '' : 'md:flex-row-reverse' }} items-center">
                        <div class="md:w-5/12">
                            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:border-purple-400 dark:hover:border-purple-400 transition-all duration-300">
                                <div class="flex justify-between items-start mb-3">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">{{ $event['title'] }}</h3>
                                    <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/50 text-purple-700 dark:text-purple-300 rounded-full text-sm">{{ $event['type'] }}</span>
                                </div>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $event['desc'] }}</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-purple-400 font-semibold">{{ $event['date'] }}</span>
                                    <button class="px-4 py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-lg text-sm transition">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="md:w-2/12 flex justify-center my-4 md:my-0">
                            <div class="timeline-dot w-4 h-4 rounded-full relative z-10"></div>
                        </div>
                        <div class="md:w-5/12"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Competition Archives -->
    <section class="py-20 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Competition History</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400">Our track record of excellence</p>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full bg-gray-800 rounded-xl overflow-hidden shadow-lg border border-gray-700">
                    <thead class="bg-gray-900">
                        <tr>
                            <th class="px-6 py-4 text-left text-purple-400 font-semibold">Competition</th>
                            <th class="px-6 py-4 text-left text-purple-400 font-semibold">Date</th>
                            <th class="px-6 py-4 text-left text-purple-400 font-semibold">Rank</th>
                            <th class="px-6 py-4 text-left text-purple-400 font-semibold">Team Size</th>
                            <th class="px-6 py-4 text-left text-purple-400 font-semibold">Writeup</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $history = [
                                ['comp' => 'UCC CyberStars 2024', 'date' => 'Oct 2024', 'rank' => '🥉 3rd', 'size' => '8', 'writeup' => '#'],
                                ['comp' => 'HackTheBox Uni CTF', 'date' => 'Sep 2024', 'rank' => '🥈 2nd', 'size' => '10', 'writeup' => '#'],
                                ['comp' => 'picoCTF 2024', 'date' => 'Mar 2024', 'rank' => '#87', 'size' => '15', 'writeup' => '#'],
                                ['comp' => 'CyberPatriot XVI', 'date' => 'Feb 2024', 'rank' => '🥇 1st', 'size' => '6', 'writeup' => '#'],
                                ['comp' => 'DEF CON Quals', 'date' => 'May 2023', 'rank' => '#156', 'size' => '12', 'writeup' => '#'],
                                ['comp' => 'UCC CyberStars 2023', 'date' => 'Oct 2023', 'rank' => '#7', 'size' => '8', 'writeup' => '#']
                            ];
                        @endphp
                        @foreach($history as $row)
                        <tr class="border-t border-gray-700 hover:bg-gray-700 transition">
                            <td class="px-6 py-4 text-white font-medium">{{ $row['comp'] }}</td>
                            <td class="px-6 py-4 text-gray-300">{{ $row['date'] }}</td>
                            <td class="px-6 py-4 font-bold text-yellow-400">{{ $row['rank'] }}</td>
                            <td class="px-6 py-4 text-gray-300">{{ $row['size'] }} members</td>
                            <td class="px-6 py-4">
                                <a href="{{ $row['writeup'] }}" class="text-purple-400 hover:text-purple-300 transition">View →</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- CTF Resources -->
    <section class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">CTF Resources</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400">Train like champions with our curated resources</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                @php
                    $resources = [
                        [
                            'title' => 'Beginner Track',
                            'icon' => '🎯',
                            'color' => 'blue',
                            'items' => ['picoCTF Practice', 'OverTheWire Bandit', 'TryHackMe Beginner', 'Our Workshop Videos', 'Security+ Study Guide']
                        ],
                        [
                            'title' => 'Advanced Track',
                            'icon' => '🚀',
                            'color' => 'purple',
                            'items' => ['HackTheBox VIP', 'Pwn.college', 'Shellphish How2Heap', 'Advanced Binary Exploitation', 'Kernel Exploitation Lab']
                        ],
                        [
                            'title' => 'Competition Prep',
                            'icon' => '🏆',
                            'color' => 'pink',
                            'items' => ['Previous Writeups', 'Challenge Archives', 'Team Practice Logs', 'Tool Configuration', 'Strategy Guides']
                        ]
                    ];
                @endphp
                
                @foreach($resources as $resource)
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg border border-gray-200 dark:border-gray-700 hover:border-{{ $resource['color'] }}-400 dark:hover:border-{{ $resource['color'] }}-400 transition-all duration-300">
                    <div class="text-5xl mb-4">{{ $resource['icon'] }}</div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">{{ $resource['title'] }}</h3>
                    <ul class="space-y-3">
                        @foreach($resource['items'] as $item)
                        <li class="flex items-center text-gray-600 dark:text-gray-400">
                            <svg class="w-5 h-5 text-{{ $resource['color'] }}-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                            </svg>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                    <button class="mt-6 w-full px-4 py-2 bg-{{ $resource['color'] }}-600 hover:bg-{{ $resource['color'] }}-700 text-white rounded-lg transition">
                        Access Resources
                    </button>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.frontend.app>