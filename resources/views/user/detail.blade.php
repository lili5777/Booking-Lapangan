@extends('user.component.master')
@section('judul', 'Detail')
@section('konten')
    @include('user.component.navbar')

    <div class="bg-[#F8DFD4] w-full flex flex-wrap lg:flex-nowrap pb-24 h-screen">
        <!-- Bagian Kiri -->
        <div class="w-full lg:w-1/2 grid place-items-center py-10">
            <img src="{{ asset('images/' . $kategori->foto_222142) }}" alt="Foto Kategori" class="w-2/3 rounded-lg shadow-lg">
        </div>

        <!-- Bagian Kanan -->
        <div class="w-full lg:w-1/2 px-6 lg:pr-10 text-gray-700">
            <h1 class="text-center py-10 font-bold text-2xl text-gray-700">
                Kategori {{ $kategori->name_222142 }} - Lapangan {{ $lapangan->urutan_222142 }}
            </h1>
            <p class="text-justify leading-relaxed">
                {{ $lapangan->deskripsi_222142 }}
            </p>
            <h2 class="font-bold text-xl pt-5 text-gray-700">
                Harga: Rp.{{ number_format($kategori->harga_222142, 0, ',', '.') }} / Jam
            </h2>
            <div class="py-10 flex justify-center gap-4">
                <a href="{{ route('lapangan') }}"
                    class="bg-[#C69774] text-white py-3 px-6 rounded-lg hover:bg-[#637E76] font-bold transition duration-300">
                    Kembali
                </a>
            </div>
        </div>
    </div>

    @include('user.component.footer')
@endsection
