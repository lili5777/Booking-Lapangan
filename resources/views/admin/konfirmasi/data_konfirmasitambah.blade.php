@extends('user.component.master2')
@section('judul', 'Tambah/Edit Data Konfirmasi')
@section('konten')
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 p-6 lg:p-10">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex items-center justify-between flex-wrap gap-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-4xl font-bold text-gray-800">
                            {{ isset($konfirmasi) ? 'Edit Data Konfirmasi' : 'Tambah Data Konfirmasi' }}
                        </h1>
                        <p class="text-gray-600">Kelola data konfirmasi pembayaran</p>
                    </div>
                </div>

                <!-- Back Button -->
                <a href="{{ route('admin_konfirmasi') }}"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-gray-500 text-white font-bold rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105 hover:bg-gray-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    <span>Kembali</span>
                </a>
            </div>
        </div>

        <!-- Form Card -->
        <div class="max-w-2xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Form Header -->
                <div class="gradient-bg p-6">
                    <div class="flex items-center gap-3">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        <h2 class="text-xl font-bold text-white">
                            {{ isset($konfirmasi) ? 'Edit Konfirmasi' : 'Tambah Konfirmasi Baru' }}
                        </h2>
                    </div>
                </div>

                <!-- Form Content -->
                <div class="p-6 md:p-8">
                    <form action="{{ route('proses_tambahkonfirmasi') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ isset($konfirmasi) ? $konfirmasi->id : '' }}">

                        <!-- Pemesan Field -->
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-3" for="id_booking">
                                Pemesan
                            </label>
                            <select name="id_booking" id="id_booking"
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-pink-500 transition duration-300 shadow-sm"
                                required>
                                <option value="">Pilih Pemesan</option>
                                @foreach ($booking as $item)
                                    @if ($item->status_222142 !== 'aktif')
                                        <option value="{{ $item->id }}" {{ isset($konfirmasi) && $konfirmasi->id_booking == $item->id ? 'selected' : '' }}>
                                            {{ $user->where('id', $item->id_user)->first()->name }} -
                                            Booking ID: {{ $item->id }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <!-- Bukti Pembayaran Field -->
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-3" for="foto">
                                Bukti Pembayaran
                            </label>

                            <!-- Display Existing Image if Available -->
                            @if (isset($konfirmasi) && $konfirmasi->foto_222142)
                                <div class="mb-4 p-4 bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                                    <p class="text-gray-600 text-sm font-medium mb-3">Gambar Saat Ini:</p>
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('images/' . $konfirmasi->foto_222142) }}"
                                            class="w-32 h-32 object-cover rounded-lg border-2 border-gray-300 shadow-md"
                                            alt="Current Image">
                                        <div class="text-sm text-gray-500">
                                            <p>File: {{ $konfirmasi->foto_222142 }}</p>
                                            <p class="mt-1">Klik tombol di bawah untuk mengganti gambar</p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- File Input -->
                            <div class="relative">
                                <input name="foto" type="file" id="foto"
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-pink-500 transition duration-300 shadow-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-pink-50 file:text-pink-700 hover:file:bg-pink-100">
                            </div>
                            <p class="text-gray-500 text-xs mt-2">Format yang didukung: JPG, PNG, JPEG. Maksimal 2MB</p>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex items-center justify-end pt-6 border-t border-gray-200">
                            <button type="submit"
                                class="inline-flex items-center gap-2 px-8 py-3 gradient-bg text-white font-bold rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>{{ isset($konfirmasi) ? 'Perbarui Konfirmasi' : 'Tambah Konfirmasi' }}</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #F75270 0%, #FF6B88 100%);
        }

        /* Custom file input styling */
        input[type="file"]::-webkit-file-upload-button {
            background: linear-gradient(135deg, #F75270 0%, #FF6B88 100%);
            border: none;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            margin-right: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        input[type="file"]::-webkit-file-upload-button:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(247, 82, 112, 0.3);
        }

        /* Select dropdown styling */
        select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.75rem center;
            background-repeat: no-repeat;
            background-size: 16px 12px;
            padding-right: 2.5rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        select:focus {
            border-color: #F75270;
            box-shadow: 0 0 0 3px rgba(247, 82, 112, 0.1);
        }
    </style>

    <script>
        // Enhanced file input functionality
        document.getElementById('foto')?.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const fileName = file.name;
                const fileSize = (file.size / 1024 / 1024).toFixed(2); // Convert to MB

                // Validate file size
                if (fileSize > 2) {
                    alert('File terlalu besar! Maksimal ukuran file adalah 2MB.');
                    this.value = '';
                    return;
                }

                // Validate file type
                const validTypes = ['image/jpeg', 'image/jpg', 'image/png'];
                if (!validTypes.includes(file.type)) {
                    alert('Format file tidak didukung! Hanya JPG, JPEG, dan PNG yang diizinkan.');
                    this.value = '';
                    return;
                }

                console.log(`File selected: ${fileName} (${fileSize}MB)`);
            }
        });

        // Form validation
        document.querySelector('form')?.addEventListener('submit', function (e) {
            const bookingSelect = document.getElementById('id_booking');
            const fileInput = document.getElementById('foto');

            if (!bookingSelect.value) {
                e.preventDefault();
                alert('Silakan pilih pemesan terlebih dahulu!');
                bookingSelect.focus();
                return;
            }

            // Only validate file for new entries, not for edits
            if (!{{ isset($konfirmasi) ? 'true' : 'false' }} && !fileInput.value) {
                e.preventDefault();
                alert('Silakan pilih bukti pembayaran!');
                fileInput.focus();
                return;
            }
        });
    </script>
@endsection