@extends('user.component.master2')
@section('judul', isset($lapangan) ? 'Edit Data Lapangan' : 'Tambah Data Lapangan')
@section('konten')
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 p-6 lg:p-10">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-4xl font-bold text-gray-800">
                        {{ isset($lapangan) ? 'Edit Data Lapangan' : 'Tambah Data Lapangan' }}
                    </h1>
                    <p class="text-gray-600">
                        {{ isset($lapangan) ? 'Perbarui informasi lapangan' : 'Lengkapi form untuk menambah lapangan baru' }}
                    </p>
                </div>
            </div>

            <!-- Back Button -->
            <a href="{{ route('admin_lapangan') }}"
                class="inline-flex items-center gap-2 px-6 py-3 bg-white text-gray-700 font-semibold rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                    </path>
                </svg>
                <span>Kembali</span>
            </a>
        </div>

        <!-- Form Card -->
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Card Header -->
                <div class="gradient-bg p-6">
                    <div class="flex items-center gap-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>
                        <div>
                            <h2 class="text-2xl font-bold text-white">Informasi Lapangan</h2>
                            <p class="text-white/80 text-sm">Isi data dengan lengkap dan benar</p>
                        </div>
                    </div>
                </div>

                <!-- Form Body -->
                <form action="{{ route('proses_tambahlapangan') }}" method="POST" class="p-8">
                    @csrf
                    <input type="hidden" name="id" value="{{ isset($lapangan) ? $lapangan->id : '' }}">

                    <!-- Kategori -->
                    <div class="mb-6">
                        <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="id_kategori">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                </path>
                            </svg>
                            <span>Kategori</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                    </path>
                                </svg>
                            </div>
                            <select name="id_kategori" id="id_kategori"
                                class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-purple-500 focus:ring-4 focus:ring-purple-100 transition duration-300 appearance-none bg-white"
                                required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}" {{ isset($lapangan) && $lapangan->id_kategori == $item->id ? 'selected' : '' }}>
                                        {{ $item->name_222142 }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Urutan -->
                    <div class="mb-6">
                        <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="urutan">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <span>Nama Lapangan</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                    </path>
                                </svg>
                            </div>
                            <input name="urutan" type="text" id="urutan" placeholder="Masukkan nama lapangan"
                                value="{{ isset($lapangan) ? $lapangan->urutan_222142 : '' }}"
                                class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition duration-300"
                                required>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-6">
                        <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="deskripsi">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                            <span>Deskripsi</span>
                        </label>
                        <textarea name="deskripsi" id="deskripsi" rows="4" placeholder="Masukkan deskripsi lapangan"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-green-500 focus:ring-4 focus:ring-green-100 transition duration-300 resize-none"
                            required>{{ isset($lapangan) ? $lapangan->deskripsi_222142 : '' }}</textarea>
                        <p class="text-gray-500 text-xs mt-2 ml-1">Jelaskan detail tentang lapangan ini</p>
                    </div>

                    <!-- Status -->
                    <div class="mb-8">
                        <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="status">
                            <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Status</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <select name="status" id="status"
                                class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-orange-500 focus:ring-4 focus:ring-orange-100 transition duration-300 appearance-none bg-white"
                                required>
                                <option value="">Pilih Status</option>
                                <option value="1" {{ isset($lapangan) && $lapangan->is_active_222142 == 1 ? 'selected' : '' }}>
                                    Tersedia
                                </option>
                                <option value="0" {{ isset($lapangan) && $lapangan->is_active_222142 == 0 ? 'selected' : '' }}>
                                    Tidak Tersedia
                                </option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-500 text-xs mt-2 ml-1">Tentukan ketersediaan lapangan</p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <button type="submit"
                            class="flex-1 group relative inline-flex items-center justify-center gap-3 px-8 py-4 gradient-bg text-white font-bold text-lg rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105">
                            <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-300" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>{{ isset($lapangan) ? 'Perbarui Lapangan' : 'Tambah Lapangan' }}</span>
                        </button>

                        <a href="{{ route('admin_lapangan') }}"
                            class="flex-1 inline-flex items-center justify-center gap-3 px-8 py-4 bg-gray-200 text-gray-700 font-bold text-lg rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:bg-gray-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            <span>Batal</span>
                        </a>
                    </div>
                </form>
            </div>

            <!-- Help Card -->
            <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                <h3 class="font-bold text-gray-800 mb-3 flex items-center gap-2">
                    <svg class="w-6 h-6 text-[#F75270]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    Tips Pengisian
                </h3>
                <div class="space-y-2 text-sm text-gray-600">
                    <p>• Pilih kategori yang sesuai dengan jenis lapangan</p>
                    <p>• Gunakan nama lapangan yang jelas dan mudah dipahami</p>
                    <p>• Deskripsi sebaiknya menjelaskan fasilitas dan spesifikasi lapangan</p>
                    <p>• Tentukan status ketersediaan lapangan dengan benar</p>
                </div>
            </div>
        </div>
    </div>

    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #F75270 0%, #FF6B88 100%);
        }
    </style>
@endsection