@extends('user.component.master2')
@section('judul', isset($user) ? 'Edit Data Pengguna' : 'Tambah Data Pengguna')
@section('konten')
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 p-6 lg:p-10">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-4xl font-bold text-gray-800">
                        {{ isset($user) ? 'Edit Data Pengguna' : 'Tambah Data Pengguna' }}
                    </h1>
                    <p class="text-gray-600">{{ isset($user) ? 'Perbarui informasi pengguna' : 'Lengkapi form untuk menambah pengguna baru' }}</p>
                </div>
            </div>

            <!-- Back Button -->
            <a href="{{ route('admin_pengguna') }}" 
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <div>
                            <h2 class="text-2xl font-bold text-white">Informasi Pengguna</h2>
                            <p class="text-white/80 text-sm">Isi data dengan lengkap dan benar</p>
                        </div>
                    </div>
                </div>

                <!-- Form Body -->
                <form action="{{ route('proses_tambahpengguna') }}" method="POST" class="p-8">
                    @csrf
                    <input type="hidden" name="id" value="{{ isset($user) ? $user->id : '' }}">

                    <!-- Username -->
                    <div class="mb-6">
                        <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="username">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>Username</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                </svg>
                            </div>
                            <input name="username" 
                                   type="text" 
                                   id="username" 
                                   placeholder="Masukkan username"
                                   value="{{ isset($user) ? $user->username : '' }}"
                                   class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition duration-300"
                                   required>
                        </div>
                        @error('username')
                            <p class="text-red-500 text-sm mt-2 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Nama -->
                    <div class="mb-6">
                        <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="name">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Nama Lengkap</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <input name="name" 
                                   type="text" 
                                   id="name" 
                                   placeholder="Masukkan nama lengkap"
                                   value="{{ isset($user) ? $user->name : '' }}"
                                   class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-green-500 focus:ring-4 focus:ring-green-100 transition duration-300"
                                   required>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="mb-6">
                        <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="email">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>Email</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                </svg>
                            </div>
                            <input name="email" 
                                   type="email" 
                                   id="email" 
                                   placeholder="contoh@email.com"
                                   value="{{ isset($user) ? $user->email : '' }}"
                                   class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-purple-500 focus:ring-4 focus:ring-purple-100 transition duration-300"
                                   required>
                        </div>
                    </div>

                    <!-- No WhatsApp -->
                    <div class="mb-6">
                        <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="nowa">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                            </svg>
                            <span>Nomor WhatsApp</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <span class="text-gray-500 font-semibold">+62</span>
                            </div>
                            <input name="no_WA" 
                                   type="text" 
                                   id="nowa" 
                                   placeholder="81234567890"
                                   value="{{ isset($user) ? $user->no_WA : '' }}"
                                   class="w-full pl-16 pr-4 py-3 border-2 border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-green-500 focus:ring-4 focus:ring-green-100 transition duration-300"
                                   required>
                        </div>
                        <p class="text-gray-500 text-xs mt-2 ml-1">Masukkan nomor tanpa awalan 0 atau +62</p>
                    </div>

                    <!-- Password (Only for Add) -->
                    @if (!isset($user))
                        <div class="mb-8">
                            <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="password">
                                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                <span>Password</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                                    </svg>
                                </div>
                                <input name="password" 
                                       type="password" 
                                       id="password" 
                                       placeholder="Minimal 6 karakter"
                                       class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-red-500 focus:ring-4 focus:ring-red-100 transition duration-300"
                                       required 
                                       pattern=".{6,10}" 
                                       title="Password harus 6-10 karakter">
                                <button type="button" 
                                        onclick="togglePassword()"
                                        class="absolute inset-y-0 right-0 flex items-center pr-4">
                                    <svg id="eyeIcon" class="w-5 h-5 text-gray-400 hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                            <div id="password-error" class="text-red-500 text-sm mt-2"></div>

                            <!-- Password Strength Indicator -->
                            <div class="mt-3">
                                <div class="flex gap-1 mb-1">
                                    <div id="strength1" class="h-1 flex-1 rounded bg-gray-200"></div>
                                    <div id="strength2" class="h-1 flex-1 rounded bg-gray-200"></div>
                                    <div id="strength3" class="h-1 flex-1 rounded bg-gray-200"></div>
                                    <div id="strength4" class="h-1 flex-1 rounded bg-gray-200"></div>
                                </div>
                                <p id="strengthText" class="text-xs text-gray-500">Kekuatan password</p>
                            </div>
                        </div>
                    @endif

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <button type="submit"
                                class="flex-1 group relative inline-flex items-center justify-center gap-3 px-8 py-4 gradient-bg text-white font-bold text-lg rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105">
                            <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{{ isset($user) ? 'Perbarui Pengguna' : 'Tambah Pengguna' }}</span>
                        </button>

                        <a href="{{ route('admin_pengguna') }}"
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

    <script>
        // Password validation
        document.getElementById('password')?.addEventListener('input', function () {
            const password = this.value;
            const errorDiv = document.getElementById('password-error');
            const strengthBars = [
                document.getElementById('strength1'),
                document.getElementById('strength2'),
                document.getElementById('strength3'),
                document.getElementById('strength4')
            ];
            const strengthText = document.getElementById('strengthText');

            // Reset
            strengthBars.forEach(bar => {
                bar.className = 'h-1 flex-1 rounded bg-gray-200';
            });

            if (password.length < 6) {
                errorDiv.textContent = 'Password terlalu pendek. Minimal 6 karakter.';
                strengthText.textContent = 'Password lemah';
                strengthText.className = 'text-xs text-red-500';
                strengthBars[0].className = 'h-1 flex-1 rounded bg-red-500';
            } else if (password.length > 10) {
                errorDiv.textContent = 'Password terlalu panjang. Maksimal 10 karakter.';
            } else {
                errorDiv.textContent = '';

                // Calculate strength
                let strength = 0;
                if (password.length >= 6) strength++;
                if (password.length >= 8) strength++;
                if (/[A-Z]/.test(password)) strength++;
                if (/[0-9]/.test(password)) strength++;

                // Update bars
                const colors = ['bg-red-500', 'bg-orange-500', 'bg-yellow-500', 'bg-green-500'];
                const texts = ['Lemah', 'Cukup', 'Baik', 'Kuat'];
                const textColors = ['text-red-500', 'text-orange-500', 'text-yellow-500', 'text-green-500'];

                for (let i = 0; i < strength; i++) {
                    strengthBars[i].className = `h-1 flex-1 rounded ${colors[strength - 1]}`;
                }

                strengthText.textContent = `Password ${texts[strength - 1]}`;
                strengthText.className = `text-xs ${textColors[strength - 1]}`;
            }
        });

        // Toggle password visibility
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>';
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>';
            }
        }
    </script>

    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #F75270 0%, #FF6B88 100%);
        }
    </style>
@endsection