### Here are the **Pages** using the same layout and theme as your Home page  

Below you will find the code for **Projects, Competitions, Resources, Contact & Join Us** pages.  
All pages use the same `<x:layouts.frontend.app>` layout.

---

## **📂 Projects Page**  `resources/views/frontend/projects.blade.php`

```blade
<x:layouts.frontend.app>
    @section('title', 'Projects')
    @section('description', 'Explore the cybersecurity projects developed by our club members.')

    @section('content')

        <!-- Hero Section -->
        <section class="relative bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 text-white overflow-hidden py-20 md:py-32">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0" style="background-image: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(59, 130, 246, 0.3) 2px, rgba(59, 130, 246, 0.3) 4px), repeating-linear-gradient(90deg, transparent, transparent 2px, rgba(59, 130, 246, 0.3) 2px, rgba(59, 130, 246, 0.3) 4px); background-size: 50px 50px;"></div>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-5xl md:text-6xl font-bold leading-tight">
                        Our 
                        <span class="bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">Projects</span>
                    </h1>
                    <p class="text-xl text-gray-300 mt-4 max-w-3xl mx-auto">
                        Innovative solutions developed by our members to real world security problems.
                    </p>
                </div>
            </div>
        </section>

        <!-- Featured Projects -->
        <section class="py-20 bg-gray-50 dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">Featured Projects</h2>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    {{-- Project 1 --}}
                    <div class="group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-200 dark:border-gray-700 hover:border-blue-400 dark:hover:border-blue-400">
                        <img src="/assets/projects/project1.jpg" alt="Project 1" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">SecureAuth</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">
                                A multi-factor authentication system built to protect web applications from credential stuffing attacks.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300 rounded text-xs">Laravel</span>
                                <span class="px-2 py-1 bg-cyan-100 text-cyan-800 dark:bg-cyan-900 dark:text-cyan-300 rounded text-xs">PHP</span>
                                <span class="px-2 py-1 bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-300 rounded text-xs">Security</span>
                            </div>
                            <a href="#" class="text-blue-400 hover:text-blue-600 font-semibold flex items-center gap-1">
                                View Details <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></path></svg>
                            </a>
                        </div>
                    </div>

                    {{-- Project 2 --}}
                    <div class="group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-200 dark:border-gray-700 hover:border-cyan-400 dark:hover:border-cyan-400">
                        <img src="/assets/projects/project2.jpg" alt="Project 2" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Malware Analyzer</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">
                                A sandbox environment to safely execute and analyze suspicious files.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300 rounded text-xs">Python</span>
                                <span class="px-2 py-1 bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300 rounded text-xs">Malware</span>
                                <span class="px-2 py-1 bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300 rounded text-xs">Sandbox</span>
                            </div>
                            <a href="#" class="text-cyan-400 hover:text-cyan-600 font-semibold flex items-center gap-1">
                                View Details <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></path></svg>
                            </a>
                        </div>
                    </div>

                    {{-- Project 3 --}}
                    <div class="group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-200 dark:border-gray-700 hover:border-purple-400 dark:hover:border-purple-400">
                        <img src="/assets/projects/project3.jpg" alt="Project 3" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Network Intrusion Detector</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">
                                Real‑time network traffic analyzer that detects suspicious activity.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-300 rounded text-xs">Scapy</span>
                                <span class="px-2 py-1 bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-300 rounded text-xs">Network</span>
                            </div>
                            <a href="#" class="text-purple-400 hover:text-purple-600 font-semibold flex items-center gap-1">
                                View Details <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Past Projects Gallery -->
        <section class="py-20 bg-white dark:bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">Past Projects Gallery</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <img src="/assets/projects/gallery1.jpg" alt="Gallery" class="w-full h-32 object-cover rounded-lg hover:scale-105 transition-transform cursor-pointer">
                    <img src="/assets/projects/gallery2.jpg" alt="Gallery" class="w-full h-32 object-cover rounded-lg hover:scale-105 transition-transform cursor-pointer">
                    <img src="/assets/projects/gallery3.jpg" alt="Gallery" class="w-full h-32 object-cover rounded-lg hover:scale-105 transition-transform cursor-pointer">
                    <img src="/assets/projects/gallery4.jpg" alt="Gallery" class="w-full h-32 object-cover rounded-lg hover:scale-105 transition-transform cursor-pointer">
                    <img src="/assets/projects/gallery5.jpg" alt="Gallery" class="w-full h-32 object-cover rounded-lg hover:scale-105 transition-transform cursor-pointer">
                    <img src="/assets/projects/gallery6.jpg" alt="Gallery" class="w-full h-32 object-cover rounded-lg hover:scale-105 transition-transform cursor-pointer">
                    <img src="/assets/projects/gallery7.jpg" alt="Gallery" class="w-full h-32 object-cover rounded-lg hover:scale-105 transition-transform cursor-pointer">
                    <img src="/assets/projects/gallery8.jpg" alt="Gallery" class="w-full h-32 object-cover rounded-lg hover:scale-105 transition-transform cursor-pointer">
                </div>
            </div>
        </section>

    @endsection
</x:layouts.frontend.app>
```

