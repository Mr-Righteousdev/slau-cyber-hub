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
