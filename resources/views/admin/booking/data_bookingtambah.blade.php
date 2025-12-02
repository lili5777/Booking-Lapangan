@extends('user.component.master2')
@section('judul', isset($booking) ? 'Edit Data Booking' : 'Tambah Data Booking')
@section('konten')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 p-6 lg:p-10">
    <!-- Header Section -->
    <div class="mb-8">
        <div class="flex items-center gap-3 mb-4">
            <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center">
                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            </div>
            <div>
                <h1 class="text-4xl font-bold text-gray-800">
                    {{ isset($booking) ? 'Edit Data Booking' : 'Tambah Data Booking' }}
                </h1>
                <p class="text-gray-600">{{ isset($booking) ? 'Perbarui informasi booking' : 'Lengkapi form untuk membuat booking baru' }}</p>
            </div>
        </div>

        <!-- Back Button -->
        <a href="{{ route('admin_booking') }}" 
           class="inline-flex items-center gap-2 px-6 py-3 bg-white text-gray-700 font-semibold rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <div>
                        <h2 class="text-2xl font-bold text-white">Informasi Booking</h2>
                        <p class="text-white/80 text-sm">Isi data dengan lengkap dan benar</p>
                    </div>
                </div>
            </div>

            <!-- Form Body -->
            <form action="{{ route('proses_tambahbooking') }}" method="POST" class="p-8">
                @csrf
                <input type="hidden" name="id" value="{{ isset($booking) ? $booking->id : '' }}">

                <!-- User Selection -->
                <div class="mb-6">
                    <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="id_user">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span>Pilih Pengguna</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                            </svg>
                        </div>
                        <select name="id_user" id="id_user"
                            class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition duration-300 appearance-none bg-white"
                            required>
                            <option value="">Pilih Pengguna</option>
                            @foreach ($user as $item)
                                <option value="{{ $item->id }}"
                                    {{ isset($booking) && $booking->id_user == $item->id ? 'selected' : '' }}>
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Tanggal Booking -->
                <div class="mb-6">
                    <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="tgl_booking">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>Tanggal Main</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <input name="tgl_booking" 
                               type="date" 
                               id="tgl_booking" 
                               min="{{ now()->format('Y-m-d') }}"
                               value="{{ isset($booking) ? $booking->tgl_booking_222142 : '' }}"
                               class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-green-500 focus:ring-4 focus:ring-green-100 transition duration-300"
                               required>
                    </div>
                    <p class="text-gray-500 text-xs mt-2 ml-1">Pilih tanggal mulai dari hari ini</p>
                </div>

                <!-- Lapangan Selection -->
                <div class="mb-8">
                    <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="id_lapangan">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                        <span>Pilih Lapangan</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <select name="id_lapangan" id="id_lapangan"
                            class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-purple-500 focus:ring-4 focus:ring-purple-100 transition duration-300 appearance-none bg-white"
                            required>
                            <option value="">Pilih Lapangan</option>
                            @foreach ($lapangan as $item)
                                <option value="{{ $item->id }}"
                                    {{ isset($booking) && $booking->id_lapangan == $item->id ? 'selected' : '' }}>
                                    Lapangan {{ $kategori->where('id', $item->id_kategori)->first()->name_222142 }} - Urutan {{ $item->urutan_222142 }}
                                </option>
                            @endforeach
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <button type="submit"
                            class="flex-1 group relative inline-flex items-center justify-center gap-3 px-8 py-4 gradient-bg text-white font-bold text-lg rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105">
                        <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <span>{{ isset($booking) ? 'Pilih Waktu' : 'Pilih Waktu' }}</span>
                    </button>

                    <a href="{{ route('admin_booking') }}"
                       class="flex-1 inline-flex items-center justify-center gap-3 px-8 py-4 bg-gray-200 text-gray-700 font-bold text-lg rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:bg-gray-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        <span>Batal</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #F75270 0%, #FF6B88 100%);
    }
</style>
@endsection