---

## **🏆 Competitions Page**  `resources/views/frontend/competitions.blade.php`

```blade
<x:layouts.frontend.app>
@section('title', 'Competitions')
@section('description', 'Our competition results and upcoming CTF events.')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900 text-white overflow-hidden py-20 md:py-32">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(124, 58, 237, 0.3) 10px, rgba(124, 58, 237, 0.3) 20px); background-size: 50px 50px;"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-6xl font-bold leading-tight">
            Competitions & 
            <span class="bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">CTFs</span>
        </h1>
        <p class="text-xl text-gray-300 mt-4 max-w-3xl mx-auto">
            Follow our competition journey, see our results and join our upcoming events.
        </p>
    </div>
</section>

<!-- Upcoming Events -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">Upcoming Events</h2>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach([1,2,3] as $event)
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:border-purple-400 dark:hover:border-purple-400 transition-all duration-300">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h2.01m7.99 0h2m-2 4h2m-4-4h2m-4 0h2m-3 10h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z"/></path></svg>
                    </div>
                    <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-300 rounded-full text-xs font-medium">
                        CTF
                    </span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">picoCTF Practice #{{ $event }}</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-4">
                    Weekly practice session for all members. Bring your laptop and join us!
                </p>
                <div class="flex justify-between items-center">
                    <p class="text-sm text-gray-500 dark:text-gray-400">📅 2024-12-{{ 10 + $event }}</p>
                    <a href="#" class="text-purple-400 hover:text-purple-600 font-semibold">Register</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Results & Highlights -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">Competition Results</h2>
        
        <div class="overflow-x-auto">
            <table class="w-full border-separate border-spacing-0 rounded-lg overflow-hidden table-auto">
                <thead class="bg-gray-100 dark:bg-gray-700">
                    <tr>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-900 dark:text-white">Competition</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-900 dark:text-white">Date</th>
                        <th class="py-3 px-4 text-center text-sm font-semibold text-gray-900 dark:text-white">Position</th>
                        <th class="py-3 px-4 text-center text-sm font-semibold text-gray-900 dark:text-white">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-750">
                        <td class="py-4 px-4">UCC CyberStars 2024</td>
                        <td class="py-4 px-4">Oct 2024</td>
                        <td class="py-4 px-4 text-center text-yellow-600 font-bold">🥉 3rd</td>
                        <td class="py-4 px-4 text-center"><a href="#" class="text-purple-500 hover:underline">View Report</a></td>
                    </tr>
                    <tr class="border-t border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-750">
                        <td class="py-4 px-4">picoCTF 2023</td>
                        <td class="py-4 px-4">May 2023</td>
                        <td class="py-4 px-4 text-center text-blue-600">Top 5%</td>
                        <td class="py-4 px-4 text-center"><a href="#" class="text-purple-500 hover:underline">Write‑ups</a></td>
                    </tr>
                    <tr class="border-t border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-750">
                        <td class="py-4 px-4">HackTheBox CTF 2023</td>
                        <td class="py-4 px-4">Aug 2023</td>
                        <td class="py-4 px-4 text-center">12th</td>
                        <td class="py-4 px-4 text-center"><a href="#" class="text-purple-500 hover:underline">Details</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- CTF Resources -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">CTF Resources</h2>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-3">Study Materials</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-blue-400 hover:underline">Web Exploitation Guide</a></li>
                    <li><a href="#" class="text-blue-400 hover:underline">Cryptography Cheat Sheet</a></li>
                    <li><a href="#" class="text-blue-400 hover:underline">Binary Exploitation Basics</a></li>
                </ul>
            </div>
            
            <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-3">Tools</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-blue-400 hover:underline">Burp Suite Tutorial</a></li>
                    <li><a href="#" class="text-blue-400 hover:underline">Ghidra Setup Guide</a></li>
                    <li><a href="#" class="text-blue-400 hover:underline">Wireshark Basics</a></li>
                </ul>
            </div>
            
            <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-3">Write‑ups</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-blue-400 hover:underline">picoCTF 2024 Write‑ups</a></li>
                    <li><a href="#" class="text-blue-400 hover:underline">UCC CyberStars 2024 Write‑ups</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
```

---

## **📚 Resources Page**  `resources/views/frontend/resources.blade.php`

