<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmad Ridwan | Full-Stack Web Developer</title>
    
    <!-- Load Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Load AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="font-sans antialiased text-slate-800 bg-slate-50 selection:bg-blue-600 selection:text-white overflow-x-hidden">

    <!-- NAVBAR (Sticky & Glassmorphism) -->
    <nav class="fixed w-[100vw] z-50 top-0 transition-all duration-300 backdrop-blur-md bg-white/70 border-b border-slate-200/50">
        <div class="container mx-auto px-4 md:px-6 py-3 md:py-4 flex justify-between items-center max-w-6xl">
            <a href="#" class="text-xl md:text-2xl font-bold tracking-tighter text-slate-900 shrink-0">
                Ahmad<span class="text-blue-600">Ridwan.</span>
            </a>
            
            <div class="hidden md:flex gap-8 text-sm font-semibold text-slate-600">
                <a href="#about" class="hover:text-blue-600 transition-colors">Tentang</a>
                <a href="#skills" class="hover:text-blue-600 transition-colors">Keahlian</a>
                <a href="#projects" class="hover:text-blue-600 transition-colors">Karya</a>
            </div>
            
            <a href="#contact" class="px-4 py-1.5 md:px-5 md:py-2 bg-slate-900 text-white text-xs md:text-sm font-semibold rounded-full hover:bg-blue-600 transition-colors shadow-lg shadow-slate-200 shrink-0">
                Hubungi
            </a>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="relative pt-40 pb-24 lg:pt-52 lg:pb-32 overflow-hidden flex flex-col items-center justify-center min-h-[90vh]">
        <!-- Ornamen Background -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-3xl -z-10 opacity-30">
            <div class="aspect-square bg-gradient-to-tr from-blue-400 to-cyan-300 rounded-full blur-3xl mix-blend-multiply animate-pulse"></div>
        </div>

        <div class="container mx-auto px-4 text-center max-w-4xl" data-aos="zoom-in" data-aos-duration="1000">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 border border-blue-100 text-blue-700 text-sm font-semibold mb-8">
                <span class="relative flex h-2.5 w-2.5">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-blue-600"></span>
                </span>
                Tersedia untuk Kolaborasi & Proyek Baru
            </div>
            
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 text-slate-900 leading-tight">
                Membangun Solusi Digital <br class="hidden md:block">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-cyan-500 to-blue-500">
                    Cerdas & Skalabel
                </span>
            </h1>
            
            <p class="mt-4 text-lg md:text-xl text-slate-600 max-w-2xl mx-auto mb-10 leading-relaxed">
                Menghubungkan logika kompleks dengan antarmuka yang elegan. Dari sistem informasi akademik, manajemen bisnis, hingga integrasi kecerdasan buatan.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#projects" class="px-8 py-4 bg-blue-600 text-white rounded-full font-semibold text-lg hover:bg-blue-700 hover:shadow-lg hover:shadow-blue-500/40 hover:-translate-y-1 transition-all duration-300">
                    Eksplorasi Karya
                </a>
                <a href="https://github.com/AhmadRidwan058" target="_blank" class="flex items-center justify-center gap-2 px-8 py-4 bg-white border-2 border-slate-200 text-slate-700 rounded-full font-semibold text-lg hover:border-slate-900 hover:text-slate-900 transition-all duration-300">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                    GitHub Profile
                </a>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="py-20 bg-white" id="about">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="flex flex-col md:flex-row items-center gap-16">
                <div class="w-full md:w-1/2" data-aos="fade-right">
                    <h2 class="text-sm font-bold text-blue-600 tracking-widest uppercase mb-3">Tentang Saya</h2>
                    <h3 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6 leading-tight">Profesional yang Terus Berkembang.</h3>
                    <p class="text-slate-600 text-lg mb-6 leading-relaxed">
                        Berbasis di Tangerang, keseharian saya adalah memadukan dunia profesionalisme kerja dengan semangat akademis. Sebagai mahasiswa S1 Sistem Informasi di Universitas Terbuka, saya terbiasa dengan kedisiplinan, manajemen waktu yang ketat, dan kemampuan belajar mandiri yang kuat.
                    </p>
                    <p class="text-slate-600 text-lg mb-8 leading-relaxed">
                        Fokus utama saya berada pada ekosistem pengembangan web modern (Laravel, Livewire, Tailwind CSS). Namun, rasa ingin tahu saya sering membawa saya bereksperimen lebih jauh, mulai dari memadukan API Artificial Intelligence dan sistem manajemen penyiaran digital.
                    </p>
                    <div class="grid grid-cols-2 gap-8 pt-8 border-t border-slate-200 mt-8">
                        <div class="group cursor-default">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="p-2.5 bg-blue-50 text-blue-600 rounded-lg group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                                </div>
                                <h4 class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500 text-4xl">
                                    <span class="count-up" data-target="100">0</span>%
                                </h4>
                            </div>
                            <p class="text-sm font-semibold text-slate-500 group-hover:text-slate-700 transition-colors">Dedikasi pada Kualitas Kode</p>
                        </div>
                        
                        <div class="group cursor-default">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="p-2.5 bg-blue-50 text-blue-600 rounded-lg group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <h4 class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500 text-4xl">
                                    <span class="count-up" data-target="24">0</span>/7
                                </h4>
                            </div>
                            <p class="text-sm font-semibold text-slate-500 group-hover:text-slate-700 transition-colors">Semangat Pembelajar</p>
                        </div>
                    </div>
                </div>
                
                <div class="w-full md:w-1/2" data-aos="fade-left">
                    <div class="relative">
                        <div class="relative rounded-2xl overflow-hidden aspect-square md:aspect-[4/5] bg-slate-100 shadow-2xl border border-slate-200">
                            <img src="{{ asset('/images/profile.png') }}" alt="Ahmad Ridwan" class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-700">
                        </div>
                        
                        <div class="relative mt-4 md:mt-0 md:absolute md:bottom-6 md:left-6 md:right-6 bg-white md:bg-white/90 backdrop-blur-md p-4 rounded-xl border border-slate-200 md:border-white/50 shadow-lg z-10">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold shrink-0">UT</div>
                                <div>
                                    <h5 class="font-bold text-slate-900">Sistem Informasi</h5>
                                    <p class="text-xs text-slate-500">Universitas Terbuka</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SKILLS SECTION -->
    <section class="py-20 bg-slate-50 border-y border-slate-200/60" id="skills">
        <div class="container mx-auto px-4 max-w-4xl" data-aos="fade-up">
            <div class="text-center mb-12">
                <h2 class="text-sm font-bold text-blue-600 tracking-widest uppercase mb-3">Persenjataan Utama</h2>
                <h3 class="text-3xl font-bold text-slate-900">Teknologi & Alat</h3>
            </div>
            
            <div class="flex flex-wrap justify-center gap-4">
                @foreach($skills as $skill)
                    <div class="flex items-center gap-3 px-6 py-3 bg-white border border-slate-200 rounded-xl shadow-sm hover:shadow-md hover:-translate-y-1 hover:border-blue-300 transition-all duration-300 cursor-default group">
                        <span class="w-3.5 h-3.5 rounded-full shadow-inner group-hover:scale-125 group-hover:animate-pulse transition-transform" style="background-color: {{ $skill->color ?? '#64748b' }}"></span>
                        <span class="font-semibold text-slate-700 group-hover:text-slate-900">{{ $skill->name }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section class="py-24 bg-white" id="projects">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12" data-aos="fade-up">
                <div>
                    <h2 class="text-sm font-bold text-blue-600 tracking-widest uppercase mb-3">Portofolio</h2>
                    <h3 class="text-3xl font-bold text-slate-900">Karya & Eksperimen</h3>
                </div>
                <p class="text-slate-500 mt-4 md:mt-0 max-w-md md:text-right">Aplikasi sistem informasi, manajemen POS bisnis, hingga purwarupa yang saya bangun untuk menyelesaikan masalah dunia nyata.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 group border border-slate-200 flex flex-col h-full" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        
                        <div class="relative h-60 bg-slate-100 overflow-hidden">
                            <!-- Area Gambar -->
                            @if($project->thumbnail)
                                <!-- 1. Jika ada gambar manual yang diupload, gunakan ini -->
                                <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-700">
                            @elseif($project->demo_url)
                                <!-- 2. Jika tidak ada gambar, tapi ada URL Demo, otomatis ambil Screenshot API -->
                                <img src="https://image.thum.io/get/width/800/crop/600/{{ $project->demo_url }}" alt="Screenshot {{ $project->title }}" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-700">
                            @else
                                <!-- 3. Jika tidak ada gambar DAN tidak ada URL Demo, tampilkan placeholder cantik -->
                                <div class="w-full h-full bg-gradient-to-br from-slate-100 to-slate-200 flex flex-col items-center justify-center text-slate-400 group-hover:scale-105 transition-transform duration-700">
                                    <svg class="w-12 h-12 mb-3 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <span class="text-xs font-bold uppercase tracking-widest text-slate-400">{{ $project->title }}</span>
                                </div>
                            @endif
                            
                            @if($project->demo_url)
                                <a href="{{ $project->demo_url }}" target="_blank" class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-full text-xs font-bold text-emerald-600 flex items-center gap-2 shadow-sm hover:bg-white hover:scale-105 transition-all">
                                    <span class="relative flex h-2 w-2">
                                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                      <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                                    </span>
                                    LIVE DEMO
                                </a>
                            @endif
                        </div>
                        
                        <div class="p-8 flex flex-col flex-grow">
                            <h3 class="text-xl font-bold mb-3 text-slate-800 group-hover:text-blue-600 transition-colors">{{ $project->title }}</h3>
                            <p class="text-slate-600 text-sm mb-6 line-clamp-3 leading-relaxed flex-grow">{{ $project->description }}</p>
                            
                            <div class="flex flex-wrap gap-2 mt-auto pt-4 border-t border-slate-100">
                                @foreach($project->skills as $pskill)
                                    <span class="text-xs font-bold px-3 py-1.5 bg-slate-50 text-slate-600 rounded-md border border-slate-200">{{ $pskill->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION / CONTACT -->
    <section class="py-24 bg-slate-900 relative overflow-hidden" id="contact">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
        <div class="container mx-auto px-4 max-w-4xl text-center relative z-10" data-aos="zoom-in">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Punya Ide Proyek Menarik?</h2>
            <p class="text-slate-300 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
                Mari diskusikan bagaimana kita bisa mengubah ide tersebut menjadi aplikasi yang fungsional, tangguh, dan siap pakai.
            </p>
            <a href="https://wa.me/6285716772108" class="inline-flex items-center justify-center px-8 py-4 bg-blue-600 text-white rounded-full font-bold text-lg hover:bg-blue-500 hover:shadow-lg hover:shadow-blue-500/50 hover:-translate-y-1 transition-all duration-300">
                Mulai Percakapan
            </a>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-10 text-center bg-slate-950 border-t border-slate-800">
        <div class="container mx-auto px-4">
            <p class="text-slate-400 text-sm mb-2">&copy; {{ date('Y') }} Ahmad Ridwan. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <!-- Load AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 50 });

        // --- SCRIPT ANIMASI ANGKA BERJALAN ---
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.count-up');
            
            // Fungsi untuk menjalankan penghitungan naik
            const runCounter = (counter) => {
                const target = +counter.getAttribute('data-target');
                const speed = target / 40; // Menentukan kecepatan animasi secara proporsional
                
                const updateCount = () => {
                    const current = +counter.innerText;
                    if (current < target) {
                        counter.innerText = Math.ceil(current + speed);
                        setTimeout(updateCount, 20); // Jalankan ulang setiap 20 milidetik
                    } else {
                        counter.innerText = target; // Kunci ke angka target jika sudah selesai
                    }
                };
                
                updateCount();
            };

            // Robot pemantau scroll layar
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    // Jika elemen statistik sudah masuk ke area layar sebesar 50%
                    if (entry.isIntersecting) {
                        runCounter(entry.target);
                        observer.unobserve(entry.target); // Matikan pemantau agar animasi hanya berjalan 1x
                    }
                });
            }, { threshold: 0.5 });

            // Suruh robot memantau semua class .count-up
            counters.forEach(counter => observer.observe(counter));
        });
    </script>
</body>
</html>