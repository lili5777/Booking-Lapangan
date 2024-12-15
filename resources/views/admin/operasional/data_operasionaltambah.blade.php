@extends('user.component.master')
@section('judul', 'Tambah/Edit Data Pengguna')
@section('konten')
    <div class="flex bg-[#F8DFD4]">
        @include('admin.component.sidebar')
        <div class="w-full">
            <h1 class="text-center w-full text-gray-600 font-extrabold text-4xl py-5">
                {{ isset($operasional) ? 'Edit Jam Operasional' : 'Tambah Data Pengguna' }}</h1>
            <div class="pl-10 pt-10">
                <a href="{{ route('admin_operasional') }}"
                    class="bg-[#C69774] py-3 px-3 rounded-lg text-white font-bold hover:bg-green-600 transition duration-500">Kembali</a>
            </div>
            <div class="py-5 pl-10 pr-10">
                <form action="{{ route('proses_tambahoperasional') }}" method="POST"
                    class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    <input type="hidden" name="id" value="{{ isset($operasional) ? $operasional->id : '' }}">

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Jam buka
                        </label>
                        <input name="buka" type="time" id="buka" placeholder="Masukkan name"
                            value="{{ isset($operasional) ? $operasional->jam_buka_222142 : '' }}"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Jam Tutup
                        </label>
                        <input name="tutup" type="time" id="buka" placeholder="Masukkan name"
                            value="{{ isset($operasional) ? $operasional->jam_tutup_222142 : '' }}"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>


                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-[#C69774] hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ isset($operasional) ? 'Perbarui Operasional' : 'Tambah Pengguna' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