```blade
<x:layouts.frontend.app>
@section('title', 'Resources')
@section('description', 'Study materials, tools and recommended reading for cybersecurity.')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-gray-900 via-cyan-900 to-gray-900 text-white overflow-hidden py-20 md:py-32">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(6, 182, 212, 0.3) 2px, rgba(6, 182, 212, 0.3) 4px), repeating-linear-gradient(90deg, transparent, transparent 2px, rgba(6, 182, 212, 0.3) 2px, rgba(6, 182, 212, 0.3) 4px); background-size: 50px 50px;"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-6xl font-bold">Resources</h1>
        <p class="text-xl text-gray-300 mt-4 max-w-3xl mx-auto">
            Everything you need to level up your cybersecurity skills.
        </p>
    </div>
</section>

<!-- Study Materials -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">Study Materials</h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            @foreach(['Web Security','Cryptography','Network Security','Forensics','Binary Exploitation'] as $topic)
            <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 hover:border-cyan-400 dark:hover:border-cyan-400 transition-all">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-3">{{ $topic }}</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-cyan-400 hover:underline">Free Online Course</a></li>
                    <li><a href="#" class="text-cyan-400 hover:underline">PDF Cheat Sheet</a></li>
                    <li><a href="#" class="text-cyan-400 hover:underline">Video Tutorial Series</a></li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Tools -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">Recommended Tools</h2>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['Wireshark','Network protocol analyzer','/assets/tools/wireshark.png'],
                ['Burp Suite','Web vulnerability scanner','/assets/tools/burp.png'],
                ['Ghidra','Reverse Engineering','/assets/tools/ghidra.png'],
                ['Metasploit','Penetration Testing Framework','/assets/tools/metasploit.png']
            ] as $tool)
            <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl flex items-center gap-4 border border-gray-200 dark:border-gray-600">
                <img src="{{ $tool[2] }}" alt="{{ $tool[0] }}" class="w-12 h-12">
                <div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">{{ $tool[0] }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ $tool[1] }}</p>
                    <a href="#" class="text-cyan-400 text-sm mt-1 inline-block">Download</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Recommended Reading -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">Recommended Reading</h2>
        
        <div class="grid md:grid-cols-2 gap-8">
            @foreach([
                ['The Web Application Hacker\'s Handbook','Dafydd Stuttard, Marcus Pinto','A definitive guide to web application security.'],
                ['Cryptography Engineering','Niels Ferguson, Bruce Schneier','Practical advice on building secure systems.'],
                ['Hacking: The Art of Exploitation','Jon Erickson','Learn the fundamentals of exploitation.'],
                ['Applied Cryptography','Bruce Schneier','Comprehensive overview of cryptographic algorithms.']
            ] as $book)
            <div class="flex gap-4 bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700">
                <div class="flex-shrink-0 w-20 h-28 bg-gray-200 dark:bg-gray-700 rounded"></div>
                <div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">{{ $book[0] }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ $book[1] }}</p>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">{{ $book[2] }}</p>
                    <a href="#" class="mt-3 text-cyan-400 hover:underline">View on Amazon</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
```

---

## **📞 Contact Page**  `resources/views/frontend/contact.blade.php`

```blade
<x:layouts.frontend.app>
@section('title', 'Contact Us')
@section('description', 'Get in touch with the Cybersecurity & Innovations Club.')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 text-white overflow-hidden py-20 md:py-32">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(59, 130, 246, 0.3) 10px, rgba(59, 130, 246, 0.3) 20px); background-size: 50px 50px;"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-6xl font-bold">Contact Us</h1>
        <p class="text-xl text-gray-300 mt-4 max-w-3xl mx-auto">
            Have a question or want to sponsor us? We would love to hear from you!
        </p>
    </div>
</section>

<!-- Contact Form & Info -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12">
            
            {{-- Contact Info --}}
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Get In Touch</h2>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-blue-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></path></svg>
                        <span>cyberclub@stlawrence.edu</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-blue-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></path></svg>
                        <span>+1 (555) 123 4567</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-blue-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7a2 2 0 01-2-2V5a2 2 0 012-2h5.5a1.5 1.5 0 011.5.7l1 2a1.5 1.5 0 011.5.7H17a2 2 0 012 2v3m0 0a2 2 0 01-2 2h-10a2 2 0 01-2-2V9a2 2 0 012-2h8a2 2 0 012 2z"/></path></svg>
                        <span>Office : C101, Science Building</span>
                    </li>
                </ul>

                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-8 mb-4">Follow Us</h3>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center text-blue-600 dark:text-blue-300 hover:scale-110 transition-transform"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-blue-800 dark:bg-blue-600 flex items-center justify-center text-white hover:scale-110 transition-transform"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-white hover:scale-110 transition-transform"><i class="fab fa-github"></i></a>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Send a Message</h2>
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 mb-2">Name</label>
                        <input type="text" name="name" class="w-full p-3 rounded bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 mb-2">Email</label>
                        <input type="email" name="email" class="w-full p-3 rounded bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 mb-2">Subject</label>
                        <input type="text" name="subject" class="w-full p-3 rounded bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 mb-2">Message</label>
                        <textarea name="message" rows="5" class="w-full p-3 rounded bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                    </div>
                    <button type="submit" class="w-full md:w-auto px-6 py-3 bg-gradient-to-r from-blue-600 to-cyan-600 text-white rounded-lg font-semibold hover:from-blue-700 hover:to-cyan-700 transition-all">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
```

