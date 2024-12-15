@extends('user.component.master')

@section('judul', 'Tambah/Edit Data Pengguna')

@section('konten')
    <div class="flex bg-[#F8DFD4]">
        @include('admin.component.sidebar')
        <div class="w-full">
            <h1 class="text-center w-full text-gray-600 font-extrabold text-4xl py-5">
                {{ isset($jam) ? 'Edit Booking' : 'Tambah Booking' }}</h1>
            <div class="pl-10 pt-10">
                <a href="{{ route('admin_booking') }}"
                    class="bg-[#C69774] py-3 px-3 rounded-lg text-white font-bold hover:bg-green-600 transition duration-500">Kembali</a>
            </div>
            <div class="py-5 pl-10 pr-10 bg-white shadow-md rounded mx-10 mt-5">

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Jam Yang Tersedia
                    </label>
                    <div class="flex">
                        <div class="grid grid-cols-4 gap-4 text-white text-center mt-3">
                            @if ($operasional && $operasional->jam_buka_222142 && $operasional->jam_tutup_222142)
                                @php
                                    try {
                                        // Parsing jam buka dan jam tutup dengan fallback default
                                        $start = \Carbon\Carbon::createFromFormat(
                                            'H:i:s',
                                            trim($operasional->jam_buka_222142),
                                        );
                                        $end = \Carbon\Carbon::createFromFormat(
                                            'H:i:s',
                                            trim($operasional->jam_tutup_222142),
                                        );

                                        // Mengambil interval waktu yang sudah dibooking
                                        $bookedIntervals = $jam
                                            ->filter(function ($booking) {
                                                return $booking->status_222142 === 'aktif';
                                            })
                                            ->map(function ($booking) {
                                                try {
                                                    $start = \Carbon\Carbon::createFromFormat(
                                                        'H:i:s',
                                                        $booking->jam_mulai_222142,
                                                    );
                                                    $end = \Carbon\Carbon::createFromFormat(
                                                        'H:i:s',
                                                        $booking->jam_selesai_222142,
                                                    );
                                                    $interval = [];
                                                    while ($start < $end) {
                                                        $interval[] = $start->format('H:i');
                                                        $start->addHour();
                                                    }
                                                    return $interval;
                                                } catch (\Exception $e) {
                                                    return []; // Abaikan jika ada kesalahan parsing waktu
                                                }
                                            })
                                            ->flatten()
                                            ->toArray();
                                    } catch (\Exception $e) {
                                        $start = null;
                                        $end = null;
                                        $bookedIntervals = [];
                                    }
                                @endphp

                                @if ($start && $end)
                                    @while ($start < $end)
                                        @php
                                            $time = $start->format('H:i');
                                            $isBooked = in_array($time, $bookedIntervals);
                                        @endphp

                                        <button
                                            class="{{ $isBooked ? 'bg-red-600 cursor-not-allowed px-10' : 'bg-[#C69774] px-10' }} py-1 rounded-lg hover:scale-105 transition-transform select-time"
                                            data-time="{{ $time }}" {{ $isBooked ? 'disabled' : '' }}>
                                            {{ $time }}
                                        </button>

                                        @php $start->addHour(); @endphp
                                    @endwhile
                                @else
                                    <p>Jam operasional tidak valid atau tidak ditemukan.</p>
                                @endif
                            @else
                                <p>Data operasional tidak ditemukan.</p>
                            @endif
                        </div>
                    </div>
                </div>

                <form action="{{ route('simpan_booking') }}" method="POST">
                    @csrf
                    <input type="hidden" name="selected_times" id="selected-times" value="">
                    <input type="text" name="id_user" value="{{ $id_user }}" hidden>
                    <input type="text" name="id_lapangan" value="{{ $id_lapangan }}" hidden>
                    <input type="date" name="tgl_booking" value="{{ $tgl_booking }}" hidden>

                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-[#C69774] hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ isset($jam) ? 'Simpan' : 'Simpan' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const selectedTimesInput = document.getElementById('selected-times');
            const timeButtons = document.querySelectorAll('.select-time');

            const selectedTimes = new Set();

            timeButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const time = button.getAttribute('data-time');

                    // Abaikan jika tombol sudah booked
                    if (button.classList.contains('bg-red-600')) {
                        return;
                    }

                    if (selectedTimes.has(time)) {
                        selectedTimes.delete(time);
                        button.classList.remove('bg-blue-500'); // Warna jika terpilih
                        button.classList.add('bg-[#C69774]'); // Warna default
                    } else {
                        selectedTimes.add(time);
                        button.classList.remove('bg-[#C69774]');
                        button.classList.add('bg-blue-500');
                    }

                    selectedTimesInput.value = Array.from(selectedTimes).join(',');
                    console.log("Selected Times:", selectedTimesInput.value); // Debugging
                });
            });
        });
    </script>

@endsection
