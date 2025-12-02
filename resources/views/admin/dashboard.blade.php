@extends('user.component.master2')
@section('judul', 'Dashboard')
@section('konten')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 p-6 lg:p-10">
    <!-- Header Section -->
    <div class="mb-10">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">Dashboard Admin</h1>
        <p class="text-gray-600">Selamat datang kembali! Berikut ringkasan sistem Anda hari ini.</p>
    </div>

    <!-- Welcome Card -->
    <div class="mb-10 bg-white rounded-2xl shadow-lg overflow-hidden">
        <div class="gradient-bg p-8 flex flex-col lg:flex-row items-center justify-between">
            <div class="text-white mb-6 lg:mb-0">
                <h2 class="text-3xl font-bold mb-2">Hai, Fikri Haikal! 👋</h2>
                <p class="text-white/90 text-lg max-w-xl">
                    Kamu adalah admin yang luar biasa! Kerja keras dan fokusmu membuat pelanggan kami senang. 
                    Terus pertahankan semangat ini!
                </p>
            </div>
            <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-6">
                <img src="{{asset('images/badminton_logo_-_Dibuat_dengan_PosterMyWall__1_-removebg-preview.png')}}" 
                     alt="Logo" 
                     class="w-40 h-40 object-contain">
            </div>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Card Pengguna -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover cursor-pointer">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-blue-600 bg-blue-100 px-3 py-1 rounded-full">+12%</span>
                </div>
                <h3 class="text-gray-600 text-sm font-medium mb-1">Total Pengguna</h3>
                <p class="text-4xl font-bold text-gray-800">{{$pengguna}}</p>
                <p class="text-xs text-gray-500 mt-2">Pengguna aktif bulan ini</p>
            </div>
            <div class="h-1 bg-gradient-to-r from-blue-400 to-blue-600"></div>
        </div>

        <!-- Card Lapangan -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover cursor-pointer">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-green-600 bg-green-100 px-3 py-1 rounded-full">Aktif</span>
                </div>
                <h3 class="text-gray-600 text-sm font-medium mb-1">Total Lapangan</h3>
                <p class="text-4xl font-bold text-gray-800">{{$lapangan}}</p>
                <p class="text-xs text-gray-500 mt-2">Lapangan tersedia</p>
            </div>
            <div class="h-1 bg-gradient-to-r from-green-400 to-green-600"></div>
        </div>

        <!-- Card Pesanan -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover cursor-pointer">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-14 h-14 rounded-xl gradient-bg flex items-center justify-center">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-pink-600 bg-pink-100 px-3 py-1 rounded-full">+25%</span>
                </div>
                <h3 class="text-gray-600 text-sm font-medium mb-1">Total Pesanan</h3>
                <p class="text-4xl font-bold text-gray-800">{{$pesan}}</p>
                <p class="text-xs text-gray-500 mt-2">Booking bulan ini</p>
            </div>
            <div class="h-1 gradient-bg"></div>
        </div>

        <!-- Card Konfirmasi -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover cursor-pointer">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-purple-600 bg-purple-100 px-3 py-1 rounded-full">Pending</span>
                </div>
                <h3 class="text-gray-600 text-sm font-medium mb-1">Perlu Konfirmasi</h3>
                <p class="text-4xl font-bold text-gray-800">{{$konfir}}</p>
                <p class="text-xs text-gray-500 mt-2">Menunggu verifikasi</p>
            </div>
            <div class="h-1 bg-gradient-to-r from-purple-400 to-purple-600"></div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Activity -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                <svg class="w-6 h-6 text-[#F75270]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                Aktivitas Terbaru
            </h3>
            <div class="space-y-4">
                <div class="flex items-center gap-4 p-3 bg-gray-50 rounded-xl">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                        <span class="text-blue-600 font-bold">U</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-gray-800">Pengguna baru terdaftar</p>
                        <p class="text-xs text-gray-500">2 menit yang lalu</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-3 bg-gray-50 rounded-xl">
                    <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center">
                        <span class="text-green-600 font-bold">B</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-gray-800">Booking baru diterima</p>
                        <p class="text-xs text-gray-500">15 menit yang lalu</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-3 bg-gray-50 rounded-xl">
                    <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center">
                        <span class="text-purple-600 font-bold">K</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-gray-800">Pesanan dikonfirmasi</p>
                        <p class="text-xs text-gray-500">1 jam yang lalu</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                <svg class="w-6 h-6 text-[#F75270]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                Akses Cepat
            </h3>
            <div class="grid grid-cols-2 gap-4">
                <a href="{{route('admin_booking')}}" class="p-4 bg-gradient-to-br from-pink-50 to-pink-100 rounded-xl hover:shadow-md transition duration-300 group">
                    <svg class="w-8 h-8 text-[#F75270] mb-2 group-hover:scale-110 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <p class="font-semibold text-gray-800 text-sm">Kelola Booking</p>
                </a>
                <a href="{{route('admin_konfirmasi')}}" class="p-4 bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl hover:shadow-md transition duration-300 group">
                    <svg class="w-8 h-8 text-purple-600 mb-2 group-hover:scale-110 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="font-semibold text-gray-800 text-sm">Konfirmasi</p>
                </a>
                <a href="{{route('admin_lapangan')}}" class="p-4 bg-gradient-to-br from-green-50 to-green-100 rounded-xl hover:shadow-md transition duration-300 group">
                    <svg class="w-8 h-8 text-green-600 mb-2 group-hover:scale-110 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    <p class="font-semibold text-gray-800 text-sm">Lapangan</p>
                </a>
                <a href="{{route('admin_pengguna')}}" class="p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl hover:shadow-md transition duration-300 group">
                    <svg class="w-8 h-8 text-blue-600 mb-2 group-hover:scale-110 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <p class="font-semibold text-gray-800 text-sm">Pengguna</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection