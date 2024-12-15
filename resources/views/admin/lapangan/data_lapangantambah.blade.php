@extends('user.component.master')
@section('judul', 'Tambah/Edit Data Pengguna')
@section('konten')
    <div class="flex bg-[#F8DFD4]">
        @include('admin.component.sidebar')
        <div class="w-full">
            <h1 class="text-center w-full text-gray-600 font-extrabold text-4xl py-5">
                {{ isset($lapangan) ? 'Edit Data Lapangan' : 'Tambah Data Lapangan' }}</h1>
            <div class="pl-10 pt-10">
                <a href="{{ route('admin_lapangan') }}"
                    class="bg-[#C69774] py-3 px-3 rounded-lg text-white font-bold hover:bg-green-600 transition duration-500">Kembali</a>
            </div>
            <div class="py-5 pl-10 pr-10">
                <form action="{{ route('proses_tambahlapangan') }}" method="POST"
                    class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    <input type="hidden" name="id" value="{{ isset($lapangan) ? $lapangan->id : '' }}">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Kategori
                        </label>
                        <select name="id_kategori" id="id_kategori"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                            <option value="">Pilih Kategori</option>
                            @foreach ($kategori as $item)
                                <option value="{{ $item->id }}"
                                    {{ isset($lapangan) && $lapangan->id_kategori == $item->id ? 'selected' : '' }}>
                                    {{ $item->name_222142 }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Urutan
                        </label>
                        <input name="urutan" type="text" id="urutan" placeholder="Masukkan name"
                            value="{{ isset($lapangan) ? $lapangan->urutan_222142 : '' }}"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Deskripsi
                        </label>
                        <textarea name="deskripsi" id="deksripsi" placeholder="Masukkan deskripsi"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>{{ isset($lapangan) ? $lapangan->deskripsi_222142 : '' }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Kategori
                        </label>
                        <select name="status" id="id_kategori"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                            <option value="">Pilih Kategori</option>
                            <option value="1"
                                {{ isset($lapangan) && $lapangan->is_active_222142 == 1 ? 'selected' : '' }}>
                                tersedia
                            </option>
                            <option value="0"
                                {{ isset($lapangan) && $lapangan->is_active_222142 == 0 ? 'selected' : '' }}>
                                Tidak tersedia
                            </option>
                        </select>
                    </div>


                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-[#C69774] hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ isset($lapangan) ? 'Perbarui Lapangan' : 'Tambah Lapangan' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
