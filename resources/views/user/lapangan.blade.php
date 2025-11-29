@extends('user.component.master')
@section('judul', 'Lapangan')
@section('konten')

    <!-- Hero Section -->
    <section class="gradient-bg pt-32 pb-16 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10">
            <div class="absolute top-20 left-10 w-20 h-20 bg-white rounded-full"></div>
            <div class="absolute bottom-32 right-20 w-32 h-32 bg-white rounded-full"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center text-white max-w-3xl mx-auto">
                <div class="inline-block bg-white/20 backdrop-blur-sm rounded-full px-6 py-2 mb-6">
                    <span class="text-sm font-semibold">🏸 Pilih Lapangan Favorit</span>
                </div>

                <h1 class="text-5xl md:text-6xl font-black mb-6 leading-tight">
                    Lapangan <span class="text-accent">Premium</span>
                </h1>

                <p class="text-xl opacity-90 mb-8">
                    Pilih dari berbagai lapangan dengan fasilitas terbaik
                </p>
            </div>
        </div>
    </section>

    <!-- Lapangan Grid Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-black text-dark mb-3">
                    Pilihan <span class="text-primary">Lapangan</span>
                </h2>
                <p class="text-lg text-gray-600">Fasilitas lengkap, harga terjangkau</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($lapangan as $a)
                    <div
                        class="group bg-white rounded-3xl shadow-lg overflow-hidden border-2 border-gray-100 hover:border-primary hover:shadow-2xl transition-all duration-300">
                        <!-- Badge -->
                        <div class="absolute top-4 right-4 z-10">
                            <span class="bg-success text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                Tersedia
                            </span>
                        </div>

                        <!-- Image -->
                        <div class="relative h-56 overflow-hidden">
                            <img src="{{ asset('images/' . $kategori->where('id', $a->id_kategori)->first()->foto_222142) }}"
                                alt="Lapangan {{ $kategori->where('id', $a->id_kategori)->first()->name_222142 }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>

                            <!-- Favorite -->
                            <button
                                class="absolute top-4 left-4 w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white hover:text-primary transition-all">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-xl font-black text-dark">
                                    {{ $kategori->where('id', $a->id_kategori)->first()->name_222142 }}
                                </h3>
                                <span class="text-primary font-bold">No. {{ $a->urutan_222142 }}</span>
                            </div>

                            <!-- Facilities -->
                            <div class="flex items-center gap-4 mb-4 text-gray-500 text-sm">
                                <div class="flex items-center gap-1">
                                    <i class="fas fa-users"></i>
                                    <span>4-6</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <i class="fas fa-ruler"></i>
                                    <span>BWF</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <i class="fas fa-lightbulb"></i>
                                    <span>LED</span>
                                </div>
                            </div>

                            <!-- Rating & Price -->
                            <div class="flex items-center justify-between mb-4 pb-4 border-b border-gray-100">
                                <div class="flex items-center gap-2">
                                    <div class="flex text-accent text-sm">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="text-gray-500 text-xs">4.5</span>
                                </div>
                                <div class="text-right">
                                    <span class="text-2xl font-black text-primary">75K</span>
                                    <span class="text-gray-400 text-xs">/jam</span>
                                </div>
                            </div>

                            <!-- Date Selection -->
                            <form action="{{ route('pemesanan', $a->id) }}" method="POST" class="space-y-3">
                                @csrf
                                <div>
                                    <label class="text-dark font-semibold block text-sm mb-2">Tanggal Main</label>
                                    <input type="date" name="tanggal" min="{{ now()->format('Y-m-d') }}" required
                                        class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-3 text-dark focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-all">
                                </div>

                                <!-- Buttons -->
                                <div class="flex gap-3">
                                    <button type="submit"
                                        class="flex-1 bg-primary text-white py-3 rounded-xl font-bold hover:bg-primary-dark transition-all duration-300 hover:-translate-y-1 shadow-lg">
                                        Pesan
                                    </button>
                                    <a href="{{ route('detail', $a->id) }}"
                                        class="flex-1 bg-white text-primary border-2 border-primary py-3 rounded-xl font-bold hover:bg-primary hover:text-white transition-all duration-300 hover:-translate-y-1 text-center">
                                        Detail
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 group hover:bg-gray-50 rounded-2xl transition-all">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary text-3xl mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-black text-dark mb-2">Booking Aman</h3>
                    <p class="text-gray-600">Pembayaran terenkripsi & garansi</p>
                </div>

                <div class="text-center p-6 group hover:bg-gray-50 rounded-2xl transition-all">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary text-3xl mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-xl font-black text-dark mb-2">Konfirmasi Instan</h3>
                    <p class="text-gray-600">Notifikasi langsung via WhatsApp</p>
                </div>

                <div class="text-center p-6 group hover:bg-gray-50 rounded-2xl transition-all">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary text-3xl mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-xl font-black text-dark mb-2">Support 24/7</h3>
                    <p class="text-gray-600">Tim siap membantu kapan saja</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 gradient-bg relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full translate-x-1/2 translate-y-1/2"></div>
        </div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                Butuh Bantuan?
            </h2>
            <p class="text-xl text-white/90 max-w-2xl mx-auto mb-8">
                Tim kami siap membantu memilih lapangan terbaik untuk Anda
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/6281234567890" target="_blank"
                    class="inline-flex items-center justify-center gap-2 bg-success text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-green-600 transition-all duration-300 hover:-translate-y-1 shadow-xl">
                    <i class="fab fa-whatsapp"></i>
                    <span>Chat WhatsApp</span>
                </a>
                <a href="tel:+6281234567890"
                    class="inline-flex items-center justify-center gap-2 bg-white text-primary px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-all duration-300 hover:-translate-y-1 shadow-xl">
                    <i class="fas fa-phone"></i>
                    <span>Telepon</span>
                </a>
            </div>
        </div>
    </section>

@endsection