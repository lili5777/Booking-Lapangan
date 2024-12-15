@extends('user.component.master')
@section('judul', 'Data Pengguna')
@section('konten')
    <div class="flex bg-[#F8DFD4]">
        @include('admin.component.sidebar')
        <div class="w-full">
            <h1 class="text-center w-full text-gray-600 font-extrabold text-4xl py-5">Data Kategori</h1>
            <div class="pl-10 pt-10">
                <a href="{{ route('tambah_kategori') }}"
                    class="bg-[#C69774] py-3 px-3 rounded-lg text-white font-bold hover:bg-green-600 trancition duration-500 ">Tambah</a>
            </div>
            <div class="py-5 pl-10 pr-10">
                <table class="border border-gray-700 w-full ">
                    <thead>
                        <th class="border-gray-700 border">No</th>
                        <th class="border-gray-700 border">Nama</th>
                        <th class="border-gray-700 border">Deskripsi</th>
                        <th class="border-gray-700 border">Harga</th>
                        <th class="border-gray-700 border">Foto</th>
                        <th class="border-gray-700 border">Aksi</th>
                    </thead>
                    <tbody class="text-center ">
                        @foreach ($data as $index => $d)
                            <tr>
                                <td class="border-gray-700 border">{{ $index + 1 }}</td>
                                <td class="border-gray-700 border">{{ $d->name_222142 }}</td>
                                <td class="border-gray-700 border">{{ Str::limit($d->deksripsi_222142, 50, '...') }}</td>
                                <td class="border-gray-700 border">{{ $d->harga_222142 }}</td>
                                <td class="border-gray-700 border"><img src="{{ asset('images/' . $d->foto_222142) }}"
                                        class="w-32" alt=""></td>
                                <td class="border border-gray-700 py-3 text-center">
                                    <div class="flex gap-3 justify-center">
                                        <a href="{{ route('proses_editkategori', $d->id) }}"
                                            class="bg-[#C69774] rounded-sm text-white px-5 py-1 hover:bg-blue-600 transition duration-300">Edit</a>
                                        <form action="{{ route('proses_hapuskategori', $d->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-[#C69774] rounded-sm text-white px-5 py-1 hover:bg-red-600 transition duration-300">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
