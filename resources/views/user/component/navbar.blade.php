<nav id="navbar" class="fixed w-full z-50 transition-all duration-500 py-4">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <a href="{{ route('user') }}" class="flex items-center space-x-2 text-white font-bold text-xl">
            <div
                class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-primary font-bold shadow-lg btn-glow">
                <i class="fas fa-feather-alt"></i>
            </div>
            <span>BookingLap</span>
        </a>

        <div class="hidden md:flex space-x-8">
            <a href="{{ route('user') }}"
                class="text-white hover:text-accent transition-all duration-300 font-medium relative group">
                Beranda
                <span
                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="{{ route('lapangan') }}"
                class="text-white hover:text-accent transition-all duration-300 font-medium relative group">
                Lapangan
                <span
                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="{{ route('kontak') }}"
                class="text-white hover:text-accent transition-all duration-300 font-medium relative group">
                Kontak
                <span
                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="{{ route('riwayat') }}"
                class="text-white hover:text-accent transition-all duration-300 font-medium relative group">
                Riwayat
                <span
                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
            </a>
        </div>

        <div class="flex items-center space-x-4">
            @if(auth()->check())
                <div class="flex items-center space-x-2 text-white">
                    <div
                        class="w-8 h-8 bg-accent rounded-full flex items-center justify-center text-dark font-bold shadow-lg">
                        {{ substr(auth()->user()->name, 0, 1) }}
                    </div>
                    <span class="hidden sm:block">Halo, {{ auth()->user()->name }}</span>
                </div>
                <a href="{{ route('logout') }}"
                    class="bg-white text-primary px-4 py-2 rounded-full font-medium hover:bg-gray-100 transition-all duration-300 btn-glow">
                    Logout
                </a>
            @else
                <a href="{{ route('login') }}"
                    class="bg-white text-primary px-4 py-2 rounded-full font-medium hover:bg-gray-100 transition-all duration-300 btn-glow">
                    Login
                </a>
            @endif

            <!-- Mobile menu button -->
            <button id="mobile-menu-button" class="md:hidden text-white text-xl">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="md:hidden hidden glass-effect mt-4 rounded-xl shadow-2xl py-4 px-4 mx-4">
        <a href="{{ route('user') }}"
            class="block py-3 text-white hover:text-accent transition-all duration-300 border-b border-white/10">
            <i class="fas fa-home mr-3"></i>Beranda
        </a>
        <a href="{{ route('lapangan') }}"
            class="block py-3 text-white hover:text-accent transition-all duration-300 border-b border-white/10">
            <i class="fas fa-map-marked-alt mr-3"></i>Lapangan
        </a>
        <a href="{{ route('kontak') }}"
            class="block py-3 text-white hover:text-accent transition-all duration-300 border-b border-white/10">
            <i class="fas fa-phone-alt mr-3"></i>Kontak
        </a>
        <a href="{{ route('riwayat') }}" class="block py-3 text-white hover:text-accent transition-all duration-300">
            <i class="fas fa-history mr-3"></i>Riwayat
        </a>
    </div>
</nav>