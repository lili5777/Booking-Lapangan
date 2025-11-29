<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - BookingLap</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#F75270',
                        secondary: '#4A90E2',
                        accent: '#FFD93D',
                        dark: '#2C3E50'
                    }
                }
            }
        }
    </script>
</head>

<body class="font-sans antialiased">

    <!-- Register Section -->
    <section class="min-h-screen bg-primary flex items-center justify-center relative overflow-hidden p-4">
        <!-- Simple Background -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10">
            <div class="absolute top-20 left-10 w-20 h-20 bg-white rounded-full"></div>
            <div class="absolute top-40 right-20 w-32 h-32 bg-white rounded-full"></div>
            <div class="absolute bottom-20 left-20 w-24 h-24 bg-white rounded-full"></div>
            <div class="absolute bottom-40 right-10 w-16 h-16 bg-white rounded-full"></div>
        </div>

        <div class="container mx-auto relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                <!-- Left Content -->
                <div class="text-white text-center lg:text-left hidden lg:block">
                    <div class="inline-block bg-white/20 backdrop-blur-sm rounded-full px-6 py-2 mb-6">
                        <span class="text-sm font-semibold">🏸 Platform Booking Terpercaya</span>
                    </div>

                    <h1 class="text-5xl lg:text-6xl font-black mb-6 leading-tight">
                        Bergabung<br>
                        <span class="text-accent">Sekarang!</span>
                    </h1>

                    <p class="text-xl mb-8 opacity-90">
                        Daftar dan mulai booking lapangan favorit
                    </p>

                    <div class="flex gap-6">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 min-w-[110px]">
                            <div class="text-3xl font-black">50+</div>
                            <div class="text-sm opacity-90">Lapangan</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 min-w-[110px]">
                            <div class="text-3xl font-black">5K+</div>
                            <div class="text-sm opacity-90">Pengguna</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 min-w-[110px]">
                            <div class="text-3xl font-black">4.9</div>
                            <div class="text-sm opacity-90">Rating</div>
                        </div>
                    </div>
                </div>

                <!-- Register Form -->
                <div
                    class="glass-effect backdrop-blur-lg rounded-3xl p-6 md:p-8 shadow-2xl border border-white/20 max-w-md mx-auto w-full">
                    <!-- Logo -->
                    <div class="text-center mb-6">
                        <div
                            class="w-14 h-14 bg-white rounded-full flex items-center justify-center text-primary font-bold text-xl shadow-lg mx-auto mb-3">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h2 class="text-2xl font-black text-white mb-1">Daftar</h2>
                        <p class="text-white/70 text-sm">Buat akun baru</p>
                    </div>

                    <form id="registerForm" action="{{ route('proses_register') }}" method="POST" class="space-y-3">
                        @csrf

                        <!-- Error dari Server -->
                        @if($errors->any())
                            <div class="bg-red-500/20 border border-red-500 text-white px-3 py-2 rounded-lg mb-4 text-sm">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-exclamation-circle text-xs"></i>
                                    <span>{{ $errors->first() }}</span>
                                </div>
                            </div>
                        @endif

                        <!-- Name Input -->
                        <div class="space-y-1.5">
                            <label class="text-white font-semibold block text-xs">Nama Lengkap</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400 text-sm"></i>
                                </div>
                                <input type="text" name="name" id="nameInput" value="{{ old('name') }}" required
                                    class="w-full bg-white border-2 border-gray-200 rounded-lg pl-10 pr-3 py-2.5 text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-white focus:border-white transition-all"
                                    placeholder="Masukkan nama">
                            </div>
                            @error('name')
                                <p class="text-red-300 text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Username Input -->
                        <div class="space-y-1.5">
                            <label class="text-white font-semibold block text-xs">Username</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-at text-gray-400 text-sm"></i>
                                </div>
                                <input type="text" name="username" id="usernameInput" value="{{ old('username') }}"
                                    required
                                    class="w-full bg-white border-2 border-gray-200 rounded-lg pl-10 pr-3 py-2.5 text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-white focus:border-white transition-all"
                                    placeholder="Pilih username">
                            </div>
                            @error('username')
                                <p class="text-red-300 text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email Input -->
                        <div class="space-y-1.5">
                            <label class="text-white font-semibold block text-xs">Email</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400 text-sm"></i>
                                </div>
                                <input type="email" name="email" id="emailInput" value="{{ old('email') }}" required
                                    class="w-full bg-white border-2 border-gray-200 rounded-lg pl-10 pr-3 py-2.5 text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-white focus:border-white transition-all"
                                    placeholder="nama@email.com">
                            </div>
                            @error('email')
                                <p class="text-red-300 text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- WhatsApp Input -->
                        <div class="space-y-1.5">
                            <label class="text-white font-semibold block text-xs">No. WhatsApp</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-phone text-gray-400 text-sm"></i>
                                </div>
                                <input type="tel" name="no_WA" id="waInput" value="{{ old('no_WA') }}" required
                                    class="w-full bg-white border-2 border-gray-200 rounded-lg pl-10 pr-3 py-2.5 text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-white focus:border-white transition-all"
                                    placeholder="081234567890">
                            </div>
                            @error('no_WA')
                                <p class="text-red-300 text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password Input -->
                        <div class="space-y-1.5">
                            <label class="text-white font-semibold block text-xs">Password</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400 text-sm"></i>
                                </div>
                                <input type="password" name="password" id="passwordInput" required
                                    class="w-full bg-white border-2 border-gray-200 rounded-lg pl-10 pr-10 py-2.5 text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-white focus:border-white transition-all"
                                    placeholder="Minimal 6 karakter">
                                <button type="button"
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center toggle-password">
                                    <i
                                        class="fas fa-eye text-gray-400 hover:text-gray-600 transition-colors text-sm"></i>
                                </button>
                            </div>
                            @error('password')
                                <p class="text-red-300 text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password Confirmation - DIHAPUS karena tidak ada di validation -->

                        <!-- Terms -->
                        <div class="flex items-start gap-2 pt-2">
                            <input type="checkbox" name="terms" id="termsCheckbox" required
                                class="w-3.5 h-3.5 rounded cursor-pointer mt-0.5">
                            <label for="termsCheckbox" class="text-white text-xs cursor-pointer">
                                Saya setuju dengan
                                <a href="#" class="text-accent hover:text-yellow-300 font-semibold">Syarat &
                                    Ketentuan</a>
                            </label>
                        </div>
                        <p class="text-red-300 text-xs hidden" id="termsError"></p>

                        <!-- Submit Button -->
                        <button type="submit" id="submitBtn"
                            class="w-full bg-white text-primary py-3 rounded-lg font-bold text-base hover:bg-gray-100 transition-all duration-300 hover:-translate-y-1 shadow-lg flex items-center justify-center gap-2 mt-4">
                            <span>Daftar</span>
                            <i class="fas fa-user-plus text-sm"></i>
                        </button>
                    </form>

                    <!-- Login Link -->
                    <div class="text-center mt-4">
                        <p class="text-white/80 text-xs">
                            Sudah punya akun?
                            <a href="{{ route('login') }}" class="text-accent hover:text-yellow-300 font-semibold ml-1">
                                Masuk sekarang
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <script>
        // Toggle Password Visibility
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function () {
                const input = this.closest('.relative').querySelector('input');
                const icon = this.querySelector('i');

                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        });

        // Input focus effects
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', function () {
                this.parentElement.classList.add('ring-2', 'ring-white');
            });

            input.addEventListener('blur', function () {
                this.parentElement.classList.remove('ring-2', 'ring-white');
            });
        });

        // Form validation
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            const termsCheckbox = document.getElementById('termsCheckbox');
            const termsError = document.getElementById('termsError');
            
            if (!termsCheckbox.checked) {
                e.preventDefault();
                termsError.textContent = 'Anda harus menyetujui syarat dan ketentuan';
                termsError.classList.remove('hidden');
                termsCheckbox.focus();
            } else {
                termsError.classList.add('hidden');
            }
        });
    </script>

    <style>
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        input {
            font-size: 14px;
            font-weight: 500;
        }

        input::placeholder {
            color: #9CA3AF;
            font-weight: 400;
        }

        input:focus {
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.2);
        }

        input[type="checkbox"]:checked {
            background-color: #F75270;
            border-color: #F75270;
        }

        button:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }

        input,
        button,
        a {
            transition: all 0.3s ease;
        }
    </style>

</body>

</html>