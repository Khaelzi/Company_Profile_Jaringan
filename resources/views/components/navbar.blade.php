<div>
    <nav class="bg-[#0b1224] border-b border-white/10">
        <div class="max-w-7xl flex flex-wrap items-center justify-between mx-auto p-4">

            <!-- LOGO -->
            <a href="{{ route('beranda') }}" class="flex items-center space-x-3">
                <img src="{{ asset('assets/img/logo.png') }}" class="h-12 w-auto" alt="Logo Cyber Punk">
            </a>

            <!-- TOMBOL HUBUNGI KAMI (WHATSAPP) + HAMBURGER -->
            <div class="flex items-center gap-3 lg:order-2">
                <a href="https://wa.me/6281234567890" target="_blank"
                    class="inline-flex items-center gap-2 bg-[#00e5ff] hover:bg-[#00c4dc] text-[#0b1224] font-semibold px-5 py-3 rounded-full transition">

                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12.04 2a9.9 9.9 0 0 0-8.5 15l-1.3 4.7 4.8-1.25A10 10 0 1 0 12.04 2Zm0 18.2a8.2 8.2 0 0 1-4.17-1.14l-.3-.18-2.87.75.77-2.8-.2-.3A8.2 8.2 0 1 1 12.04 20.2Zm4.5-6.15c-.25-.12-1.47-.73-1.7-.81-.23-.08-.4-.12-.56.12-.17.25-.65.81-.8.98-.15.16-.3.18-.56.06-.25-.12-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.41-1.75-.15-.25-.02-.38.11-.5.11-.11.25-.29.37-.43.12-.14.16-.25.25-.42.08-.17.04-.31-.02-.43-.06-.12-.56-1.35-.77-1.85-.2-.48-.4-.42-.56-.43h-.48c-.17 0-.43.06-.65.31-.23.25-.86.84-.86 2.05s.88 2.38 1 2.54c.12.17 1.73 2.64 4.2 3.7.59.26 1.05.42 1.41.54.59.19 1.12.16 1.54.1.47-.07 1.47-.6 1.68-1.18.2-.58.2-1.08.14-1.18-.06-.1-.23-.16-.48-.29Z" />
                    </svg>

                    Hubungi Kami
                </a>

                <button data-collapse-toggle="navbar-cyberpunk" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-slate-300 rounded-lg lg:hidden hover:bg-white/10"
                    aria-controls="navbar-cyberpunk" aria-expanded="false">
                    <span class="sr-only">Buka menu</span>
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <!-- MENU NAVBAR -->
            <div class="hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-cyberpunk">
                <ul
                    class="flex flex-col lg:flex-row lg:items-center lg:space-x-8
                       font-medium mt-4 lg:mt-0 p-4 lg:p-0
                       border border-white/10 lg:border-0
                       rounded-lg bg-[#101a33] lg:bg-transparent">

                    <li>
                        <a href="{{ route('beranda') }}"
                            class="block py-2 px-3 lg:p-0 {{ request()->routeIs('beranda') ? 'text-[#00e5ff] font-semibold' : 'text-slate-300 hover:text-[#00e5ff]' }}">
                            Beranda
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('tentang-kami') }}"
                            class="block py-2 px-3 lg:p-0 {{ request()->routeIs('tentang-kami') ? 'text-[#00e5ff] font-semibold' : 'text-slate-300 hover:text-[#00e5ff]' }}">
                            Tentang Kami
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('layanan') }}"
                            class="block py-2 px-3 lg:p-0 {{ request()->routeIs('layanan') ? 'text-[#00e5ff] font-semibold' : 'text-slate-300 hover:text-[#00e5ff]' }}">
                            Layanan
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="block py-2 px-3 lg:p-0 {{ request()->routeIs('berita') ? 'text-[#00e5ff] font-semibold' : 'text-slate-300 hover:text-[#00e5ff]' }}">
                            Berita
                        </a>
                    </li>

                    {{-- TAMBAHAN: menu Proyek --}}
                    <li>
                        <a href="{{ route('proyek') }}"
                            class="block py-2 px-3 lg:p-0 {{ request()->routeIs('proyek') ? 'text-[#00e5ff] font-semibold' : 'text-slate-300 hover:text-[#00e5ff]' }}">
                            Proyek
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>