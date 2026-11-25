@extends('layouts.layout')

@section('title', 'Layanan')
@section('content')

    {{-- HEADER (dengan pola grid + glow neon) --}}
    {{-- HEADER (video transparan + pola grid + glow neon) --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-[#0b1224] via-[#101a33] to-[#1b2750] py-16 md:py-24">

        {{-- Video background (looping, transparan) --}}
        <video autoplay muted loop playsinline preload="auto"
            class="absolute inset-0 h-full w-full object-cover opacity-40">
            <source src="{{ asset('assets/video/layanan.mp4') }}" type="video/mp4">
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
                Layanan
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-white mt-3 mb-5">
                Solusi Jaringan untuk
                <span class="text-[#00e5ff] drop-shadow-[0_0_14px_rgba(0,229,255,0.7)]">Setiap Kebutuhan</span>
            </h1>
            <p class="max-w-3xl mx-auto text-slate-300 text-base md:text-lg leading-relaxed">
                Pilih layanan yang sesuai, atau konsultasikan kebutuhan Anda dan kami rancang paket yang tepat.
            </p>
        </div>
    </section>

    {{-- DAFTAR LAYANAN --}}
    <section class="py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- 01 --}}
                <div class="group bg-[#14203f] rounded-xl border-t-4 border-[#00e5ff] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/img/1.png') }}" alt="Internet Dedicated"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">01</span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <h3 class="text-lg font-bold text-white mb-2 group-hover:text-[#00e5ff] transition">Internet Dedicated</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Koneksi internet simetris dengan bandwidth terjamin, IP publik statis, dan SLA.</p>
                        <ul class="space-y-2 text-sm text-slate-300 mt-5 pt-5 border-t border-white/10 flex-1">
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Bandwidth simetris 1:1</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> IP publik statis</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> SLA &amp; kompensasi</li>
                        </ul>
                        <a href="https://wa.me/6281234567890?text={{ urlencode('Halo Cyber Punk, saya tertarik dengan layanan Internet Dedicated') }}"
                            target="_blank"
                            class="mt-6 w-full text-center py-3 px-4 bg-[#101a33] hover:bg-[#00e5ff] text-[#00e5ff] hover:text-[#0b1224] hover:shadow-[0_0_20px_rgba(0,229,255,0.5)] font-semibold rounded-lg transition">
                            Tanya Layanan Ini
                        </a>
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
                    <div class="p-7 flex flex-col flex-1">
                        <h3 class="text-lg font-bold text-white mb-2 group-hover:text-[#ff2e93] transition">Jaringan LAN, WAN &amp; Wi-Fi</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Perancangan jaringan kantor, gedung, hingga multi-cabang dengan Wi-Fi enterprise.</p>
                        <ul class="space-y-2 text-sm text-slate-300 mt-5 pt-5 border-t border-white/10 flex-1">
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Site survey &amp; desain topologi</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Wi-Fi enterprise &amp; roaming</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Koneksi antar-cabang (VPN)</li>
                        </ul>
                        <a href="https://wa.me/6281234567890?text={{ urlencode('Halo Cyber Punk, saya tertarik dengan layanan Jaringan LAN, WAN & Wi-Fi') }}"
                            target="_blank"
                            class="mt-6 w-full text-center py-3 px-4 bg-[#101a33] hover:bg-[#00e5ff] text-[#00e5ff] hover:text-[#0b1224] hover:shadow-[0_0_20px_rgba(0,229,255,0.5)] font-semibold rounded-lg transition">
                            Tanya Layanan Ini
                        </a>
                    </div>
                </div>

                {{-- 03 --}}
                <div class="group bg-[#14203f] rounded-xl border-t-4 border-[#00e5ff] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/img/3.png') }}" alt="Instalasi Fiber Optik"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">03</span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <h3 class="text-lg font-bold text-white mb-2 group-hover:text-[#00e5ff] transition">Instalasi Fiber Optik</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Penarikan kabel, terminasi, splicing, dan pengukuran OTDR oleh teknisi bersertifikat.</p>
                        <ul class="space-y-2 text-sm text-slate-300 mt-5 pt-5 border-t border-white/10 flex-1">
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Splicing &amp; terminasi</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Pengujian OTDR</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Dokumentasi as-built</li>
                        </ul>
                        <a href="https://wa.me/6281234567890?text={{ urlencode('Halo Cyber Punk, saya tertarik dengan layanan Instalasi Fiber Optik') }}"
                            target="_blank"
                            class="mt-6 w-full text-center py-3 px-4 bg-[#101a33] hover:bg-[#00e5ff] text-[#00e5ff] hover:text-[#0b1224] hover:shadow-[0_0_20px_rgba(0,229,255,0.5)] font-semibold rounded-lg transition">
                            Tanya Layanan Ini
                        </a>
                    </div>
                </div>

                {{-- 04 --}}
                <div class="group bg-[#14203f] rounded-xl border-t-4 border-[#ff2e93] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(255,46,147,0.2)]">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/img/4.png') }}" alt="Keamanan Jaringan"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">04</span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <h3 class="text-lg font-bold text-white mb-2 group-hover:text-[#ff2e93] transition">Keamanan Jaringan</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Lindungi aset digital dengan firewall, segmentasi jaringan, dan VPN.</p>
                        <ul class="space-y-2 text-sm text-slate-300 mt-5 pt-5 border-t border-white/10 flex-1">
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Firewall &amp; IDS/IPS</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> VPN site-to-site &amp; remote</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Hardening perangkat</li>
                        </ul>
                        <a href="https://wa.me/6281234567890?text={{ urlencode('Halo Cyber Punk, saya tertarik dengan layanan Keamanan Jaringan') }}"
                            target="_blank"
                            class="mt-6 w-full text-center py-3 px-4 bg-[#101a33] hover:bg-[#00e5ff] text-[#00e5ff] hover:text-[#0b1224] hover:shadow-[0_0_20px_rgba(0,229,255,0.5)] font-semibold rounded-lg transition">
                            Tanya Layanan Ini
                        </a>
                    </div>
                </div>

                {{-- 05 --}}
                <div class="group bg-[#14203f] rounded-xl border-t-4 border-[#00e5ff] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/img/5.png') }}" alt="Managed Service & NOC"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">05</span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <h3 class="text-lg font-bold text-white mb-2 group-hover:text-[#00e5ff] transition">Managed Service &amp; NOC</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Pemantauan dan perawatan jaringan oleh tim kami, termasuk penanganan gangguan.</p>
                        <ul class="space-y-2 text-sm text-slate-300 mt-5 pt-5 border-t border-white/10 flex-1">
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Monitoring 24/7</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Penanganan insiden cepat</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Laporan performa bulanan</li>
                        </ul>
                        <a href="https://wa.me/6281234567890?text={{ urlencode('Halo Cyber Punk, saya tertarik dengan layanan Managed Service & NOC') }}"
                            target="_blank"
                            class="mt-6 w-full text-center py-3 px-4 bg-[#101a33] hover:bg-[#00e5ff] text-[#00e5ff] hover:text-[#0b1224] hover:shadow-[0_0_20px_rgba(0,229,255,0.5)] font-semibold rounded-lg transition">
                            Tanya Layanan Ini
                        </a>
                    </div>
                </div>

                {{-- 06 --}}
                <div class="group bg-[#14203f] rounded-xl border-t-4 border-[#ff2e93] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(255,46,147,0.2)]">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/img/6.png') }}" alt="Konsultasi & Audit Jaringan"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">06</span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <h3 class="text-lg font-bold text-white mb-2 group-hover:text-[#ff2e93] transition">Konsultasi &amp; Audit Jaringan</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Evaluasi kondisi jaringan, temukan bottleneck dan celah keamanan, lengkap dengan rekomendasi.</p>
                        <ul class="space-y-2 text-sm text-slate-300 mt-5 pt-5 border-t border-white/10 flex-1">
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Audit performa &amp; keamanan</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Rencana peningkatan kapasitas</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Roadmap infrastruktur</li>
                        </ul>
                        <a href="https://wa.me/6281234567890?text={{ urlencode('Halo Cyber Punk, saya tertarik dengan layanan Konsultasi & Audit Jaringan') }}"
                            target="_blank"
                            class="mt-6 w-full text-center py-3 px-4 bg-[#101a33] hover:bg-[#00e5ff] text-[#00e5ff] hover:text-[#0b1224] hover:shadow-[0_0_20px_rgba(0,229,255,0.5)] font-semibold rounded-lg transition">
                            Tanya Layanan Ini
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- KENAPA PILIH KAMI (statistik) --}}
    <section class="py-16 md:py-20 bg-[#0e1730] border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            <div class="text-center mb-12">
                <span class="text-[#ff2e93] font-semibold text-sm tracking-[3px] uppercase">Keunggulan</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-white mt-3">
                    Kenapa Pilih <span class="text-[#00e5ff]">Cyber Punk</span>
                </h2>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                <div class="bg-[#14203f] rounded-xl py-8 px-4 border border-white/5 hover:border-[#00e5ff]/50 transition">
                    <div class="text-4xl md:text-5xl font-extrabold text-[#00e5ff] drop-shadow-[0_0_12px_rgba(0,229,255,0.6)]">10+</div>
                    <p class="text-slate-400 text-sm mt-2">Tahun Pengalaman</p>
                </div>
                <div class="bg-[#14203f] rounded-xl py-8 px-4 border border-white/5 hover:border-[#ff2e93]/50 transition">
                    <div class="text-4xl md:text-5xl font-extrabold text-[#ff2e93] drop-shadow-[0_0_12px_rgba(255,46,147,0.6)]">200+</div>
                    <p class="text-slate-400 text-sm mt-2">Klien Terlayani</p>
                </div>
                <div class="bg-[#14203f] rounded-xl py-8 px-4 border border-white/5 hover:border-[#00e5ff]/50 transition">
                    <div class="text-4xl md:text-5xl font-extrabold text-[#00e5ff] drop-shadow-[0_0_12px_rgba(0,229,255,0.6)]">99.9%</div>
                    <p class="text-slate-400 text-sm mt-2">Uptime Jaringan</p>
                </div>
                <div class="bg-[#14203f] rounded-xl py-8 px-4 border border-white/5 hover:border-[#ff2e93]/50 transition">
                    <div class="text-4xl md:text-5xl font-extrabold text-[#ff2e93] drop-shadow-[0_0_12px_rgba(255,46,147,0.6)]">24/7</div>
                    <p class="text-slate-400 text-sm mt-2">Dukungan NOC</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ALUR KERJA --}}
    <section class="py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            <div class="text-center mb-12">
                <span class="text-[#ff2e93] font-semibold text-sm tracking-[3px] uppercase">Alur Kerja</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-white mt-3">
                    Dari Konsultasi sampai <span class="text-[#00e5ff]">Beroperasi</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="relative bg-[#14203f] rounded-xl p-7 border-l-4 border-[#00e5ff]">
                    <span class="text-5xl font-extrabold text-white/10 absolute top-3 right-5">1</span>
                    <h3 class="text-lg font-bold text-white mb-2">Konsultasi</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">Kami memahami kebutuhan dan target jaringan Anda.</p>
                </div>
                <div class="relative bg-[#14203f] rounded-xl p-7 border-l-4 border-[#ff2e93]">
                    <span class="text-5xl font-extrabold text-white/10 absolute top-3 right-5">2</span>
                    <h3 class="text-lg font-bold text-white mb-2">Survey &amp; Desain</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">Survey lokasi dan perancangan topologi serta penawaran.</p>
                </div>
                <div class="relative bg-[#14203f] rounded-xl p-7 border-l-4 border-[#00e5ff]">
                    <span class="text-5xl font-extrabold text-white/10 absolute top-3 right-5">3</span>
                    <h3 class="text-lg font-bold text-white mb-2">Instalasi</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">Pemasangan dan pengujian oleh teknisi bersertifikat.</p>
                </div>
                <div class="relative bg-[#14203f] rounded-xl p-7 border-l-4 border-[#ff2e93]">
                    <span class="text-5xl font-extrabold text-white/10 absolute top-3 right-5">4</span>
                    <h3 class="text-lg font-bold text-white mb-2">Monitoring</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">Pemantauan berkelanjutan dan dukungan saat ada gangguan.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- BANNER CTA --}}
    <section class="pb-20">
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#14203f] via-[#1b2750] to-[#14203f] border border-[#00e5ff]/30 px-8 py-12 md:py-14 text-center">
                <div class="absolute -top-16 -left-16 w-64 h-64 rounded-full bg-[#00e5ff]/10 blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-16 -right-16 w-64 h-64 rounded-full bg-[#ff2e93]/10 blur-3xl pointer-events-none"></div>

                <div class="relative">
                    <h2 class="text-2xl md:text-4xl font-extrabold text-white mb-4">
                        Belum Tahu Layanan yang <span class="text-[#00e5ff]">Cocok?</span>
                    </h2>
                    <p class="text-slate-300 max-w-2xl mx-auto mb-8">
                        Ceritakan kondisi jaringan Anda, tim kami akan membantu merekomendasikan solusi yang tepat. Konsultasi awal gratis.
                    </p>
                    <a href="https://wa.me/6281234567890?text={{ urlencode('Halo Cyber Punk, saya ingin konsultasi kebutuhan jaringan') }}"
                        target="_blank"
                        class="inline-block px-8 py-4 bg-[#00e5ff] text-[#0b1224] font-bold rounded-full hover:scale-105 hover:shadow-[0_0_30px_rgba(0,229,255,0.6)] transition">
                        Konsultasi via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection