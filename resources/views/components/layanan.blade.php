<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan IT & Jaringan - Solusi Infrastruktur Profesional</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            900: '#1e3a8a',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-primary-600 selection:text-white">

    <!-- Bagian Daftar Layanan (Services Section) -->
    <section id="layanan" class="py-16 sm:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-primary-50 border border-primary-100 text-primary-700 text-xs font-semibold uppercase tracking-wider mb-3">
                Katalog Layanan IT & Jaringan
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Infrastruktur Jaringan & Solusi IT Andal untuk Bisnis
            </h2>
            <p class="mt-3 text-base sm:text-lg text-slate-600">
                Pilih kategori di bawah ini untuk solusi instalasi jaringan, keamanan sistem, hingga perawatan perangkat keras kantor Anda.
            </p>
        </div>

        <!-- Filter Kategori Interaktif -->
        <div id="category-filters" class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-12">
            <button data-category="all" class="filter-btn active px-5 py-2.5 rounded-xl text-sm font-semibold transition-all bg-primary-600 text-white shadow-md shadow-primary-600/20">
                Semua Layanan
            </button>
            <button data-category="network" class="filter-btn px-5 py-2.5 rounded-xl text-sm font-semibold transition-all bg-white text-slate-600 hover:bg-slate-100 border border-slate-200">
                Jaringan & LAN
            </button>
            <button data-category="hardware" class="filter-btn px-5 py-2.5 rounded-xl text-sm font-semibold transition-all bg-white text-slate-600 hover:bg-slate-100 border border-slate-200">
                Hardware & Server
            </button>
            <button data-category="security" class="filter-btn px-5 py-2.5 rounded-xl text-sm font-semibold transition-all bg-white text-slate-600 hover:bg-slate-100 border border-slate-200">
                Keamanan & CCTV
            </button>
            <button data-category="support" class="filter-btn px-5 py-2.5 rounded-xl text-sm font-semibold transition-all bg-white text-slate-600 hover:bg-slate-100 border border-slate-200">
                IT Support & Maintenance
            </button>
        </div>

        <!-- Grid Kartu Layanan -->
        <div id="services-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Kartu layanan dirender secara dinamis melalui JavaScript -->
        </div>
    </section>

    <!-- Modal Interaktif (Detail Layanan & Formulir Pemesanan) -->
    <div id="service-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm transition-opacity">
        <div class="bg-white rounded-3xl max-w-xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-slate-100">
            <!-- Modal Header -->
            <div class="sticky top-0 bg-white/95 backdrop-blur-md px-6 py-4 border-b border-slate-100 flex items-center justify-between z-10">
                <div class="flex items-center gap-2">
                    <span id="modal-badge" class="px-2.5 py-1 text-xs font-semibold rounded-lg bg-primary-50 text-primary-700">Detail Layanan</span>
                </div>
                <button onclick="closeModal()" class="p-2 rounded-xl text-slate-400 hover:text-slate-600 hover:bg-slate-100 transition-colors">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-6 sm:p-8">
                <!-- Mode Detail Layanan -->
                <div id="modal-detail-view" class="hidden">
                    <div class="flex items-start gap-4 mb-5">
                        <div id="detail-icon-box" class="w-12 h-12 rounded-2xl bg-primary-50 text-primary-600 flex items-center justify-center shrink-0">
                            <i id="detail-icon" data-lucide="wifi" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h3 id="detail-title" class="text-2xl font-bold text-slate-900">Judul Layanan</h3>
                            <p id="detail-price" class="text-primary-600 font-bold text-lg mt-1">Mulai Rp 1.500.000</p>
                        </div>
                    </div>

                    <p id="detail-full-desc" class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
                        Deskripsi lengkap layanan jaringan akan tampil di sini.
                    </p>

                    <div class="bg-slate-50 rounded-2xl p-5 border border-slate-100 mb-6">
                        <h4 class="font-semibold text-slate-900 text-sm uppercase tracking-wider mb-3">Cakupan Pekerjaan:</h4>
                        <ul id="detail-features-list" class="space-y-2.5 text-sm text-slate-700">
                            <!-- Fitur dirender via JS -->
                        </ul>
                    </div>

                    <div class="flex items-center justify-between text-xs text-slate-500 mb-6 px-1">
                        <span class="flex items-center gap-1.5"><i data-lucide="clock" class="w-4 h-4 text-primary-600"></i> Pengerjaan: <strong id="detail-duration" class="text-slate-700">1-3 Hari</strong></span>
                        <span class="flex items-center gap-1.5"><i data-lucide="shield-check" class="w-4 h-4 text-emerald-600"></i> Bergaransi Resmi</span>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <button id="switch-to-order-btn" class="flex-1 py-3.5 px-6 bg-primary-600 hover:bg-primary-700 text-white font-semibold rounded-xl shadow-md shadow-primary-600/20 transition-all text-center">
                            Pesan Layanan Ini
                        </button>
                        <button onclick="closeModal()" class="py-3.5 px-6 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-xl transition-all">
                            Tutup
                        </button>
                    </div>
                </div>

                <!-- Mode Formulir Pemesanan -->
                <div id="modal-order-view" class="hidden">
                    <h3 id="order-modal-title" class="text-2xl font-bold text-slate-900">Pesan Layanan IT</h3>
                    <p class="text-sm text-slate-600 mt-1 mb-6">Isi data di bawah ini untuk konsultasi atau penjadwalan kunjungan teknisi.</p>

                    <form id="order-form" onsubmit="handleOrderSubmit(event)" class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Pilihan Layanan</label>
                            <select id="order-service-select" required class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white text-slate-800 text-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none">
                                <!-- Opsi diisi via JS -->
                            </select>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Nama Lengkap / Instansi *</label>
                                <input type="text" id="order-name" required placeholder="Contoh: PT Maju Jaya / Budi" class="w-full px-4 py-3 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">No. WhatsApp *</label>
                                <input type="tel" id="order-phone" required placeholder="0812-3456-7890" class="w-full px-4 py-3 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Alamat Lokasi Pengerjaan / Kantor *</label>
                            <input type="text" id="order-address" required placeholder="Contoh: Jl. Mahoni, Koja, Jakarta Utara" class="w-full px-4 py-3 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Detail Kendala / Kebutuhan Jaringan</label>
                            <textarea id="order-notes" rows="3" placeholder="Contoh: Pasang titik LAN baru untuk 10 komputer kantor dan setting router Mikrotik..." class="w-full px-4 py-3 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none"></textarea>
                        </div>

                        <div class="pt-2 flex flex-col sm:flex-row gap-3">
                            <button type="submit" class="flex-1 py-3.5 px-6 bg-primary-600 hover:bg-primary-700 text-white font-semibold rounded-xl shadow-md shadow-primary-600/20 transition-all flex items-center justify-center gap-2">
                                <i data-lucide="send" class="w-4 h-4"></i>
                                <span>Kirim Permintaan</span>
                            </button>
                            <button type="button" onclick="closeModal()" class="py-3.5 px-6 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-xl transition-all">
                                Batal
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Mode Sukses Submit -->
                <div id="modal-success-view" class="hidden text-center py-6">
                    <div class="w-16 h-16 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="check-circle-2" class="w-9 h-9"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900">Permintaan Berhasil Dikirim!</h3>
                    <p id="success-message" class="text-slate-600 text-sm sm:text-base mt-2 max-w-md mx-auto">
                        Terima kasih! Teknisi kami akan segera menghubungi Anda melalui WhatsApp untuk koordinasi lebih lanjut.
                    </p>
                    <button onclick="closeModal()" class="mt-8 px-8 py-3 bg-primary-600 hover:bg-primary-700 text-white font-semibold rounded-xl transition-all">
                        Selesai
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Logic -->
    <script>
        // Data Layanan Jaringan & IT
        const servicesData = [
            {
                id: 'net-mikrotik',
                category: 'network',
                categoryLabel: 'Jaringan & LAN',
                icon: 'router',
                title: 'Konfigurasi & Setup Mikrotik / Router',
                shortDesc: 'Pengaturan bandwidth management (Queue), load balancing, firewall security, dan pembagian VLAN kantor/cafe.',
                fullDesc: 'Layanan profesional untuk konfigurasi perangkat router Mikrotik maupun Cisco. Cocok untuk kantor, sekolah, atau cafe yang membutuhkan manajemen internet stabil, pemblokiran situs tertentu, dan pembagian kecepatan yang adil antar pengguna.',
                price: 'Mulai Rp 750.000',
                duration: '1 Hari Pengerjaan',
                popular: true,
                features: [
                    'Setup Bandwidth Management & Hotspot',
                    'Konfigurasi Firewall & Keamanan Jaringan',
                    'Load Balancing Multi-ISP (Opsional)',
                    'Pengaturan VLAN & Subnetting',
                    'Garansi Setting & Free Konsultasi 1 Bulan'
                ]
            },
            {
                id: 'net-cabling',
                category: 'network',
                categoryLabel: 'Jaringan & LAN',
                icon: 'network',
                title: 'Instalasi Kabel LAN & Fiber Optic',
                shortDesc: 'Pemasangan kabel UTP/STP, crimping, testing port, hingga penarikan jalur kabel tray yang rapi dan terstruktur.',
                fullDesc: 'Solusi perapian dan pemasangan jalur kabel jaringan baru untuk gedung, ruko, atau kantor. Memastikan koneksi fisik antar komputer ke switch/server berjalan tanpa hambatan dan minim gangguan *packet loss*.',
                price: 'Mulai Rp 150.000 / Titik',
                duration: '1 - 3 Hari',
                popular: false,
                features: [
                    'Pemasangan Kabel UTP Cat6 / Cat5e',
                    'Instalasi Patch Panel & Rack Server',
                    'Testing & Certifying Koneksi Titik LAN',
                    'Labeling Kabel yang Rapi & Terstruktur',
                    'Penyediaan Material (Opsional)'
                ]
            },
            {
                id: 'hw-pc-server',
                category: 'hardware',
                categoryLabel: 'Hardware & Server',
                icon: 'server',
                title: 'Perakitan & Maintenance Server Kantor',
                shortDesc: 'Instalasi server fisik (Rackmount/Tower), sistem operasi server, dan backup data otomatis berkala.',
                fullDesc: 'Layanan pembangunan infrastruktur server lokal untuk penyimpanan data terpusat (NAS/File Server), Active Directory, atau web server lokal perusahaan dengan tingkat keandalan tinggi.',
                price: 'Mulai Rp 2.500.000',
                duration: '2 - 4 Hari',
                popular: true,
                features: [
                    'Perakitan Hardware Server & RAID Configuration',
                    'Instalasi Windows Server / Linux Ubuntu',
                    'Setup Samba File Sharing & Hak Akses User',
                    'Konfigurasi Backup Data Otomatis',
                    'Stress Testing & Thermal Check'
                ]
            },
            {
                id: 'sec-ciph-cctv',
                category: 'security',
                categoryLabel: 'Keamanan & CCTV',
                icon: 'video',
                title: 'Instalasi & Setting Kamera CCTV',
                shortDesc: 'Pemasangan kamera keamanan indoor/outdoor, setting DVR/NVR, serta integrasi monitoring via HP (Android/iOS).',
                fullDesc: 'Tingkatkan keamanan tempat usaha atau rumah Anda dengan sistem pengawasan kamera CCTV beresolusi tinggi. Bisa dipantau secara real-time dari jarak jauh melalui smartphone Anda.',
                price: 'Mulai Rp 1.200.000',
                duration: '1 - 2 Hari',
                popular: false,
                features: [
                    'Pemasangan Kamera CCTV & Penarikan Kabel',
                    'Konfigurasi DVR / NVR & Harddisk Storage',
                    'Setup Koneksi Online ke Smartphone',
                    'Pengaturan Sudut Pandang Optimal',
                    'Garansi Instalasi & Perangkat'
                ]
            },
            {
                id: 'sup-maintenance',
                category: 'support',
                categoryLabel: 'IT Support & Maintenance',
                icon: 'laptop',
                title: 'Maintenance Komputer & Laptop Berkala',
                shortDesc: 'Pembersihan hardware, instal ulang OS, pembersihan virus, upgrade SSD/RAM, dan troubleshooting PC.',
                fullDesc: 'Layanan perawatan rutin untuk perangkat komputer operasional kantor Anda agar tidak lambat, bebas error, dan terhindar dari kerusakan mendadak yang mengganggu produktivitas kerja.',
                price: 'Mulai Rp 200.000 / Unit',
                duration: '1 Hari',
                popular: false,
                features: [
                    'Pembersihan Debu & Penggantian Thermal Paste',
                    'Pemeriksaan Kesehatan Harddisk / SSD',
                    'Scan & Pembersihan Malware/Virus',
                    'Instalasi Software Pendukung Standar Kantor',
                    'Optimasi Performa Sistem'
                ]
            }
        ];

        // Render Kartu Layanan
        const servicesGrid = document.getElementById('services-grid');
        const filterButtons = document.querySelectorAll('.filter-btn');

        function renderServices(category = 'all') {
            servicesGrid.innerHTML = '';
            
            const filtered = category === 'all' 
                ? servicesData 
                : servicesData.filter(item => item.category === category);

            filtered.forEach(service => {
                const featuresHtml = service.features.slice(0, 3).map(feat => `
                    <li class="flex items-start gap-2.5 text-sm text-slate-600">
                        <i data-lucide="check" class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5"></i>
                        <span>${feat}</span>
                    </li>
                `).join('');

                const popularBadge = service.popular 
                    ? `<span class="px-3 py-1 text-xs font-bold uppercase tracking-wide rounded-full bg-amber-100 text-amber-800">Unggulan</span>`
                    : `<span class="px-3 py-1 text-xs font-medium rounded-full bg-slate-100 text-slate-600">${service.categoryLabel}</span>`;

                const card = document.createElement('div');
                card.className = 'group bg-white rounded-3xl p-7 border border-slate-200/80 shadow-sm hover:shadow-xl hover:shadow-slate-200/50 hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between';
                
                card.innerHTML = `
                    <div>
                        <div class="flex items-center justify-between gap-2 mb-6">
                            <div class="w-12 h-12 rounded-2xl bg-primary-50 text-primary-600 group-hover:bg-primary-600 group-hover:text-white transition-colors flex items-center justify-center">
                                <i data-lucide="${service.icon}" class="w-6 h-6"></i>
                            </div>
                            ${popularBadge}
                        </div>

                        <h4 class="text-xl font-bold text-slate-900 group-hover:text-primary-600 transition-colors mb-2.5">
                            ${service.title}
                        </h4>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            ${service.shortDesc}
                        </p>

                        <div class="border-t border-slate-100 pt-5 mb-6">
                            <p class="text-xs font-semibold uppercase tracking-wider text-slate-400 mb-3">Cakupan Utama:</p>
                            <ul class="space-y-2.5">
                                ${featuresHtml}
                            </ul>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-slate-100">
                        <div class="mb-4">
                            <span class="text-xs text-slate-500 block">Estimasi Biaya</span>
                            <span class="text-lg font-extrabold text-slate-900">${service.price}</span>
                        </div>
                        <div class="grid grid-cols-2 gap-2.5">
                            <button onclick="openModal('detail', '${service.id}')" class="px-4 py-2.5 text-sm font-semibold text-slate-700 bg-slate-100 hover:bg-slate-200 rounded-xl transition-colors text-center">
                                Detail
                            </button>
                            <button onclick="openModal('pesan', '${service.id}')" class="px-4 py-2.5 text-sm font-semibold text-white bg-primary-600 hover:bg-primary-700 rounded-xl shadow-sm shadow-primary-600/20 transition-colors text-center">
                                Pesan
                            </button>
                        </div>
                    </div>
                `;
                servicesGrid.appendChild(card);
            });

            // Re-inisialisasi ikon Lucide pada elemen baru
            lucide.createIcons();
        }

        // Event Listener untuk Tombol Filter
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Reset state aktif semua tombol
                filterButtons.forEach(b => {
                    b.classList.remove('bg-primary-600', 'text-white', 'shadow-md', 'shadow-primary-600/20');
                    b.classList.add('bg-white', 'text-slate-600', 'border', 'border-slate-200');
                });

                // Set tombol aktif
                btn.classList.remove('bg-white', 'text-slate-600', 'border', 'border-slate-200');
                btn.classList.add('bg-primary-600', 'text-white', 'shadow-md', 'shadow-primary-600/20');

                const selectedCategory = btn.getAttribute('data-category');
                renderServices(selectedCategory);
            });
        });

        // Logika Modal Interaktif
        const modal = document.getElementById('service-modal');
        const detailView = document.getElementById('modal-detail-view');
        const orderView = document.getElementById('modal-order-view');
        const successView = document.getElementById('modal-success-view');
        const modalBadge = document.getElementById('modal-badge');
        const serviceSelect = document.getElementById('order-service-select');

        // Populate opsi dropdown layanan di form pemesanan
        function populateServiceSelect() {
            serviceSelect.innerHTML = '<option value="Konsultasi Jaringan Umum">Konsultasi / Survey Lokasi (Gratis)</option>';
            servicesData.forEach(s => {
                const opt = document.createElement('option');
                opt.value = s.title;
                opt.textContent = `${s.title} (${s.price})`;
                serviceSelect.appendChild(opt);
            });
        }

        function openModal(mode, serviceId) {
            detailView.classList.add('hidden');
            orderView.classList.add('hidden');
            successView.classList.add('hidden');

            const service = servicesData.find(s => s.id === serviceId);

            if (mode === 'detail' && service) {
                modalBadge.textContent = service.categoryLabel;
                document.getElementById('detail-title').textContent = service.title;
                document.getElementById('detail-price').textContent = service.price;
                document.getElementById('detail-full-desc').textContent = service.fullDesc;
                document.getElementById('detail-duration').textContent = service.duration;
                
                const iconBox = document.getElementById('detail-icon-box');
                iconBox.innerHTML = `<i data-lucide="${service.icon}" class="w-6 h-6"></i>`;

                const featuresList = document.getElementById('detail-features-list');
                featuresList.innerHTML = service.features.map(f => `
                    <li class="flex items-start gap-2.5">
                        <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 shrink-0 mt-0.5"></i>
                        <span>${f}</span>
                    </li>
                `).join('');

                document.getElementById('switch-to-order-btn').onclick = () => openModal('pesan', service.id);

                detailView.classList.remove('hidden');
            } else {
                modalBadge.textContent = 'Formulir Pemesanan';
                document.getElementById('order-modal-title').textContent = 'Pesan Layanan / Survey Jaringan';
                
                if (service) {
                    serviceSelect.value = service.title;
                } else {
                    serviceSelect.value = 'Konsultasi Jaringan Umum';
                }

                orderView.classList.remove('hidden');
            }

            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
            lucide.createIcons();
        }

        function closeModal() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
        }

        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeModal();
            }
        });

        function handleOrderSubmit(e) {
            e.preventDefault();
            const name = document.getElementById('order-name').value;
            const selectedService = serviceSelect.value;

            document.getElementById('success-message').innerHTML = `
                Terima kasih, <strong class="text-slate-900">${name}</strong>! Permintaan Anda untuk layanan <strong class="text-primary-600">${selectedService}</strong> telah berhasil dicatat. Tim teknisi kami akan segera menghubungi Anda.
            `;

            orderView.classList.add('hidden');
            successView.classList.remove('hidden');
            modalBadge.textContent = 'Konfirmasi';
            document.getElementById('order-form').reset();
            lucide.createIcons();
        }

        document.addEventListener('DOMContentLoaded', () => {
            renderServices('all');
            populateServiceSelect();
            lucide.createIcons();
        });
    </script>
</body>
</html>