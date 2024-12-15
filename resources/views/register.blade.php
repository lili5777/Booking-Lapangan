@extends('user.component.master')

@section('judul', 'Register')

@section('konten')
<div class="w-full min-h-screen bg-[#637E76] flex items-center justify-center p-4">
    <div class="bg-[#F8DFD4] w-full max-w-4xl rounded-xl shadow-2xl overflow-hidden grid grid-cols-2">
        <!-- Left Column: Decorative Section -->
        <div class="bg-[#637E76] text-[#F8DFD4] flex flex-col items-center justify-center p-12 space-y-6 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-[#C69774]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
            </svg>
            <h2 class="text-3xl font-bold">Selamat Datang</h2>
            <p class="text-sm">Bergabunglah dengan kami dan mulai perjalanan Anda!</p>
        </div>

        <!-- Right Column: Registration Form -->
        <div class="p-8 space-y-6">
            <h1 class="text-center font-bold text-4xl text-[#637E76] mb-6">Registrasi</h1>

            <form action="{{ route('proses_register') }}" method="POST" class="space-y-4">
                @csrf

                <div class="grid grid-cols-2 gap-4">
                    <!-- First Column of Inputs -->
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <label for="username" class="block text-gray-700 text-sm font-semibold">Username</label>
                            <input
                                class="w-full px-4 py-3 rounded-lg border {{ $errors->has('username') ? 'border-red-500' : 'border-gray-300' }} focus:outline-none focus:ring-2 focus:ring-[#C69774] transition duration-300"
                                type="text" name="username" id="username"
                                value="{{ old('username') }}"
                                placeholder="Masukkan username" required>
                            @error('username')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="name" class="block text-gray-700 text-sm font-semibold">Nama Lengkap</label>
                            <input
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#C69774] transition duration-300"
                                type="text" name="name" id="name"
                                value="{{ old('name') }}"
                                placeholder="Masukkan nama lengkap" required>
                        </div>
                    </div>

                    <!-- Second Column of Inputs -->
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <label for="email" class="block text-gray-700 text-sm font-semibold">Email</label>
                            <input
                                class="w-full px-4 py-3 rounded-lg border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} focus:outline-none focus:ring-2 focus:ring-[#C69774] transition duration-300"
                                type="email" name="email" id="email"
                                value="{{ old('email') }}"
                                placeholder="Masukkan email" required>
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="no_WA" class="block text-gray-700 text-sm font-semibold">Nomor WhatsApp</label>
                            <input
                                class="w-full px-4 py-3 rounded-lg border {{ $errors->has('no_WA') ? 'border-red-500' : 'border-gray-300' }} focus:outline-none focus:ring-2 focus:ring-[#C69774] transition duration-300"
                                type="tel" name="no_WA" id="no_WA"
                                value="{{ old('no_WA') }}"
                                placeholder="Masukkan nomor WA" required>
                            @error('no_WA')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Password Input (Full Width) -->
                <div class="space-y-2">
                    <label for="password" class="block text-gray-700 text-sm font-semibold">Password</label>
                    <input
                        class="w-full px-4 py-3 rounded-lg border {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }} focus:outline-none focus:ring-2 focus:ring-[#C69774] transition duration-300"
                        type="password" name="password" id="password"
                        placeholder="Masukkan password" required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full bg-[#C69774] text-[#F8DFD4] py-3 rounded-lg font-semibold
                           hover:bg-[#637E76] transition duration-300 ease-in-out transform
                           hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-[#637E76]">
                    Daftar Sekarang
                </button>
            </form>

            <div class="text-center text-sm text-gray-600 mt-4">
                Sudah punya akun? <a href="{{ route('login') }}" class="text-[#C69774] hover:underline">Masuk di sini</a>
            </div>
        </div>
    </div>
</div>
@endsection
