@extends('user.component.master')
@section('judul', 'Pemesanan')
@section('konten')

    <!-- Hero Section -->
    <section class="gradient-bg min-h-[40vh] pt-24 pb-16 flex items-center relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10">
            <div class="absolute top-20 left-10 w-20 h-20 bg-white rounded-full"></div>
            <div class="absolute bottom-32 right-20 w-32 h-32 bg-white rounded-full"></div>
        </div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-black text-white mb-6">
                Pesan <span class="text-accent">Lapangan</span>
            </h1>
            <p class="text-xl text-white/90 max-w-2xl mx-auto">
                Pilih waktu untuk pengalaman bermain terbaik
            </p>
        </div>
    </section>

    <!-- Booking Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8 items-center justify-center">

                <!-- Gambar Lapangan -->
                <div class="w-full lg:w-2/5 flex justify-center">
                    <div class="relative overflow-hidden rounded-3xl shadow-2xl w-full max-w-md">
                        <img src="{{ asset('images/' . $kategori->foto_222142) }}" alt="Badminton Court"
                            class="w-full h-96 object-cover transition-transform duration-500 hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        <div class="absolute bottom-6 left-6">
                            <h3 class="text-2xl font-black text-white">{{ $kategori->name_222142 }}</h3>
                            <p class="text-white/90">Pilih waktu yang tersedia</p>
                        </div>
                    </div>
                </div>

                <!-- Jadwal & Form Pemesanan -->
                <div class="w-full lg:w-3/5">
                    <div class="bg-white p-8 rounded-3xl shadow-xl border-2 border-gray-100">

                        <!-- Header -->
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-black text-dark mb-2">
                                Jadwal <span class="text-primary">Tersedia</span>
                            </h2>
                            <p class="text-gray-600">Tanggal: <span class="font-semibold text-dark">{{ $tanggal }}</span>
                            </p>
                            @if($isToday)
                                <p class="text-sm text-accent font-semibold mt-2">
                                    <i class="fas fa-clock mr-1"></i>
                                    Booking untuk hari ini
                                </p>
                            @endif
                        </div>

                        <!-- Instructions -->
                        <div class="bg-blue-50 border border-blue-200 rounded-2xl p-4 mb-6">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-info-circle text-blue-500"></i>
                                <div>
                                    <p class="font-semibold text-blue-800">Cara Pemesanan:</p>
                                    <p class="text-blue-700 text-sm">Klik jam untuk pilih single jam, atau klik jam mulai
                                        lalu jam selesai untuk pilih range.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Mode Selection -->
                        <div class="flex gap-4 mb-6 justify-center">
                            <button id="single-mode"
                                class="px-4 py-2 rounded-lg bg-primary text-white font-semibold transition-all">
                                <i class="fas fa-mouse-pointer mr-2"></i>Single Selection
                            </button>
                            <button id="range-mode"
                                class="px-4 py-2 rounded-lg bg-gray-200 text-gray-700 font-semibold transition-all">
                                <i class="fas fa-arrows-left-right mr-2"></i>Range Selection
                            </button>
                        </div>

                        <!-- Grid Jam Tersedia -->
                        <div class="mb-8">
                            @if ($operasional)
                                @php
                                    // Get booked intervals
                                    $bookedIntervals = $jam
                                        ->filter(function ($booking) {
                                            return $booking->status_222142 === 'aktif';
                                        })
                                        ->map(function ($booking) {
                                            $start = \Carbon\Carbon::createFromFormat('H:i:s', $booking->jam_mulai_222142);
                                            $end = \Carbon\Carbon::createFromFormat('H:i:s', $booking->jam_selesai_222142);
                                            $interval = [];
                                            while ($start < $end) {
                                                $interval[] = $start->format('H:i');
                                                $start->addHour();
                                            }
                                            return $interval;
                                        })
                                        ->flatten()
                                        ->toArray();

                                    $start = \Carbon\Carbon::createFromFormat('H:i:s', trim($operasional->jam_buka_222142));
                                    $end = \Carbon\Carbon::createFromFormat('H:i:s', trim($operasional->jam_tutup_222142));
                                    $allTimes = [];

                                    $currentTime = $isToday ? \Carbon\Carbon::now()->format('H:i') : null;

                                    while ($start < $end) {
                                        $time = $start->format('H:i');
                                        $isBooked = in_array($time, $bookedIntervals);
                                        $isPast = $isToday && $currentTime && $time <= $currentTime;
                                        $allTimes[] = [
                                            'time' => $time,
                                            'booked' => $isBooked,
                                            'past' => $isPast
                                        ];
                                        $start->addHour();
                                    }
                                @endphp

                                <div class="grid grid-cols-4 md:grid-cols-5 gap-3" id="time-slots-container">
                                    @foreach ($allTimes as $slot)
                                                        <button
                                                            class="py-3 px-2 rounded-xl font-semibold transition-all duration-300 select-time time-slot
                                                                            {{ $slot['booked']
                                        ? 'bg-red-100 text-red-600 border-2 border-red-200 cursor-not-allowed'
                                        : ($slot['past']
                                            ? 'bg-gray-300 text-gray-500 border-2 border-gray-400 cursor-not-allowed'
                                            : 'bg-gray-100 text-gray-700 border-2 border-gray-200 hover:bg-primary/10 hover:border-primary hover:text-primary') }}"
                                                            data-time="{{ $slot['time'] }}" data-booked="{{ $slot['booked'] ? 'true' : 'false' }}"
                                                            data-past="{{ $slot['past'] ? 'true' : 'false' }}" {{ $slot['booked'] || $slot['past'] ? 'disabled' : '' }}>
                                                            {{ $slot['time'] }}
                                                        </button>
                                    @endforeach
                                </div>
                            @else
                                <div class="text-center py-8 bg-gray-50 rounded-2xl">
                                    <i class="fas fa-exclamation-triangle text-yellow-500 text-3xl mb-3"></i>
                                    <p class="text-gray-600">Data operasional tidak ditemukan.</p>
                                </div>
                            @endif
                        </div>

                        <!-- Selected Time Display -->
                        <div id="selected-display"
                            class="mb-6 p-4 bg-primary/5 rounded-2xl border border-primary/20 hidden">
                            <h4 class="font-bold text-dark mb-3 flex items-center gap-2">
                                <i class="fas fa-clock text-primary"></i>
                                Waktu Terpilih:
                            </h4>
                            <div id="selected-times-list" class="flex flex-wrap gap-2 mb-3"></div>
                            <div class="flex items-center gap-4 text-sm">
                                <div>
                                    <span class="text-gray-600">Durasi:</span>
                                    <span id="duration-display" class="font-bold text-primary ml-2">0 jam</span>
                                </div>
                                <div class="ml-auto flex gap-2">
                                    <span id="selection-mode" class="text-gray-600 text-sm"></span>
                                    <button type="button" id="reset-selection"
                                        class="text-red-600 hover:text-red-800 text-sm">
                                        <i class="fas fa-times mr-1"></i>Reset
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Form Pemesanan -->
                        <form action="{{ route('detailpesanan') }}" method="POST" id="booking-form">
                            @csrf

                            <input type="hidden" name="selected_times" id="selected-times" value="">
                            <input type="hidden" name="id_lapangan" value="{{ $id }}">
                            <input type="hidden" name="tgl_booking" value="{{ $tanggal }}">
                            <input type="hidden" name="jam_mulai" id="jam-mulai" value="">
                            <input type="hidden" name="jam_selesai" id="jam-selesai" value="">

                            <!-- Tombol Submit -->
                            <button type="submit" id="submit-btn"
                                class="w-full bg-primary text-white py-4 px-6 rounded-2xl font-bold hover:bg-primary-dark transition-all duration-300 hover:-translate-y-1 shadow-lg group/btn flex items-center justify-center gap-3 opacity-50 cursor-not-allowed"
                                disabled>
                                <i class="fas fa-calendar-plus group-hover/btn:scale-110 transition-transform"></i>
                                <span>Pesan Lapangan</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const selectedTimesInput = document.getElementById('selected-times');
            const jamMulaiInput = document.getElementById('jam-mulai');
            const jamSelesaiInput = document.getElementById('jam-selesai');
            const selectedDisplay = document.getElementById('selected-display');
            const selectedTimesList = document.getElementById('selected-times-list');
            const durationDisplay = document.getElementById('duration-display');
            const selectionModeText = document.getElementById('selection-mode');
            const submitBtn = document.getElementById('submit-btn');
            const resetBtn = document.getElementById('reset-selection');
            const singleModeBtn = document.getElementById('single-mode');
            const rangeModeBtn = document.getElementById('range-mode');
            const timeSlots = document.querySelectorAll('.time-slot');

            let selectedTimes = [];
            let selectionMode = 'single'; // 'single' or 'range'
            let rangeStart = null;

            // Mode Selection
            singleModeBtn.addEventListener('click', () => {
                selectionMode = 'single';
                singleModeBtn.classList.add('bg-primary', 'text-white');
                singleModeBtn.classList.remove('bg-gray-200', 'text-gray-700');
                rangeModeBtn.classList.add('bg-gray-200', 'text-gray-700');
                rangeModeBtn.classList.remove('bg-primary', 'text-white');
                resetSelection();
            });

            rangeModeBtn.addEventListener('click', () => {
                selectionMode = 'range';
                rangeModeBtn.classList.add('bg-primary', 'text-white');
                rangeModeBtn.classList.remove('bg-gray-200', 'text-gray-700');
                singleModeBtn.classList.add('bg-gray-200', 'text-gray-700');
                singleModeBtn.classList.remove('bg-primary', 'text-white');
                resetSelection();
            });

            timeSlots.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const time = button.getAttribute('data-time');
                    const isBooked = button.getAttribute('data-booked') === 'true';
                    const isPast = button.getAttribute('data-past') === 'true';

                    if (isBooked || isPast) return;

                    if (selectionMode === 'single') {
                        handleSingleSelection(time, button);
                    } else {
                        handleRangeSelection(time, button);
                    }

                    updateSelectionDisplay();
                });
            });

            function handleSingleSelection(time, button) {
                // Toggle selection
                if (selectedTimes.includes(time)) {
                    // Remove from selection
                    selectedTimes = selectedTimes.filter(t => t !== time);
                    resetButtonStyle(button);
                } else {
                    // Add to selection
                    selectedTimes.push(time);
                    button.classList.remove('bg-gray-100', 'border-gray-200');
                    button.classList.add('bg-primary', 'text-white', 'border-primary');
                }
            }

            function handleRangeSelection(time, button) {
                if (rangeStart === null) {
                    // First click - set start
                    rangeStart = time;
                    selectedTimes = [time];
                    button.classList.remove('bg-gray-100', 'border-gray-200');
                    button.classList.add('bg-accent', 'text-white', 'border-accent');
                } else {
                    // Second click - set end and select range
                    const allTimeSlots = Array.from(timeSlots).map(btn => ({
                        time: btn.getAttribute('data-time'),
                        element: btn,
                        booked: btn.getAttribute('data-booked') === 'true',
                        past: btn.getAttribute('data-past') === 'true'
                    })).sort((a, b) => a.time.localeCompare(b.time));

                    const startIndex = allTimeSlots.findIndex(slot => slot.time === rangeStart);
                    const endIndex = allTimeSlots.findIndex(slot => slot.time === time);

                    // Ensure start time is before end time
                    const actualStartIndex = Math.min(startIndex, endIndex);
                    const actualEndIndex = Math.max(startIndex, endIndex);

                    // Reset all buttons first
                    resetAllButtonStyles();

                    // Select range
                    selectedTimes = [];
                    for (let i = actualStartIndex; i <= actualEndIndex; i++) {
                        const slot = allTimeSlots[i];
                        if (!slot.booked && !slot.past) {
                            selectedTimes.push(slot.time);

                            if (i === actualStartIndex) {
                                slot.element.classList.add('bg-accent', 'text-white', 'border-accent');
                            } else if (i === actualEndIndex) {
                                slot.element.classList.add('bg-primary', 'text-white', 'border-primary');
                            } else {
                                slot.element.classList.add('bg-primary/20', 'text-primary', 'border-primary');
                            }
                        }
                    }

                    rangeStart = null; // Reset for next selection
                }
            }

            function updateSelectionDisplay() {
                // Sort times chronologically
                selectedTimes.sort((a, b) => a.localeCompare(b));

                if (selectedTimes.length > 0) {
                    // Update selected times list
                    selectedTimesList.innerHTML = '';
                    selectedTimes.forEach(time => {
                        const timeBadge = document.createElement('span');
                        timeBadge.className = 'bg-primary text-white px-3 py-1 rounded-full text-sm font-semibold flex items-center gap-1';
                        timeBadge.innerHTML = `<i class="fas fa-clock text-xs"></i> ${time}`;
                        selectedTimesList.appendChild(timeBadge);
                    });

                    // Update duration
                    durationDisplay.textContent = `${selectedTimes.length} jam`;

                    // Update selection mode text
                    selectionModeText.textContent = selectionMode === 'single' ? 'Mode: Single' : 'Mode: Range';

                    // Update form inputs
                    selectedTimesInput.value = selectedTimes.join(',');

                    // Set jam_mulai and jam_selesai
                    jamMulaiInput.value = selectedTimes[0];
                    jamSelesaiInput.value = selectedTimes[selectedTimes.length - 1];

                    // Show display and enable submit
                    selectedDisplay.classList.remove('hidden');
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                    submitBtn.classList.add('cursor-pointer', 'opacity-100');
                } else {
                    // Hide display and disable submit
                    selectedDisplay.classList.add('hidden');
                    submitBtn.disabled = true;
                    submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
                    submitBtn.classList.remove('cursor-pointer', 'opacity-100');

                    // Clear form inputs
                    selectedTimesInput.value = '';
                    jamMulaiInput.value = '';
                    jamSelesaiInput.value = '';
                }
            }

            function resetButtonStyle(button) {
                if (!button.disabled) {
                    button.classList.remove('bg-primary', 'bg-primary/20', 'bg-accent', 'text-white', 'text-primary', 'border-primary', 'border-accent');
                    button.classList.add('bg-gray-100', 'text-gray-700', 'border-gray-200');
                }
            }

            function resetAllButtonStyles() {
                timeSlots.forEach(button => {
                    resetButtonStyle(button);
                });
            }

            function resetSelection() {
                selectedTimes = [];
                rangeStart = null;
                resetAllButtonStyles();
                updateSelectionDisplay();
            }

            // Reset selection
            resetBtn.addEventListener('click', resetSelection);
        });
    </script>
@endsection