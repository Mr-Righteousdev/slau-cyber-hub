Here are the pages using your established "Academic Cyberpunk" theme:

---

## **`resources/views/projects/index.blade.php`**
```blade
<x-layouts.frontend.app>
    <x-slot name="title">Projects - Cybersecurity & Innovations Club</x-slot>
    
    @section('styles')
    <style>
        .project-terminal {
            font-family: 'JetBrains Mono', monospace;
            background: linear-gradient(135deg, #0f1329 0%, #1a1f3a 100%);
            border: 1px solid rgba(59, 130, 246, 0.3);
        }
        .project-terminal::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 30px;
            background: rgba(26, 31, 58, 0.8);
            border-bottom: 1px solid rgba(59, 130, 246, 0.3);
        }
        .typewriter-delay {
            animation: typing 2s steps(30, end) 0.5s forwards, blink-caret 0.75s step-end infinite;
            overflow: hidden;
            white-space: nowrap;
            width: 0;
        }
    </style>
    @endsection

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(59, 130, 246, 0.3) 2px, rgba(59, 130, 246, 0.3) 4px), repeating-linear-gradient(90deg, transparent, transparent 2px, rgba(59, 130, 246, 0.3) 2px, rgba(59, 130, 246, 0.3) 4px); background-size: 50px 50px;"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="text-center">
                <div class="inline-block mb-6">
                    <span class="px-4 py-2 bg-blue-500/20 border border-blue-400/30 rounded-full text-sm font-medium text-blue-300 backdrop-blur-sm">
                        🔧 Active Development
                    </span>
                </div>
                
                <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                    Our <span class="bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">Projects</span>
                </h1>
                
                <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Real security tools, exploits, and research projects built by our members. From vulnerability scanners to custom CTF platforms.
                </p>
                
                <div class="mt-8">
                    <a href="#featured" class="px-8 py-4 bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-700 hover:to-cyan-700 rounded-lg font-semibold shadow-lg shadow-blue-500/50 transform hover:scale-105 transition-all duration-200">
                        Explore Projects
                    </a>
                </div>
            </div>
        </div>
        
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="currentColor" class="text-gray-50 dark:text-gray-900"/>
            </svg>
        </div>
    </section>

    <!-- Featured Projects -->
    <section id="featured" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Featured Projects</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400">Cutting-edge security tools developed by our team</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $projects = [
                        [
                            'title' => 'SLU-Scanner',
                            'desc' => 'Automated vulnerability scanner built for educational networks. Detects 50+ CVEs with minimal false positives.',
                            'tags' => ['Python', 'Nmap', 'CVE'],
                            'status' => 'Active'
                        ],
                        [
                            'title' => 'NovaCTF Platform',
                            'desc' => 'Custom CTF platform with Docker-based challenges. Used for our internal competitions and workshops.',
                            'tags' => ['Laravel', 'Docker', 'Vue.js'],
                            'status' => 'Beta'
                        ],
                        [
                            'title' => 'IoT Malware Sandbox',
                            'desc' => 'Isolated environment for analyzing IoT malware samples. Supports ARM/MIPS architectures.',
                            'tags' => ['QEMU', 'Ghidra', 'Python'],
                            'status' => 'Research'
                        ],
                        [
                            'title' => 'PhishGuard',
                            'desc' => 'ML-powered phishing detection browser extension. 96% accuracy on real-world datasets.',
                            'tags' => ['TensorFlow', 'JavaScript', 'ML'],
                            'status' => 'Active'
                        ],
                        [
                            'title' => 'CryptoCrack',
                            'desc' => 'Modular cryptography toolkit for CTF challenges. Supports classical and modern ciphers.',
                            'tags' => ['Go', 'Crypto', 'CLI'],
                            'status' => 'Active'
                        ],
                        [
                            'title' => 'Red Team Toolkit',
                            'desc' => 'Post-exploitation framework for simulated attacks. Used in purple team exercises.',
                            'tags' => ['C#', 'PowerShell', 'AD'],
                            'status' => 'Internal'
                        ]
                    ];
                @endphp
                
                @foreach($projects as $project)
                <div class="group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-200 dark:border-gray-700 hover:border-blue-400 dark:hover:border-blue-400 transform hover:scale-105">
                    <div class="project-terminal relative p-6 h-64">
                        <div class="absolute top-0 left-0 right-0 h-8 flex items-center px-4 space-x-2">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                            <span class="ml-4 text-gray-400 text-sm">{{ strtolower($project['title']) }}.py</span>
                        </div>
                        <div class="mt-10 text-green-400 text-sm">
                            <div class="typewriter-delay">$ ./{{ strtolower($project['title']) }} --help</div>
                            <div class="mt-4 text-gray-300 text-xs leading-relaxed opacity-0 animate-fade-in" style="animation-delay: 2.5s; animation-fill-mode: forwards;">
                                > {{ $project['desc'] }}<br><br>
                                > Status: <span class="text-yellow-400">{{ $project['status'] }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ $project['title'] }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $project['desc'] }}</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach($project['tags'] as $tag)
                            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 rounded-full text-xs">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="px-3 py-1 text-xs rounded-full {{ $project['status'] == 'Active' ? 'bg-green-100 dark:bg-green-900/50 text-green-700 dark:text-green-300' : ($project['status'] == 'Beta' ? 'bg-yellow-100 dark:bg-yellow-900/50 text-yellow-700 dark:text-yellow-300' : 'bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300') }}">
                                {{ $project['status'] }}
                            </span>
                            <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline text-sm font-medium">View Repo →</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="text-center mt-16">
                <div class="bg-gradient-to-r from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 border border-blue-200 dark:border-blue-800">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Have a Project Idea?</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">We fund and mentor student-led security research projects.</p>
                    <a href="{{ route('contact') }}" class="px-8 py-4 bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-700 hover:to-cyan-700 rounded-lg font-semibold text-white transition-all duration-300">
                        Pitch Your Idea
                    </a>
                </div>
            </div>
        </div>
    </section>

    @section('scripts')
    <script>
        // Add fade-in animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fade-in {
                from { opacity: 0; }
                to { opacity: 1; }
            }
            .animate-fade-in {
                animation: fade-in 0.5s ease-in-out;
            }
        `;
        document.head.appendChild(style);
    </script>
    @endsection
