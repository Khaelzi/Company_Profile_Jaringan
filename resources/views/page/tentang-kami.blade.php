@extends('layouts.layout')

@section('title', 'Tentang Kami')
@section('content')

    {{-- HEADER (pola grid + glow neon) --}}
       {{-- HEADER (video transparan + pola grid + glow neon) --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-[#0b1224] via-[#101a33] to-[#1b2750] py-16 md:py-24">

        {{-- Video background (looping, transparan) --}}
        <video autoplay muted loop playsinline preload="auto"
            class="absolute inset-0 h-full w-full object-cover opacity-40">
            <source src="{{ asset('assets/video/tentangkami.mp4') }}" type="video/mp4">
        </video>

        {{-- Lapisan gelap tipis supaya teks tetap terbaca --}}
        <div class="absolute inset-0 bg-gradient-to-b from-[#0b1224]/60 via-[#0b1224]/40 to-[#0b1224]/70"></div>

        {{-- Pola grid (di atas video, supaya kotak-kotak tetap terlihat) --}}
        <div class="absolute inset-0 pointer-events-none"
            style="background-image: linear-gradient(rgba(0,229,255,0.10) 1px, transparent 1px), linear-gradient(90deg, rgba(0,229,255,0.10) 1px, transparent 1px); background-size: 40px 40px;"></div>

        {{-- Glow neon --}}
        <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-[#ff2e93]/10 blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 rounded-full bg-[#00e5ff]/10 blur-3xl pointer-events-none"></div>

        <div class="relative max-w-7xl mx-auto px-6 md:px-10 text-center">
            <span class="text-[#ff2e93] font-semibold text-sm tracking-[3px] uppercase drop-shadow-[0_0_10px_rgba(255,46,147,0.7)]">
                Profil Perusahaan
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-white mt-3 mb-5">
                Tentang
                <span class="text-[#00e5ff] drop-shadow-[0_0_14px_rgba(0,229,255,0.7)]">Cyber Punk</span>
            </h1>
            <p class="max-w-3xl mx-auto text-slate-300 text-base md:text-lg leading-relaxed">
                Penyedia solusi jaringan komputer yang berkomitmen menghadirkan infrastruktur
                yang stabil, aman, dan mudah dikembangkan untuk bisnis dan instansi.
            </p>
        </div>
    </section>


    {{-- PROFIL --}}
    <section class="py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            <div class="relative overflow-hidden bg-[#101a33] rounded-2xl border border-white/5 px-6 md:px-16 py-10 md:py-14">
                <div class="absolute -top-20 -right-20 w-72 h-72 rounded-full bg-[#00e5ff]/10 blur-3xl pointer-events-none"></div>
                <div class="absolute top-0 left-0 h-full w-1 bg-gradient-to-b from-[#00e5ff] to-[#ff2e93]"></div>

                <div class="relative max-w-4xl mx-auto">
                    <span class="text-[#ff2e93] font-semibold text-sm tracking-[3px] uppercase">Siapa Kami</span>
                    <p class="mt-4 text-slate-300 text-base md:text-[19px] leading-relaxed text-justify">
                        Cyber Punk bergerak di bidang jaringan komputer dan infrastruktur telekomunikasi.
                        Kami melayani perancangan, instalasi, serta pengelolaan jaringan untuk perkantoran,
                        instansi pendidikan, kawasan industri, dan bisnis ritel. Didukung teknisi bersertifikat
                        dan perangkat berkualitas, kami memberikan layanan purna jual yang responsif.
                    </p>
                </div>
            </div>

            {{-- STATISTIK --}}
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 text-center mt-8">
                <div class="bg-[#14203f] rounded-xl py-8 px-4 border border-white/5 hover:border-[#00e5ff]/50 hover:-translate-y-1 transition duration-300">
                    <div class="text-4xl md:text-5xl font-extrabold text-[#00e5ff] drop-shadow-[0_0_12px_rgba(0,229,255,0.6)]">10+</div>
                    <p class="text-slate-400 text-sm mt-2">Tahun Pengalaman</p>
                </div>
                <div class="bg-[#14203f] rounded-xl py-8 px-4 border border-white/5 hover:border-[#ff2e93]/50 hover:-translate-y-1 transition duration-300">
                    <div class="text-4xl md:text-5xl font-extrabold text-[#ff2e93] drop-shadow-[0_0_12px_rgba(255,46,147,0.6)]">200+</div>
                    <p class="text-slate-400 text-sm mt-2">Klien Terlayani</p>
                </div>
                <div class="bg-[#14203f] rounded-xl py-8 px-4 border border-white/5 hover:border-[#00e5ff]/50 hover:-translate-y-1 transition duration-300">
                    <div class="text-4xl md:text-5xl font-extrabold text-[#00e5ff] drop-shadow-[0_0_12px_rgba(0,229,255,0.6)]">50+</div>
                    <p class="text-slate-400 text-sm mt-2">Teknisi Bersertifikat</p>
                </div>
                <div class="bg-[#14203f] rounded-xl py-8 px-4 border border-white/5 hover:border-[#ff2e93]/50 hover:-translate-y-1 transition duration-300">
                    <div class="text-4xl md:text-5xl font-extrabold text-[#ff2e93] drop-shadow-[0_0_12px_rgba(255,46,147,0.6)]">24/7</div>
                    <p class="text-slate-400 text-sm mt-2">Dukungan NOC</p>
                </div>
            </div>
        </div>
    </section>


    {{-- VISI & MISI --}}
    <section class="pb-16 md:pb-20">
        <div class="max-w-7xl mx-auto px-6 md:px-10">

            <div class="text-center mb-12">
                <span class="text-[#ff2e93] font-semibold text-sm tracking-[3px] uppercase">
                    Arah &amp; Tujuan
                </span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-white mt-2">
                    Visi <span class="text-[#00e5ff] drop-shadow-[0_0_12px_rgba(0,229,255,0.6)]">&amp;</span> Misi
                </h2>
                <div class="w-16 h-1 bg-[#00e5ff] mx-auto mt-4 rounded-full shadow-[0_0_12px_rgba(0,229,255,0.7)]"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                {{-- VISI --}}
                <div class="group relative overflow-hidden bg-[#14203f] p-8 md:p-10 rounded-xl border-l-4 border-[#00e5ff] transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <span class="absolute -top-4 right-4 text-8xl font-extrabold text-white/5 select-none">01</span>
                    <span
                        class="relative inline-block bg-[#00e5ff] text-[#0b1224] text-xs font-bold px-3 py-1 rounded uppercase tracking-wider mb-4">
                        Visi Kami
                    </span>
                    <p class="relative text-slate-300 text-base leading-relaxed text-justify">
                        Menjadi mitra infrastruktur jaringan terpercaya yang menghubungkan bisnis di seluruh
                        Indonesia dengan teknologi yang aman, cepat, dan berkelanjutan.
                    </p>
                </div>

                {{-- MISI --}}
                <div class="group relative overflow-hidden bg-[#14203f] p-8 md:p-10 rounded-xl border-l-4 border-[#ff2e93] transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(255,46,147,0.2)]">
                    <span class="absolute -top-4 right-4 text-8xl font-extrabold text-white/5 select-none">02</span>
                    <span
                        class="relative inline-block bg-[#ff2e93] text-white text-xs font-bold px-3 py-1 rounded uppercase tracking-wider mb-4">
                        Misi Kami
                    </span>
                    <ul class="relative space-y-3 text-slate-300 text-base leading-relaxed">
                        <li class="flex items-start gap-3">
                            <span class="text-[#00e5ff] font-bold">✓</span>
                            <span>Menyediakan solusi jaringan yang andal dan sesuai kebutuhan klien.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-[#00e5ff] font-bold">✓</span>
                            <span>Mengutamakan keamanan data dan kontinuitas operasional pelanggan.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-[#00e5ff] font-bold">✓</span>
                            <span>Mengembangkan SDM teknis yang kompeten dan bersertifikat.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-[#00e5ff] font-bold">✓</span>
                            <span>Memberikan dukungan yang cepat dan transparan.</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>


    {{-- NILAI PERUSAHAAN --}}
    <section class="relative overflow-hidden bg-[#101a33] py-16 md:py-20">
        <div class="absolute inset-0 pointer-events-none"
            style="background-image: linear-gradient(rgba(0,229,255,0.04) 1px, transparent 1px), linear-gradient(90deg, rgba(0,229,255,0.04) 1px, transparent 1px); background-size: 40px 40px;"></div>

        <div class="relative max-w-7xl mx-auto px-6 md:px-10">

            <div class="text-center mb-12">
                <span class="text-[#ff2e93] font-semibold text-sm tracking-[3px] uppercase">
                    Nilai Kami
                </span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-white mt-2">
                    Prinsip yang <span class="text-[#00e5ff]">Kami Pegang</span>
                </h2>
                <div class="w-16 h-1 bg-[#00e5ff] mx-auto mt-4 rounded-full shadow-[0_0_12px_rgba(0,229,255,0.7)]"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="group relative overflow-hidden bg-[#14203f] p-7 rounded-xl border-t-4 border-[#00e5ff] transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <span class="absolute -top-2 right-4 text-6xl font-extrabold text-white/10">01</span>
                    <h3 class="relative text-xl font-bold text-white mb-2 group-hover:text-[#00e5ff] transition">Andal</h3>
                    <p class="relative text-sm text-slate-400 leading-relaxed">Jaringan yang stabil adalah janji, bukan bonus.</p>
                </div>

                <div class="group relative overflow-hidden bg-[#14203f] p-7 rounded-xl border-t-4 border-[#ff2e93] transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(255,46,147,0.2)]">
                    <span class="absolute -top-2 right-4 text-6xl font-extrabold text-white/10">02</span>
                    <h3 class="relative text-xl font-bold text-white mb-2 group-hover:text-[#ff2e93] transition">Aman</h3>
                    <p class="relative text-sm text-slate-400 leading-relaxed">Keamanan dirancang sejak awal, bukan ditambahkan belakangan.</p>
                </div>

                <div class="group relative overflow-hidden bg-[#14203f] p-7 rounded-xl border-t-4 border-[#00e5ff] transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <span class="absolute -top-2 right-4 text-6xl font-extrabold text-white/10">03</span>
                    <h3 class="relative text-xl font-bold text-white mb-2 group-hover:text-[#00e5ff] transition">Transparan</h3>
                    <p class="relative text-sm text-slate-400 leading-relaxed">Harga, SLA, dan laporan yang jelas dan mudah dipahami.</p>
                </div>

                <div class="group relative overflow-hidden bg-[#14203f] p-7 rounded-xl border-t-4 border-[#ff2e93] transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(255,46,147,0.2)]">
                    <span class="absolute -top-2 right-4 text-6xl font-extrabold text-white/10">04</span>
                    <h3 class="relative text-xl font-bold text-white mb-2 group-hover:text-[#ff2e93] transition">Inovatif</h3>
                    <p class="relative text-sm text-slate-400 leading-relaxed">Terus mengadopsi teknologi baru yang relevan bagi klien.</p>
                </div>

            </div>
        </div>
    </section>


    {{-- BANNER CTA --}}
    <section class="py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#14203f] via-[#1b2750] to-[#14203f] border border-[#00e5ff]/30 px-8 py-12 md:py-14 text-center">
                <div class="absolute -top-16 -left-16 w-64 h-64 rounded-full bg-[#00e5ff]/10 blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-16 -right-16 w-64 h-64 rounded-full bg-[#ff2e93]/10 blur-3xl pointer-events-none"></div>

                <div class="relative">
                    <h2 class="text-2xl md:text-4xl font-extrabold text-white mb-4">
                        Siap Membangun Jaringan yang <span class="text-[#00e5ff]">Andal?</span>
                    </h2>
                    <p class="text-slate-300 max-w-2xl mx-auto mb-8">
                        Diskusikan kebutuhan Anda dengan tim kami dan dapatkan rekomendasi solusi yang tepat.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/6281234567890?text={{ urlencode('Halo Cyber Punk, saya ingin konsultasi kebutuhan jaringan') }}"
                            target="_blank"
                            class="inline-block px-8 py-4 bg-[#00e5ff] text-[#0b1224] font-bold rounded-full hover:scale-105 hover:shadow-[0_0_30px_rgba(0,229,255,0.6)] transition">
                            Konsultasi via WhatsApp
                        </a>
                        <a href="{{ url('/layanan') }}"
                            class="inline-block px-8 py-4 border border-[#ff2e93] text-[#ff2e93] font-bold rounded-full hover:bg-[#ff2e93] hover:text-white hover:shadow-[0_0_30px_rgba(255,46,147,0.5)] transition">
                            Lihat Layanan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection