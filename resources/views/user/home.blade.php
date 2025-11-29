@extends('user.component.master')
@section('judul', 'Home')
@section('konten')

    <!-- Hero Section -->
    <section class="gradient-bg min-h-screen pt-24 pb-16 flex items-center relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10">
            <div class="absolute top-20 left-10 w-20 h-20 bg-white rounded-full"></div>
            <div class="absolute bottom-32 right-20 w-32 h-32 bg-white rounded-full"></div>
            <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white rounded-full"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center text-white">
                <div class="inline-block bg-white/20 backdrop-blur-sm rounded-full px-6 py-2 mb-8">
                    <span class="text-sm font-semibold">🏸 Platform Booking Terpercaya</span>
                </div>

                <h1 class="text-5xl md:text-7xl font-black mb-6 leading-tight">
                    @auth
                        Selamat Datang,<br>
                        <span class="text-accent">{{ auth()->user()->name }}</span>
                    @else
                        Booking Lapangan<br>
                        <span class="text-accent">Bulutangkis</span> Premium
                    @endauth
                </h1>

                <p class="text-xl md:text-2xl mb-12 opacity-90 max-w-2xl mx-auto">
                    Pesan lapangan favorit Anda dengan mudah, cepat, dan aman
                </p>

                <div class="flex flex-col sm:flex-row justify-center gap-4 mb-16">
                    <a href="{{ route('lapangan') }}"
                        class="bg-white text-primary px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-all duration-300 shadow-xl inline-flex items-center justify-center group">
                        Pesan Sekarang
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
                    </a>
                    <a href="#features"
                        class="border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white/10 transition-all duration-300 inline-flex items-center justify-center">
                        Pelajari Lebih Lanjut
                    </a>
                </div>

                <div class="grid grid-cols-3 gap-6 max-w-2xl mx-auto">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="text-3xl font-black mb-1">50+</div>
                        <div class="text-sm opacity-90">Lapangan</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="text-3xl font-black mb-1">5K+</div>
                        <div class="text-sm opacity-90">Pengguna</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="text-3xl font-black mb-1">4.9</div>
                        <div class="text-sm opacity-90">Rating</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-dark mb-4">
                    Kenapa Pilih <span class="text-primary">BookingLap?</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Pengalaman booking terbaik dengan fitur unggulan
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div
                    class="group bg-white p-8 rounded-3xl border-2 border-gray-100 hover:border-primary hover:shadow-2xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary text-3xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="text-2xl font-black text-dark mb-4">Proses Cepat</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Booking hanya 3 langkah. Konfirmasi instan via WhatsApp.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="group bg-white p-8 rounded-3xl border-2 border-gray-100 hover:border-primary hover:shadow-2xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary text-3xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-2xl font-black text-dark mb-4">Aman Terpercaya</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Transaksi aman dengan sistem pembayaran terverifikasi.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="group bg-white p-8 rounded-3xl border-2 border-gray-100 hover:border-primary hover:shadow-2xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary text-3xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-tag"></i>
                    </div>
                    <h3 class="text-2xl font-black text-dark mb-4">Harga Bersaing</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Penawaran spesial dan promo menarik setiap minggu.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 gradient-bg">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-white">
                <div>
                    <div class="text-5xl font-black mb-2">50+</div>
                    <div class="text-lg opacity-90">Lapangan</div>
                </div>
                <div>
                    <div class="text-5xl font-black mb-2">5K+</div>
                    <div class="text-lg opacity-90">Pengguna</div>
                </div>
                <div>
                    <div class="text-5xl font-black mb-2">98%</div>
                    <div class="text-lg opacity-90">Kepuasan</div>
                </div>
                <div>
                    <div class="text-5xl font-black mb-2">24/7</div>
                    <div class="text-lg opacity-90">Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-dark mb-4">
                    Testimoni <span class="text-primary">Pengguna</span>
                </h2>
                <p class="text-xl text-gray-600">Apa kata mereka tentang BookingLap</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold mr-4">
                            A
                        </div>
                        <div>
                            <h4 class="font-black text-dark">Ahmad Rizki</h4>
                            <div class="flex text-accent text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Proses booking sangat mudah dan cepat. Lapangan selalu dalam kondisi terbaik!"
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold mr-4">
                            S
                        </div>
                        <div>
                            <h4 class="font-black text-dark">Sari Dewi</h4>
                            <div class="flex text-accent text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Fasilitas lengkap dan harga terjangkau. Pelayanan sangat memuaskan!"
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold mr-4">
                            R
                        </div>
                        <div>
                            <h4 class="font-black text-dark">Rizky Pratama</h4>
                            <div class="flex text-accent text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Sistem booking simpel membuat saya fokus pada permainan. Recommended!"
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 gradient-bg relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full translate-x-1/2 translate-y-1/2"></div>
        </div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-4xl md:text-6xl font-black text-white mb-6">
                Mulai Main Sekarang
            </h2>
            <p class="text-xl text-white/90 max-w-2xl mx-auto mb-10">
                Booking lapangan impian Anda hari ini dan rasakan pengalaman bermain yang tak terlupakan
            </p>
            <a href="{{ route('lapangan') }}"
                class="inline-block bg-white text-primary px-10 py-5 rounded-full font-black text-xl hover:bg-gray-100 transition-all duration-300 shadow-2xl hover:-translate-y-1">
                Pesan Lapangan <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>

@endsection