</x-layouts.frontend.app>
```

---

## **`resources/views/competitions/index.blade.php`**
```blade
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
```

---

## **`resources/views/resources/index.blade.php`**
```blade
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
```

---

## **`resources/views/contact/index.blade.php`**
```blade
<x-layouts.frontend.app>
    <x-slot name="title">Contact - Cybersecurity & Innovations Club</x-slot>
    
    @section('styles')
    <style>
        .contact-glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .map-placeholder {
            background: linear-gradient(135deg, #3b82f6 0%, #06b6d4 100%);
            position: relative;
            overflow: hidden;
        }
        .map-placeholder::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(255,255,255,0.1) 10px, rgba(255,255,255,0.1) 20px);
        }
    </style>
    @endsection

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-gray-900 via-green-900 to-gray-900 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(34, 197, 94, 0.3) 2px, rgba(34, 197, 94, 0.3) 4px), repeating-linear-gradient(90deg, transparent, transparent 2px, rgba(34, 197, 94, 0.3) 2px, rgba(34, 197, 94, 0.3) 4px); background-size: 50px 50px;"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="text-center">
                <div class="inline-block mb-6">
                    <span class="px-4 py-2 bg-green-500/20 border border-green-400/30 rounded-full text-sm font-medium text-green-300 backdrop-blur-sm">
                        📞 Get in Touch
                    </span>
                </div>
                
                <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                    Let's <span class="bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">Connect</span>
                </h1>
                
                <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Have questions about joining, sponsoring, or collaborating? We're here to help secure the future.
                </p>
            </div>
        </div>
        
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="currentColor" class="text-gray-50 dark:text-gray-900"/>
            </svg>
        </div>
    </section>

    <!-- Contact Methods -->
    <section class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                @php
                    $methods = [
                        ['icon' => '📧', 'title' => 'Email', 'detail' => 'cyber@slu.ca', 'action' => 'mailto:cyber@slu.ca', 'color' => 'blue'],
                        ['icon' => '💬', 'title' => 'Discord', 'detail' => 'Join our server', 'action' => '#', 'color' => 'purple'],
                        ['icon' => '📍', 'title' => 'Location', 'detail' => 'Madill Hall 205', 'action' => '#', 'color' => 'green'],
                        ['icon' => '🐦', 'title' => 'Twitter', 'detail' => '@SLUCyberClub', 'action' => '#', 'color' => 'cyan']
                    ];
                @endphp
                
                @foreach($methods as $method)
                <a href="{{ $method['action'] }}" class="group contact-glass rounded-2xl p-6 text-center hover:bg-{{ $method['color'] }}-500/20 transition-all duration-300 transform hover:scale-105">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">{{ $method['icon'] }}</div>
                    <h3 class="text-xl font-bold text-white mb-2">{{ $method['title'] }}</h3>
                    <p class="text-gray-300 group-hover:text-white transition">{{ $method['detail'] }}</p>
                </a>
                @endforeach
            </div>
            
            <!-- Contact Form & Map -->
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <!-- Contact Form -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg border border-gray-200 dark:border-gray-700">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Send us a Message</h2>
                    
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">First Name</label>
                                <input type="text" class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-gray-900 dark:text-white transition">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Last Name</label>
                                <input type="text" class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-gray-900 dark:text-white transition">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-gray-900 dark:text-white transition">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Subject</label>
                            <select class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-gray-900 dark:text-white transition">
                                <option>General Inquiry</option>
                                <option>Membership Question</option>
                                <option>Sponsorship Opportunity</option>
                                <option>Collaboration Proposal</option>
                                <option>Media Request</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Message</label>
                            <textarea rows="6" class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-gray-900 dark:text-white transition" placeholder="Tell us more about your inquiry..."></textarea>
                        </div>
                        
                        <button type="submit" class="w-full px-8 py-4 bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white font-semibold rounded-lg shadow-lg transform hover:scale-105 transition-all duration-200">
                            Send Message
                        </button>
                    </form>
                    
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-4 text-center">
                        We typically respond within 24 hours
                    </p>
                </div>
                
                <!-- Map & Meeting Info -->
                <div class="space-y-8">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg border border-gray-200 dark:border-gray-700">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Meeting Location</h3>
                        <div class="map-placeholder rounded-lg h-64 mb-4 flex items-center justify-center text-white">
                            <div class="text-center">
                                <div class="text-6xl mb-4">📍</div>
                                <p class="text-xl font-semibold">Madill Hall 205</p>
                                <p>St. Lawrence University</p>
                            </div>
                        </div>
                        <div class="space-y-2 text-gray-600 dark:text-gray-400">
                            <p class="flex items-center"><span class="text-green-400 mr-2">⏰</span> Tuesdays & Thursdays 6-8 PM</p>
                            <p class="flex items-center"><span class="text-green-400 mr-2">🚪</span> Open to all SLU students</p>
                            <p class="flex items-center"><span class="text-green-400 mr-2">💻</span> Bring your laptop</p>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 border border-green-200 dark:border-green-800">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">FAQ</h3>
                        <div class="space-y-4">
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">Do I need experience to join?</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">No! We welcome all skill levels.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">How do I become a sponsor?</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Email us at sponsor@slu.ca for our deck.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">Can non-SLU students attend?</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Workshops are open to all, but competitions require SLU enrollment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.frontend.app>
```

---

## **`resources/views/join/index.blade.php`**
```blade
<x-layouts.frontend.app>
    <x-slot name="title">Join Us - Cybersecurity & Innovations Club</x-slot>
    
    @section('styles')
    <style>
        .benefit-card {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.05) 0%, rgba(6, 182, 212, 0.05) 100%);
            transition: all 0.3s ease;
        }
        .benefit-card:hover {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(6, 182, 212, 0.1) 100%);
            transform: translateY(-8px);
        }
        .role-badge {
            background: linear-gradient(135deg, #3b82f6, #06b6d4);
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
    </style>
    @endsection

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-gray-900 via-blue-900 to-cyan-900 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(59, 130, 246, 0.3) 2px, rgba(59, 130, 246, 0.3) 4px), repeating-linear-gradient(90deg, transparent, transparent 2px, rgba(6, 182, 212, 0.3) 2px, rgba(6, 182, 212, 0.3) 4px); background-size: 50px 50px;"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-block mb-6">
                        <span class="px-4 py-2 bg-blue-500/20 border border-blue-400/30 rounded-full text-sm font-medium text-blue-300 backdrop-blur-sm">
                            🚀 Open for All
                        </span>
                    </div>
                    
                    <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                        Join Our <span class="bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">Mission</span>
                    </h1>
                    
                    <p class="text-xl text-gray-300 leading-relaxed mb-8">
                        No experience required. Whether you're a complete beginner or a seasoned hacker, there's a place for you in our community.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex items-center text-lg">
                            <span class="text-green-400 mr-3">✓</span>
                            <span>Free membership for all SLU students</span>
                        </div>
                        <div class="flex items-center text-lg">
                            <span class="text-green-400 mr-3">✓</span>
                            <span>Access to premium tools and labs</span>
                        </div>
                        <div class="flex items-center text-lg">
                            <span class="text-green-400 mr-3">✓</span>
                            <span>Weekly mentorship and training</span>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <a href="#application" class="px-8 py-4 bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-700 hover:to-cyan-700 rounded-lg font-semibold shadow-lg shadow-blue-500/50 transform hover:scale-105 transition-all duration-200 inline-block">
                            Apply Now
                        </a>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="bg-gradient-to-br from-blue-500/10 to-cyan-500/10 backdrop-blur-lg border border-blue-400/30 rounded-2xl p-8 shadow-2xl">
                        <h3 class="text-2xl font-bold text-white mb-6 text-center">Member Testimonial</h3>
                        <div class="text-center mb-6">
                            <img src="https://i.pravatar.cc/150?img=20" alt="Member" class="w-20 h-20 rounded-full mx-auto mb-4 border-2 border-cyan-400">
                            <p class="text-cyan-300 font-semibold">Alex Chen</p>
                            <p class="text-sm text-gray-400">President, 4th Year CS</p>
                        </div>
                        <blockquote class="text-gray-300 italic text-center">
                            "Joining this club was the best decision I made at SLU. I went from zero knowledge to competing nationally in just one year."
                        </blockquote>
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

    <!-- Benefits -->
    <section class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Membership Benefits</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400">What you get as a club member</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $benefits = [
                        ['icon' => '🏆', 'title' => 'Compete', 'desc' => 'Represent SLU in CTFs from local to international levels', 'color' => 'blue'],
                        ['icon' => '💼', 'title' => 'Career Prep', 'desc' => 'Resume reviews, mock interviews, and internship connections', 'color' => 'cyan'],
                        ['icon' => '📚', 'title' => 'Training', 'desc' => 'Weekly workshops, mentorship, and hands-on labs', 'color' => 'purple'],
                        ['icon' => '💻', 'title' => 'Tools', 'desc' => 'Access to HTB VIP, TryHackMe, and custom infrastructure', 'color' => 'pink'],
                        ['icon' => '🤝', 'title' => 'Networking', 'desc' => 'Connect with industry professionals and alumni', 'color' => 'green'],
                        ['icon' => '🎓', 'title' => 'Certifications', 'desc' => 'Study groups for Security+, CEH, OSCP and more', 'color' => 'yellow']
                    ];
                @endphp
                
                @foreach($benefits as $benefit)
                <div class="benefit-card bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg border border-gray-200 dark:border-gray-700 text-center">
                    <div class="text-6xl mb-4 transform group-hover:scale-110 transition">{{ $benefit['icon'] }}</div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">{{ $benefit['title'] }}</h3>
                    <p class="text-gray-600 dark:text-gray-400">{{ $benefit['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Application Form -->
    <section id="application" class="py-20 bg-white dark:bg-gray-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-50 dark:bg-gray-900 rounded-2xl p-8 shadow-lg border border-gray-200 dark:border-gray-700">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Membership Application</h2>
                    <p class="text-gray-600 dark:text-gray-400">Fill out the form below and we'll get back to you within 48 hours</p>
                </div>
                
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Full Name *</label>
                            <input type="text" required class="w-full px-4 py-3 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-900 dark:text-white transition">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">SLU Email *</label>
                            <input type="email" required class="w-full px-4 py-3 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-900 dark:text-white transition">
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Program *</label>
                            <select required class="w-full px-4 py-3 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-900 dark:text-white transition">
                                <option>Computer Science</option>
                                <option>Information Technology</option>
                                <option>Software Engineering</option>
                                <option>Mathematics</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Year of Study *</label>
                            <select required class="w-full px-4 py-3 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-900 dark:text-white transition">
                                <option>1st Year</option>
                                <option>2nd Year</option>
                                <option>3rd Year</option>
                                <option>4th Year</option>
                                <option>Graduate</option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Experience Level *</label>
                        <div class="grid md:grid-cols-2 gap-4">
                            <label class="flex items-center p-4 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg cursor-pointer hover:border-blue-500 transition">
                                <input type="radio" name="experience" value="beginner" class="text-blue-600 focus:ring-blue-500">
                                <span class="ml-3 text-gray-900 dark:text-white">Complete Beginner</span>
                            </label>
                            <label class="flex items-center p-4 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg cursor-pointer hover:border-blue-500 transition">
                                <input type="radio" name="experience" value="some" class="text-blue-600 focus:ring-blue-500">
                                <span class="ml-3 text-gray-900 dark:text-white">Some Experience (TryHackMe, etc.)</span>
                            </label>
                            <label class="flex items-center p-4 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg cursor-pointer hover:border-blue-500 transition">
                                <input type="radio" name="experience" value="intermediate" class="text-blue-600 focus:ring-blue-500">
                                <span class="ml-3 text-gray-900 dark:text-white">Intermediate (CTF Player)</span>
                            </label>
                            <label class="flex items-center p-4 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg cursor-pointer hover:border-blue-500 transition">
                                <input type="radio" name="experience" value="advanced" class="text-blue-600 focus:ring-blue-500">
                                <span class="ml-3 text-gray-900 dark:text-white">Advanced (Can Mentor)</span>
                            </label>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Areas of Interest (Select all that apply)</label>
                        <div class="grid md:grid-cols-3 gap-4">
                            @php
                                $interests = ['Web Security', 'Binary Exploitation', 'Cryptography', 'Reverse Engineering', 'Network Security', 'Malware Analysis', 'Forensics', 'IoT Security', 'Cloud Security', 'OSINT', 'Hardware Hacking', 'Mobile Security'];
                            @endphp
                            @foreach($interests as $interest)
                            <label class="flex items-center p-3 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg cursor-pointer hover:border-cyan-500 transition">
                                <input type="checkbox" class="text-cyan-600 focus:ring-cyan-500 rounded">
                                <span class="ml-3 text-sm text-gray-900 dark:text-white">{{ $interest }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Why do you want to join? (Optional)</label>
                        <textarea rows="4" class="w-full px-4 py-3 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-900 dark:text-white transition" placeholder="Tell us about your interest in cybersecurity..."></textarea>
                    </div>
                    
                    <div class="bg-blue-50 dark:bg-blue-900/30 border border-blue-200 dark:border-blue-800 rounded-lg p-4">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                            </svg>
                            <div class="text-sm text-blue-800 dark:text-blue-200">
                                <p class="font-semibold mb-1">Pro Tip:</p>
                                <p>Don't worry if you're a beginner! Our training program is designed to take you from zero to hero.</p>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="w-full px-8 py-4 bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-700 hover:to-cyan-700 text-white font-semibold rounded-lg shadow-lg transform hover:scale-105 transition-all duration-200">
                        Submit Application
                    </button>
                </form>
            </div>
        </div>
    </section>
</x-layouts.frontend.app>
```

---

### 📌 Implementation Notes:

1. **Routes**: Add these to `routes/web.php`:
```php
Route::view('/projects', 'projects.index')->name('projects');
Route::view('/competitions', 'competitions.index')->name('competitions');
Route::view('/resources', 'resources.index')->name('resources');
Route::view('/contact', 'contact.index')->name('contact');
Route::view('/join', 'join.index')->name('join');
```

2. **Layout**: Ensure your `layouts/frontend/app.blade.php` yields styles and scripts:
```blade
<head>
    ...
    @stack('styles')
</head>
<body>
    ...
    {{ $slot }}
    @stack('scripts')
</body>
```

3. **Dark Mode**: All pages support dark mode via Tailwind's `dark:` prefix. Make sure `darkMode: 'class'` is set in `tailwind.config.js`.

4. **Interactive Elements**: Copy the JavaScript from the home page for consistent animations (counters, particles, etc.)

5. **Images**: Replace placeholder avatars with actual team photos. Use the club's real Discord/LinkedIn/GitHub links.

The design maintains the "Academic Cyberpunk" aesthetic throughout all pages with consistent animations, glassmorphism effects, and neon accents. Each page follows the same visual rhythm while serving its specific purpose.


<x-layouts.frontend.app>
    <x-slot name="title">Home - Cybersecurity & Innovations Club</x-slot>
    
    @section('styles')
    <style>
        .hero-bg {
            background: radial-gradient(ellipse at center, #0a0e27 0%, #050714 70%);
            position: relative;
            overflow: hidden;
        }
        .hero-bg::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: 
                repeating-linear-gradient(0deg, rgba(0, 242, 254, 0.03) 0px, transparent 1px, transparent 2px, rgba(0, 242, 254, 0.03) 3px);
            background-size: 100% 4px;
            animation: scan 8s linear infinite;
        }
        @keyframes scan {
            0% { transform: translateY(0); }
            100% { transform: translateY(12px); }
        }
        .glow-text {
            text-shadow: 0 0 20px rgba(0, 242, 254, 0.5);
        }
        .stat-card {
            background: rgba(10, 14, 39, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 242, 254, 0.2);
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            border-color: rgba(0, 242, 254, 0.5);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 242, 254, 0.1);
        }
        .achievement-badge {
            background: linear-gradient(135deg, #ff00ff, #00f2fe);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .terminal-window {
            background: #0f1329;
            border: 1px solid #333;
            border-radius: 8px;
            overflow: hidden;
        }
        .terminal-header {
            background: #1a1f3a;
            padding: 8px 16px;
            border-bottom: 1px solid #333;
            font-family: 'JetBrains Mono', monospace;
            font-size: 14px;
        }
        .terminal-body {
            padding: 16px;
            font-family: 'JetBrains Mono', monospace;
            color: #00ff9d;
        }
        .typewriter {
            overflow: hidden;
            border-right: 2px solid #00f2fe;
            white-space: nowrap;
            animation: typing 3s steps(40, end), blink-caret 0.75s step-end infinite;
        }
        @keyframes typing { from { width: 0 } to { width: 100% } }
        @keyframes blink-caret { 50% { border-color: transparent } }
    </style>
    @endsection

    <!-- Hero Section -->
    <section class="hero-bg min-h-screen flex items-center justify-center relative">
        <div class="container mx-auto px-6 text-center z-10">
            <div class="mb-8">
                <h1 class="text-6xl md:text-8xl font-bold glow-text text-cyan-400 mb-4">
                    <span class="typewriter">Cybersecurity & Innovations Club</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto">
                    St. Lawrence University's premier offensive & defensive security team
                </p>
            </div>
            
            <!-- Achievement Banner -->
            <div class="bg-gradient-to-r from-purple-600 to-cyan-600 p-4 rounded-lg mb-8 inline-block">
                <p class="text-white text-lg font-semibold">
                    🏆 UCC CyberStars 2025 - 3rd Place National Champions | 3+ Years picoCTF Excellence
                </p>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('join') }}" class="bg-cyan-500 hover:bg-cyan-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105">
                    Join the Team
                </a>
                <a href="{{ route('competitions') }}" class="border-2 border-cyan-500 text-cyan-400 hover:bg-cyan-500 hover:text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300">
                    View Our CTFs
                </a>
            </div>
        </div>
        
        <!-- Floating particles -->
        <div class="absolute inset-0" id="particles"></div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="stat-card p-6 rounded-lg text-center">
                    <div class="text-4xl font-bold text-cyan-400 mb-2" data-count="3">0</div>
                    <p class="text-gray-400">Years picoCTF</p>
                </div>
                <div class="stat-card p-6 rounded-lg text-center">
                    <div class="text-4xl font-bold text-purple-400 mb-2" data-count="3">0</div>
                    <p class="text-gray-400">UCC CyberStars Rank</p>
                </div>
                <div class="stat-card p-6 rounded-lg text-center">
                    <div class="text-4xl font-bold text-green-400 mb-2" data-count="150">0</div>
                    <p class="text-gray-400">Active Members</p>
                </div>
                <div class="stat-card p-6 rounded-lg text-center">
                    <div class="text-4xl font-bold text-yellow-400 mb-2" data-count="12">0</div>
                    <p class="text-gray-400">Competitions/Year</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12 glow-text">Featured Projects</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach(['Vulnerability Scanner', 'CTF Platform', 'IoT Security Lab'] as $project)
                <div class="bg-gray-800 p-6 rounded-lg border border-gray-700 hover:border-cyan-500 transition-all duration-300">
                    <div class="terminal-window mb-4">
                        <div class="terminal-header flex items-center space-x-2">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                            <span class="ml-4 text-gray-400">{{ strtolower($project) }}.py</span>
                        </div>
                        <div class="terminal-body text-sm">
                            $ python3 {{ strtolower($project) }}.py<br>
                            > Initializing...<br>
                            > Loading modules...<br>
                            > Ready.
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">{{ $project }}</h3>
                    <p class="text-gray-400">Cutting-edge security research project by our members.</p>
                    <a href="{{ route('projects') }}" class="text-cyan-400 hover:text-cyan-300 mt-4 inline-block">Learn more →</a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-r from-gray-900 to-gray-800">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-4">Ready to Hack & Defend?</h2>
            <p class="text-xl text-gray-300 mb-8">No experience required - just curiosity and determination</p>
            <a href="{{ route('join') }}" class="bg-gradient-to-r from-purple-500 to-cyan-500 hover:from-purple-600 hover:to-cyan-600 text-white px-10 py-4 rounded-lg font-semibold text-xl transition-all duration-300 transform hover:scale-105">
                Apply Now
            </a>
        </div>
    </section>

    @section('scripts')
    <script>
        // Animated counters
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('[data-count]');
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-count'));
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;
                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        counter.textContent = target;
                        clearInterval(timer);
                    } else {
                        counter.textContent = Math.floor(current);
                    }
                }, 16);
            });
        });

        // Simple particle effect
        const particles = document.getElementById('particles');
        for (let i = 0; i < 50; i++) {
            const particle = document.createElement('div');
            particle.style.position = 'absolute';
            particle.style.width = '2px';
            particle.style.height = '2px';
            particle.style.backgroundColor = 'rgba(0, 242, 254, 0.5)';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.top = Math.random() * 100 + '%';
            particle.style.borderRadius = '50%';
            particle.style.animation = `float ${5 + Math.random() * 10}s infinite ease-in-out`;
            particles.appendChild(particle);
        }
        
        // Add float animation to stylesheet
        const style = document.createElement('style');
        style.textContent = `
            @keyframes float {
                0%, 100% { transform: translateY(0px) translateX(0px); opacity: 0; }
                10% { opacity: 1; }
                90% { opacity: 1; }
                100% { transform: translateY(-${window.innerHeight}px) translateX(${Math.random() * 100 - 50}px); opacity: 0; }
            }
        `;
        document.head.appendChild(style);
    </script>
    @endsection

</x-layouts.frontend.app>
