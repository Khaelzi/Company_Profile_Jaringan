@extends('layouts.layout')

@section('title', 'Proyek')
@section('content')

    {{-- HEADER (pola grid + glow neon) --}}
       {{-- HEADER (video transparan + pola grid + glow neon) --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-[#0b1224] via-[#101a33] to-[#1b2750] py-16 md:py-24">

        {{-- Video background (looping, transparan) --}}
        <video autoplay muted loop playsinline preload="auto"
            class="absolute inset-0 h-full w-full object-cover opacity-40">
            <source src="{{ asset('assets/video/proyek.mp4') }}" type="video/mp4">
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
                Portofolio
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-white mt-3 mb-5">
                Proyek &amp;
                <span class="text-[#00e5ff] drop-shadow-[0_0_14px_rgba(0,229,255,0.7)]">Pencapaian</span>
            </h1>
            <p class="max-w-3xl mx-auto text-slate-300 text-base md:text-lg leading-relaxed">
                Bukti nyata komitmen kami membangun jaringan yang andal untuk perusahaan,
                instansi, dan kawasan industri.
            </p>
        </div>
    </section>


    {{-- ANGKA PENCAPAIAN --}}
    <section class="bg-[#101a33] border-y border-white/10">
        <div class="max-w-7xl mx-auto px-6 md:px-10 py-12 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">

            <div class="bg-[#14203f] rounded-xl py-8 px-4 border border-white/5 hover:border-[#00e5ff]/50 hover:-translate-y-1 transition duration-300">
                <p class="text-4xl font-extrabold text-[#00e5ff] drop-shadow-[0_0_12px_rgba(0,229,255,0.6)]">150+</p>
                <p class="text-sm text-slate-400 mt-2">Proyek Selesai</p>
            </div>
            <div class="bg-[#14203f] rounded-xl py-8 px-4 border border-white/5 hover:border-[#ff2e93]/50 hover:-translate-y-1 transition duration-300">
                <p class="text-4xl font-extrabold text-[#ff2e93] drop-shadow-[0_0_12px_rgba(255,46,147,0.6)]">500+</p>
                <p class="text-sm text-slate-400 mt-2">Titik Jaringan Terpasang</p>
            </div>
            <div class="bg-[#14203f] rounded-xl py-8 px-4 border border-white/5 hover:border-[#00e5ff]/50 hover:-translate-y-1 transition duration-300">
                <p class="text-4xl font-extrabold text-[#00e5ff] drop-shadow-[0_0_12px_rgba(0,229,255,0.6)]">120 km</p>
                <p class="text-sm text-slate-400 mt-2">Kabel Fiber Optik Digelar</p>
            </div>
            <div class="bg-[#14203f] rounded-xl py-8 px-4 border border-white/5 hover:border-[#ff2e93]/50 hover:-translate-y-1 transition duration-300">
                <p class="text-4xl font-extrabold text-[#ff2e93] drop-shadow-[0_0_12px_rgba(255,46,147,0.6)]">99,9%</p>
                <p class="text-sm text-slate-400 mt-2">Uptime Layanan</p>
            </div>

        </div>
    </section>


    {{-- DAFTAR PROYEK --}}
    <section class="relative overflow-hidden py-16 md:py-20">
        <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-[#ff2e93]/5 blur-3xl pointer-events-none"></div>

        <div class="relative max-w-7xl mx-auto px-6 md:px-10">

            <div class="text-center mb-12">
                <span class="text-[#ff2e93] font-semibold text-sm tracking-[3px] uppercase drop-shadow-[0_0_10px_rgba(255,46,147,0.6)]">
                    Hasil Kerja
                </span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-white mt-2">
                    Proyek <span class="text-[#00e5ff]">Unggulan Kami</span>
                </h2>
                <div class="w-16 h-1 bg-[#00e5ff] mx-auto mt-4 rounded-full shadow-[0_0_12px_rgba(0,229,255,0.7)]"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- 01 --}}
                <div class="group bg-[#14203f] rounded-xl border-t-4 border-[#00e5ff] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/img/proyek1.png') }}" alt="Backbone Fiber Kawasan Industri"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-[#00e5ff] text-[#0b1224] text-xs font-bold px-3 py-1 rounded-full">Fiber Optik</span>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">01</span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <p class="text-xs text-slate-500">Kawasan Industri Cikarang &bull; 2026</p>
                        <h3 class="text-lg font-bold text-white mt-2 mb-2 group-hover:text-[#00e5ff] transition">Backbone Fiber Kawasan Industri</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Penarikan dan terminasi kabel fiber optik antar-pabrik dengan pengujian OTDR dan dokumentasi lengkap.</p>
                        <ul class="space-y-2 text-sm text-slate-300 mt-5 pt-5 border-t border-white/10 flex-1">
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> 35 km kabel fiber</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> 48 titik terminasi</li>
                        </ul>
                    </div>
                </div>

                {{-- 02 --}}
                <div class="group bg-[#14203f] rounded-xl border-t-4 border-[#ff2e93] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(255,46,147,0.2)]">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/img/proyek2.png') }}" alt="Wi-Fi Gedung Perkantoran"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-[#ff2e93] text-white text-xs font-bold px-3 py-1 rounded-full">Wi-Fi Enterprise</span>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">02</span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <p class="text-xs text-slate-500">Gedung Perkantoran Jakarta &bull; 2026</p>
                        <h3 class="text-lg font-bold text-white mt-2 mb-2 group-hover:text-[#ff2e93] transition">Wi-Fi Gedung Perkantoran 12 Lantai</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Desain dan instalasi Wi-Fi enterprise dengan roaming mulus dan cakupan merata di setiap lantai.</p>
                        <ul class="space-y-2 text-sm text-slate-300 mt-5 pt-5 border-t border-white/10 flex-1">
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> 120 access point</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Cakupan 98% area</li>
                        </ul>
                    </div>
                </div>

                {{-- 03 --}}
                <div class="group bg-[#14203f] rounded-xl border-t-4 border-[#00e5ff] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/img/proyek3.png') }}" alt="Jaringan Terpadu Multi-Cabang"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-[#00e5ff] text-[#0b1224] text-xs font-bold px-3 py-1 rounded-full">Multi-Cabang</span>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">03</span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <p class="text-xs text-slate-500">Jaringan Ritel Nasional &bull; 2025</p>
                        <h3 class="text-lg font-bold text-white mt-2 mb-2 group-hover:text-[#00e5ff] transition">Jaringan Terpadu 40 Cabang Ritel</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Penyatuan seluruh cabang dalam satu jaringan VPN terkelola dengan monitoring terpusat.</p>
                        <ul class="space-y-2 text-sm text-slate-300 mt-5 pt-5 border-t border-white/10 flex-1">
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> 40 cabang terhubung</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Monitoring 24/7</li>
                        </ul>
                    </div>
                </div>

                {{-- 04 --}}
                <div class="group bg-[#14203f] rounded-xl border-t-4 border-[#ff2e93] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(255,46,147,0.2)]">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/img/proyek4.png') }}" alt="Keamanan Jaringan Kampus"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-[#ff2e93] text-white text-xs font-bold px-3 py-1 rounded-full">Keamanan</span>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">04</span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <p class="text-xs text-slate-500">Institusi Pendidikan Bekasi &bull; 2025</p>
                        <h3 class="text-lg font-bold text-white mt-2 mb-2 group-hover:text-[#ff2e93] transition">Penguatan Keamanan Jaringan Kampus</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Implementasi firewall, segmentasi jaringan, dan VPN untuk melindungi data akademik dan administrasi.</p>
                        <ul class="space-y-2 text-sm text-slate-300 mt-5 pt-5 border-t border-white/10 flex-1">
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> 6 segmen jaringan</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Firewall &amp; IDS/IPS</li>
                        </ul>
                    </div>
                </div>

                {{-- 05 --}}
                <div class="group bg-[#14203f] rounded-xl border-t-4 border-[#00e5ff] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/img/proyek5.png') }}" alt="Pengelolaan Jaringan Rumah Sakit"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-[#00e5ff] text-[#0b1224] text-xs font-bold px-3 py-1 rounded-full">Managed Service</span>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">05</span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <p class="text-xs text-slate-500">Rumah Sakit Swasta &bull; 2025</p>
                        <h3 class="text-lg font-bold text-white mt-2 mb-2 group-hover:text-[#00e5ff] transition">Pengelolaan Jaringan Rumah Sakit</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Pemantauan dan perawatan jaringan oleh tim NOC dengan penanganan gangguan yang cepat.</p>
                        <ul class="space-y-2 text-sm text-slate-300 mt-5 pt-5 border-t border-white/10 flex-1">
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Uptime 99,9%</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Respons &lt; 15 menit</li>
                        </ul>
                    </div>
                </div>

                {{-- 06 --}}
                <div class="group bg-[#14203f] rounded-xl border-t-4 border-[#ff2e93] flex flex-col overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(255,46,147,0.2)]">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('assets/img/proyek6.png') }}" alt="Internet Dedicated Perusahaan Logistik"
                            class="w-full h-44 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#14203f] via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-[#ff2e93] text-white text-xs font-bold px-3 py-1 rounded-full">Internet Dedicated</span>
                        <span class="absolute top-2 right-4 text-6xl font-extrabold text-white/20">06</span>
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <p class="text-xs text-slate-500">Perusahaan Logistik &bull; 2024</p>
                        <h3 class="text-lg font-bold text-white mt-2 mb-2 group-hover:text-[#ff2e93] transition">Internet Dedicated Perusahaan Logistik</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">Koneksi simetris dengan IP publik statis dan SLA untuk mendukung operasional gudang dan pelacakan.</p>
                        <ul class="space-y-2 text-sm text-slate-300 mt-5 pt-5 border-t border-white/10 flex-1">
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> Bandwidth 1:1</li>
                            <li class="flex items-center gap-2"><span class="text-[#00e5ff] font-bold">✓</span> SLA terjamin</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- STANDAR LAYANAN (SLA) --}}
    <section class="relative overflow-hidden bg-[#0e1730] border-y border-white/5 py-16 md:py-20">
        <div class="absolute inset-0 pointer-events-none"
            style="background-image: linear-gradient(rgba(0,229,255,0.04) 1px, transparent 1px), linear-gradient(90deg, rgba(0,229,255,0.04) 1px, transparent 1px); background-size: 40px 40px;"></div>

        <div class="relative max-w-7xl mx-auto px-6 md:px-10">
            <div class="text-center mb-12">
                <span class="text-[#ff2e93] font-semibold text-sm tracking-[3px] uppercase">Komitmen Mutu</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-white mt-2">
                    Standar <span class="text-[#00e5ff]">Layanan Kami</span>
                </h2>
                <div class="w-16 h-1 bg-[#00e5ff] mx-auto mt-4 rounded-full shadow-[0_0_12px_rgba(0,229,255,0.7)]"></div>
                <p class="max-w-2xl mx-auto text-slate-300 text-sm md:text-base mt-5">
                    Setiap proyek diukur dengan target yang jelas, agar kualitas layanan dapat dipertanggungjawabkan.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="group relative overflow-hidden bg-[#14203f] p-7 rounded-xl border-t-4 border-[#00e5ff] transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <span class="absolute -top-2 right-4 text-6xl font-extrabold text-white/10">01</span>
                    <p class="relative text-sm font-semibold text-slate-400">Waktu Instalasi</p>
                    <p class="relative text-3xl font-extrabold text-[#00e5ff] drop-shadow-[0_0_12px_rgba(0,229,255,0.6)] my-2">≤ 3 x 24 jam</p>
                    <p class="relative text-sm text-slate-400 leading-relaxed">Dihitung sejak survei dan persetujuan desain selesai.</p>
                </div>

                <div class="group relative overflow-hidden bg-[#14203f] p-7 rounded-xl border-t-4 border-[#ff2e93] transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(255,46,147,0.2)]">
                    <span class="absolute -top-2 right-4 text-6xl font-extrabold text-white/10">02</span>
                    <p class="relative text-sm font-semibold text-slate-400">Waktu Perbaikan</p>
                    <p class="relative text-3xl font-extrabold text-[#ff2e93] drop-shadow-[0_0_12px_rgba(255,46,147,0.6)] my-2">≤ 4 jam</p>
                    <p class="relative text-sm text-slate-400 leading-relaxed">Penanganan gangguan oleh tim NOC dan teknisi lapangan.</p>
                </div>

                <div class="group relative overflow-hidden bg-[#14203f] p-7 rounded-xl border-t-4 border-[#00e5ff] transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(0,229,255,0.2)]">
                    <span class="absolute -top-2 right-4 text-6xl font-extrabold text-white/10">03</span>
                    <p class="relative text-sm font-semibold text-slate-400">Ketersediaan Layanan</p>
                    <p class="relative text-3xl font-extrabold text-[#00e5ff] drop-shadow-[0_0_12px_rgba(0,229,255,0.6)] my-2">99,9%</p>
                    <p class="relative text-sm text-slate-400 leading-relaxed">Target uptime bulanan untuk layanan dedicated dan managed.</p>
                </div>

                <div class="group relative overflow-hidden bg-[#14203f] p-7 rounded-xl border-t-4 border-[#ff2e93] transition duration-300 hover:-translate-y-2 hover:shadow-[0_10px_40px_rgba(255,46,147,0.2)]">
                    <span class="absolute -top-2 right-4 text-6xl font-extrabold text-white/10">04</span>
                    <p class="relative text-sm font-semibold text-slate-400">Dukungan Teknis</p>
                    <p class="relative text-3xl font-extrabold text-[#ff2e93] drop-shadow-[0_0_12px_rgba(255,46,147,0.6)] my-2">24/7</p>
                    <p class="relative text-sm text-slate-400 leading-relaxed">Monitoring dan bantuan teknis sepanjang waktu.</p>
                </div>

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
                    Punya proyek <span class="text-[#00e5ff]">jaringan?</span>
                </h2>
                <p class="text-slate-300 mt-3 max-w-2xl mx-auto">
                    Ceritakan kebutuhan Anda, tim kami siap memberi solusi dan estimasi yang tepat.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                    <a href="https://wa.me/6281234567890?text={{ urlencode('Halo Cyber Punk, saya ingin mendiskusikan proyek jaringan') }}"
                        target="_blank"
                        class="inline-block bg-[#00e5ff] text-[#0b1224] font-bold px-8 py-4 rounded-full hover:scale-105 hover:shadow-[0_0_30px_rgba(0,229,255,0.6)] transition">
                        Diskusikan Proyek via WhatsApp
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