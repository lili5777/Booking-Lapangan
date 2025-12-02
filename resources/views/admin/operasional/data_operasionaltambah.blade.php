@extends('user.component.master2')
@section('judul', 'Edit Jam Operasional')
@section('konten')
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 p-6 lg:p-10">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-4xl font-bold text-gray-800">
                        {{ isset($operasional) ? 'Edit Jam Operasional' : 'Tambah Jam Operasional' }}
                    </h1>
                    <p class="text-gray-600">Atur waktu buka dan tutup lapangan</p>
                </div>
            </div>

            <!-- Back Button -->
            <a href="{{ route('admin_operasional') }}"
                class="inline-flex items-center gap-2 px-6 py-3 bg-white text-gray-700 font-semibold rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                    </path>
                </svg>
                <span>Kembali</span>
            </a>
        </div>

        <!-- Form Card -->
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Card Header -->
                <div class="gradient-bg p-6">
                    <div class="flex items-center gap-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>
                            <h2 class="text-2xl font-bold text-white">Form Jam Operasional</h2>
                            <p class="text-white/80 text-sm">Lengkapi informasi di bawah ini</p>
                        </div>
                    </div>
                </div>

                <!-- Form Body -->
                <form action="{{ route('proses_tambahoperasional') }}" method="POST" class="p-8">
                    @csrf
                    <input type="hidden" name="id" value="{{ isset($operasional) ? $operasional->id : '' }}">

                    <!-- Info Alert -->
                    <div class="bg-blue-50 border-l-4 border-blue-500 rounded-lg p-4 mb-8">
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <p class="text-blue-800 font-semibold text-sm mb-1">Panduan Pengisian</p>
                                <p class="text-blue-700 text-sm">Pastikan waktu operasional yang Anda masukkan sesuai dengan
                                    kebutuhan. Perubahan akan berlaku untuk semua sistem booking.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Jam Buka -->
                    <div class="mb-8">
                        <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="buka">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                            <span>Jam Buka</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <input name="buka" type="time" id="buka"
                                value="{{ isset($operasional) ? $operasional->jam_buka_222142 : '' }}"
                                class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl text-gray-700 text-lg font-semibold focus:outline-none focus:border-green-500 focus:ring-4 focus:ring-green-100 transition duration-300"
                                required>
                        </div>
                        <p class="text-gray-500 text-xs mt-2 ml-1">Waktu mulai operasional lapangan</p>
                    </div>

                    <!-- Jam Tutup -->
                    <div class="mb-8">
                        <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="tutup">
                            <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                                </path>
                            </svg>
                            <span>Jam Tutup</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <input name="tutup" type="time" id="tutup"
                                value="{{ isset($operasional) ? $operasional->jam_tutup_222142 : '' }}"
                                class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl text-gray-700 text-lg font-semibold focus:outline-none focus:border-orange-500 focus:ring-4 focus:ring-orange-100 transition duration-300"
                                required>
                        </div>
                        <p class="text-gray-500 text-xs mt-2 ml-1">Waktu akhir operasional lapangan</p>
                    </div>

                    <!-- Preview Section -->
                    <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-6 mb-8">
                        <h3 class="font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-[#F75270]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                            Preview Waktu Operasional
                        </h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white rounded-lg p-4 text-center border-2 border-green-200">
                                <p class="text-green-600 font-semibold text-xs mb-1">BUKA</p>
                                <p id="previewBuka" class="text-2xl font-bold text-gray-800">--:--</p>
                            </div>
                            <div class="bg-white rounded-lg p-4 text-center border-2 border-orange-200">
                                <p class="text-orange-600 font-semibold text-xs mb-1">TUTUP</p>
                                <p id="previewTutup" class="text-2xl font-bold text-gray-800">--:--</p>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button type="submit"
                            class="flex-1 group relative inline-flex items-center justify-center gap-3 px-8 py-4 gradient-bg text-white font-bold text-lg rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105">
                            <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-300" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>{{ isset($operasional) ? 'Perbarui Operasional' : 'Simpan Operasional' }}</span>
                        </button>

                        <a href="{{ route('admin_operasional') }}"
                            class="flex-1 inline-flex items-center justify-center gap-3 px-8 py-4 bg-gray-200 text-gray-700 font-bold text-lg rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:bg-gray-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            <span>Batal</span>
                        </a>
                    </div>
                </form>
            </div>

            <!-- Help Card -->
            <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                <h3 class="font-bold text-gray-800 mb-3 flex items-center gap-2">
                    <svg class="w-6 h-6 text-[#F75270]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    Butuh Bantuan?
                </h3>
                <div class="space-y-2 text-sm text-gray-600">
                    <p>• Pastikan jam tutup lebih akhir dari jam buka</p>
                    <p>• Format waktu: HH:MM (contoh: 08:00, 22:00)</p>
                    <p>• Sistem akan menggunakan zona waktu lokal</p>
                    <p>• Perubahan akan otomatis tersimpan setelah submit</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Live preview
        const bukaInput = document.getElementById('buka');
        const tutupInput = document.getElementById('tutup');
        const previewBuka = document.getElementById('previewBuka');
        const previewTutup = document.getElementById('previewTutup');

        function updatePreview() {
            previewBuka.textContent = bukaInput.value || '--:--';
            previewTutup.textContent = tutupInput.value || '--:--';
        }

        bukaInput?.addEventListener('input', updatePreview);
        tutupInput?.addEventListener('input', updatePreview);

        // Initialize preview
        updatePreview();
    </script>

    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #F75270 0%, #FF6B88 100%);
        }
    </style>
@endsection