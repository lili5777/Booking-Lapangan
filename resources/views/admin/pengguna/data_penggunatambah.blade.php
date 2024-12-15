@extends('user.component.master')
@section('judul', 'Tambah/Edit Data Pengguna')
@section('konten')
    <div class="flex bg-[#F8DFD4]">
        @include('admin.component.sidebar')
        <div class="w-full">
            <h1 class="text-center w-full text-gray-600 font-extrabold text-4xl py-5">
                {{ isset($user) ? 'Edit Data Pengguna' : 'Tambah Data Pengguna' }}</h1>
            <div class="pl-10 pt-10">
                <a href="{{ route('admin_pengguna') }}"
                    class="bg-[#C69774] py-3 px-3 rounded-lg text-white font-bold hover:bg-green-600 transition duration-500">Kembali</a>
            </div>
            <div class="py-5 pl-10 pr-10">
                <form action="{{route('proses_tambahpengguna')}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    <input type="hidden" name="id" value="{{ isset($user) ? $user->id : '' }}">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Username
                        </label>
                        <input name="username" type="text" id="username" placeholder="Masukkan username"
                            value="{{ isset($user) ? $user->username : '' }}"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            {{-- required pattern="^[a-zA-Z0-9]{5,15}$" title="Username harus 5-15 karakter dan hanya berisi huruf atau angka"> --}}
                            @error('username')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Nama
                        </label>
                        <input name="name" type="text" id="name" placeholder="Masukkan nama"
                            value="{{ isset($user) ? $user->name : '' }}"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input name="email" type="email" id="email" placeholder="Masukkan email"
                            value="{{ isset($user) ? $user->email : '' }}"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nowa">
                            No. WA
                        </label>
                        <input name="no_WA" type="text" id="nowa" placeholder="Masukkan nomor WhatsApp"
                            value="{{ isset($user) ? $user->no_WA : '' }}"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>

                    @if (isset($user) ? $user->id : '')
                    @else
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nowa">
                                Password
                            </label>
                            {{-- <input name="password" type="password" id="pass" placeholder="Masukkan Password"
                                value="{{ isset($user) ? $user->password : '' }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                required> --}}

                                <input name="password" type="password" id="password" placeholder="Masukkan Password"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    required pattern=".{6,10}" title="Password harus 6-10 karakter">
                                <div id="password-error" class="text-red-500 text-sm mt-1"></div>
                        </div>
                    @endif


                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-[#C69774] hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ isset($user) ? 'Perbarui Pengguna' : 'Tambah Pengguna' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('password').addEventListener('input', function () {
            const password = this.value;
            const pesan_eror = document.getElementById('password-error');

            if (password.length < 6) {
                pesan_eror.textContent = 'Password terlalu pendek. Minimal 8 karakter.';
            } else if (password.length > 10) {
                pesan_eror.textContent = 'Password terlalu panjang. Maksimal 10 karakter.';
            } else {
                pesan_eror.textContent = ''; // Jika valid
            }
        });
    </script>
@endsection
