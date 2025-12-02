@extends('user.component.master2')
@section('judul', 'Data Booking')
@section('konten')
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 p-6 lg:p-10">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex items-center justify-between flex-wrap gap-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-4xl font-bold text-gray-800">Data Booking</h1>
                        <p class="text-gray-600">Kelola data booking lapangan</p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center gap-3">
                    <a href="{{ route('tambah_booking') }}"
                        class="inline-flex items-center gap-2 px-6 py-3 gradient-bg text-white font-bold rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        <span>Tambah Booking</span>
                    </a>

                    <div class="relative">
                        <button
                            class="inline-flex items-center gap-2 px-6 py-3 bg-blue-500 text-white font-bold rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105"
                            id="printButton">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z">
                                </path>
                            </svg>
                            <span>Cetak</span>
                        </button>
                        <div id="printOptions"
                            class="absolute z-10 hidden bg-white border mt-2 rounded-xl shadow-xl w-64 p-4">
                            <!-- Tombol Pilihan -->
                            <button type="button" data-form="form-harian"
                                class="block w-full text-left px-4 py-3 hover:bg-gray-100 rounded-lg transition">Harian</button>
                            <button type="button" data-form="form-mingguan"
                                class="block w-full text-left px-4 py-3 hover:bg-gray-100 rounded-lg transition">Mingguan</button>
                            <button type="button" data-form="form-bulanan"
                                class="block w-full text-left px-4 py-3 hover:bg-gray-100 rounded-lg transition">Bulanan</button>
                            <button type="button" data-form="form-tahunan"
                                class="block w-full text-left px-4 py-3 hover:bg-gray-100 rounded-lg transition">Tahunan</button>
                            <a href="{{ route('cetak_booking') }}"
                                class="block w-full text-left px-4 py-3 hover:bg-gray-100 rounded-lg transition">Cetak Semua
                                Data</a>

                            <!-- Form Harian -->
                            <form action="{{ route('cetak_booking') }}" method="GET" class="mt-4 hidden" id="form-harian">
                                <label for="daily_date" class="block font-semibold text-gray-700 mb-2">Tanggal:</label>
                                <input type="date" name="daily_date"
                                    class="border-2 border-gray-200 p-3 rounded-xl w-full focus:outline-none focus:border-blue-500 transition"
                                    required>
                                <button type="submit"
                                    class="gradient-bg mt-3 py-3 px-4 rounded-xl text-white font-bold hover:shadow-lg transition duration-300 w-full">
                                    Cetak
                                </button>
                            </form>

                            <!-- Form Mingguan -->
                            <form action="{{ route('cetak_booking') }}" method="GET" class="mt-4 hidden" id="form-mingguan">
                                <label for="weekly_start" class="block font-semibold text-gray-700 mb-2">Tanggal
                                    Mulai:</label>
                                <input type="date" name="weekly_start"
                                    class="border-2 border-gray-200 p-3 rounded-xl w-full focus:outline-none focus:border-blue-500 transition"
                                    required>
                                <label for="weekly_end" class="block mt-3 font-semibold text-gray-700 mb-2">Tanggal
                                    Selesai:</label>
                                <input type="date" name="weekly_end"
                                    class="border-2 border-gray-200 p-3 rounded-xl w-full focus:outline-none focus:border-blue-500 transition"
                                    required>
                                <button type="submit"
                                    class="gradient-bg mt-3 py-3 px-4 rounded-xl text-white font-bold hover:shadow-lg transition duration-300 w-full">
                                    Cetak
                                </button>
                            </form>

                            <!-- Form Bulanan -->
                            <form action="{{ route('cetak_booking') }}" method="GET" class="mt-4 hidden" id="form-bulanan">
                                <label for="monthly_month" class="block font-semibold text-gray-700 mb-2">Pilih
                                    Bulan:</label>
                                <select name="monthly_month"
                                    class="border-2 border-gray-200 p-3 rounded-xl w-full focus:outline-none focus:border-blue-500 transition"
                                    required>
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ $i }}">
                                            {{ Carbon\Carbon::createFromFormat('m', $i)->format('F') }}
                                        </option>
                                    @endfor
                                </select>
                                <label for="tahun" class="block mt-3 font-semibold text-gray-700 mb-2">Tahun:</label>
                                <input type="number" name="tahun"
                                    class="border-2 border-gray-200 p-3 rounded-xl w-full focus:outline-none focus:border-blue-500 transition"
                                    required>
                                <button type="submit"
                                    class="gradient-bg mt-3 py-3 px-4 rounded-xl text-white font-bold hover:shadow-lg transition duration-300 w-full">
                                    Cetak
                                </button>
                            </form>

                            <!-- Form Tahunan -->
                            <form action="{{ route('cetak_booking') }}" method="GET" class="mt-4 hidden" id="form-tahunan">
                                <label for="yearly_year" class="block font-semibold text-gray-700 mb-2">Tahun:</label>
                                <input type="number" name="yearly_year"
                                    class="border-2 border-gray-200 p-3 rounded-xl w-full focus:outline-none focus:border-blue-500 transition"
                                    placeholder="Masukkan Tahun" required>
                                <button type="submit"
                                    class="gradient-bg mt-3 py-3 px-4 rounded-xl text-white font-bold hover:shadow-lg transition duration-300 w-full">
                                    Cetak
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="relative">
                        <button
                            class="inline-flex items-center gap-2 px-6 py-3 bg-green-500 text-white font-bold rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105"
                            id="tampil">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                            <span>Tampilkan</span>
                        </button>
                        <div id="tampilOptions"
                            class="absolute z-10 hidden bg-white border mt-2 rounded-xl shadow-xl w-64 p-4">
                            <!-- Tombol Pilihan -->
                            <button type="button" data-form="form-harian-tampil"
                                class="block w-full text-left px-4 py-3 hover:bg-gray-100 rounded-lg transition">Harian</button>
                            <button type="button" data-form="form-mingguan-tampil"
                                class="block w-full text-left px-4 py-3 hover:bg-gray-100 rounded-lg transition">Mingguan</button>
                            <button type="button" data-form="form-bulanan-tampil"
                                class="block w-full text-left px-4 py-3 hover:bg-gray-100 rounded-lg transition">Bulanan</button>
                            <button type="button" data-form="form-tahunan-tampil"
                                class="block w-full text-left px-4 py-3 hover:bg-gray-100 rounded-lg transition">Tahunan</button>
                            <a href="{{ route('admin_booking') }}"
                                class="block w-full text-left px-4 py-3 hover:bg-gray-100 rounded-lg transition">Tampilkan
                                Semua Data</a>

                            <!-- Form Harian -->
                            <form action="{{ route('admin_booking') }}" method="GET" class="mt-4 hidden"
                                id="form-harian-tampil">
                                <label for="daily_date" class="block font-semibold text-gray-700 mb-2">Tanggal:</label>
                                <input type="date" name="daily_date"
                                    class="border-2 border-gray-200 p-3 rounded-xl w-full focus:outline-none focus:border-blue-500 transition"
                                    required>
                                <button type="submit"
                                    class="gradient-bg mt-3 py-3 px-4 rounded-xl text-white font-bold hover:shadow-lg transition duration-300 w-full">
                                    Tampilkan
                                </button>
                            </form>

                            <!-- Form Mingguan -->
                            <form action="{{ route('admin_booking') }}" method="GET" class="mt-4 hidden"
                                id="form-mingguan-tampil">
                                <label for="weekly_start" class="block font-semibold text-gray-700 mb-2">Tanggal
                                    Mulai:</label>
                                <input type="date" name="weekly_start"
                                    class="border-2 border-gray-200 p-3 rounded-xl w-full focus:outline-none focus:border-blue-500 transition"
                                    required>
                                <label for="weekly_end" class="block mt-3 font-semibold text-gray-700 mb-2">Tanggal
                                    Selesai:</label>
                                <input type="date" name="weekly_end"
                                    class="border-2 border-gray-200 p-3 rounded-xl w-full focus:outline-none focus:border-blue-500 transition"
                                    required>
                                <button type="submit"
                                    class="gradient-bg mt-3 py-3 px-4 rounded-xl text-white font-bold hover:shadow-lg transition duration-300 w-full">
                                    Tampilkan
                                </button>
                            </form>

                            <!-- Form Bulanan -->
                            <form action="{{ route('admin_booking') }}" method="GET" class="mt-4 hidden"
                                id="form-bulanan-tampil">
                                <label for="monthly_month" class="block font-semibold text-gray-700 mb-2">Pilih
                                    Bulan:</label>
                                <select name="monthly_month"
                                    class="border-2 border-gray-200 p-3 rounded-xl w-full focus:outline-none focus:border-blue-500 transition"
                                    required>
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ $i }}">
                                            {{ Carbon\Carbon::createFromFormat('m', $i)->format('F') }}
                                        </option>
                                    @endfor
                                </select>
                                <label for="tahun" class="block mt-3 font-semibold text-gray-700 mb-2">Tahun:</label>
                                <input type="number" name="tahun"
                                    class="border-2 border-gray-200 p-3 rounded-xl w-full focus:outline-none focus:border-blue-500 transition"
                                    required>
                                <button type="submit"
                                    class="gradient-bg mt-3 py-3 px-4 rounded-xl text-white font-bold hover:shadow-lg transition duration-300 w-full">
                                    Tampilkan
                                </button>
                            </form>

                            <!-- Form Tahunan -->
                            <form action="{{ route('admin_booking') }}" method="GET" class="mt-4 hidden"
                                id="form-tahunan-tampil">
                                <label for="yearly_year" class="block font-semibold text-gray-700 mb-2">Tahun:</label>
                                <input type="number" name="yearly_year"
                                    class="border-2 border-gray-200 p-3 rounded-xl w-full focus:outline-none focus:border-blue-500 transition"
                                    placeholder="Masukkan Tahun" required>
                                <button type="submit"
                                    class="gradient-bg mt-3 py-3 px-4 rounded-xl text-white font-bold hover:shadow-lg transition duration-300 w-full">
                                    Tampilkan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
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
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-600 text-xs md:text-sm font-medium">Total Booking</p>
                        <p class="text-2xl md:text-3xl font-bold text-gray-800">{{ count($bookings) }}</p>
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
                        <p class="text-gray-600 text-xs md:text-sm font-medium">Booking Aktif</p>
                        <p class="text-2xl md:text-3xl font-bold text-gray-800">{{ count($bookings) }}</p>
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
                        <p class="text-gray-600 text-xs md:text-sm font-medium">Hari Ini</p>
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
                        <p class="text-gray-600 text-xs md:text-sm font-medium">Bulan Ini</p>
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
                        <h2 class="text-lg md:text-xl font-bold text-white">Daftar Booking</h2>
                    </div>

                    <!-- Search Box -->
                    <div class="relative w-full sm:w-auto">
                        <input type="text" id="searchInput" placeholder="Cari booking..."
                            class="w-full sm:w-64 pl-10 pr-4 py-2 md:py-2.5 text-sm md:text-base rounded-lg border-2 border-white/30 bg-white/20 text-white placeholder-white/70 focus:outline-none focus:border-white focus:bg-white/30 transition duration-300">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-white absolute left-3 top-1/2 transform -translate-y-1/2"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Responsive Table Container -->
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b-2 border-gray-200">
                        <tr>
                            <th
                                class="px-4 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                                No
                            </th>
                            <th
                                class="px-4 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                                Nama
                            </th>
                            <th
                                class="px-4 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                                Lapangan & Waktu
                            </th>
                            <th
                                class="px-4 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                                Status
                            </th>
                            <th
                                class="px-4 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                                Total
                            </th>
                            <th
                                class="px-4 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200" id="tableBody">
                        @forelse ($bookings as $index => $d)
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
                                            <span
                                                class="text-white font-bold">{{ strtoupper(substr($user->where('id', $d->id_user)->first()->name, 0, 1)) }}</span>
                                        </div>
                                        <div class="min-w-0">
                                            <div class="text-sm font-bold text-gray-900 truncate max-w-[120px]">
                                                {{ $user->where('id', $d->id_user)->first()->name }}
                                            </div>
                                            <div class="text-xs text-gray-500">{{ $d->tgl_booking_222142 }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="space-y-1">
                                        <div class="flex items-center gap-2">
                                            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                                </path>
                                            </svg>
                                            <span class="text-sm font-medium text-gray-900">
                                                {{ $lapangan->where('id', $d->id_lapangan)->first()->urutan_222142 }}
                                            </span>
                                            <span class="text-xs text-gray-500">•</span>
                                            <span class="text-xs text-gray-600">
                                                {{ $kategori->where('id', $lapangan->where('id', $d->id_lapangan)->first()->id_kategori)->first()->name_222142 }}
                                            </span>
                                        </div>
                                        <div class="flex items-center gap-2 text-xs text-gray-600">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <span>{{ $d->jam_mulai_222142 }} - {{ $d->jam_selesai_222142 }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold 
                                                        @if($d->status_222142 == 'selesai') bg-green-100 text-green-800
                                                        @elseif($d->status_222142 == 'pending') bg-yellow-100 text-yellow-800
                                                        @else bg-red-100 text-red-800 @endif">
                                        {{ $d->status_222142 }}
                                    </span>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="text-sm font-bold text-gray-900">Rp
                                        {{ number_format($d->total_222142, 0, ',', '.') }}
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-center">
                                    <div class="flex items-center justify-center gap-2 flex-nowrap">
                                        <!-- Tombol Detail -->
                                        <button type="button" data-booking-id="{{ $d->id }}"
                                            class="detail-btn inline-flex items-center gap-1 px-3 py-2 bg-blue-500 text-white text-xs font-semibold rounded-lg hover:bg-blue-600 transition duration-300 shadow-md hover:shadow-lg whitespace-nowrap">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                </path>
                                            </svg>
                                            Detail
                                        </button>

                                        <form action="{{ route('proses_hapusbooking', $d->id) }}" method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus booking ini?')" class="inline">
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
                                <td colspan="6" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center justify-center">
                                        <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                                            </path>
                                        </svg>
                                        <p class="text-gray-500 font-semibold text-lg">Belum ada data booking</p>
                                        <p class="text-gray-400 text-sm mt-1">Silakan tambah booking baru</p>
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
                        Menampilkan <span class="font-semibold text-gray-900">{{ count($bookings) }}</span> booking
                    </p>
                    <div class="flex items-center gap-2">
                        <span class="text-xs text-gray-500">Total Data: {{ count($bookings) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail Booking -->
    <div id="detailModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4 hidden">
        <div class="bg-white rounded-2xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="gradient-bg p-6 rounded-t-2xl">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Detail Booking</h3>
                    </div>
                    <button id="closeModal" class="text-white hover:text-gray-200 transition duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Modal Content -->
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Informasi Pengguna -->
                    <div class="space-y-4">
                        <h4 class="text-lg font-semibold text-gray-800 border-b pb-2">Informasi Pengguna</h4>

                        <div class="flex items-center gap-3">
                            <div
                                class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center flex-shrink-0">
                                <span id="userInitial" class="text-white font-bold text-lg">U</span>
                            </div>
                            <div>
                                <p id="userName" class="font-semibold text-gray-900">Nama Pengguna</p>
                                <p class="text-sm text-gray-500">Pengguna</p>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Email:</span>
                                <span id="userEmail" class="font-medium text-gray-900">email@example.com</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Telepon:</span>
                                <span id="userPhone" class="font-medium text-gray-900">08123456789</span>
                            </div>
                        </div>
                    </div>

                    <!-- Informasi Booking -->
                    <div class="space-y-4">
                        <h4 class="text-lg font-semibold text-gray-800 border-b pb-2">Informasi Booking</h4>

                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Tanggal Booking:</span>
                                <span id="bookingDate" class="font-medium text-gray-900">2025-12-01</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Lapangan:</span>
                                <span id="fieldName" class="font-medium text-gray-900">Lapangan 1</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Kategori:</span>
                                <span id="categoryName" class="font-medium text-gray-900">VIP</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Waktu:</span>
                                <span id="bookingTime" class="font-medium text-gray-900">10:00 - 13:00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Durasi:</span>
                                <span id="bookingDuration" class="font-medium text-gray-900">3 jam</span>
                            </div>
                        </div>
                    </div>

                    <!-- Status & Pembayaran -->
                    <div class="space-y-4">
                        <h4 class="text-lg font-semibold text-gray-800 border-b pb-2">Status & Pembayaran</h4>

                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Status:</span>
                                <span id="bookingStatus" class="px-3 py-1 rounded-full text-xs font-semibold">proses</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Total Biaya:</span>
                                <span id="bookingTotal" class="font-bold text-lg text-gray-900">Rp 150.000</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Metode Pembayaran:</span>
                                <span id="paymentMethod" class="font-medium text-gray-900">Transfer Bank</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Tanggal Pembayaran:</span>
                                <span id="paymentDate" class="font-medium text-gray-900">2025-12-01</span>
                            </div>
                        </div>
                    </div>

                    <!-- Informasi Tambahan -->
                    <div class="space-y-4">
                        <h4 class="text-lg font-semibold text-gray-800 border-b pb-2">Informasi Tambahan</h4>

                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Dibuat Pada:</span>
                                <span id="createdAt" class="font-medium text-gray-900">2025-12-01 10:00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Diperbarui Pada:</span>
                                <span id="updatedAt" class="font-medium text-gray-900">2025-12-01 10:00</span>
                            </div>
                        </div>

                        <div>
                            <span class="text-gray-600 block mb-2">Catatan:</span>
                            <p id="bookingNotes" class="text-gray-900 bg-gray-50 p-3 rounded-lg text-sm">Tidak ada catatan
                                khusus</p>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-wrap gap-3 mt-8 pt-6 border-t border-gray-200">
                    <button
                        class="flex-1 min-w-[120px] px-4 py-3 bg-blue-500 text-white font-semibold rounded-xl hover:bg-blue-600 transition duration-300 shadow-md hover:shadow-lg">
                        <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                            </path>
                        </svg>
                        Edit
                    </button>
                    <button
                        class="flex-1 min-w-[120px] px-4 py-3 bg-green-500 text-white font-semibold rounded-xl hover:bg-green-600 transition duration-300 shadow-md hover:shadow-lg">
                        <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Konfirmasi
                    </button>
                    <button
                        class="flex-1 min-w-[120px] px-4 py-3 bg-red-500 text-white font-semibold rounded-xl hover:bg-red-600 transition duration-300 shadow-md hover:shadow-lg">
                        <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                            </path>
                        </svg>
                        Hapus
                    </button>
                </div>
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
        });

        // Print dropdown functionality
        document.getElementById('printButton').addEventListener('click', function () {
            const options = document.getElementById('printOptions');
            options.classList.toggle('hidden');
        });

        const printButtons = document.querySelectorAll('#printOptions button[data-form]');
        const printForms = document.querySelectorAll('#printOptions form');

        printButtons.forEach(button => {
            button.addEventListener('click', function () {
                const targetForm = this.getAttribute('data-form');
                printForms.forEach(form => {
                    if (form.id === targetForm) {
                        form.classList.remove('hidden');
                    } else {
                        form.classList.add('hidden');
                    }
                });
            });
        });

        // Tampil dropdown functionality
        document.getElementById('tampil').addEventListener('click', function () {
            const options = document.getElementById('tampilOptions');
            options.classList.toggle('hidden');
        });

        const tampilButtons = document.querySelectorAll('#tampilOptions button[data-form]');
        const tampilForms = document.querySelectorAll('#tampilOptions form');

        tampilButtons.forEach(button => {
            button.addEventListener('click', function () {
                const targetForm = this.getAttribute('data-form');
                tampilForms.forEach(form => {
                    if (form.id === targetForm) {
                        form.classList.remove('hidden');
                    } else {
                        form.classList.add('hidden');
                    }
                });
            });
        });

        // Modal Detail functionality
        const detailModal = document.getElementById('detailModal');
        const closeModal = document.getElementById('closeModal');
        const detailButtons = document.querySelectorAll('.detail-btn');

        // Function to open modal with booking data
        function openDetailModal(bookingId) {
            // In a real application, you would fetch the booking data from the server
            // For now, we'll use the data from the table row

            const bookingRow = document.querySelector(`[data-booking-id="${bookingId}"]`).closest('tr');
            const bookingData = {
                userName: bookingRow.querySelector('td:nth-child(2) .text-sm').textContent,
                userInitial: bookingRow.querySelector('td:nth-child(2) .w-10 span').textContent,
                bookingDate: bookingRow.querySelector('td:nth-child(2) .text-xs').textContent,
                fieldName: bookingRow.querySelector('td:nth-child(3) .text-sm').textContent.split('•')[0].trim(),
                categoryName: bookingRow.querySelector('td:nth-child(3) .text-xs').textContent,
                startTime: bookingRow.querySelector('td:nth-child(3) .text-xs:last-child').textContent.split(' ')[1],
                endTime: bookingRow.querySelector('td:nth-child(3) .text-xs:last-child').textContent.split(' ')[3],
                status: bookingRow.querySelector('td:nth-child(4) span').textContent,
                total: bookingRow.querySelector('td:nth-child(5) .text-sm').textContent
            };

            // Populate modal with data
            document.getElementById('userName').textContent = bookingData.userName;
            document.getElementById('userInitial').textContent = bookingData.userInitial;
            document.getElementById('bookingDate').textContent = bookingData.bookingDate;
            document.getElementById('fieldName').textContent = bookingData.fieldName;
            document.getElementById('categoryName').textContent = bookingData.categoryName;
            document.getElementById('bookingTime').textContent = `${bookingData.startTime} - ${bookingData.endTime}`;

            // Calculate duration
            const start = new Date(`2000-01-01T${bookingData.startTime}`);
            const end = new Date(`2000-01-01T${bookingData.endTime}`);
            const durationHours = (end - start) / (1000 * 60 * 60);
            document.getElementById('bookingDuration').textContent = `${durationHours} jam`;

            // Set status with appropriate styling
            const statusElement = document.getElementById('bookingStatus');
            statusElement.textContent = bookingData.status;
            statusElement.className = 'px-3 py-1 rounded-full text-xs font-semibold ';

            if (bookingData.status === 'selesai') {
                statusElement.classList.add('bg-green-100', 'text-green-800');
            } else if (bookingData.status === 'pending') {
                statusElement.classList.add('bg-yellow-100', 'text-yellow-800');
            } else {
                statusElement.classList.add('bg-red-100', 'text-red-800');
            }

            document.getElementById('bookingTotal').textContent = bookingData.total;

            // Show modal
            detailModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        // Add event listeners to detail buttons
        detailButtons.forEach(button => {
            button.addEventListener('click', function () {
                const bookingId = this.getAttribute('data-booking-id');
                openDetailModal(bookingId);
            });
        });

        // Close modal
        closeModal.addEventListener('click', function () {
            detailModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        });

        // Close modal when clicking outside
        detailModal.addEventListener('click', function (e) {
            if (e.target === detailModal) {
                detailModal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function (e) {
            if (!e.target.closest('#printButton') && !e.target.closest('#printOptions')) {
                document.getElementById('printOptions').classList.add('hidden');
            }
            if (!e.target.closest('#tampil') && !e.target.closest('#tampilOptions')) {
                document.getElementById('tampilOptions').classList.add('hidden');
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
        #detailModal {
            transition: opacity 0.3s ease;
        }

        #detailModal:not(.hidden) {
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

        #detailModal>div {
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