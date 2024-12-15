@extends('user.component.master')
@section('judul', 'Login')
@section('konten')
<div class="w-full min-h-screen bg-[#637E76] flex items-center justify-center p-4">
    <div class="bg-[#F8DFD4] w-full max-w-4xl rounded-xl shadow-2xl overflow-hidden grid grid-cols-2">
        <!-- Left Column: Decorative Section -->
        <div class="bg-[#637E76] text-[#F8DFD4] flex flex-col items-center justify-center p-12 space-y-6 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-[#C69774]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
            </svg>
            <h2 class="text-3xl font-bold">Selamat Datang Kembali</h2>
            <p class="text-sm">Masuk untuk melanjutkan perjalanan Anda</p>
        </div>

        <!-- Right Column: Login Form -->
        <div class="p-10 flex flex-col justify-center space-y-6">
            <h1 class="text-center font-bold text-4xl text-[#637E76] mb-6">Login</h1>

            @error('gagalpesan')
                <p class="text-red-500 text-sm text-center bg-red-100 p-2 rounded">{{ $message }}</p>
            @enderror
            @error('login_gagal')
                <p class="text-red-500 text-sm text-center bg-red-100 p-2 rounded">{{ $message }}</p>
            @enderror

            <form action="{{ route('proses_login') }}" method="POST" id="logForm" class="space-y-4">
                @csrf

                <div class="space-y-2">
                    <label for="username" class="block text-gray-700 text-sm font-semibold">Username</label>
                    <input
                        class="w-full px-4 py-3 rounded-lg border {{ $errors->has('username') ? 'border-red-500' : 'border-gray-300' }} focus:outline-none focus:ring-2 focus:ring-[#C69774] transition duration-300"
                        type="text" name="username" id="username"
                        placeholder="Masukkan username"
                        value="{{ old('username') }}"
                        required>
                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label for="password" class="block text-gray-700 text-sm font-semibold">Password</label>
                    <input
                        class="w-full px-4 py-3 rounded-lg border {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }} focus:outline-none focus:ring-2 focus:ring-[#C69774] transition duration-300"
                        type="password" name="password" id="password"
                        placeholder="Masukkan password"
                        required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full bg-[#C69774] text-[#F8DFD4] py-3 rounded-lg font-semibold
                           hover:bg-[#637E76] transition duration-300 ease-in-out transform
                           hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-[#637E76]">
                    Masuk
                </button>
            </form>

            <div class="text-center text-sm text-gray-600 mt-4">
                Belum punya akun? <a href="{{ route('register') }}" class="text-[#C69774] hover:underline">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</div>
@endsection
