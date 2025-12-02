@extends('user.component.master2')
@section('judul', 'Data Konfirmasi')
@section('konten')
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 p-6 lg:p-10">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex items-center justify-between flex-wrap gap-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-4xl font-bold text-gray-800">Data Konfirmasi</h1>
                        <p class="text-gray-600">Kelola konfirmasi pembayaran booking</p>
                    </div>
                </div>

                <!-- Add Button -->
                <a href="{{ route('tambah_konfirmasi') }}"
                    class="inline-flex items-center gap-2 px-6 py-3 gradient-bg text-white font-bold rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <span>Tambah Konfirmasi</span>
                </a>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-6 md:mb-8">
            <div class="bg-white rounded-xl shadow-lg p-4 md:p-6 hover:shadow-xl transition duration-300">
                <div class="flex items-center gap-3 md:gap-4">
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 rounded-xl bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-600 text-xs md:text-sm font-medium">Total Konfirmasi</p>
                        <p class="text-2xl md:text-3xl font-bold text-gray-800">{{ count($data) }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-4 md:p-6 hover:shadow-xl transition duration-300">
                <div class="flex items-center gap-3 md:gap-4">
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 rounded-xl bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-600 text-xs md:text-sm font-medium">Diterima</p>
                        <p class="text-2xl md:text-3xl font-bold text-gray-800">0</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-4 md:p-6 hover:shadow-xl transition duration-300">
                <div class="flex items-center gap-3 md:gap-4">
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 rounded-xl bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-600 text-xs md:text-sm font-medium">Menunggu</p>
                        <p class="text-2xl md:text-3xl font-bold text-gray-800">0</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-4 md:p-6 hover:shadow-xl transition duration-300">
                <div class="flex items-center gap-3 md:gap-4">
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 rounded-xl gradient-bg flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-600 text-xs md:text-sm font-medium">Ditolak</p>
                        <p class="text-2xl md:text-3xl font-bold text-gray-800">0</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Table Header -->
            <div class="gradient-bg p-4 md:p-6">
                <div class="flex items-center justify-between flex-wrap gap-3 md:gap-4">
                    <div class="flex items-center gap-2 md:gap-3">
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        <h2 class="text-lg md:text-xl font-bold text-white">Daftar Konfirmasi</h2>
                    </div>

                    <!-- Search Box -->
                    <div class="relative w-full sm:w-auto">
                        <input type="text" id="searchInput" placeholder="Cari konfirmasi..."
                            class="w-full sm:w-64 pl-10 pr-4 py-2 md:py-2.5 text-sm md:text-base rounded-lg border-2 border-white/30 bg-white/20 text-white placeholder-white/70 focus:outline-none focus:border-white focus:bg-white/30 transition duration-300">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-white absolute left-3 top-1/2 transform -translate-y-1/2"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Mobile Card View (Hidden on Desktop) -->
            <div class="block lg:hidden" id="mobileView">
                <div class="divide-y divide-gray-200">
                    @forelse ($data as $index => $d)
                        <div class="p-4 hover:bg-gray-50 transition duration-200 mobile-card">
                            <!-- Header Card -->
                            <div class="flex items-center justify-between mb-3">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center flex-shrink-0">
                                        <span class="text-white font-bold text-sm">
                                            {{ strtoupper(substr($user->where('id', $booking->where('id', $d->id_booking)->first()->id_user)->first()->name, 0, 1)) }}
                                        </span>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900 text-sm">
                                            {{ $user->where('id', $booking->where('id', $d->id_booking)->first()->id_user)->first()->name }}
                                        </h3>
                                        <p class="text-xs text-gray-500">ID Booking: {{ $d->id_booking }}</p>
                                    </div>
                                </div>
                                <div class="w-6 h-6 rounded-full gradient-bg flex items-center justify-center flex-shrink-0">
                                    <span class="text-white font-bold text-xs">{{ $index + 1 }}</span>
                                </div>
                            </div>

                            <!-- Info Card -->
                            <div class="space-y-3 mb-4">
                                <!-- Bukti Pembayaran -->
                                <div class="flex justify-center">
                                    <button onclick="openModal('{{ asset('images/' . $d->foto_222142) }}')"
                                        class="inline-flex items-center gap-2 px-4 py-2 bg-blue-500 text-white text-sm font-semibold rounded-lg hover:bg-blue-600 transition duration-300 shadow-md">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                        Lihat Bukti
                                    </button>
                                </div>

                                <!-- Status Actions -->
                                <div class="grid grid-cols-2 gap-2">
                                    <!-- Terima Button -->
                                    <form action="{{ route('terimakonfirmasi', $d->id) }}" method="POST" class="inline">
                                        @csrf
                                        <button type="submit"
                                            class="w-full inline-flex items-center justify-center gap-2 px-3 py-2 bg-green-500 text-white text-xs font-semibold rounded-lg hover:bg-green-600 transition duration-300 shadow-md">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Terima
                                        </button>
                                    </form>
                                    <!-- Tolak Button -->
                                    <form action="{{ route('tolakkonfirmasi', $d->id) }}" method="POST" class="inline">
                                        @csrf
                                        <button type="submit"
                                            class="w-full inline-flex items-center justify-center gap-2 px-3 py-2 bg-red-500 text-white text-xs font-semibold rounded-lg hover:bg-red-600 transition duration-300 shadow-md">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                            Tolak
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex gap-2">
                                <a href="{{ route('proses_editkonfirmasi', $d->id) }}"
                                    class="flex-1 inline-flex items-center justify-center gap-1.5 px-4 py-2.5 bg-blue-500 text-white text-sm font-semibold rounded-lg hover:bg-blue-600 transition duration-300 shadow-md">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg>
                                    Edit
                                </a>
                                <form action="{{ route('proses_hapuskonfirmasi', $d->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus konfirmasi ini?')" class="flex-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-full inline-flex items-center justify-center gap-1.5 px-4 py-2.5 bg-red-500 text-white text-sm font-semibold rounded-lg hover:bg-red-600 transition duration-300 shadow-md">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="p-8 text-center">
                            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-gray-500 font-semibold text-base">Belum ada data konfirmasi</p>
                            <p class="text-gray-400 text-sm mt-1">Silakan tambah konfirmasi baru</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Desktop Table View (Hidden on Mobile) -->
            <div class="overflow-x-auto hidden lg:block">
                <table class="w-full min-w-max">
                    <thead class="bg-gray-50 border-b-2 border-gray-200">
                        <tr>
                            <th
                                class="px-4 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                                No</th>
                            <th
                                class="px-4 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                                Nama Pengguna</th>
                            <th
                                class="px-4 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                                Bukti Pembayaran</th>
                            <th
                                class="px-4 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                                Status</th>
                            <th
                                class="px-4 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200" id="tableBody">
                        @forelse ($data as $index => $d)
                            <tr class="hover:bg-gray-50 transition duration-200">
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div
                                            class="w-8 h-8 rounded-full gradient-bg flex items-center justify-center flex-shrink-0">
                                            <span class="text-white font-bold text-sm">{{ $index + 1 }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center flex-shrink-0">
                                            <span class="text-white font-bold">
                                                {{ strtoupper(substr($user->where('id', $booking->where('id', $d->id_booking)->first()->id_user)->first()->name, 0, 1)) }}
                                            </span>
                                        </div>
                                        <div class="min-w-0">
                                            <div class="text-sm font-bold text-gray-900 truncate max-w-[150px]">
                                                {{ $user->where('id', $booking->where('id', $d->id_booking)->first()->id_user)->first()->name }}
                                            </div>
                                            <div class="text-xs text-gray-500">ID Booking: {{ $d->id_booking }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <button onclick="openModal('{{ asset('images/' . $d->foto_222142) }}')"
                                        class="inline-flex items-center gap-2 px-4 py-2 bg-blue-500 text-white text-sm font-semibold rounded-lg hover:bg-blue-600 transition duration-300 shadow-md hover:shadow-lg">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                        Lihat Bukti
                                    </button>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="flex flex-col gap-2">
                                        <!-- Terima Button -->
                                        <form action="{{ route('terimakonfirmasi', $d->id) }}" method="POST" class="inline">
                                            @csrf
                                            <button type="submit"
                                                class="w-full inline-flex items-center justify-center gap-2 px-4 py-2 bg-green-500 text-white text-sm font-semibold rounded-lg hover:bg-green-600 transition duration-300 shadow-md hover:shadow-lg">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Terima
                                            </button>
                                        </form>
                                        <!-- Tolak Button -->
                                        <form action="{{ route('tolakkonfirmasi', $d->id) }}" method="POST" class="inline">
                                            @csrf
                                            <button type="submit"
                                                class="w-full inline-flex items-center justify-center gap-2 px-4 py-2 bg-red-500 text-white text-sm font-semibold rounded-lg hover:bg-red-600 transition duration-300 shadow-md hover:shadow-lg">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                                Tolak
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-center">
                                    <div class="flex items-center justify-center gap-2 flex-nowrap">
                                        <a href="{{ route('proses_editkonfirmasi', $d->id) }}"
                                            class="inline-flex items-center gap-1 px-3 py-2 bg-blue-500 text-white text-xs font-semibold rounded-lg hover:bg-blue-600 transition duration-300 shadow-md hover:shadow-lg whitespace-nowrap">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                </path>
                                            </svg>
                                            Edit
                                        </a>
                                        <form action="{{ route('proses_hapuskonfirmasi', $d->id) }}" method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus konfirmasi ini?')" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="inline-flex items-center gap-1 px-3 py-2 bg-red-500 text-white text-xs font-semibold rounded-lg hover:bg-red-600 transition duration-300 shadow-md hover:shadow-lg whitespace-nowrap">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center justify-center">
                                        <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <p class="text-gray-500 font-semibold text-lg">Belum ada data konfirmasi</p>
                                        <p class="text-gray-400 text-sm mt-1">Silakan tambah konfirmasi baru</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Table Footer -->
            <div class="bg-gray-50 px-4 md:px-6 py-3 md:py-4 border-t border-gray-200">
                <div class="flex items-center justify-between text-sm md:text-base">
                    <p class="text-xs md:text-sm text-gray-600">
                        Menampilkan <span class="font-semibold text-gray-900">{{ count($data) }}</span> konfirmasi
                    </p>
                    <div class="flex items-center gap-2">
                        <span class="text-xs text-gray-500">Total Data: {{ count($data) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4 hidden">
        <div class="bg-white rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden">
            <div class="gradient-bg p-6 flex items-center justify-between">
                <h3 class="text-xl font-bold text-white">Bukti Pembayaran</h3>
                <button onclick="closeModal()" class="text-white hover:text-gray-200 transition duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="p-6 flex items-center justify-center">
                <img id="modalImage" src="" alt="Bukti Pembayaran" class="max-w-full max-h-[70vh] rounded-lg shadow-lg">
            </div>
        </div>
    </div>

    <script>
        // Search functionality
        document.getElementById('searchInput')?.addEventListener('input', function (e) {
            const searchTerm = e.target.value.toLowerCase();

            // Search in desktop table
            const desktopRows = document.querySelectorAll('#tableBody tr');
            desktopRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });

            // Search in mobile cards
            const mobileCards = document.querySelectorAll('.mobile-card');
            mobileCards.forEach(card => {
                const text = card.textContent.toLowerCase();
                card.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });

        // Image Modal functionality
        function openModal(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('imageModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('imageModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('imageModal').addEventListener('click', function (e) {
            if (e.target === this) {
                closeModal();
            }
        });
    </script>

    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #F75270 0%, #FF6B88 100%);
        }

        /* Custom scrollbar for better mobile experience */
        .overflow-x-auto {
            -webkit-overflow-scrolling: touch;
        }

        .overflow-x-auto::-webkit-scrollbar {
            height: 8px;
        }

        .overflow-x-auto::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 4px;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Ensure table is responsive */
        table {
            min-width: 768px;
        }

        @media (max-width: 768px) {
            .overflow-x-auto {
                border-radius: 0 0 1rem 1rem;
            }
        }

        /* Modal animation */
        #imageModal {
            transition: opacity 0.3s ease;
        }

        #imageModal:not(.hidden) {
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        #imageModal>div {
            animation: slideUp 0.3s ease;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endsection