<div>
    <!-- ================= FOOTER ================= -->
    <footer id="kontak" class="relative overflow-hidden bg-[#101a33] text-white border-t border-white/10">

        <div class="mx-auto max-w-7xl px-6 py-14 lg:px-8">
            <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-3 lg:gap-16">

                <!-- BRAND -->
                <div>
                    <h2 class="text-2xl font-extrabold">CYBER <span class="text-[#00e5ff]">PUNK</span></h2>
                    <p class="text-[9px] tracking-[2px] text-[#ff2e93] mb-5">NETWORK SOLUTION</p>

                    <p class="max-w-sm text-sm leading-7 text-gray-300">
                        Solusi jaringan komputer yang cepat, aman, dan andal untuk bisnis dan instansi Anda.
                    </p>
                </div>

                <!-- TAUTAN CEPAT -->
                <div class="border-t border-white/20 pt-8 md:border-l md:border-t-0 md:pl-10 md:pt-0">
                    <h3 class="mb-7 text-base font-bold">Tautan Cepat</h3>

                    <ul class="space-y-4 text-sm text-gray-300">
                        <li><a href="{{ route('beranda') }}" class="hover:text-[#00e5ff]">Beranda</a></li>
                        <li><a href="#" class="hover:text-[#00e5ff]">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-[#00e5ff]">Layanan</a></li>
                        <li><a href="#" class="hover:text-[#00e5ff]">Berita</a></li>
                        {{-- TAMBAHAN: link Proyek --}}
                        <li><a href="{{ route('proyek') }}" class="hover:text-[#00e5ff]">Proyek</a></li>
                        <li><a href="https://wa.me/6281234567890" target="_blank"
                                class="hover:text-[#00e5ff]">Hubungi Kami</a></li>
                    </ul>
                </div>

                <!-- KONTAK -->
                <div class="border-t border-white/20 pt-8 md:border-t-0 md:pt-0">
                    <h3 class="mb-7 text-base font-bold">Informasi & Kontak</h3>

                    <div class="mb-5">
                        <h4 class="mb-1 text-sm font-semibold text-[#00e5ff]">Jam Operasional</h4>
                        <p class="text-xs leading-6 text-gray-300">
                            Senin - Jumat: 08.00 - 17.00 WIB
                            <br>
                            Dukungan NOC: 24 jam
                        </p>
                    </div>

                    <div class="mb-5">
                        <h4 class="mb-1 text-sm font-semibold text-[#00e5ff]">Alamat</h4>
                        <p class="text-xs leading-6 text-gray-300">
                            Jl. Zimbabwe No. 123,
                            <br>
                            Ngawi, Jawa Barat
                        </p>
                    </div>

                    <div>
                        <h4 class="mb-1 text-sm font-semibold text-[#00e5ff]">Email</h4>
                        <p class="text-xs text-gray-300">info@cyberpunk.co.id</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- COPYRIGHT -->
        <div class="border-t border-white/15 bg-[#080e1c]">
            <div class="mx-auto max-w-7xl px-6 py-5 text-center">
                <p class="text-xs text-gray-300">
                    &copy; {{ date('Y') }} Cyber Punk. All Rights Reserved.
                </p>
            </div>
        </div>

    </footer>
</div>