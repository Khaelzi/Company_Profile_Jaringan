@extends('layouts.layout')

@section('title', 'Tentang Kami')
@section('content')

    {{-- HEADER --}}
    <section class="bg-gradient-to-br from-[#0b1224] via-[#101a33] to-[#1b2750] py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-6 md:px-10 text-center">
            <span class="text-[#ff2e93] font-semibold text-sm tracking-[3px] uppercase">
                Profil Perusahaan
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-white mt-3 mb-5">
                Tentang <span class="text-[#00e5ff]">Cyber Punk</span>
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
            <div class="bg-[#101a33] rounded-lg px-6 md:px-16 py-10 md:py-14">
                <p class="max-w-4xl mx-auto text-slate-300 text-base md:text-[19px] leading-relaxed text-justify">
                    Cyber Punk bergerak di bidang jaringan komputer dan infrastruktur telekomunikasi.
                    Kami melayani perancangan, instalasi, serta pengelolaan jaringan untuk perkantoran,
                    instansi pendidikan, kawasan industri, dan bisnis ritel. Didukung teknisi bersertifikat
                    dan perangkat berkualitas, kami memberikan layanan purna jual yang responsif.
                </p>
            </div>
        </div>
    </section>


    {{-- VISI & MISI --}}
    <section class="pb-16 md:pb-20">
        <div class="max-w-7xl mx-auto px-6 md:px-10">

            <div class="text-center mb-12">
                <span class="text-[#ff2e93] font-semibold text-sm tracking-[3px] uppercase">
                    Arah & Tujuan
                </span>
                <h2 class="text-2xl md:text-3xl font-bold text-white mt-2">
                    Visi <span class="text-[#00e5ff]">&</span> Misi
                </h2>
                <div class="w-16 h-1 bg-[#00e5ff] mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                {{-- VISI --}}
                <div class="bg-[#14203f] p-8 md:p-10 rounded-xl border-l-4 border-[#00e5ff]">
                    <span
                        class="inline-block bg-[#00e5ff] text-[#0b1224] text-xs font-bold px-3 py-1 rounded uppercase tracking-wider mb-4">
                        Visi Kami
                    </span>
                    <p class="text-slate-300 text-base leading-relaxed text-justify">
                        Menjadi mitra infrastruktur jaringan terpercaya yang menghubungkan bisnis di seluruh
                        Indonesia dengan teknologi yang aman, cepat, dan berkelanjutan.
                    </p>
                </div>

                {{-- MISI --}}
                <div class="bg-[#14203f] p-8 md:p-10 rounded-xl border-l-4 border-[#ff2e93]">
                    <span
                        class="inline-block bg-[#ff2e93] text-white text-xs font-bold px-3 py-1 rounded uppercase tracking-wider mb-4">
                        Misi Kami
                    </span>
                    <ul class="space-y-3 text-slate-300 text-base leading-relaxed">
                        <li class="flex items-start gap-3">
                            <span class="text-[#00e5ff] font-bold">•</span>
                            <span>Menyediakan solusi jaringan yang andal dan sesuai kebutuhan klien.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-[#00e5ff] font-bold">•</span>
                            <span>Mengutamakan keamanan data dan kontinuitas operasional pelanggan.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-[#00e5ff] font-bold">•</span>
                            <span>Mengembangkan SDM teknis yang kompeten dan bersertifikat.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-[#00e5ff] font-bold">•</span>
                            <span>Memberikan dukungan yang cepat dan transparan.</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>


    {{-- NILAI PERUSAHAAN --}}
    <section class="bg-[#101a33] py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-6 md:px-10">

            <div class="text-center mb-12">
                <span class="text-[#ff2e93] font-semibold text-sm tracking-[3px] uppercase">
                    Nilai Kami
                </span>
                <h2 class="text-2xl md:text-3xl font-bold text-white mt-2">
                    Prinsip yang Kami Pegang
                </h2>
                <div class="w-16 h-1 bg-[#00e5ff] mx-auto mt-4 rounded-full"></div>
            </div>

            @php
                $nilai = [
                    ['judul' => 'Andal', 'isi' => 'Jaringan yang stabil adalah janji, bukan bonus.'],
                    ['judul' => 'Aman', 'isi' => 'Keamanan dirancang sejak awal, bukan ditambahkan belakangan.'],
                    ['judul' => 'Transparan', 'isi' => 'Harga, SLA, dan laporan yang jelas dan mudah dipahami.'],
                    ['judul' => 'Inovatif', 'isi' => 'Terus mengadopsi teknologi baru yang relevan bagi klien.'],
                ];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($nilai as $item)
                    <div class="bg-[#14203f] p-7 rounded-xl border-t-4 border-[#00e5ff]">
                        <h3 class="text-xl font-bold text-white mb-2">{{ $item['judul'] }}</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">{{ $item['isi'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection