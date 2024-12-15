@extends('user.component.master')
@section('judul', 'Tambah/Edit Data Pengguna')
@section('konten')
    <div class="flex bg-[#F8DFD4]">
        @include('admin.component.sidebar')
        <div class="w-full">
            <h1 class="text-center w-full text-gray-600 font-extrabold text-4xl py-5">
                {{ isset($booking) ? 'Edit Booking' : 'Tambah Booking' }}</h1>
            <div class="pl-10 pt-10">
                <a href="{{ route('admin_booking') }}"
                    class="bg-[#C69774] py-3 px-3 rounded-lg text-white font-bold hover:bg-green-600 transition duration-500">Kembali</a>
            </div>
            <div class="py-5 pl-10 pr-10">
                <form action="{{ route('proses_tambahbooking') }}" method="POST"
                    class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    <input type="hidden" name="id" value="{{ isset($booking) ? $lbooking->id : '' }}">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            User
                        </label>
                        <select name="id_user" id="id_kategori"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                            <option value="">Pilih Kategori</option>
                            @foreach ($user as $item)
                                <option value="{{ $item->id }}"
                                    {{ isset($booking) && $booking->id_user == $item->id ? 'selected' : '' }}>
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Tanggal Main
                        </label>
                        <input name="tgl_booking" type="date" min="{{ now()->format('Y-m-d') }}" id="urutan"
                            placeholder="Masukkan name" value="{{ isset($booking) ? $booking->tgl_booking_222142 : '' }}"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Pilih Lapangan
                        </label>
                        <select name="id_lapangan" id="id_kategori"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                            <option value="">Pilih Lapangan</option>
                            @foreach ($lapangan as $item)
                                <option value="{{ $item->id }}"
                                    {{ isset($booking) && $booking->id_lapangan == $item->id ? 'selected' : '' }}>
                                    Lapangan {{ $kategori->where('id', $item->id_kategori)->first()->name_222142 }} Urutan
                                    {{ $item->urutan_222142 }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-[#C69774] hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ isset($booking) ? 'Pilih waktu' : 'Pilih Waktu' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
