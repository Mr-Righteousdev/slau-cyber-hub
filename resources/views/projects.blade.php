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