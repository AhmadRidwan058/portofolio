<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmad Ridwan | Full-Stack Developer</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="font-sans antialiased text-slate-800 bg-slate-50 selection:bg-blue-500 selection:text-white">

    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden flex flex-col items-center justify-center min-h-[80vh]">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
            <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#38bdf8] to-[#3b82f6] opacity-20 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"></div>
        </div>

        <div class="container mx-auto px-4 text-center" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 text-slate-900">
                Ahmad <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">Ridwan</span>
            </h1>
            <p class="mt-4 text-lg md:text-xl text-slate-600 max-w-2xl mx-auto mb-10 leading-relaxed">
                Full-Stack Web Developer. Membangun aplikasi web modern, sistem informasi, dan solusi manajemen bisnis yang terintegrasi.
            </p>
            <div class="flex justify-center gap-4">
                <a href="https://github.com/AhmadRidwan058" target="_blank" class="flex items-center gap-2 px-6 py-3 bg-white border border-slate-200 text-slate-700 rounded-full font-semibold hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                    GitHub
                </a>
                <a href="#projects" class="px-6 py-3 bg-slate-900 text-white rounded-full font-semibold hover:bg-blue-600 hover:shadow-lg hover:shadow-blue-500/30 hover:-translate-y-1 transition-all duration-300">
                    Lihat Karya
                </a>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white border-y border-slate-100" id="skills">
        <div class="container mx-auto px-4 max-w-4xl" data-aos="fade-up">
            <h2 class="text-2xl font-bold mb-8 text-center text-slate-800">Teknologi Utama</h2>
            <div class="flex flex-wrap justify-center gap-4">
                @foreach($skills as $skill)
                    <div class="flex items-center gap-2 px-5 py-2.5 bg-slate-50 border border-slate-100 rounded-full shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-default group">
                        <span class="w-3 h-3 rounded-full shadow-inner group-hover:scale-125 transition-transform" style="background-color: {{ $skill->color ?? '#64748b' }}"></span>
                        <span class="font-medium text-slate-700">{{ $skill->name }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50" id="projects">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-3xl font-bold mb-4 text-center text-slate-800" data-aos="fade-up">Karya & Proyek</h2>
            <p class="text-center text-slate-500 mb-12" data-aos="fade-up" data-aos-delay="100">Beberapa aplikasi dan sistem yang telah saya bangun.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 group border border-slate-100 flex flex-col" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        
                        <div class="relative h-56 bg-slate-100 overflow-hidden">
                            @if($project->thumbnail)
                                <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-slate-100 to-slate-200 flex flex-col items-center justify-center text-slate-400">
                                    <svg class="w-12 h-12 mb-2 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <span class="text-xs font-medium uppercase tracking-widest">{{ $project->title }}</span>
                                </div>
                            @endif
                            
                            @if($project->demo_url)
                                <a href="{{ $project->demo_url }}" target="_blank" class="absolute top-4 right-4 bg-white/95 backdrop-blur px-3 py-1.5 rounded-full text-xs font-bold text-emerald-600 flex items-center gap-2 shadow-sm hover:scale-105 transition-transform">
                                    <span class="relative flex h-2 w-2">
                                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                      <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                                    </span>
                                    LIVE
                                </a>
                            @endif
                        </div>
                        
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-xl font-bold mb-2 text-slate-800 group-hover:text-blue-600 transition-colors">{{ $project->title }}</h3>
                            <p class="text-slate-600 text-sm mb-6 line-clamp-3 leading-relaxed flex-grow">{{ $project->description }}</p>
                            
                            <div class="flex flex-wrap gap-2 mt-auto">
                                @foreach($project->skills as $pskill)
                                    <span class="text-xs font-semibold px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md border border-slate-200">{{ $pskill->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="py-8 text-center text-slate-500 text-sm bg-white border-t border-slate-100">
        <p>&copy; {{ date('Y') }} Ahmad Ridwan. Built with Laravel & Tailwind CSS.</p>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Mengaktifkan Animasi Scroll
        AOS.init({
            once: true, // Animasi hanya berjalan 1x saat di-scroll ke bawah
            offset: 50, // Muncul sedikit lebih cepat sebelum elemen terlihat penuh
        });
    </script>
</body>
</html>