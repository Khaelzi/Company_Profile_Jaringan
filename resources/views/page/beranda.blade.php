@extends('layouts.layout')

@section('title', 'Beranda')
@section('content')

    {{-- HERO SECTION --}}
        {{-- HERO SECTION --}}
    <section class="relative overflow-hidden bg-[#0b1224]">

        {{-- Video background (di belakang, looping) --}}
        <video autoplay muted loop playsinline preload="auto"
            class="absolute inset-0 h-full w-full object-cover">
            <source src="{{ asset('assets/video/vid.mp4') }}" type="video/mp4">
        </video>

        {{-- Lapisan gelap supaya teks tetap terbaca --}}
        <div class="absolute inset-0 bg-gradient-to-r from-[#0b1224]/90 via-[#0b1224]/70 to-[#0b1224]/40"></div>

        {{-- Konten (di depan video) --}}
        <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-10 py-20 md:py-28">

            <h1 class="text-3xl md:text-[46px] font-extrabold leading-tight text-white mb-5">
                Hubungkan Bisnis Anda
                <span class="block">dengan Jaringan yang</span>
                <span class="block text-[#00e5ff]">Cepat, Aman, dan Andal.</span>
            </h1>

            <p class="text-base md:text-[20px] text-slate-300 font-medium leading-relaxed mb-8 max-w-3xl">
                Cyber Punk menyediakan perancangan, instalasi, dan pengelolaan jaringan komputer
                untuk perusahaan, instansi, dan kawasan industri.
            </p>

            <div class="flex flex-wrap items-center gap-4">
                <a href="#"
                    class="inline-flex items-center bg-[#00e5ff] hover:bg-[#00c4dc] text-[#0b1224] text-[15px] font-semibold px-6 py-3.5 rounded-full transition">
                    Lihat Layanan
                </a>

                <a href="https://wa.me/6281234567890" target="_blank"
                    class="inline-flex items-center border border-white/30 hover:border-[#00e5ff] hover:text-[#00e5ff] text-white text-[15px] font-semibold px-6 py-3.5 rounded-full transition">
                    Konsultasi via WhatsApp
                </a>
            </div>
        </div>
    </section>


    {{-- STATISTIK --}}
    <section class="bg-[#101a33] border-y border-white/10">
        <div class="max-w-7xl mx-auto px-6 md:px-10 py-12 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">

            <div>
                <p class="text-4xl font-extrabold text-[#00e5ff]">150+</p>
                <p class="text-sm text-slate-400 mt-1">Klien Korporat</p>
            </div>
            <div>
                <p class="text-4xl font-extrabold text-[#00e5ff]">500+</p>
                <p class="text-sm text-slate-400 mt-1">Titik Jaringan</p>
            </div>
            <div>
                <p class="text-4xl font-extrabold text-[#00e5ff]">99,9%</p>
                <p class="text-sm text-slate-400 mt-1">Uptime Layanan</p>
            </div>
            <div>
                <p class="text-4xl font-extrabold text-[#00e5ff]">24/7</p>
                <p class="text-sm text-slate-400 mt-1">Monitoring NOC</p>
            </div>

        </div>
    </section>


    {{-- LAYANAN UNGGULAN --}}
    <section class="py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-6 md:px-10">

            <div class="text-center mb-12">
                <span class="text-[#ff2e93] font-semibold text-sm tracking-[3px] uppercase">
                    Layanan Kami
                </span>
                <h2 class="text-2xl md:text-3xl font-bold text-white mt-2">
                    Solusi Jaringan End-to-End
                </h2>
                <div class="w-16 h-1 bg-[#00e5ff] mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="bg-[#14203f] p-7 rounded-xl border-t-4 border-[#00e5ff]">
                    <span class="text-3xl font-extrabold text-[#00e5ff]">01</span>
                    <h3 class="text-lg font-bold text-white mt-3 mb-2">Internet Dedicated</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Koneksi simetris dengan bandwidth terjamin, IP publik statis, dan SLA yang jelas.
                    </p>
                </div>

                <div class="bg-[#14203f] p-7 rounded-xl border-t-4 border-[#ff2e93]">
                    <span class="text-3xl font-extrabold text-[#00e5ff]">02</span>
                    <h3 class="text-lg font-bold text-white mt-3 mb-2">Jaringan LAN, WAN & Wi-Fi</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Perancangan dan instalasi jaringan kantor hingga multi-cabang dengan Wi-Fi merata.
                    </p>
                </div>

                <div class="bg-[#14203f] p-7 rounded-xl border-t-4 border-[#00e5ff]">
                    <span class="text-3xl font-extrabold text-[#00e5ff]">03</span>
                    <h3 class="text-lg font-bold text-white mt-3 mb-2">Keamanan Jaringan</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Firewall, VPN, dan segmentasi jaringan untuk melindungi aset digital perusahaan.
                    </p>
                </div>

            </div>

            <div class="text-center mt-10">
                <a href="#" class="font-semibold text-[#00e5ff] hover:underline">
                    Lihat semua layanan &rarr;
                </a>
            </div>
        </div>
    </section>


    {{-- CTA --}}
    <section class="pb-20 px-6">
        <div class="max-w-7xl mx-auto rounded-2xl bg-[#14203f] border border-[#00e5ff]/30 p-10 md:p-14 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-white">Siap meningkatkan jaringan bisnis Anda?</h2>
            <p class="text-slate-300 mt-3">Ceritakan kebutuhan Anda, tim kami siap membantu.</p>

            <a href="https://wa.me/6281234567890" target="_blank"
                class="inline-block mt-8 bg-[#00e5ff] hover:bg-[#00c4dc] text-[#0b1224] font-semibold px-7 py-3 rounded-lg transition">
                Hubungi Kami via WhatsApp
            </a>
        </div>
    </section>

@endsection
