@extends('user.component.master')
@section('judul', 'Data Pengguna')
@section('konten')
    <div class="flex bg-[#F8DFD4]">
        @include('admin.component.sidebar')
        <div class="w-full">
            <h1 class="text-center w-full text-gray-600 font-extrabold text-4xl py-5">Data Booking</h1>
            <div class="pl-10 pt-10 flex gap-3">
                <a href="{{ route('tambah_booking') }}"
                    class="bg-[#C69774] py-3 px-3 rounded-lg text-white font-bold hover:bg-green-600 transition duration-500">
                    Tambah
                </a>
                <div class="relative">
                    <button
                        class="bg-[#C69774] py-3 px-3 rounded-lg text-white font-bold hover:bg-blue-600 transition duration-500"
                        id="printButton">
                        Cetak
                    </button>
                    <button
                        class="bg-[#C69774] py-3 px-3 rounded-lg text-white font-bold hover:bg-blue-600 transition duration-500"
                        id="tampil">
                        Tampilkan
                    </button>
                    <div id="printOptions" class="absolute hidden bg-white border mt-2 rounded-lg shadow-md w-64 p-4">
                        <!-- Tombol Pilihan -->
                        <button type="button" data-form="form-harian"
                            class="block w-full text-left px-4 py-2 hover:bg-gray-200 transition">Harian</button>
                        <button type="button" data-form="form-mingguan"
                            class="block w-full text-left px-4 py-2 hover:bg-gray-200 transition">Mingguan</button>
                        <button type="button" data-form="form-bulanan"
                            class="block w-full text-left px-4 py-2 hover:bg-gray-200 transition">Bulanan</button>
                        <button type="button" data-form="form-tahunan"
                            class="block w-full text-left px-4 py-2 hover:bg-gray-200 transition">Tahunan</button>
                        <a href="{{ route('cetak_booking') }}"
                            class="block w-full text-left px-4 py-2 hover:bg-gray-200 transition">Cetak Semua Data</a>

                        <!-- Form Harian -->
                        <form action="{{ route('cetak_booking') }}" method="GET" class="mt-4 hidden" id="form-harian">
                            <label for="daily_date" class="block font-semibold">Tanggal:</label>
                            <input type="date" name="daily_date" class="border p-2 rounded w-full" required>
                            <button type="submit"
                                class="bg-[#C69774] mt-3 py-2 px-3 rounded-lg text-white font-bold hover:bg-green-600 transition duration-500 w-full">
                                Cetak
                            </button>
                        </form>

                        <!-- Form Mingguan -->
                        <form action="{{ route('cetak_booking') }}" method="GET" class="mt-4 hidden" id="form-mingguan">
                            <label for="weekly_start" class="block font-semibold">Tanggal Mulai:</label>
                            <input type="date" name="weekly_start" class="border p-2 rounded w-full" required>
                            <label for="weekly_end" class="block mt-2 font-semibold">Tanggal Selesai:</label>
                            <input type="date" name="weekly_end" class="border p-2 rounded w-full" required>
                            <button type="submit"
                                class="bg-[#C69774] mt-3 py-2 px-3 rounded-lg text-white font-bold hover:bg-green-600 transition duration-500 w-full">
                                Cetak
                            </button>
                        </form>

                        <!-- Form Bulanan -->
                        <form action="{{ route('cetak_booking') }}" method="GET" class="mt-4 hidden" id="form-bulanan">
                            <label for="monthly_month" class="block font-semibold">Pilih Bulan:</label>
                            <select name="monthly_month" class="border p-2 rounded w-full" required>
                                @for ($i = 1; $i <= 12; $i++)
                                    <option value="{{ $i }}">
                                        {{ Carbon\Carbon::createFromFormat('m', $i)->format('F') }}
                                    </option>
                                @endfor
                            </select>
                            <label for="tahun" class="block mt-2 font-semibold">Tahun:</label>
                            <input type="number" name="tahun" class="border p-2 rounded w-full" required>
                            <button type="submit"
                                class="bg-[#C69774] mt-3 py-2 px-3 rounded-lg text-white font-bold hover:bg-green-600 transition duration-500 w-full">
                                Cetak
                            </button>
                        </form>

                        <!-- Form Tahunan -->
                        <form action="{{ route('cetak_booking') }}" method="GET" class="mt-4 hidden" id="form-tahunan">
                            <label for="yearly_year" class="block font-semibold">Tahun:</label>
                            <input type="number" name="yearly_year" class="border p-2 rounded w-full"
                                placeholder="Masukkan Tahun" required>
                            <button type="submit"
                                class="bg-[#C69774] mt-3 py-2 px-3 rounded-lg text-white font-bold hover:bg-green-600 transition duration-500 w-full">
                                Cetak
                            </button>
                        </form>

                    </div>

                    {{-- tampil --}}
                    <div id="tampilOptions" class="absolute hidden bg-white border mt-2 rounded-lg shadow-md w-64 p-4">
                        <!-- Tombol Pilihan -->
                        <button type="button" data-form="form-harian"
                            class="block w-full text-left px-4 py-2 hover:bg-gray-200 transition">Harian</button>
                        <button type="button" data-form="form-mingguan"
                            class="block w-full text-left px-4 py-2 hover:bg-gray-200 transition">Mingguan</button>
                        <button type="button" data-form="form-bulanan"
                            class="block w-full text-left px-4 py-2 hover:bg-gray-200 transition">Bulanan</button>
                        <button type="button" data-form="form-tahunan"
                            class="block w-full text-left px-4 py-2 hover:bg-gray-200 transition">Tahunan</button>
                        <a href="{{ route('admin_booking') }}"
                            class="block w-full text-left px-4 py-2 hover:bg-gray-200 transition">Tampilkan Semua Data</a>

                        <!-- Form Harian -->
                        <form action="{{ route('admin_booking') }}" method="GET" class="mt-4 hidden" id="form-harian">
                            <label for="daily_date" class="block font-semibold">Tanggal:</label>
                            <input type="date" name="daily_date" class="border p-2 rounded w-full" required>
                            <button type="submit"
                                class="bg-[#C69774] mt-3 py-2 px-3 rounded-lg text-white font-bold hover:bg-green-600 transition duration-500 w-full">
                                Cetak
                            </button>
                        </form>

                        <!-- Form Mingguan -->
                        <form action="{{ route('admin_booking') }}" method="GET" class="mt-4 hidden"
                            id="form-mingguan">
                            <label for="weekly_start" class="block font-semibold">Tanggal Mulai:</label>
                            <input type="date" name="weekly_start" class="border p-2 rounded w-full" required>
                            <label for="weekly_end" class="block mt-2 font-semibold">Tanggal Selesai:</label>
                            <input type="date" name="weekly_end" class="border p-2 rounded w-full" required>
                            <button type="submit"
                                class="bg-[#C69774] mt-3 py-2 px-3 rounded-lg text-white font-bold hover:bg-green-600 transition duration-500 w-full">
                                Cetak
                            </button>
                        </form>

                        <!-- Form Bulanan -->
                        <form action="{{ route('admin_booking') }}" method="GET" class="mt-4 hidden"
                            id="form-bulanan">
                            <label for="monthly_month" class="block font-semibold">Pilih Bulan:</label>
                            <select name="monthly_month" class="border p-2 rounded w-full" required>
                                @for ($i = 1; $i <= 12; $i++)
                                    <option value="{{ $i }}">
                                        {{ Carbon\Carbon::createFromFormat('m', $i)->format('F') }}
                                    </option>
                                @endfor
                            </select>
                            <label for="tahun" class="block mt-2 font-semibold">Tahun:</label>
                            <input type="number" name="tahun" class="border p-2 rounded w-full" required>
                            <button type="submit"
                                class="bg-[#C69774] mt-3 py-2 px-3 rounded-lg text-white font-bold hover:bg-green-600 transition duration-500 w-full">
                                Cetak
                            </button>
                        </form>

                        <!-- Form Tahunan -->
                        <form action="{{ route('admin_booking') }}" method="GET" class="mt-4 hidden"
                            id="form-tahunan">
                            <label for="yearly_year" class="block font-semibold">Tahun:</label>
                            <input type="number" name="yearly_year" class="border p-2 rounded w-full"
                                placeholder="Masukkan Tahun" required>
                            <button type="submit"
                                class="bg-[#C69774] mt-3 py-2 px-3 rounded-lg text-white font-bold hover:bg-green-600 transition duration-500 w-full">
                                Cetak
                            </button>
                        </form>

                    </div>
                </div>


            </div>
            <div class="py-5 pl-10 pr-10">
                <table class="border border-gray-700 w-full ">
                    <thead>
                        <th class="border-gray-700 border">No</th>
                        <th class="border-gray-700 border">Nama</th>
                        <th class="border-gray-700 border">Tgl Booking</th>
                        <th class="border-gray-700 border">Lapangan</th>
                        <th class="border-gray-700 border">Kategori</th>
                        <th class="border-gray-700 border">Mulai</th>
                        <th class="border-gray-700 border">Selesai</th>
                        <th class="border-gray-700 border">Status</th>
                        <th class="border-gray-700 border">Total</th>
                        <th class="border-gray-700 border">Aksi</th>
                    </thead>
                    <tbody class="text-center ">
                        @forelse ($bookings as $index => $d)
                            <tr>
                                <td class="border-gray-700 border">{{ $index + 1 }}</td>
                                <td class="border-gray-700 border">{{ $user->where('id', $d->id_user)->first()->name }}
                                </td>
                                <td class="border-gray-700 border">{{ $d->tgl_booking_222142 }}</td>
                                <td class="border-gray-700 border">
                                    {{ $lapangan->where('id', $d->id_lapangan)->first()->urutan_222142 }}</td>
                                <td class="border-gray-700 border">
                                    {{ $kategori->where('id', $lapangan->where('id', $d->id_lapangan)->first()->id_kategori)->first()->name_222142 }}
                                </td>
                                <td class="border-gray-700 border">{{ $d->jam_mulai_222142 }}</td>
                                <td class="border-gray-700 border">{{ $d->jam_selesai_222142 }}</td>
                                <td class="border-gray-700 border">{{ $d->status_222142 }}</td>
                                <td class="border-gray-700 border">{{ $d->total_222142 }}</td>
                                <td class="border-gray-700 border py-3 font-semibold flex gap-3 justify-center">
                                    <form action="{{ route('proses_hapusbooking', $d->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-[#C69774] rounded-sm text-white px-5 py-1 hover:bg-red-600 transition duration-300">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" style="text-align: center;">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('printButton').addEventListener('click', function() {
            const options = document.getElementById('printOptions');
            options.classList.toggle('hidden'); // Tampilkan/hidden menu dropdown
        });

        const buttons = document.querySelectorAll('#printOptions button[data-form]');
        const forms = document.querySelectorAll('#printOptions form');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const targetForm = this.getAttribute('data-form');
                forms.forEach(form => {
                    if (form.id === targetForm) {
                        form.classList.remove('hidden'); // Tampilkan form yang dipilih
                    } else {
                        form.classList.add('hidden'); // Sembunyikan form lainnya
                    }
                });
            });
        });


        document.getElementById('tampil').addEventListener('click', function() {
            const options = document.getElementById('tampilOptions');
            options.classList.toggle('hidden'); // Tampilkan/hidden menu dropdown
        });
        const tombols = document.querySelectorAll('#tampilOptions button[data-form]');
        const inputs = document.querySelectorAll('#tampilOptions form');

        tombols.forEach(button => {
            button.addEventListener('click', function() {
                const targetForm = this.getAttribute('data-form');
                inputs.forEach(form => {
                    if (form.id === targetForm) {
                        form.classList.remove('hidden'); // Tampilkan form yang dipilih
                    } else {
                        form.classList.add('hidden'); // Sembunyikan form lainnya
                    }
                });
            });
        });
    </script>
@endsection
