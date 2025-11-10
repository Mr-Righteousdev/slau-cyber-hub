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