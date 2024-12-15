@extends('user.component.master')
@section('judul', 'Data Pengguna')
@section('konten')
    <div class="flex bg-[#F8DFD4]">
        @include('admin.component.sidebar')
        <div class="w-full">
            <h1 class="text-center w-full text-gray-600 font-extrabold text-4xl py-5">Data Lapangan</h1>
            <div class="pl-10 pt-10">
                <a href="{{ route('tambah_lapangan') }}"
                    class="bg-[#C69774] py-3 px-3 rounded-lg text-white font-bold hover:bg-green-600 trancition duration-500 ">Tambah</a>
            </div>
            <div class="py-5 pl-10 pr-10">
                <table class="border border-gray-700 w-full ">
                    <thead>
                        <th class="border-gray-700 border">No</th>
                        <th class="border-gray-700 border">Kategori</th>
                        <th class="border-gray-700 border">Lapangan</th>
                        <th class="border-gray-700 border">Deskripsi</th>
                        <th class="border-gray-700 border">status</th>
                        <th class="border-gray-700 border">Aksi</th>
                    </thead>
                    <tbody class="text-center ">
                        @foreach ($data as $index => $d)
                            <tr>
                                <td class="border-gray-700 border">{{ $index + 1 }}</td>
                                <td class="border-gray-700 border">
                                    {{ $kategori->where('id', $d->id_kategori)->first()->name_222142 }}</td>
                                <td class="border-gray-700 border">{{ $d->urutan_222142 }}</td>
                                <td class="border-gray-700 border">{{ Str::limit($d->deskripsi_222142, 50, '...') }}</td>
                                <td class="border-gray-700 border">
                                    @if ($d->is_active_222142 == 1)
                                        Tersedia
                                    @else
                                        Tidak Tersedia
                                    @endif
                                </td>
                                <td class="border-gray-700 border py-3 font-semibold flex gap-3 justify-center">
                                    <a href="{{ route('proses_editlapangan', $d->id) }}"
                                        class="bg-[#C69774]   rounded-sm text-white px-5 py-1 hover:bg-blue-600 transition duration-300">Edit</a>
                                    <form action="{{ route('proses_hapuslapangan', $d->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-[#C69774]   rounded-sm text-white px-5 py-1 hover:bg-red-600 transition duration-300">Hapus</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
