@extends('user.component.master2')
@section('judul', 'Pilih Waktu Booking')
@section('konten')
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 p-6 lg:p-10">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-4xl font-bold text-gray-800">Pilih Waktu Booking</h1>
                    <p class="text-gray-600">Pilih waktu yang tersedia untuk booking lapangan</p>
                </div>
            </div>

            <!-- Back Button -->
            <a href="{{ route('admin_booking') }}"
                class="inline-flex items-center gap-2 px-6 py-3 bg-white text-gray-700 font-semibold rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                    </path>
                </svg>
                <span>Kembali</span>
            </a>
        </div>

        <!-- Main Content -->
        <div class="max-w-6xl mx-auto">
            <!-- Info Card -->
            <div class="bg-white rounded-2xl shadow-lg p-6 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="flex items-center gap-3 p-4 bg-blue-50 rounded-xl">
                        <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Pengguna</p>
                            <p class="font-semibold text-gray-800">{{ $user->name ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-green-50 rounded-xl">
                        <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Tanggal</p>
                            <p class="font-semibold text-gray-800">{{ \Carbon\Carbon::parse($tgl_booking)->format('d M Y') }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-purple-50 rounded-xl">
                        <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Lapangan</p>
                            <p class="font-semibold text-gray-800">
                                Lapangan {{ $lapangan->urutan_222142 ?? 'N/A' }}
                                @if($kategori)
                                    ({{ $kategori->name_222142 }})
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Time Selection Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Card Header -->
                <div class="gradient-bg p-6">
                    <div class="flex items-center gap-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>
                            <h2 class="text-2xl font-bold text-white">Pilih Waktu Tersedia</h2>
                            <p class="text-white/80 text-sm">Klik waktu yang ingin dipilih (bisa multiple)</p>
                        </div>
                    </div>
                </div>

                <!-- Time Grid -->
                <div class="p-8">
                    @if ($operasional && $operasional->jam_buka_222142 && $operasional->jam_tutup_222142)
                        @php
    try {
        $start = \Carbon\Carbon::createFromFormat('H:i:s', trim($operasional->jam_buka_222142));
        $end = \Carbon\Carbon::createFromFormat('H:i:s', trim($operasional->jam_tutup_222142));

        $bookedIntervals = $jam
            ->filter(function ($booking) {
                return $booking->status_222142 === 'aktif';
            })
            ->map(function ($booking) {
                try {
                    $start = \Carbon\Carbon::createFromFormat('H:i:s', $booking->jam_mulai_222142);
                    $end = \Carbon\Carbon::createFromFormat('H:i:s', $booking->jam_selesai_222142);
                    $interval = [];
                    while ($start < $end) {
                        $interval[] = $start->format('H:i');
                        $start->addHour();
                    }
                    return $interval;
                } catch (\Exception $e) {
                    return [];
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
                            <!-- Legend -->
                            <div class="flex flex-wrap gap-4 mb-6">
                                <div class="flex items-center gap-2">
                                    <div class="w-4 h-4 rounded bg-green-500"></div>
                                    <span class="text-sm text-gray-600">Tersedia</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-4 h-4 rounded bg-blue-500"></div>
                                    <span class="text-sm text-gray-600">Terpilih</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-4 h-4 rounded bg-red-500"></div>
                                    <span class="text-sm text-gray-600">Sudah Dipesan</span>
                                </div>
                            </div>

                            <!-- Time Grid -->
                            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3 mb-8">
                                @while ($start < $end)
                                    @php
            $time = $start->format('H:i');
            $isBooked = in_array($time, $bookedIntervals);
                                    @endphp

                                    <button
                                        class="time-slot {{ $isBooked ? 'bg-red-500 cursor-not-allowed' : 'bg-green-500 hover:bg-green-600' }} text-white font-semibold py-4 px-2 rounded-xl transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-opacity-50 select-time"
                                        data-time="{{ $time }}" {{ $isBooked ? 'disabled' : '' }}
                                        data-booked="{{ $isBooked ? 'true' : 'false' }}">
                                        <div class="text-lg font-bold">{{ $time }}</div>
                                        <div class="text-xs opacity-90 mt-1">
                                            {{ $isBooked ? 'Dipesan' : 'Tersedia' }}
                                        </div>
                                    </button>

                                    @php $start->addHour(); @endphp
                                @endwhile
                            </div>

                            <!-- Selected Times Summary -->
                            <div id="selected-times-summary" class="hidden mb-6 p-4 bg-blue-50 rounded-xl border-2 border-blue-200">
                                <h3 class="font-semibold text-blue-800 mb-2">Waktu Terpilih:</h3>
                                <div id="selected-times-list" class="flex flex-wrap gap-2"></div>
                            </div>

                            <!-- Form -->
                            <form action="{{ route('simpan_booking') }}" method="POST" id="booking-form">
                                @csrf
                                <input type="hidden" name="selected_times" id="selected-times" value="">
                                <input type="hidden" name="id_user" value="{{ $id_user }}">
                                <input type="hidden" name="id_lapangan" value="{{ $id_lapangan }}">
                                <input type="hidden" name="tgl_booking" value="{{ $tgl_booking }}">

                                <!-- Action Buttons -->
                                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                                    <button type="submit" id="submit-btn"
                                        class="flex-1 group relative inline-flex items-center justify-center gap-3 px-8 py-4 gradient-bg text-white font-bold text-lg rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105 disabled:opacity-50 disabled:cursor-not-allowed"
                                        disabled>
                                        <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-300" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Simpan Booking</span>
                                    </button>

                                    <a href="{{ route('admin_booking') }}"
                                        class="flex-1 inline-flex items-center justify-center gap-3 px-8 py-4 bg-gray-200 text-gray-700 font-bold text-lg rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:bg-gray-300">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                        <span>Batal</span>
                                    </a>
                                </div>
                            </form>
                        @else
                            <div class="text-center py-8">
                                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="text-gray-500 font-semibold text-lg">Jam operasional tidak valid</p>
                                <p class="text-gray-400 text-sm mt-1">Silakan hubungi administrator</p>
                            </div>
                        @endif
                    @else
                        <div class="text-center py-8">
                            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-gray-500 font-semibold text-lg">Data operasional tidak ditemukan</p>
                            <p class="text-gray-400 text-sm mt-1">Silakan hubungi administrator</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const selectedTimesInput = document.getElementById('selected-times');
            const selectedTimesSummary = document.getElementById('selected-times-summary');
            const selectedTimesList = document.getElementById('selected-times-list');
            const submitBtn = document.getElementById('submit-btn');
            const timeButtons = document.querySelectorAll('.select-time');

            const selectedTimes = new Set();

            timeButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const time = button.getAttribute('data-time');
                    const isBooked = button.getAttribute('data-booked') === 'true';

                    // Abaikan jika tombol sudah booked
                    if (isBooked) {
                        return;
                    }

                    if (selectedTimes.has(time)) {
                        // Hapus dari selection
                        selectedTimes.delete(time);
                        button.classList.remove('bg-blue-500', 'ring-4', 'ring-blue-200');
                        button.classList.add('bg-green-500', 'hover:bg-green-600');
                        button.querySelector('div:last-child').textContent = 'Tersedia';
                    } else {
                        // Tambah ke selection
                        selectedTimes.add(time);
                        button.classList.remove('bg-green-500', 'hover:bg-green-600');
                        button.classList.add('bg-blue-500', 'ring-4', 'ring-blue-200');
                        button.querySelector('div:last-child').textContent = 'Terpilih';
                    }

                    // Update hidden input
                    selectedTimesInput.value = Array.from(selectedTimes).join(',');

                    // Update summary
                    updateSelectedTimesSummary();

                    // Enable/disable submit button
                    submitBtn.disabled = selectedTimes.size === 0;
                });
            });

            function updateSelectedTimesSummary() {
                if (selectedTimes.size > 0) {
                    selectedTimesSummary.classList.remove('hidden');
                    selectedTimesList.innerHTML = '';

                    const sortedTimes = Array.from(selectedTimes).sort();
                    sortedTimes.forEach(time => {
                        const timeBadge = document.createElement('div');
                        timeBadge.className = 'bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium';
                        timeBadge.textContent = time;
                        selectedTimesList.appendChild(timeBadge);
                    });
                } else {
                    selectedTimesSummary.classList.add('hidden');
                }
            }

            // Form submission validation
            document.getElementById('booking-form').addEventListener('submit', (e) => {
                if (selectedTimes.size === 0) {
                    e.preventDefault();
                    alert('Silakan pilih minimal satu waktu booking.');
                    return false;
                }
            });
        });
    </script>

    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #F75270 0%, #FF6B88 100%);
        }

        .time-slot {
            transition: all 0.3s ease;
        }

        .time-slot:not(:disabled):hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .time-slot:focus {
            outline: none;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.5);
        }
    </style>
@endsection