---

## **🤝 Join Us Page**  `resources/views/frontend/join.blade.php`

```blade
<x:layouts.frontend.app>
@section('title', 'Join Us')
@section('description', 'Become a member of the Cybersecurity & Innovations Club.')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-gray-900 via-cyan-900 to-gray-900 text-white overflow-hidden py-20 md:py-32">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(6, 182, 212, 0.3) 2px, rgba(6, 182, 212, 0.3) 4px), repeating-linear-gradient(90deg, transparent, transparent 2px, rgba(6, 182, 212, 0.3) 2px, rgba(6, 182, 212, 0.3) 4px); background-size: 50px 50px;"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-6xl font-bold">Join Us</h1>
        <p class="text-xl text-gray-300 mt-4 max-w-3xl mx-auto">
            Become part of a community of passionate students dedicated to mastering cybersecurity.
        </p>
    </div>
</section>

<!-- Benefits -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">Membership Benefits</h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 text-center">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></path></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Access to CTF Servers</h3>
                <p class="text-gray-600 dark:text-gray-400">Private servers for practicing CTF challenges anytime.</p>
            </div>
            
            <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 text-center">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v10a2 2 0 01-2 2h-2M17 8H7a2 2 0 00-2 2v10a2 2 0 002 2h2M7 8h2a2 2 0 012 2v10a2 2 0 01-2 2H7a2 2 0 012-2V10a2 2 0 00-2-2z"/></path></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Guest Speakers</h3>
                <p class="text-gray-600 dark:text-gray-400">Monthly talks from industry professionals.</p>
            </div>
            
            <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 text-center">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-green-500 to-emerald-500 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11 11 0 002.382 6.016 11.11 11.11 0 0 0 23 12a11.11 11.11 0 0 0-2.382 5.984 11 11 0 0 1-9.618 4.984"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Resume Review</h3>
                <p class="text-gray-600 dark:text-gray-400">Get your resume reviewed by alumni working in cybersecurity.</p>
            </div>
        </div>
    </div>
</section>

<!-- How to Apply -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-8">How to Apply</h2>
        
        <div class="space-y-6">
            <div class="flex gap-4 items-start">
                <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full flex items-center justify-center text-white">1</div>
                <div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">Fill the Application Form</h3>
                    <p class="text-gray-600 dark:text-gray-400">Complete the online application. Tell us about your interest in cybersecurity.</p>
                    <a href="#" class="text-blue-400 hover:underline mt-2 inline-block">Application Form →</a>
                </div>
            </div>
            
            <div class="flex gap-4 items-start">
                <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white">2</div>
                <div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">Attend Intro Meeting</h3>
                    <p class="text-gray-600 dark:text-gray-400">We will send you a calendar invite for an introductory meeting.</p>
                </div>
            </div>
            
            <div class="flex gap-4 items-start">
                <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-500 rounded-full flex items-center justify-center text-white">3</div>
                <div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">Start Participating!</h3>
                    <p class="text-gray-600 dark:text-gray-400">After the meeting you are officially a member. Welcome aboard!</p>
                </div>
            </div>
        </div>
        
        <div class="mt-12 p-6 bg-gray-50 dark:bg-gray-700 rounded-2xl text-center">
            <p class="text-gray-700 dark:text-gray-300 mb-4">**No prior experience required!** We help you learn as you go.</p>
            <a href="#" class="px-8 py-3 bg-gradient-to-r from-blue-600 to-cyan-600 text-white rounded-lg font-semibold hover:from-blue-700 hover:to-cyan-700 transition-all">Apply Now</a>
        </div>
    </div>
</section>

<!-- Meeting Schedule -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Meeting Schedule</h2>
        <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg inline-block">
            <p class="text-lg text-gray-700 dark:text-gray-300">Every <span class="font-semibold text-blue-500">Tuesday</span></p>
            <p class="text-2xl font-bold text-gray-900 dark:text-white mt-2">18:00 – 19:30</p>
            <p class="text-gray-600 dark:text-gray-400">Room C101, Science Building</p>
        </div>
    </div>
</section>

@endsection
```

---

**✅ All pages now follow the same design system**  
You can now run your Laravel application and you will have a **beautiful, modern, responsive website** for your Cybersecurity & Innovations Club!  