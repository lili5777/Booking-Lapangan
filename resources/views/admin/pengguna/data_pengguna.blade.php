@extends('user.component.master')
@section('judul', 'Data Pengguna')
@section('konten')
    <div class="flex bg-[#F8DFD4]">
        @include('admin.component.sidebar')
        <div class="w-full">
            <h1 class="text-center w-full text-gray-600 font-extrabold text-4xl py-5">Data Pengguna</h1>
            <div class="pl-10 pt-10">
                <a href="{{ route('tambah_pengguna') }}"
                    class="bg-[#C69774] py-3 px-3 rounded-lg text-white font-bold hover:bg-green-600 trancition duration-500 ">Tambah</a>
            </div>
            <div class="py-5 pl-10 pr-10">
                <table class="border border-gray-700 w-full ">
                    <thead>
                        <th class="border-gray-700 border">No</th>
                        <th class="border-gray-700 border">Nama</th>
                        <th class="border-gray-700 border">Username</th>
                        <th class="border-gray-700 border">Email</th>
                        <th class="border-gray-700 border">Nomor Wa</th>
                        <th class="border-gray-700 border">Aksi</th>
                    </thead>
                    <tbody class="text-center ">
                        @foreach ($data as $index => $d)
                            <tr>
                                <td class="border-gray-700 border">{{ $index + 1 }}</td>
                                <td class="border-gray-700 border">{{ $d->name }}</td>
                                <td class="border-gray-700 border">{{ $d->username }}</td>
                                <td class="border-gray-700 border">{{ $d->email }}</td>
                                <td class="border-gray-700 border">{{ $d->no_WA }}</td>
                                <td class="border-gray-700 border py-3 font-semibold flex gap-3 justify-center">
                                    <a href="{{ route('proses_editpengguna', $d->id) }}"
                                        class="bg-[#C69774]   rounded-sm text-white px-5 py-1 hover:bg-blue-600 transition duration-300">Edit</a>
                                    <form action="{{ route('proses_hapuspengguna',$d->id) }}" method="POST">
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
