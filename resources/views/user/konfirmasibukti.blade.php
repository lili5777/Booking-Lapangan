@extends('user.component.master')
@section('judul', 'Konfirmasi Pesanan')
@section('konten')

    <!-- Hero Section -->
    <section class="gradient-bg min-h-[40vh] pt-24 pb-16 flex items-center relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10">
            <div class="absolute top-20 left-10 w-20 h-20 bg-white rounded-full"></div>
            <div class="absolute bottom-32 right-20 w-32 h-32 bg-white rounded-full"></div>
        </div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-black text-white mb-6">
                Konfirmasi <span class="text-accent">Pembayaran</span>
            </h1>
            <p class="text-xl text-white/90 max-w-2xl mx-auto">
                Upload bukti pembayaran untuk menyelesaikan proses booking
            </p>
        </div>
    </section>

    <!-- Konfirmasi Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 flex justify-center">
            <div
                class="bg-white p-8 rounded-3xl shadow-xl w-full max-w-lg border-2 border-gray-100 hover:border-primary transition-all duration-300">
                <h1 class="text-3xl font-black text-dark text-center mb-2">
                    Konfirmasi <span class="text-primary">Bukti Pembayaran</span>
                </h1>
                <p class="text-gray-600 text-center mb-8">Lengkapi proses booking dengan mengunggah bukti pembayaran</p>

                <form action="{{ route('prosesupload') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <input type="text" name="id_booking" value="{{ $id }}" hidden>

                    <!-- Rekening Tujuan -->
                    <div class="bg-primary/5 p-6 rounded-2xl border border-primary/20">
                        <h3 class="text-lg font-bold text-dark mb-3 flex items-center gap-2">
                            <i class="fas fa-university text-primary"></i>
                            Rekening Tujuan Pembayaran
                        </h3>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Nama Penerima:</span>
                                <span class="font-bold text-dark">FIKRI HAIKAL</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Bank:</span>
                                <span class="font-bold text-dark">BRI</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Nomor Rekening:</span>
                                <span class="font-bold text-dark">8765 6564 6546 54</span>
                            </div>
                        </div>
                    </div>

                    <!-- Upload Bukti Pembayaran -->
                    <div>
                        <label for="foto" class="block text-lg font-bold text-dark mb-3 flex items-center gap-2">
                            <i class="fas fa-upload text-primary"></i>
                            Unggah Bukti Pembayaran
                        </label>
                        <div class="relative">
                            <input type="file" id="foto" name="foto" required
                                class="w-full px-4 py-4 border-2 border-gray-200 rounded-2xl cursor-pointer focus:outline-none focus:border-primary transition-all duration-300 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
                        </div>
                        <p class="text-sm text-gray-500 mt-2">Format: JPG, PNG, PDF (Maks. 5MB)</p>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="pt-4">
                        <button type="submit"
                            class="w-full bg-primary text-white py-4 px-6 rounded-2xl font-bold hover:bg-primary-dark transition-all duration-300 hover:-translate-y-1 shadow-lg group/btn flex items-center justify-center gap-2">
                            <span>Konfirmasi Pembayaran</span>
                            <i class="fas fa-check-circle group-hover/btn:scale-110 transition-transform"></i>
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