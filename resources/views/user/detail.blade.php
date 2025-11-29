@extends('user.component.master')
@section('judul', 'Detail Lapangan')
@section('konten')

    <!-- Hero Section -->
    <section class="gradient-bg pt-32 pb-20 relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
            <!-- Floating shapes -->
            <div class="absolute top-10 left-10 w-20 h-20 bg-white opacity-10 rounded-full floating-element"></div>
            <div class="absolute top-40 right-20 w-32 h-32 bg-white opacity-10 rounded-full floating-element"
                style="animation-delay: 1s;"></div>
            <div class="absolute bottom-20 left-20 w-24 h-24 bg-white opacity-10 rounded-full floating-element"
                style="animation-delay: 2s;"></div>

            <!-- Morphing shapes -->
            <div class="absolute top-1/4 right-1/4 w-64 h-64 bg-white opacity-5 morph-shape"></div>
            <div class="absolute bottom-1/4 left-1/4 w-48 h-48 bg-white opacity-5 morph-shape" style="animation-delay: 4s;">
            </div>

            <!-- Animated shuttlecocks -->
            <div class="absolute top-1/3 left-1/4 text-white text-4xl opacity-30 animate-shuttle-fly">
                🏸
            </div>
            <div class="absolute bottom-1/3 right-1/4 text-white text-4xl opacity-30 animate-shuttle-fly"
                style="animation-delay: 1s;">
                🏸
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center text-white stagger-animation">
                <div class="inline-block bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                    <span class="text-sm font-medium">Detail Lapangan Premium</span>
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-4 leading-tight">
                    {{ $kategori->name_222142 }} - <span class="text-gradient">Lapangan
                        {{ $lapangan->urutan_222142 }}</span>
                </h1>

                <div class="flex items-center justify-center space-x-6 text-lg opacity-90">
                    <div class="flex items-center">
                        <i class="fas fa-star text-accent mr-2"></i>
                        <span>4.8 (128 Reviews)</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>Jakarta Pusat</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-clock mr-2"></i>
                        <span>Buka 06:00 - 22:00</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detail Content Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <!-- Image Gallery -->
                <div class="space-y-6">
                    <!-- Main Image -->
                    <div class="rounded-3xl overflow-hidden shadow-2xl card-hover">
                        <img src="{{ asset('images/' . $kategori->foto_222142) }}"
                            alt="Lapangan {{ $kategori->name_222142 }}" class="w-full h-96 object-cover">
                    </div>

                    <!-- Thumbnail Gallery -->
                    <div class="grid grid-cols-3 gap-4">
                        <div
                            class="rounded-2xl overflow-hidden cursor-pointer border-2 border-transparent hover:border-primary transition-all duration-300">
                            <img src="{{ asset('images/' . $kategori->foto_222142) }}" alt="Thumbnail 1"
                                class="w-full h-24 object-cover">
                        </div>
                        <div
                            class="rounded-2xl overflow-hidden cursor-pointer border-2 border-transparent hover:border-primary transition-all duration-300">
                            <img src="{{ asset('images/' . $kategori->foto_222142) }}" alt="Thumbnail 2"
                                class="w-full h-24 object-cover">
                        </div>
                        <div
                            class="rounded-2xl overflow-hidden cursor-pointer border-2 border-transparent hover:border-primary transition-all duration-300">
                            <img src="{{ asset('images/' . $kategori->foto_222142) }}" alt="Thumbnail 3"
                                class="w-full h-24 object-cover">
                        </div>
                    </div>
                </div>

                <!-- Detail Information -->
                <div class="space-y-8">
                    <!-- Price & Status -->
                    <div class="bg-gradient-to-r from-primary to-primary-light rounded-3xl p-6 text-white shadow-xl">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-2xl font-bold opacity-90">Harga per Jam</div>
                                <div class="text-4xl font-black">Rp
                                    {{ number_format($kategori->harga_222142, 0, ',', '.') }}</div>
                            </div>
                            <div class="text-right">
                                <span class="inline-block bg-success px-4 py-2 rounded-full font-bold text-sm">
                                    <i class="fas fa-check-circle mr-2"></i>Tersedia
                                </span>
                                <div class="mt-2 text-sm opacity-90">Konfirmasi Instan</div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="glass-effect backdrop-blur-lg rounded-3xl p-6 border border-white/20">
                        <h3 class="text-2xl font-black text-dark mb-4">Deskripsi Lapangan</h3>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            {{ $lapangan->deskripsi_222142 ?? 'Lapangan bulutangkis premium dengan standar internasional. Dilengkapi dengan lighting system terbaik dan permukaan yang nyaman untuk bermain.' }}
                        </p>
                    </div>

                    <!-- Features -->
                    <div class="glass-effect backdrop-blur-lg rounded-3xl p-6 border border-white/20">
                        <h3 class="text-2xl font-black text-dark mb-6">Fasilitas & Spesifikasi</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center space-x-3">
                                <div
                                    class="w-10 h-10 bg-primary/20 rounded-xl flex items-center justify-center text-primary">
                                    <i class="fas fa-ruler-combined"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-dark">Ukuran Standar</div>
                                    <div class="text-sm text-gray-600">13.4m x 6.1m</div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div
                                    class="w-10 h-10 bg-primary/20 rounded-xl flex items-center justify-center text-primary">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-dark">Lighting LED</div>
                                    <div class="text-sm text-gray-600">300 Lux</div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div
                                    class="w-10 h-10 bg-primary/20 rounded-xl flex items-center justify-center text-primary">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-dark">Kapasitas</div>
                                    <div class="text-sm text-gray-600">4-6 Pemain</div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div
                                    class="w-10 h-10 bg-primary/20 rounded-xl flex items-center justify-center text-primary">
                                    <i class="fas fa-wind"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-dark">AC & Ventilasi</div>
                                    <div class="text-sm text-gray-600">Full AC</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Booking -->
                    <div class="glass-effect backdrop-blur-lg rounded-3xl p-6 border border-white/20">
                        <h3 class="text-2xl font-black text-dark mb-6">Pesan Sekarang</h3>
                        <form action="{{ route('pemesanan', $lapangan->id) }}" method="POST" class="space-y-4">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="text-dark font-semibold block text-sm mb-2">Tanggal Main</label>
                                    <input type="date" name="tanggal" min="{{ now()->format('Y-m-d') }}" required
                                        class="w-full bg-white border-2 border-gray-200 rounded-xl px-4 py-3 text-dark placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300">
                                </div>
                                <div>
                                    <label class="text-dark font-semibold block text-sm mb-2">Durasi (Jam)</label>
                                    <select name="durasi"
                                        class="w-full bg-white border-2 border-gray-200 rounded-xl px-4 py-3 text-dark focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-300">
                                        <option value="1">1 Jam</option>
                                        <option value="2">2 Jam</option>
                                        <option value="3">3 Jam</option>
                                        <option value="4">4 Jam</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex space-x-4">
                                <button type="submit"
                                    class="flex-1 bg-primary text-white py-4 rounded-xl font-bold text-lg hover:bg-primary-dark transition-all duration-300 transform hover:-translate-y-1 shadow-xl btn-glow flex items-center justify-center space-x-2">
                                    <i class="fas fa-calendar-check"></i>
                                    <span>Pesan Sekarang</span>
                                </button>

                                <a href="{{ route('lapangan') }}"
                                    class="flex-1 bg-white text-primary border-2 border-primary py-4 rounded-xl font-bold text-lg hover:bg-primary hover:text-white transition-all duration-300 transform hover:-translate-y-1 shadow-lg flex items-center justify-center space-x-2">
                                    <i class="fas fa-arrow-left"></i>
                                    <span>Kembali</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="py-20 bg-gray-50 relative overflow-hidden">
        <!-- Background elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full -translate-y-32 translate-x-32"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-accent/5 rounded-full translate-y-32 -translate-x-32"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16 stagger-animation">
                <h2 class="text-4xl md:text-5xl font-black text-dark mb-4">Ulasan <span class="text-gradient">Pemain</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Lihat apa kata pemain tentang pengalaman mereka di lapangan ini
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 stagger-animation">
                <!-- Review 1 -->
                <div class="bg-white p-6 rounded-3xl shadow-lg border border-gray-100 card-hover">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold mr-4 shadow-md">
                            A
                        </div>
                        <div>
                            <h4 class="font-black text-dark">Ahmad Rizki</h4>
                            <div class="flex text-accent">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "Lapangan sangat nyaman dengan lighting yang bagus. Permukaan tidak licin dan net dalam kondisi
                        baik. Recommended!"
                    </p>
                    <div class="text-sm text-gray-500">2 minggu yang lalu</div>
                </div>

                <!-- Review 2 -->
                <div class="bg-white p-6 rounded-3xl shadow-lg border border-gray-100 card-hover">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center text-white font-bold mr-4 shadow-md">
                            S
                        </div>
                        <div>
                            <h4 class="font-black text-dark">Sari Dewi</h4>
                            <div class="flex text-accent">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "AC bekerja dengan baik sehingga tidak gerah saat bermain. Lokasi strategis dan parkir luas. Harga
                        sesuai kualitas."
                    </p>
                    <div class="text-sm text-gray-500">1 bulan yang lalu</div>
                </div>
            </div>

            <!-- Load More Reviews -->
            <div class="text-center mt-12">
                <button
                    class="bg-white text-primary border-2 border-primary px-8 py-4 rounded-full font-bold text-lg hover:bg-primary hover:text-white transition-all duration-300 transform hover:-translate-y-1 shadow-lg flex items-center justify-center space-x-2 mx-auto">
                    <span>Lihat Semua Ulasan</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 gradient-bg relative overflow-hidden">
        <!-- Background elements -->
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white/5 rounded-full translate-x-1/2 translate-y-1/2"></div>
        </div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-black text-white mb-6">Siap Bermain Hari Ini?</h2>
            <p class="text-xl text-white opacity-90 max-w-2xl mx-auto mb-8">
                Jangan ragu untuk memesan lapangan ini dan nikmati pengalaman bermain bulutangkis terbaik
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('lapangan') }}"
                    class="inline-flex items-center justify-center bg-white text-primary px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:-translate-y-1 shadow-xl btn-glow space-x-2">
                    <i class="fas fa-search"></i>
                    <span>Cari Lapangan Lain</span>
                </a>
                <a href="https://wa.me/6281234567890" target="_blank"
                    class="inline-flex items-center justify-center bg-success text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-green-600 transition-all duration-300 transform hover:-translate-y-1 shadow-xl btn-glow space-x-2">
                    <i class="fab fa-whatsapp"></i>
                    <span>Tanya via WhatsApp</span>
                </a>
            </div>
        </div>
    </section>

@endsection