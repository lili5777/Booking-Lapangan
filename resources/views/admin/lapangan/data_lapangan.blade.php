@extends('user.component.master2')
@section('judul', 'Data Lapangan')
@section('konten')
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 p-6 lg:p-10">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex items-center justify-between flex-wrap gap-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-4xl font-bold text-gray-800">Data Lapangan</h1>
                        <p class="text-gray-600">Kelola lapangan olahraga</p>
                    </div>
                </div>

                <!-- Add Button -->
                <a href="{{ route('tambah_lapangan') }}"
                    class="inline-flex items-center gap-2 px-6 py-3 gradient-bg text-white font-bold rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <span>Tambah Lapangan</span>
                </a>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 mb-6 md:mb-8">
            <div class="bg-white rounded-xl shadow-lg p-4 md:p-6 hover:shadow-xl transition duration-300">
                <div class="flex items-center gap-3 md:gap-4">
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 rounded-xl bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-600 text-xs md:text-sm font-medium">Total Lapangan</p>
                        <p class="text-2xl md:text-3xl font-bold text-gray-800">{{ count($data) }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-4 md:p-6 hover:shadow-xl transition duration-300">
                <div class="flex items-center gap-3 md:gap-4">
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 rounded-xl gradient-bg flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-600 text-xs md:text-sm font-medium">Lapangan Tersedia</p>
                        <p class="text-2xl md:text-3xl font-bold text-gray-800">
                            {{ $data->where('is_active_222142', 1)->count() }}</p>
                    </div>
                </div>
            </div>

            <div
                class="bg-white rounded-xl shadow-lg p-4 md:p-6 hover:shadow-xl transition duration-300 sm:col-span-2 lg:col-span-1">
                <div class="flex items-center gap-3 md:gap-4">
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 rounded-xl bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-600 text-xs md:text-sm font-medium">Kategori Tersedia</p>
                        <p class="text-2xl md:text-3xl font-bold text-gray-800">{{ $kategori->count() }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Table Header -->
            <div class="gradient-bg p-4 md:p-6">
                <div class="flex items-center justify-between flex-wrap gap-3 md:gap-4">
                    <div class="flex items-center gap-2 md:gap-3">
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>
                        <h2 class="text-lg md:text-xl font-bold text-white">Daftar Lapangan</h2>
                    </div>

                    <!-- Search Box -->
                    <div class="relative w-full sm:w-auto">
                        <input type="text" id="searchInput" placeholder="Cari lapangan..."
                            class="w-full sm:w-64 pl-10 pr-4 py-2 md:py-2.5 text-sm md:text-base rounded-lg border-2 border-white/30 bg-white/20 text-white placeholder-white/70 focus:outline-none focus:border-white focus:bg-white/30 transition duration-300">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-white absolute left-3 top-1/2 transform -translate-y-1/2"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Mobile Card View -->
            <div class="block lg:hidden" id="mobileView">
                <div class="divide-y divide-gray-200">
                    @forelse ($data as $index => $d)
                        <div class="p-4 hover:bg-gray-50 transition duration-200 mobile-card">
                            <!-- Card Header -->
                            <div class="flex items-start gap-3 mb-3">
                                <div class="w-20 h-20 rounded-lg overflow-hidden border-2 border-gray-200 flex-shrink-0">
                                    <div
                                        class="w-full h-full bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                                        <svg class="w-10 h-10 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-start justify-between gap-2 mb-1">
                                        <h3 class="font-bold text-gray-900 text-sm">{{ $d->urutan_222142 }}</h3>
                                        <div
                                            class="w-6 h-6 rounded-full gradient-bg flex items-center justify-center flex-shrink-0">
                                            <span class="text-white font-bold text-xs">{{ $index + 1 }}</span>
                                        </div>
                                    </div>
                                    <p class="text-xs text-gray-600 mb-2">
                                        <span class="font-semibold">Kategori:</span>
                                        {{ $kategori->where('id', $d->id_kategori)->first()->name_222142 }}
                                    </p>
                                    <p class="text-xs text-gray-600 mb-2 line-clamp-2">
                                        {{ Str::limit($d->deskripsi_222142, 80, '...') }}
                                    </p>
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-medium
                                                    {{ $d->is_active_222142 == 1 ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <span>{{ $d->is_active_222142 == 1 ? 'Tersedia' : 'Tidak Tersedia' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex gap-2">
                                <a href="{{ route('proses_editlapangan', $d->id) }}"
                                    class="flex-1 inline-flex items-center justify-center gap-1.5 px-4 py-2.5 bg-blue-500 text-white text-sm font-semibold rounded-lg hover:bg-blue-600 transition duration-300 shadow-md">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg>
                                    Edit
                                </a>
                                <form action="{{ route('proses_hapuslapangan', $d->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus lapangan ini?')" class="flex-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-full inline-flex items-center justify-center gap-1.5 px-4 py-2.5 bg-red-500 text-white text-sm font-semibold rounded-lg hover:bg-red-600 transition duration-300 shadow-md">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="p-8 text-center">
                            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <p class="text-gray-500 font-semibold text-base">Belum ada lapangan</p>
                            <p class="text-gray-400 text-sm mt-1">Silakan tambah lapangan baru</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Desktop Table View -->
            <div class="overflow-x-auto hidden lg:block">
                <table class="w-full min-w-max">
                    <thead class="bg-gray-50 border-b-2 border-gray-200">
                        <tr>
                            <th
                                class="px-4 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                                No
                            </th>
                            <th
                                class="px-4 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                                Kategori
                            </th>
                            <th
                                class="px-4 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                                Lapangan
                            </th>
                            <th
                                class="px-4 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                                Deskripsi
                            </th>
                            <th
                                class="px-4 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                                Status
                            </th>
                            <th
                                class="px-4 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider whitespace-nowrap">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200" id="tableBody">
                        @forelse ($data as $index => $d)
                            <tr class="hover:bg-gray-50 transition duration-200">
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div
                                            class="w-8 h-8 rounded-full gradient-bg flex items-center justify-center flex-shrink-0">
                                            <span class="text-white font-bold text-sm">{{ $index + 1 }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-purple-500 flex-shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                            </path>
                                        </svg>
                                        <span class="text-sm text-gray-900 font-semibold">
                                            {{ $kategori->where('id', $d->id_kategori)->first()->name_222142 }}
                                        </span>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                            </path>
                                        </svg>
                                        <span class="text-sm text-gray-900 font-semibold">{{ $d->urutan_222142 }}</span>
                                    </div>
                                </td>
                                <td class="px-4 py-4">
                                    <p class="text-sm text-gray-600 max-w-xs truncate">
                                        {{ Str::limit($d->deskripsi_222142, 50, '...') }}
                                    </p>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div
                                        class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-medium
                                                {{ $d->is_active_222142 == 1 ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span
                                            class="font-bold">{{ $d->is_active_222142 == 1 ? 'Tersedia' : 'Tidak Tersedia' }}</span>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-center">
                                    <div class="flex items-center justify-center gap-2 flex-nowrap">
                                        <a href="{{ route('proses_editlapangan', $d->id) }}"
                                            class="inline-flex items-center gap-1 px-3 py-2 bg-blue-500 text-white text-xs font-semibold rounded-lg hover:bg-blue-600 transition duration-300 shadow-md hover:shadow-lg whitespace-nowrap">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                </path>
                                            </svg>
                                            Edit
                                        </a>
                                        <form action="{{ route('proses_hapuslapangan', $d->id) }}" method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus lapangan ini?')" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="inline-flex items-center gap-1 px-3 py-2 bg-red-500 text-white text-xs font-semibold rounded-lg hover:bg-red-600 transition duration-300 shadow-md hover:shadow-lg whitespace-nowrap">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center justify-center">
                                        <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                            </path>
                                        </svg>
                                        <p class="text-gray-500 font-semibold text-lg">Belum ada lapangan</p>
                                        <p class="text-gray-400 text-sm mt-1">Silakan tambah lapangan baru</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Table Footer -->
            <div class="bg-gray-50 px-4 md:px-6 py-3 md:py-4 border-t border-gray-200">
                <div class="flex items-center justify-between text-sm md:text-base">
                    <p class="text-xs md:text-sm text-gray-600">
                        Menampilkan <span class="font-semibold text-gray-900">{{ count($data) }}</span> lapangan
                    </p>
                    <div class="flex items-center gap-2">
                        <span class="text-xs text-gray-500">Total Data: {{ count($data) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Search functionality
        document.getElementById('searchInput')?.addEventListener('input', function (e) {
            const searchTerm = e.target.value.toLowerCase();

            // Search in desktop table
            const desktopRows = document.querySelectorAll('#tableBody tr');
            desktopRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });

            // Search in mobile cards
            const mobileCards = document.querySelectorAll('.mobile-card');
            mobileCards.forEach(card => {
                const text = card.textContent.toLowerCase();
                card.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });
    </script>

    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #F75270 0%, #FF6B88 100%);
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endsection