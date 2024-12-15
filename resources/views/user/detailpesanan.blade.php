@extends('user.component.master')
@section('judul', 'Detail Pesanan')
@section('konten')

    @include('user.component.navbar')

    <div class="bg-[#F8DFD4] min-h-screen py-10 flex flex-col items-center">
        <h1 class="text-3xl font-bold text-gray-600 mb-8">Detail Pesanan</h1>

        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-800">Informasi Pesanan</h2>
            </div>

            <div class="flex flex-col gap-4">
                <div class="flex justify-between">
                    <span class="text-gray-600 font-semibold">Lapangan:</span>
                    <span class="text-gray-800">{{ $lapangan->urutan_222142 }}</span>
                </div>

                <div class="flex justify-between">
                    <span class="text-gray-600 font-semibold">Kategori:</span>
                    <span class="text-gray-800">{{ $kategori->name_222142 }}</span>
                </div>

                <div class="flex justify-between">
                    <span class="text-gray-600 font-semibold">Tanggal:</span>
                    <span class="text-gray-800">{{ $tgl }}</span>
                </div>

                <div class="flex justify-between">
                    <span class="text-gray-600 font-semibold">Jam Mulai:</span>
                    <span class="text-gray-800">{{ $mulai }}</span>
                </div>

                <div class="flex justify-between">
                    <span class="text-gray-600 font-semibold">Jam Selesai:</span>
                    <span class="text-gray-800">{{ $selesai }}</span>
                </div>

                <div class="flex justify-between">
                    <span class="text-gray-600 font-semibold">Total Jam:</span>
                    <span class="text-gray-800">{{ $totalJam }} Jam</span>
                </div>

                <div class="flex justify-between">
                    <span class="text-gray-600 font-semibold">Total Harga:</span>
                    <span class="text-gray-800">Rp {{ number_format($totalHarga, 0, ',', '.') }}</span>
                </div>

                <div class="flex justify-between">
                    <span class="text-gray-600 font-semibold">Rekening Tujuan :</span>
                    <span class="text-gray-800">76473836437839</span>
                </div>
            </div>

            <div class="mt-8 flex justify-center gap-4">
                <form action="{{ route('simpanbookingg') }}" method="POST">
                    @csrf
                    {{-- <input type="hidden" name="selected_times" id="selected-times" value=""> --}}
                    <input type="text" value="{{ $lapangan->id }}" name="id_lapangan" hidden>
                    <input type="text" value="{{ $tgl }}" name="tgl_booking" hidden>
                    <input type="text" value="{{ $mulai }}" name="jam_mulai" hidden>
                    <input type="text" value="{{ $selesai }}" name="jam_selesai" hidden>
                    <input type="text" value="{{ $totalHarga }}" name="totalHarga" hidden>
                    <button type="submit"
                        class="bg-[#637E76] text-white py-2 px-6 rounded-lg font-semibold hover:bg-[#C69774] transition duration-300">Konfirmasi</button>
                </form>
            </div>

        </div>
    </div>

    @include('user.component.footer')

@endsection
