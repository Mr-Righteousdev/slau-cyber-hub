<x-layouts.frontend.app>
<section class="relative bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 text-white overflow-hidden">
    <!-- Animated Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(59, 130, 246, 0.3) 2px, rgba(59, 130, 246, 0.3) 4px), repeating-linear-gradient(90deg, transparent, transparent 2px, rgba(59, 130, 246, 0.3) 2px, rgba(59, 130, 246, 0.3) 4px); background-size: 50px 50px;"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-8">
                <div class="inline-block">
                    <span class="px-4 py-2 bg-blue-500/20 border border-blue-400/30 rounded-full text-sm font-medium text-blue-300 backdrop-blur-sm">
                        🥉 UCC CyberStars 2024 - 3rd Place
                    </span>
                </div>
                
                <h1 class="text-5xl md:text-6xl font-bold leading-tight">
                    Cybersecurity &
                    <span class="bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                        Innovations Club
                    </span>
                </h1>
                
                <p class="text-xl text-gray-300 leading-relaxed">
                    Building the next generation of cybersecurity professionals at St. Lawrence University. Join us in CTF competitions, hands-on projects, and cutting-edge security research.
                </p>
                
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('join') }}" class="px-8 py-4 bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-700 hover:to-cyan-700 rounded-lg font-semibold shadow-lg shadow-blue-500/50 transform hover:scale-105 transition-all duration-200">
                        Join the Club
                    </a>
                    <a href="{{ route('projects') }}" class="px-8 py-4 bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 rounded-lg font-semibold transition-all duration-200">
                        View Projects
                    </a>
                </div>
                
                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-white/10">
                    <div>
                        <div class="text-3xl font-bold text-blue-400">50+</div>
                        <div class="text-sm text-gray-400">Active Members</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-cyan-400">3+</div>
                        <div class="text-sm text-gray-400">Years Active</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-purple-400">15+</div>
                        <div class="text-sm text-gray-400">CTF Events</div>
                    </div>
                </div>
            </div>
            
            <!-- Right Content - Animated Card -->
            <div class="relative">
                <div class="relative bg-gradient-to-br from-blue-500/10 to-cyan-500/10 backdrop-blur-lg border border-blue-400/30 rounded-2xl p-8 shadow-2xl">
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-blue-500/20 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-cyan-500/20 rounded-full blur-2xl"></div>
                    
                    <div class="relative space-y-6">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-emerald-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-gray-400">Latest Achievement</div>
                                <div class="font-semibold">UCC CyberStars Competition</div>
                            </div>
                        </div>
                        
                        <div class="space-y-3">
                            <div class="flex items-center justify-between p-3 bg-white/5 rounded-lg">
                                <span class="text-sm">Network Security</span>
                                <span class="text-blue-400 font-semibold">95%</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-white/5 rounded-lg">
                                <span class="text-sm">Web Exploitation</span>
                                <span class="text-cyan-400 font-semibold">88%</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-white/5 rounded-lg">
                                <span class="text-sm">Cryptography</span>
                                <span class="text-purple-400 font-semibold">92%</span>
                            </div>
                        </div>
                        
                        <div class="pt-4 border-t border-white/10">
                            <div class="text-sm text-gray-400 mb-2">Active CTF Platforms</div>
                            <div class="flex space-x-2">
                                <span class="px-3 py-1 bg-blue-500/20 border border-blue-400/30 rounded-full text-xs">picoCTF</span>
                                <span class="px-3 py-1 bg-cyan-500/20 border border-cyan-400/30 rounded-full text-xs">HackTheBox</span>
                                <span class="px-3 py-1 bg-purple-500/20 border border-purple-400/30 rounded-full text-xs">TryHackMe</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bottom Wave -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="currentColor" class="text-gray-50 dark:text-gray-900"/>
        </svg>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                What We Do
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-400">
                Empowering students through hands-on cybersecurity education
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="group bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-200 dark:border-gray-700 hover:border-blue-400 dark:hover:border-blue-400">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">CTF Competitions</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Participate in Capture The Flag events, from picoCTF to international competitions. Sharpen your skills and compete with the best.
                </p>
            </div>
            
            <!-- Feature 2 -->
            <div class="group bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-200 dark:border-gray-700 hover:border-cyan-400 dark:hover:border-cyan-400">
                <div class="w-14 h-14 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">Hands-on Projects</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Build real-world security tools, develop exploits, and create innovative solutions to modern cybersecurity challenges.
                </p>
            </div>
            
            <!-- Feature 3 -->
            <div class="group bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-200 dark:border-gray-700 hover:border-purple-400 dark:hover:border-purple-400">
                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">Learning Resources</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Access curated tutorials, workshops, and mentorship from experienced members and industry professionals.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Recent Achievements -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Recent Achievements
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-400">
                Celebrating our victories and milestones
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Achievement 1 -->
            <div class="relative bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-700 dark:to-gray-900 rounded-2xl p-8 overflow-hidden border border-blue-200 dark:border-blue-800">
                <div class="absolute top-0 right-0 w-40 h-40 bg-blue-400/10 rounded-full -mr-20 -mt-20"></div>
                <div class="relative">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl flex items-center justify-center text-3xl shadow-lg">
                            🥉
                        </div>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">
                            2024
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">
                        UCC CyberStars Competition
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Secured 3rd place in the prestigious UCC CyberStars competition, competing against top universities across the region.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 rounded-full text-xs">Network Security</span>
                        <span class="px-3 py-1 bg-cyan-100 dark:bg-cyan-900/50 text-cyan-700 dark:text-cyan-300 rounded-full text-xs">Web Exploitation</span>
                        <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/50 text-purple-700 dark:text-purple-300 rounded-full text-xs">Forensics</span>
                    </div>
                </div>
            </div>
            
            <!-- Achievement 2 -->
            <div class="relative bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-700 dark:to-gray-900 rounded-2xl p-8 overflow-hidden border border-purple-200 dark:border-purple-800">
                <div class="absolute top-0 right-0 w-40 h-40 bg-purple-400/10 rounded-full -mr-20 -mt-20"></div>
                <div class="relative">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-purple-600 rounded-xl flex items-center justify-center text-3xl shadow-lg">
                            🚩
                        </div>
                        <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">
                            Ongoing
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">
                        picoCTF Champions
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        3 consecutive years of participation in picoCTF, consistently ranking in the top 10% globally with increasing scores each year.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/50 text-purple-700 dark:text-purple-300 rounded-full text-xs">Cryptography</span>
                        <span class="px-3 py-1 bg-pink-100 dark:bg-pink-900/50 text-pink-700 dark:text-pink-300 rounded-full text-xs">Binary Exploitation</span>
                        <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900/50 text-indigo-700 dark:text-indigo-300 rounded-full text-xs">Reverse Engineering</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-blue-600 to-cyan-600 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(255,255,255,0.3) 10px, rgba(255,255,255,0.3) 20px);"></div>
    </div>
    
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Ready to Start Your Cybersecurity Journey?
        </h2>
        <p class="text-xl text-blue-100 mb-8 leading-relaxed">
            Join a community of passionate students, learn from industry experts, and compete in exciting challenges. No prior experience required!
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('join') }}" class="px-8 py-4 bg-white text-blue-600 hover:bg-gray-100 rounded-lg font-semibold shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-200">
                Become a Member
            </a>
            <a href="{{ route('contact') }}" class="px-8 py-4 bg-white/10 hover:bg-white/20 backdrop-blur-sm border-2 border-white text-white rounded-lg font-semibold transition-all duration-200">
                Get in Touch
            </a>
        </div>
    </div>
</section>
</x-layouts.frontend.app>