@extends('user.component.master')
@section('judul', 'Data Pengguna')
@section('konten')
    <div class="flex bg-[#F8DFD4]">
        @include('admin.component.sidebar')
        <div class="w-full">
            <h1 class="text-center w-full text-gray-600 font-extrabold text-4xl py-5">Operasional</h1>

            <div class="py-5 pl-10 pr-10 flex justify-center gap-10">
                <div class="bg-orange-300 py-5 px-10 text-white font-bold text-2xl text-center">
                    <h1>Jam Buka</h1>
                    <h1>{{ $operasional->jam_buka_222142 }}</h1>
                </div>
                <div class="bg-orange-300 py-5 px-10 text-white font-bold text-2xl text-center">
                    <h1>Jam Buka</h1>
                    <h1>{{ $operasional->jam_tutup_222142 }}</h1>
                </div>
            </div>
            <div class="grid place-content-center">
                <a href="{{ route('proses_editoperasional', $operasional->id) }}"
                    class="bg-green-400 text-white font-bold text-center py-3 px-2 rounded-xl shadow-lg hover:bg-green-600">Edit
                    Jam Operasional</a>
            </div>


        </div>

    </div>

@endsection
