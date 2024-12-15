<div class=" sticky top-0 bg-[#637E76] w-80 px-3">
    <div class="flex place-items-center font-semibold gap-2 place-content-center py-5 border-b-4">
        <img src="{{ asset('images/24fc9417-bbdd-4268-ad15-4874be8f411e.png') }}" alt="" class="w-12">
        <p class="font-sans text-2xl text-white hover:text-[#C69774]">Fikri Haikal</p>
    </div>
    <div class="grid pl-10 my-2 py-3 hover:bg-[#C69774] transition duration-500 rounded-md">
        <a href="{{ route('admin') }}" class="text-white font-bold text-xl ">Dasbor</a>
    </div>
    <div class="grid pl-10 my-2 py-3 hover:bg-[#C69774] transition duration-500 rounded-md">
        <a href="{{ route('admin_operasional') }}" class="text-white font-bold text-xl ">Operasional</a>
    </div>
    <div class="grid  pl-10  my-2 py-3 hover:bg-[#C69774] transition duration-500 rounded-md">
        <a href="{{ route('admin_pengguna') }}" class="text-white font-bold text-xl">Data Pengguna</a>
    </div>
    <div class="grid  pl-10  my-2 py-3 hover:bg-[#C69774] transition duration-500 rounded-md">
        <a href="{{ route('admin_kategori') }}" class="text-white font-bold text-xl">Data Kategori</a>
    </div>
    <div class="grid  pl-10  my-2 py-3 hover:bg-[#C69774] transition duration-500 rounded-md">
        <a href="{{ route('admin_lapangan') }}" class="text-white font-bold text-xl">Data Lapangan</a>
    </div>
    <div class="grid  pl-10  my-2 py-3 hover:bg-[#C69774] transition duration-500 rounded-md">
        <a href="{{route('admin_booking')}}" class="text-white font-bold text-xl">Data Booking</a>
    </div>
    <div class="grid  pl-10  my-2 py-3 hover:bg-[#C69774] transition duration-500 rounded-md">
        <a href="{{route('admin_konfirmasi')}}" class="text-white font-bold text-xl">Konfirmasi Pesanan</a>
    </div>

    <div class="pt-64">
        <div class=" border-t-4">
            <div class=" hover:bg-red-600 transition duration-500 rounded-md">
                <div class="grid  pl-10  my-2 py-3 ">
                    <a href="{{ route('logout') }}" class="text-white font-bold text-xl">Keluar</a>
                </div>
            </div>
        </div>
    </div>


</div>
