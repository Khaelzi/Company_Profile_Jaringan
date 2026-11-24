@extends('layouts.layout')

@section('title', 'Beranda')
@section('content')

    {{-- HERO SECTION --}}
    <section class="relative overflow-hidden bg-[#0b1224]">

        {{-- Video background (di belakang, looping) --}}
        <video autoplay muted loop playsinline preload="auto"
            class="absolute inset-0 h-full w-full object-cover">
            <source src="{{ asset('assets/video/vid.mp4') }}" type="video/mp4">
        </video>

        {{-- Lapisan gelap supaya teks tetap terbaca --}}
        <div class="absolute inset-0 bg-gradient-to-r from-[#0b1224]/90 via-[#0b1224]/70 to-[#0b1224]/40"></div>

        {{-- Pola grid + glow neon --}}
        <div class="absolute inset-0 pointer-events-none"
            style="background-image: linear-gradient(rgba(0,229,255,0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(0,229,255,0.05) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 rounded-full bg-[#00e5ff]/15 blur-3xl pointer-events-none"></div>
        <div class="absolute -top-24 right-0 w-96 h-96 rounded-full bg-[#ff2e93]/10 blur-3xl pointer-events-none"></div>

        {{-- Konten (di depan video) --}}
        <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-10 py-20 md:py-32">

            <span class="inline-flex items-center gap-2 border border-[#00e5ff]/40 bg-[#00e5ff]/10 text-[#00e5ff] text-xs font-semibold tracking-[3px] uppercase px-4 py-2 rounded-full mb-6">
                <span class="w-2 h-2 rounded-full bg-[#00e5ff] animate-pulse"></span>
                Network Solution
            </span>

            <h1 class="text-3xl md:text-[46px] font-extrabold leading-tight text-white mb-5">
                Hubungkan Bisnis Anda
                <span class="block">dengan Jaringan yang</span>
                <span class="block text-[#00e5ff] drop-shadow-[0_0_16px_rgba(0,229,255,0.7)]">Cepat, Aman, dan Andal.</span>
            </h1>

            <p class="text-base md:text-[20px] text-slate-300 font-medium leading-relaxed mb-8 max-w-3xl">
                Cyber Punk menyediakan perancangan, instalasi, dan pengelolaan jaringan komputer
                untuk perusahaan, instansi, dan kawasan industri.
            </p>

            <div class="flex flex-wrap items-center gap-4">
                <a href="{{ url('/layanan') }}"
                    class="inline-flex items-center bg-[#00e5ff] hover:bg-[#00c4dc] text-[#0b1224] text-[15px] font-semibold px-6 py-3.5 rounded-full transition hover:scale-105 hover:shadow-[0_0_30px_rgba(0,229,255,0.6)]">
                    Lihat Layanan
                </a>

                <a href="https://wa.me/6281234567890" target="_blank"
                    class="inline-flex items-center border border-white/30 hover:border-[#ff2e93] hover:text-[#ff2e93] hover:shadow-[0_0_25px_rgba(255,46,147,0.4)] text-white text-[15px] font-semibold px-6 py-3.5 rounded-full transition">
                    Konsultasi via WhatsApp
                </a>
            </div>
        </div>
    </section>


    {{-- STATISTIK --}}
    <section class="bg-[#101a33] border-y border-white/10">
        <div class="max-w-7xl mx-auto px-6 md:px-10 py-12 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">

            <div class="bg-[#14203f] rounded-xl py-8 px-4 border border-white/5 hover:border-[#00e5ff]/50 hover:-translate-y-1 transition duration-300">
                <p class="text-4xl font-extrabold text-[#00e5ff] drop-shadow-[0_0_12px_rgba(0,229,255,0.6)]">150+</p>
                <p class="text-sm text-slate-400 mt-2">Klien Korporat</p>
            </div>
            <div class="bg-[#14203f] rounded-xl py-8 px-4 border border-white/5 hover:border-[#ff2e93]/50 hover:-translate-y-1 transition duration-300">
                <p class="text-4xl font-extrabold text-[#ff2e93] drop-shadow-[0_0_12px_rgba(255,46,147,0.6)]">500+</p>
                <p class="text-sm text-slate-400 mt-2">Titik Jaringan</p>
            </div>
            <div class="bg-[#14203f] rounded-xl py-8 px-4 border border-white/5 hover:border-[#00e5ff]/50 hover:-translate-y-1 transition duration-300">
                <p class="text-4xl font-extrabold text-[#00e5ff] drop-shadow-[0_0_12px_rgba(0,229,255,0.6)]">99,9%</p>
                <p class="text-sm text-slate-400 mt-2">Uptime Layanan</p>
            </div>
            <div class="bg-[#14203f] rounded-xl py-8 px-4 border border-white/5 hover:border-[#ff2e93]/50 hover:-translate-y-1 transition duration-300">
                <p class="text-4xl font-extrabold text-[#ff2e93] drop-shadow-[0_0_12px_rgba(255,46,147,0.6)]">24/7</p>
                <p class="text-sm text-slate-400 mt-2">Monitoring NOC</p>
            </div>

        </div>
    </section>


    {{-- LAYANAN UNGGULAN --}}
    <section class="relative overflow-hidden py-16 md:py-20">
        <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-[#ff2e93]/5 blur-3xl pointer-events-none"></div>

        <div class="relative max-w-7xl mx-auto px-6 md:px-10">

            <div class="text-center mb-12">
                <span class="text-[#ff2e93] font-semibold text-sm tracking-[3px] uppercase drop-shadow-[0_0_10px_rgba(255,46,147,0.6)]">
                    Layanan Kami
                </span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-white mt-2">
                    Solusi Jaringan <span class="text-[#00e5ff]">End-to-End</span>
                </h2>
                <div class="w-16 h-1 bg-[#00e5ff] mx-auto mt-4 rounded-full shadow-[0_0_12px_rgba(0,229,255,0.7)]"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                {{-- 01 --}}
                <div class="group bg-[#14203f] rounded-xl border-t-4 border-[#00e5ff] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/img/1.png') }}" alt="Internet Dedicated"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">01</span>
                    </div>
                    <div class="p-7">
                        <h3 class="text-lg font-bold text-white mb-2 group-hover:text-[#00e5ff] transition">Internet Dedicated</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">
                            Koneksi simetris dengan bandwidth terjamin, IP publik statis, dan SLA yang jelas.
                        </p>
                    </div>
                </div>

                {{-- 02 --}}
                <div class="group bg-[#14203f] rounded-xl border-t-4 border-[#ff2e93] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(255,46,147,0.2)]">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/img/2.png') }}" alt="Jaringan LAN, WAN & Wi-Fi"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">02</span>
                    </div>
                    <div class="p-7">
                        <h3 class="text-lg font-bold text-white mb-2 group-hover:text-[#ff2e93] transition">Jaringan LAN, WAN &amp; Wi-Fi</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">
                            Perancangan dan instalasi jaringan kantor hingga multi-cabang dengan Wi-Fi merata.
                        </p>
                    </div>
                </div>

                {{-- 03 --}}
                <div class="group bg-[#14203f] rounded-xl border-t-4 border-[#00e5ff] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/img/3.png') }}" alt="Keamanan Jaringan"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">03</span>
                    </div>
                    <div class="p-7">
                        <h3 class="text-lg font-bold text-white mb-2 group-hover:text-[#00e5ff] transition">Keamanan Jaringan</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">
                            Firewall, VPN, dan segmentasi jaringan untuk melindungi aset digital perusahaan.
                        </p>
                    </div>
                </div>

            </div>

            <div class="text-center mt-10">
                <a href="{{ url('/layanan') }}"
                    class="inline-block font-semibold text-[#00e5ff] border border-[#00e5ff]/40 px-6 py-3 rounded-full hover:bg-[#00e5ff] hover:text-[#0b1224] hover:shadow-[0_0_25px_rgba(0,229,255,0.5)] transition">
                    Lihat semua layanan &rarr;
                </a>
            </div>
        </div>
    </section>


    {{-- KENAPA PILIH KAMI --}}
    <section class="relative overflow-hidden bg-[#0e1730] border-y border-white/5 py-16 md:py-20">
        <div class="absolute inset-0 pointer-events-none"
            style="background-image: linear-gradient(rgba(0,229,255,0.04) 1px, transparent 1px), linear-gradient(90deg, rgba(0,229,255,0.04) 1px, transparent 1px); background-size: 40px 40px;"></div>

        <div class="relative max-w-7xl mx-auto px-6 md:px-10">
            <div class="text-center mb-12">
                <span class="text-[#ff2e93] font-semibold text-sm tracking-[3px] uppercase">Keunggulan</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-white mt-2">
                    Kenapa Pilih <span class="text-[#00e5ff]">Cyber Punk</span>
                </h2>
                <div class="w-16 h-1 bg-[#00e5ff] mx-auto mt-4 rounded-full shadow-[0_0_12px_rgba(0,229,255,0.7)]"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="group relative overflow-hidden bg-[#14203f] p-7 rounded-xl border-t-4 border-[#00e5ff] transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <span class="absolute -top-2 right-4 text-6xl font-extrabold text-white/10">01</span>
                    <h3 class="relative text-lg font-bold text-white mb-2 group-hover:text-[#00e5ff] transition">Teknisi Bersertifikat</h3>
                    <p class="relative text-sm text-slate-400 leading-relaxed">Dikerjakan tim berpengalaman dengan standar kerja yang terukur.</p>
                </div>

                <div class="group relative overflow-hidden bg-[#14203f] p-7 rounded-xl border-t-4 border-[#ff2e93] transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(255,46,147,0.2)]">
                    <span class="absolute -top-2 right-4 text-6xl font-extrabold text-white/10">02</span>
                    <h3 class="relative text-lg font-bold text-white mb-2 group-hover:text-[#ff2e93] transition">SLA Jelas</h3>
                    <p class="relative text-sm text-slate-400 leading-relaxed">Jaminan layanan tertulis lengkap dengan kompensasi.</p>
                </div>

                <div class="group relative overflow-hidden bg-[#14203f] p-7 rounded-xl border-t-4 border-[#00e5ff] transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <span class="absolute -top-2 right-4 text-6xl font-extrabold text-white/10">03</span>
                    <h3 class="relative text-lg font-bold text-white mb-2 group-hover:text-[#00e5ff] transition">Respon Cepat</h3>
                    <p class="relative text-sm text-slate-400 leading-relaxed">Tim NOC siaga 24 jam untuk penanganan gangguan.</p>
                </div>

                <div class="group relative overflow-hidden bg-[#14203f] p-7 rounded-xl border-t-4 border-[#ff2e93] transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(255,46,147,0.2)]">
                    <span class="absolute -top-2 right-4 text-6xl font-extrabold text-white/10">04</span>
                    <h3 class="relative text-lg font-bold text-white mb-2 group-hover:text-[#ff2e93] transition">Solusi Menyeluruh</h3>
                    <p class="relative text-sm text-slate-400 leading-relaxed">Dari konsultasi, instalasi, hingga perawatan dalam satu mitra.</p>
                </div>

            </div>
        </div>
    </section>


    {{-- CTA --}}
    <section class="py-16 md:py-20 px-6">
        <div class="relative overflow-hidden max-w-7xl mx-auto rounded-2xl bg-gradient-to-r from-[#14203f] via-[#1b2750] to-[#14203f] border border-[#00e5ff]/30 p-10 md:p-14 text-center">
            <div class="absolute -top-16 -left-16 w-64 h-64 rounded-full bg-[#00e5ff]/10 blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-16 -right-16 w-64 h-64 rounded-full bg-[#ff2e93]/10 blur-3xl pointer-events-none"></div>

            <div class="relative">
                <h2 class="text-2xl md:text-4xl font-extrabold text-white">
                    Siap meningkatkan jaringan <span class="text-[#00e5ff]">bisnis Anda?</span>
                </h2>
                <p class="text-slate-300 mt-3">Ceritakan kebutuhan Anda, tim kami siap membantu.</p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                    <a href="https://wa.me/6281234567890" target="_blank"
                        class="inline-block bg-[#00e5ff] text-[#0b1224] font-bold px-8 py-4 rounded-full hover:scale-105 hover:shadow-[0_0_30px_rgba(0,229,255,0.6)] transition">
                        Hubungi Kami via WhatsApp
                    </a>
                    <a href="{{ url('/tentang-kami') }}"
                        class="inline-block border border-[#ff2e93] text-[#ff2e93] font-bold px-8 py-4 rounded-full hover:bg-[#ff2e93] hover:text-white hover:shadow-[0_0_30px_rgba(255,46,147,0.5)] transition">
                        Tentang Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection