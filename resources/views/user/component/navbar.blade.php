<div class="w-full bg-[#637E76] flex justify-around py-4 place-items-center shadow-2xl sticky top-0 z-50">
    <div class="flex place-items-center font-semibold gap-2">
        <img src="{{ asset('images/24fc9417-bbdd-4268-ad15-4874be8f411e.png') }}" alt="" class="w-12">
        <p class="font-sans text-2xl text-white hover:text-[#C69774]">Fikri Haikal</p>
    </div>
    <div class="gap-20 flex text-white font-bold">
        <div class="hover:text-[#C69774] transition delay-150 duration-200 ease-in-out"><a
                href="{{ route('user') }}">Beranda</a></div>
        <div class="hover:text-[#C69774] transition delay-150 duration-200 ease-in-out"><a
                href="{{ route('lapangan') }}">Lapangan</a></div>
        <div class="hover:text-[#C69774] transition delay-150 duration-200 ease-in-out"><a
                href="{{ route('kontak') }}">Kontak</a></div>
        <div class="hover:text-[#C69774] transition delay-150 duration-200 ease-in-out"><a
                href="{{ route('riwayat') }}">Riwayat</a></div>
    </div>
    <div class="">
        @if (auth()->check())
            <a href="{{ route('logout') }}">
                <div
                    class="bg-[#C69774] px-10 py-2 text-white font-bold rounded-lg hover:text-[#637E76] hover:bg-[#F8DFD4] transition delay-150 duration-200 ease-in-out">
                    Logout</div>
            </a>
        @else
            <a href="{{ route('login') }}">
                <div
                    class="bg-[#C69774] px-10 py-2 text-white font-bold rounded-lg hover:text-[#637E76] hover:bg-[#F8DFD4] transition delay-150 duration-200 ease-in-out">
                    Login</div>
            </a>
        @endif
    </div>
</div>
