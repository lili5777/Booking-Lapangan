<!-- Mobile Menu Button -->
<button id="menuToggle"
    class="lg:hidden fixed top-4 left-4 z-[60] w-12 h-12 rounded-xl gradient-bg shadow-lg flex items-center justify-center">
    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
</button>

<!-- Overlay -->
<div id="overlay" class="lg:hidden fixed inset-0 bg-black/50 z-40 hidden"></div>

<!-- Sidebar -->
<aside id="sidebar"
    class="fixed top-0 left-0 h-screen w-64 gradient-bg shadow-2xl z-50 transition-transform duration-300 -translate-x-full lg:translate-x-0">
    <!-- Header Sidebar -->
    <div class="flex items-center justify-center gap-3 py-6 px-4 border-b border-white/20">
        <div
            class="w-12 h-12 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center overflow-hidden">
            <img src="{{ asset('images/24fc9417-bbdd-4268-ad15-4874be8f411e.png') }}" alt="Logo"
                class="w-10 h-10 object-cover">
        </div>
        <div>
            <p class="text-white font-bold text-lg">Fikri Haikal</p>
            <p class="text-white/70 text-xs">Administrator</p>
        </div>
    </div>

    <!-- Navigation Menu -->
    <nav class="px-4 py-6 space-y-2">
        <a href="{{ route('admin') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-xl text-white hover:bg-white/20 transition duration-300 group">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
            </svg>
            <span class="font-semibold">Dasbor</span>
        </a>

        <a href="{{ route('admin_operasional') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-xl text-white hover:bg-white/20 transition duration-300 group">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                </path>
            </svg>
            <span class="font-semibold">Operasional</span>
        </a>

        <a href="{{ route('admin_pengguna') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-xl text-white hover:bg-white/20 transition duration-300 group">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                </path>
            </svg>
            <span class="font-semibold">Data Pengguna</span>
        </a>

        <a href="{{ route('admin_kategori') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-xl text-white hover:bg-white/20 transition duration-300 group">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                </path>
            </svg>
            <span class="font-semibold">Data Kategori</span>
        </a>

        <a href="{{ route('admin_lapangan') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-xl text-white hover:bg-white/20 transition duration-300 group">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                </path>
            </svg>
            <span class="font-semibold">Data Lapangan</span>
        </a>

        <a href="{{route('admin_booking')}}"
            class="flex items-center gap-3 px-4 py-3 rounded-xl text-white hover:bg-white/20 transition duration-300 group">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <span class="font-semibold">Data Booking</span>
        </a>

        <a href="{{route('admin_konfirmasi')}}"
            class="flex items-center gap-3 px-4 py-3 rounded-xl text-white hover:bg-white/20 transition duration-300 group">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span class="font-semibold">Konfirmasi Pesanan</span>
        </a>
    </nav>

    <!-- Logout Button -->
    <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-white/20">
        <a href="{{ route('logout') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-xl text-white bg-red-500 hover:bg-red-600 transition duration-300">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                </path>
            </svg>
            <span class="font-semibold">Keluar</span>
        </a>
    </div>
</aside>

<script>
    // Mobile menu toggle
    const menuToggle = document.getElementById('menuToggle');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    menuToggle?.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
    });

    overlay?.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });

    // Close sidebar when clicking menu item on mobile
    const menuLinks = sidebar.querySelectorAll('a');
    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 1024) {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
            }
        });
    });
</script>