@extends('user.component.master2')
@section('judul', 'Operasional')
@section('konten')
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 p-6 lg:p-10">
        <!-- Header Section -->
        <div class="mb-10">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-4xl font-bold text-gray-800">Jam Operasional</h1>
                    <p class="text-gray-600">Kelola waktu buka dan tutup lapangan</p>
                </div>
            </div>
        </div>

        <!-- Operational Hours Card -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Card Header -->
                <div class="gradient-bg p-6">
                    <div class="flex items-center gap-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                        <h2 class="text-2xl font-bold text-white">Waktu Operasional Lapangan</h2>
                    </div>
                </div>

                <!-- Card Body -->
                <div class="p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <!-- Jam Buka -->
                        <div
                            class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 border-2 border-green-200 hover:shadow-lg transition duration-300">
                            <div class="flex items-center gap-4 mb-4">
                                <div
                                    class="w-16 h-16 rounded-xl bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center shadow-lg">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-green-600 font-semibold text-sm uppercase tracking-wide">Jam Buka</p>
                                    <p class="text-green-800 text-xs">Mulai Operasional</p>
                                </div>
                            </div>
                            <div class="text-center bg-white rounded-xl p-4 shadow-inner">
                                <p class="text-5xl font-bold text-green-600">{{ $operasional->jam_buka_222142 }}</p>
                                <p class="text-green-500 text-sm font-medium mt-2">WIB</p>
                            </div>
                        </div>

                        <!-- Jam Tutup -->
                        <div
                            class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-6 border-2 border-orange-200 hover:shadow-lg transition duration-300">
                            <div class="flex items-center gap-4 mb-4">
                                <div
                                    class="w-16 h-16 rounded-xl bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center shadow-lg">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-orange-600 font-semibold text-sm uppercase tracking-wide">Jam Tutup</p>
                                    <p class="text-orange-800 text-xs">Akhir Operasional</p>
                                </div>
                            </div>
                            <div class="text-center bg-white rounded-xl p-4 shadow-inner">
                                <p class="text-5xl font-bold text-orange-600">{{ $operasional->jam_tutup_222142 }}</p>
                                <p class="text-orange-500 text-sm font-medium mt-2">WIB</p>
                            </div>
                        </div>
                    </div>

                    <!-- Info Section -->
                    <div class="bg-blue-50 border-l-4 border-blue-500 rounded-lg p-4 mb-6">
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <p class="text-blue-800 font-semibold text-sm mb-1">Informasi Penting</p>
                                <p class="text-blue-700 text-sm">Pastikan waktu operasional sesuai dengan kebutuhan
                                    pelanggan. Perubahan jam operasional akan berlaku untuk semua booking selanjutnya.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Action Button -->
                    <div class="flex justify-center">
                        <a href="{{ route('proses_editoperasional', $operasional->id) }}"
                            class="group relative inline-flex items-center gap-3 px-8 py-4 gradient-bg text-white font-bold text-lg rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105">
                            <svg class="w-6 h-6 group-hover:rotate-12 transition-transform duration-300" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                </path>
                            </svg>
                            <span>Edit Jam Operasional</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Additional Info Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                <!-- Total Hours -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-700">Total Jam</h3>
                    </div>
                    <p class="text-2xl font-bold text-gray-800">
                        @php
                            $buka = strtotime($operasional->jam_buka_222142);
                            $tutup = strtotime($operasional->jam_tutup_222142);
                            $diff = ($tutup - $buka) / 3600;
                            echo $diff . ' Jam';
                        @endphp
                    </p>
                    <p class="text-xs text-gray-500 mt-1">Per hari</p>
                </div>

                <!-- Status -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-700">Status</h3>
                    </div>
                    <p class="text-2xl font-bold text-green-600">Aktif</p>
                    <p class="text-xs text-gray-500 mt-1">Operasional berjalan</p>
                </div>

                <!-- Last Update -->
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition duration-300">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-700">Update Terakhir</h3>
                    </div>
                    <p class="text-2xl font-bold text-gray-800">
                        {{ $operasional->updated_at ? $operasional->updated_at->format('d/m/Y') : 'Belum ada' }}</p>
                    <p class="text-xs text-gray-500 mt-1">Tanggal perubahan</p>
                </div>
            </div>
        </div>
    </div>
@endsection