@extends('user.component.master')
@section('judul', 'Detail Pesanan')
@section('konten')

    <!-- Hero Section -->
    <section class="gradient-bg min-h-[40vh] pt-24 pb-16 flex items-center relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10">
            <div class="absolute top-20 left-10 w-20 h-20 bg-white rounded-full"></div>
            <div class="absolute bottom-32 right-20 w-32 h-32 bg-white rounded-full"></div>
        </div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-black text-white mb-6">
                Detail <span class="text-accent">Pesanan</span>
            </h1>
            <p class="text-xl text-white/90 max-w-2xl mx-auto">
                Review dan konfirmasi pesanan lapangan bulutangkis Anda
            </p>
        </div>
    </section>

    <!-- Detail Pesanan Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 flex justify-center">
            <div
                class="bg-white p-8 rounded-3xl shadow-xl w-full max-w-2xl border-2 border-gray-100 hover:border-primary transition-all duration-300">

                <!-- Header -->
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-black text-dark mb-2">
                        Ringkasan <span class="text-primary">Pesanan</span>
                    </h2>
                    <p class="text-gray-600">Pastikan semua detail pesanan sudah benar sebelum konfirmasi</p>
                </div>

                <!-- Informasi Pesanan -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- Informasi Lapangan -->
                    <div class="bg-primary/5 p-6 rounded-2xl border border-primary/20">
                        <h3 class="text-lg font-bold text-dark mb-4 flex items-center gap-2">
                            <i class="fas fa-map-marker-alt text-primary"></i>
                            Informasi Lapangan
                        </h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Lapangan:</span>
                                <span class="font-bold text-dark">{{ $lapangan->urutan_222142 }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Kategori:</span>
                                <span class="font-bold text-dark">{{ $kategori->name_222142 }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Informasi Waktu -->
                    <div class="bg-primary/5 p-6 rounded-2xl border border-primary/20">
                        <h3 class="text-lg font-bold text-dark mb-4 flex items-center gap-2">
                            <i class="fas fa-clock text-primary"></i>
                            Informasi Waktu
                        </h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Tanggal:</span>
                                <span class="font-bold text-dark">{{ $tgl }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Durasi:</span>
                                <span class="font-bold text-primary">{{ $totalJam }} Jam</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jam yang Dipilih -->
                <div class="bg-green-50 p-6 rounded-2xl border border-green-200 mb-8">
                    <h3 class="text-lg font-bold text-dark mb-4 flex items-center gap-2">
                        <i class="fas fa-list-ol text-green-600"></i>
                        Jam yang Dipilih
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($selectedTimes as $time)
                            <span
                                class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold flex items-center gap-1">
                                <i class="fas fa-clock text-xs"></i> {{ $time }}
                            </span>
                        @endforeach
                    </div>
                    <p class="text-sm text-gray-600 mt-3">
                        Total: <span class="font-semibold">{{ count($selectedTimes) }} jam</span> yang dipilih
                    </p>
                </div>

                <!-- Detail Waktu -->
                <div class="bg-gray-50 p-6 rounded-2xl border border-gray-200 mb-8">
                    <h3 class="text-lg font-bold text-dark mb-4 flex items-center gap-2">
                        <i class="fas fa-calendar-day text-primary"></i>
                        Rentang Waktu Booking
                    </h3>
                    <div class="flex items-center justify-between bg-white p-4 rounded-xl border border-gray-200">
                        <div class="text-center">
                            <p class="text-sm text-gray-600 mb-1">Mulai</p>
                            <p class="text-xl font-black text-primary">{{ $mulai }}</p>
                        </div>
                        <div class="flex items-center justify-center w-12 h-12 bg-primary/10 rounded-full">
                            <i class="fas fa-arrow-right text-primary"></i>
                        </div>
                        <div class="text-center">
                            <p class="text-sm text-gray-600 mb-1">Selesai</p>
                            <p class="text-xl font-black text-primary">{{ $selesai }}</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 mt-3 text-center">
                        <i class="fas fa-info-circle mr-1"></i>
                        Menampilkan jam pertama dan terakhir dari pilihan Anda
                    </p>
                </div>

                <!-- Informasi Pembayaran -->
                <div class="bg-primary/5 p-6 rounded-2xl border border-primary/20 mb-8">
                    <h3 class="text-lg font-bold text-dark mb-4 flex items-center gap-2">
                        <i class="fas fa-credit-card text-primary"></i>
                        Informasi Pembayaran
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Harga per Jam:</span>
                            <span class="font-semibold text-dark">Rp
                                {{ number_format($kategori->harga_222142, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Total Jam:</span>
                            <span class="font-semibold text-dark">{{ $totalJam }} Jam</span>
                        </div>
                        <div class="border-t border-primary/20 pt-3">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-dark">Total Harga:</span>
                                <span class="text-2xl font-black text-primary">Rp
                                    {{ number_format($totalHarga, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rekening Tujuan -->
                <div class="bg-accent/5 p-6 rounded-2xl border border-accent/20 mb-8">
                    <h3 class="text-lg font-bold text-dark mb-4 flex items-center gap-2">
                        <i class="fas fa-university text-accent"></i>
                        Rekening Tujuan Pembayaran
                    </h3>
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Bank:</span>
                            <span class="font-bold text-dark">BRI</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Nomor Rekening:</span>
                            <span class="font-bold text-dark">7647 3836 4378 39</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Atas Nama:</span>
                            <span class="font-bold text-dark">FIKRI HAIKAL</span>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-yellow-50 border border-yellow-200 rounded-lg">
                        <p class="text-sm text-yellow-700 flex items-center gap-2">
                            <i class="fas fa-exclamation-circle"></i>
                            Simpan bukti transfer untuk konfirmasi pembayaran
                        </p>
                    </div>
                </div>

                <!-- Form Konfirmasi -->
                <form action="{{ route('simpanbookingg') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id_lapangan" value="{{ $lapangan->id }}">
                    <input type="hidden" name="tgl_booking" value="{{ $tgl }}">
                    <input type="hidden" name="jam_mulai" value="{{ $mulai }}">
                    <input type="hidden" name="jam_selesai" value="{{ $selesai }}">
                    <input type="hidden" name="totalHarga" value="{{ $totalHarga }}">
                    <!-- Tambahkan input untuk selected_times -->
                    <input type="hidden" name="selected_times" value="{{ implode(',', $selectedTimes) }}">

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ url()->previous() }}"
                            class="flex items-center justify-center gap-2 border-2 border-gray-300 text-gray-700 py-4 px-8 rounded-2xl font-bold hover:bg-gray-50 transition-all duration-300 hover:-translate-y-1">
                            <i class="fas fa-arrow-left"></i>
                            Kembali
                        </a>
                        <button type="submit"
                            class="flex items-center justify-center gap-2 bg-primary text-white py-4 px-8 rounded-2xl font-bold hover:bg-primary-dark transition-all duration-300 hover:-translate-y-1 shadow-lg group/btn flex-1">
                            <i class="fas fa-check-circle group-hover/btn:scale-110 transition-transform"></i>
                            Konfirmasi Pesanan
                        </button>
                    </div>
                </form>
            </div>
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