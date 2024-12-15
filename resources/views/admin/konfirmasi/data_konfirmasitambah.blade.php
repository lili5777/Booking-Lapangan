@extends('user.component.master')
@section('judul', 'Tambah/Edit Data Pengguna')
@section('konten')
    <div class="flex bg-[#F8DFD4]">
        @include('admin.component.sidebar')
        <div class="w-full">
            <h1 class="text-center w-full text-gray-600 font-extrabold text-4xl py-5">
                {{ isset($kategori) ? 'Edit Data Konfirmasi' : 'Tambah Data Konfirmasi' }}</h1>
            <div class="pl-10 pt-10">
                <a href="{{ route('admin_konfirmasi') }}"
                    class="bg-[#C69774] py-3 px-3 rounded-lg text-white font-bold hover:bg-green-600 transition duration-500">Kembali</a>
            </div>
            <div class="py-5 pl-10 pr-10">
                <form action="{{ route('proses_tambahkonfirmasi') }}" method="POST" enctype="multipart/form-data"
                    class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    <input type="hidden" name="id" value="{{ isset($konfirmasi) ? $konfirmasi->id : '' }}">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            pemesan
                        </label>
                        <select name="id_booking" id="id_kategori"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                            <option value="">Pilih user</option>
                            @foreach ($booking as $item)
                                @if ($item->status_222142 !== 'aktif')
                                    <option value="{{ $item->id }}"
                                        {{ isset($konfirmasi) && $konfirmasi->id_booking == $item->id ? 'selected' : '' }}>
                                        {{ $user->where('id', $item->id_user)->first()->name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Bukti
                        </label>

                        <!-- Display Existing Image if Available -->
                        @if (isset($konfirmasi) && $konfirmasi->foto)
                            <div class="mb-4">
                                <p class="text-gray-600 text-sm">Gambar Saat Ini:</p>
                                <img src="{{ asset('images/' . $konfirmasi->foto_222142) }}"
                                    class="w-32 mb-2 border border-gray-300" alt="Current Image">
                            </div>
                        @endif

                        <!-- File Input for New Image -->
                        <input name="foto" type="file" id="foto" placeholder="Masukkan bukti"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-[#C69774] hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ isset($konfirmasi) ? 'Perbarui Konfirmasi' : 'Tambah Konfirmasi' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
