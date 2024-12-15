@extends('user.component.master')
@section('judul', 'Konfirmasi Pesanan')
@section('konten')
    @include('user.component.navbar')

    <div class="bg-[#F8DFD4] w-full p-6 min-h-[600px] flex justify-center items-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md border border-gray-200">
            <h1 class="text-2xl font-semibold text-center text-gray-700 mb-6">Konfirmasi Bukti Pembayaran</h1>

            <form action="{{ route('prosesupload') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf


                <input type="text" name="id_booking" value="{{ $id }}" hidden>
                <!-- Bukti Pembayaran -->
                <div class="">
                    <label for="bukti_pembayaran" class="block text-sm font-medium text-gray-600">
                        Rekening Tujuan
                    </label>
                    <div class="bg-gray-100 p-4 rounded-md shadow-md">
                        <h1 class="text-lg font-semibold text-gray-800">FIKRI HAIKAL</h1>
                        <p class="text-sm text-gray-600">BRI - 87656564654654</p>
                    </div>
                </div>
                <div>
                    <label for="bukti_pembayaran" class="block text-sm font-medium text-gray-600">Unggah Bukti
                        Pembayaran</label>
                    <input type="file" id="foto" name="foto" required
                        class="w-full text-gray-700 px-4 py-2 border rounded-lg cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>





                <!-- Tombol Submit -->
                <div class="flex justify-center mt-6">
                    <button type="submit"
                        class="bg-blue-500 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-600 transition duration-300">
                        Konfirmasi Pembayaran
                    </button>
                </div>
            </form>
        </div>
    </div>

    @include('user.component.footer')
@endsection
