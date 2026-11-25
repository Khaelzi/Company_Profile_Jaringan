@extends('layouts.layout')

@section('title', 'Berita')
@section('content')

    {{-- HEADER (video transparan + pola grid + glow neon) --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-[#0b1224] via-[#101a33] to-[#1b2750] py-16 md:py-24">

        {{-- Video background (looping, transparan) --}}
        <video autoplay muted loop playsinline preload="auto"
            class="absolute inset-0 h-full w-full object-cover opacity-40">
            <source src="{{ asset('assets/video/berita.mp4') }}" type="video/mp4">
        </video>

        {{-- Lapisan gelap tipis supaya teks tetap terbaca --}}
        <div class="absolute inset-0 bg-gradient-to-b from-[#0b1224]/60 via-[#0b1224]/40 to-[#0b1224]/70"></div>

        {{-- Pola grid --}}
        <div class="absolute inset-0 pointer-events-none"
            style="background-image: linear-gradient(rgba(0,229,255,0.10) 1px, transparent 1px), linear-gradient(90deg, rgba(0,229,255,0.10) 1px, transparent 1px); background-size: 40px 40px;"></div>

        {{-- Glow neon --}}
        <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-[#ff2e93]/10 blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 rounded-full bg-[#00e5ff]/10 blur-3xl pointer-events-none"></div>

        <div class="relative max-w-7xl mx-auto px-6 md:px-10 text-center">
            <span class="text-[#ff2e93] font-semibold text-sm tracking-[3px] uppercase drop-shadow-[0_0_10px_rgba(255,46,147,0.7)]">
                Berita
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-white mt-3 mb-5">
                Kabar &amp;
                <span class="text-[#00e5ff] drop-shadow-[0_0_14px_rgba(0,229,255,0.7)]">Wawasan Jaringan</span>
            </h1>
            <p class="max-w-3xl mx-auto text-slate-300 text-base md:text-lg leading-relaxed">
                Perkembangan perusahaan, studi kasus proyek, dan tips teknologi dari tim Cyber Punk.
            </p>
        </div>
    </section>


    {{-- DAFTAR BERITA --}}
    <section class="relative overflow-hidden py-16 md:py-20">
        <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-[#ff2e93]/5 blur-3xl pointer-events-none"></div>

        <div class="relative max-w-7xl mx-auto px-6 md:px-10">

            <div class="text-center mb-12">
                <span class="text-[#ff2e93] font-semibold text-sm tracking-[3px] uppercase drop-shadow-[0_0_10px_rgba(255,46,147,0.6)]">
                    Terbaru
                </span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-white mt-2">
                    Artikel <span class="text-[#00e5ff]">Pilihan Kami</span>
                </h2>
                <div class="w-16 h-1 bg-[#00e5ff] mx-auto mt-4 rounded-full shadow-[0_0_12px_rgba(0,229,255,0.7)]"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- BERITA 01 --}}
                <article class="group bg-[#14203f] rounded-xl border-t-4 border-[#00e5ff] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <div class="relative overflow-hidden h-44 bg-gradient-to-br from-[#1b2750] to-[#0b1224]">
                        <img src="{{ asset('assets/img/berita1.png') }}" alt="Cyber Punk Perluas Cakupan Layanan Fiber Optik di Jabodetabek"
                            onerror="this.style.display='none'"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-[#00e5ff] text-[#0b1224] text-xs font-bold px-3 py-1 rounded-full">Perusahaan</span>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">01</span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <p class="text-xs text-slate-500">12 November 2026</p>
                        <h3 class="text-lg font-bold text-white leading-snug mt-2 mb-2 group-hover:text-[#00e5ff] transition">Cyber Punk Perluas Cakupan Layanan Fiber Optik di Jabodetabek</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Ekspansi jaringan fiber terbaru menghubungkan lebih banyak kawasan industri dan perkantoran dengan latensi rendah.</p>
                    </div>
                </article>

                {{-- BERITA 02 --}}
                <article class="group bg-[#14203f] rounded-xl border-t-4 border-[#ff2e93] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(255,46,147,0.2)]">
                    <div class="relative overflow-hidden h-44 bg-gradient-to-br from-[#1b2750] to-[#0b1224]">
                        <img src="{{ asset('assets/img/berita2.png') }}" alt="5 Langkah Praktis Mengamankan Jaringan Kantor dari Serangan Siber"
                            onerror="this.style.display='none'"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-[#ff2e93] text-white text-xs font-bold px-3 py-1 rounded-full">Keamanan</span>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">02</span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <p class="text-xs text-slate-500">5 November 2026</p>
                        <h3 class="text-lg font-bold text-white leading-snug mt-2 mb-2 group-hover:text-[#ff2e93] transition">5 Langkah Praktis Mengamankan Jaringan Kantor dari Serangan Siber</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Mulai dari segmentasi jaringan hingga pembaruan firmware rutin, langkah dasar yang bisa langsung diterapkan.</p>
                    </div>
                </article>

                {{-- BERITA 03 --}}
                <article class="group bg-[#14203f] rounded-xl border-t-4 border-[#00e5ff] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <div class="relative overflow-hidden h-44 bg-gradient-to-br from-[#1b2750] to-[#0b1224]">
                        <img src="{{ asset('assets/img/berita3.png') }}" alt="Wi-Fi 7 untuk Bisnis: Apa yang Berubah dan Perlukah Upgrade?"
                            onerror="this.style.display='none'"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-[#00e5ff] text-[#0b1224] text-xs font-bold px-3 py-1 rounded-full">Teknologi</span>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">03</span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <p class="text-xs text-slate-500">28 Oktober 2026</p>
                        <h3 class="text-lg font-bold text-white leading-snug mt-2 mb-2 group-hover:text-[#00e5ff] transition">Wi-Fi 7 untuk Bisnis: Apa yang Berubah dan Perlukah Upgrade?</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Rangkuman peningkatan utama Wi-Fi 7 dan skenario kantor yang paling diuntungkan.</p>
                    </div>
                </article>

                {{-- BERITA 04 --}}
                <article class="group bg-[#14203f] rounded-xl border-t-4 border-[#ff2e93] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(255,46,147,0.2)]">
                    <div class="relative overflow-hidden h-44 bg-gradient-to-br from-[#1b2750] to-[#0b1224]">
                        <img src="{{ asset('assets/img/berita4.png') }}" alt="Implementasi Jaringan Multi-Cabang untuk Klien Ritel Nasional"
                            onerror="this.style.display='none'"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-[#ff2e93] text-white text-xs font-bold px-3 py-1 rounded-full">Proyek</span>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">04</span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <p class="text-xs text-slate-500">15 Oktober 2026</p>
                        <h3 class="text-lg font-bold text-white leading-snug mt-2 mb-2 group-hover:text-[#ff2e93] transition">Implementasi Jaringan Multi-Cabang untuk Klien Ritel Nasional</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Studi kasus penyatuan puluhan cabang dalam satu jaringan terkelola dengan monitoring terpusat.</p>
                    </div>
                </article>

                {{-- BERITA 05 --}}
                <article class="group bg-[#14203f] rounded-xl border-t-4 border-[#00e5ff] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <div class="relative overflow-hidden h-44 bg-gradient-to-br from-[#1b2750] to-[#0b1224]">
                        <img src="{{ asset('assets/img/berita5.png') }}" alt="Kapan Bisnis Anda Butuh Internet Dedicated, Bukan Broadband Biasa?"
                            onerror="this.style.display='none'"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-[#00e5ff] text-[#0b1224] text-xs font-bold px-3 py-1 rounded-full">Tips</span>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">05</span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <p class="text-xs text-slate-500">2 Oktober 2026</p>
                        <h3 class="text-lg font-bold text-white leading-snug mt-2 mb-2 group-hover:text-[#00e5ff] transition">Kapan Bisnis Anda Butuh Internet Dedicated, Bukan Broadband Biasa?</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Panduan singkat membandingkan kebutuhan bandwidth, SLA, dan risiko downtime.</p>
                    </div>
                </article>

                {{-- BERITA 06 --}}
                <article class="group bg-[#14203f] rounded-xl border-t-4 border-[#ff2e93] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(255,46,147,0.2)]">
                    <div class="relative overflow-hidden h-44 bg-gradient-to-br from-[#1b2750] to-[#0b1224]">
                        <img src="{{ asset('assets/img/berita6.png') }}" alt="Tim Teknisi Cyber Punk Raih Sertifikasi Jaringan Terbaru"
                            onerror="this.style.display='none'"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-[#ff2e93] text-white text-xs font-bold px-3 py-1 rounded-full">Perusahaan</span>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">06</span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <p class="text-xs text-slate-500">20 September 2026</p>
                        <h3 class="text-lg font-bold text-white leading-snug mt-2 mb-2 group-hover:text-[#ff2e93] transition">Tim Teknisi Cyber Punk Raih Sertifikasi Jaringan Terbaru</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Peningkatan kompetensi tim sebagai komitmen menjaga kualitas layanan pelanggan.</p>
                    </div>
                </article>

            </div>
        </div>
    </section>


    {{-- BANNER CTA --}}
    <section class="py-16 md:py-20 px-6">
        <div class="relative overflow-hidden max-w-7xl mx-auto rounded-2xl bg-gradient-to-r from-[#14203f] via-[#1b2750] to-[#14203f] border border-[#00e5ff]/30 p-10 md:p-14 text-center">
            <div class="absolute -top-16 -left-16 w-64 h-64 rounded-full bg-[#00e5ff]/10 blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-16 -right-16 w-64 h-64 rounded-full bg-[#ff2e93]/10 blur-3xl pointer-events-none"></div>

            <div class="relative">
                <h2 class="text-2xl md:text-4xl font-extrabold text-white">
                    Ada pertanyaan seputar <span class="text-[#00e5ff]">jaringan?</span>
                </h2>
                <p class="text-slate-300 mt-3 max-w-2xl mx-auto">
                    Ceritakan kebutuhan Anda, tim kami siap memberi solusi dan rekomendasi yang tepat.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                    <a href="https://wa.me/6281234567890?text={{ urlencode('Halo Cyber Punk, saya ingin konsultasi kebutuhan jaringan') }}"
                        target="_blank"
                        class="inline-block bg-[#00e5ff] text-[#0b1224] font-bold px-8 py-4 rounded-full hover:scale-105 hover:shadow-[0_0_30px_rgba(0,229,255,0.6)] transition">
                        Konsultasi via WhatsApp
                    </a>
                    <a href="{{ url('/layanan') }}"
                        class="inline-block border border-[#ff2e93] text-[#ff2e93] font-bold px-8 py-4 rounded-full hover:bg-[#ff2e93] hover:text-white hover:shadow-[0_0_30px_rgba(255,46,147,0.5)] transition">
                        Lihat Layanan
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection