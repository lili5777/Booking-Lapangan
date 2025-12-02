@extends('user.component.master')
@section('judul', 'Riwayat')
@section('konten')

    <!-- Hero Section -->
    <section class="gradient-bg min-h-[40vh] pt-24 pb-16 flex items-center relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10">
            <div class="absolute top-20 left-10 w-20 h-20 bg-white rounded-full"></div>
            <div class="absolute bottom-32 right-20 w-32 h-32 bg-white rounded-full"></div>
        </div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-black text-white mb-6">
                Riwayat <span class="text-accent">Booking</span>
            </h1>
            <p class="text-xl text-white/90 max-w-2xl mx-auto">
                Lihat dan kelola semua pemesanan lapangan bulutangkis Anda
            </p>
        </div>
    </section>

    <!-- Booking History Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-black text-dark mb-3">
                    Daftar <span class="text-primary">Pemesanan</span>
                </h2>
                <p class="text-lg text-gray-600">Semua riwayat booking Anda dalam satu tempat</p>
            </div>

            @forelse ($booking as $b)
                <div
                    class="group bg-white p-8 rounded-3xl border-2 border-gray-100 hover:border-primary hover:shadow-2xl transition-all duration-300 mb-8">
                    <div class="flex flex-col lg:flex-row gap-8">
                        <!-- Gambar Lapangan -->
                        <div class="w-full lg:w-1/4 flex justify-center lg:justify-start">
                            <div class="relative overflow-hidden rounded-2xl w-full max-w-xs h-48">
                                <img src="{{ asset('images/' . $kategori->where('id', $lapangan->where('id', $b->id_lapangan)->first()->id_kategori)->first()->foto_222142) }}"
                                    alt="Lapangan"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 rounded-full font-semibold text-sm text-white
                                                {{ $b->status_222142 == 'proses' ? 'bg-yellow-500' :
                ($b->status_222142 == 'aktif' ? 'bg-green-600' :
                    ($b->status_222142 == 'selesai' ? 'bg-blue-600' : 'bg-red-600')) }}">
                                        {{ ucfirst($b->status_222142) }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Detail Booking -->
                        <div class="flex-grow lg:w-1/2">
                            <h3 class="text-2xl font-black text-dark mb-4">
                                {{ $kategori->where('id', $lapangan->where('id', $b->id_lapangan)->first()->id_kategori)->first()->name_222142 ?? 'Kategori Tidak Ditemukan' }}
                            </h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center">
                                        <i class="fas fa-map-marker-alt text-primary"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Lapangan</p>
                                        <p class="font-semibold text-dark">
                                            {{ $lapangan->where('id', $b->id_lapangan)->first()->urutan_222142 ?? 'Data tidak tersedia' }}
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center">
                                        <i class="fas fa-calendar text-primary"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Tanggal</p>
                                        <p class="font-semibold text-dark">{{ $b->tgl_booking_222142 }}</p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center">
                                        <i class="fas fa-clock text-primary"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Mulai</p>
                                        <p class="font-semibold text-dark">{{ $b->jam_mulai_222142 }}</p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center">
                                        <i class="fas fa-flag-checkered text-primary"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Selesai</p>
                                        <p class="font-semibold text-dark">{{ $b->jam_selesai_222142 }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total & Aksi -->
                        <div
                            class="w-full lg:w-1/4 flex flex-col justify-between items-center lg:items-end space-y-4 pt-4 lg:pt-0 border-t lg:border-t-0 border-gray-100">
                            <div class="text-center lg:text-right">
                                <p class="text-sm text-gray-500 mb-1">Total Biaya</p>
                                <p class="text-3xl font-black text-primary">Rp
                                    {{ number_format($b->total_222142, 0, ',', '.') }}</p>
                            </div>

                            @if ($b->status_222142 == 'proses' && !$konfir->where('id_booking', $b->id)->first())
                                <a href="{{ route('konfirbukti', $b->id) }}"
                                    class="w-full bg-primary text-white py-3 px-6 rounded-xl font-bold hover:bg-primary-dark transition-all duration-300 hover:-translate-y-1 shadow-lg group/btn inline-flex items-center justify-center">
                                    Konfirmasi Pembayaran
                                    <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
                                </a>
                            @endif

                            @if ($b->status_222142 == 'aktif')
                                <div class="flex items-center gap-2 text-green-600 text-sm">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Booking Aktif</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <!-- Empty State -->
                <div class="text-center py-16 bg-white rounded-3xl border-2 border-gray-100">
                    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-history text-gray-400 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-black text-dark mb-3">Belum Ada Riwayat</h3>
                    <p class="text-gray-600 max-w-md mx-auto mb-8">
                        Anda belum memiliki riwayat booking. Mulai pesan lapangan favorit Anda sekarang!
                    </p>
                    <a href="{{ route('lapangan') }}"
                        class="inline-flex items-center gap-2 bg-primary text-white px-8 py-4 rounded-full font-bold hover:bg-primary-dark transition-all duration-300 hover:-translate-y-1 shadow-lg">
                        <i class="fas fa-calendar-plus"></i>
                        Pesan Lapangan Pertama
                    </a>
                </div>
            @endforelse
        </div>
    </section>

    <!-- Info Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div
                class="bg-gradient-to-r from-primary to-primary-light rounded-3xl p-8 text-white text-center max-w-4xl mx-auto">
                <h3 class="text-2xl font-black mb-6">Butuh Bantuan?</h3>
                <p class="text-lg mb-6 max-w-2xl mx-auto">
                    Tim support kami siap membantu Anda 24/7 untuk pertanyaan seputar booking dan pembayaran
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="https://wa.me/6282236234227" target="_blank"
                        class="inline-flex items-center justify-center gap-2 bg-white text-primary px-6 py-3 rounded-full font-bold hover:bg-gray-100 transition-all duration-300 hover:-translate-y-1">
                        <i class="fab fa-whatsapp"></i>
                        Chat WhatsApp
                    </a>
                    <a href="mailto:fikri.haikal17062004@gmail.com"
                        class="inline-flex items-center justify-center gap-2 border-2 border-white text-white px-6 py-3 rounded-full font-bold hover:bg-white/10 transition-all duration-300 hover:-translate-y-1">
                        <i class="fas fa-envelope"></i>
                        Kirim Email
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection