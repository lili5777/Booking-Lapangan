@extends('user.component.master2')
@section('judul', isset($kategori) ? 'Edit Data Kategori' : 'Tambah Data Kategori')
@section('konten')
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 p-6 lg:p-10">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-4xl font-bold text-gray-800">
                        {{ isset($kategori) ? 'Edit Data Kategori' : 'Tambah Data Kategori' }}
                    </h1>
                    <p class="text-gray-600">
                        {{ isset($kategori) ? 'Perbarui informasi kategori' : 'Lengkapi form untuk menambah kategori baru' }}
                    </p>
                </div>
            </div>

            <!-- Back Button -->
            <a href="{{ route('admin_kategori') }}"
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
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                            </path>
                        </svg>
                        <div>
                            <h2 class="text-2xl font-bold text-white">Informasi Kategori</h2>
                            <p class="text-white/80 text-sm">Isi data dengan lengkap dan benar</p>
                        </div>
                    </div>
                </div>

                <!-- Form Body -->
                <form action="{{ route('proses_tambahkategori') }}" method="POST" enctype="multipart/form-data" class="p-8">
                    @csrf
                    <input type="hidden" name="id" value="{{ isset($kategori) ? $kategori->id : '' }}">

                    <!-- Nama Kategori -->
                    <div class="mb-6">
                        <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="name">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                </path>
                            </svg>
                            <span>Nama Kategori</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                    </path>
                                </svg>
                            </div>
                            <input name="name" type="text" id="name" placeholder="Masukkan nama kategori"
                                value="{{ isset($kategori) ? $kategori->name_222142 : '' }}"
                                class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-purple-500 focus:ring-4 focus:ring-purple-100 transition duration-300"
                                required>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-6">
                        <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="deksripsi">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                            <span>Deskripsi</span>
                        </label>
                        <textarea name="deksripsi" id="deksripsi" rows="4" placeholder="Masukkan deskripsi kategori"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition duration-300 resize-none"
                            required>{{ isset($kategori) ? $kategori->deksripsi_222142 : '' }}</textarea>
                        <p class="text-gray-500 text-xs mt-2 ml-1">Jelaskan detail tentang kategori ini</p>
                    </div>

                    <!-- Harga -->
                    <div class="mb-6">
                        <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="harga">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            <span>Harga</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <span class="text-gray-500 font-semibold">Rp</span>
                            </div>
                            <input name="harga" type="number" id="harga" placeholder="0"
                                value="{{ isset($kategori) ? $kategori->harga_222142 : '' }}"
                                class="w-full pl-14 pr-4 py-3 border-2 border-gray-200 rounded-xl text-gray-700 focus:outline-none focus:border-green-500 focus:ring-4 focus:ring-green-100 transition duration-300"
                                required min="0">
                        </div>
                        <p class="text-gray-500 text-xs mt-2 ml-1">Harga per sesi/jam</p>
                    </div>

                    <!-- Foto -->
                    <div class="mb-8">
                        <label class="block text-gray-800 text-sm font-bold mb-3 flex items-center gap-2" for="foto">
                            <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span>Foto Kategori</span>
                        </label>

                        <!-- Preview Existing Image -->
                        @if (isset($kategori) && $kategori->foto_222142)
                            <div class="mb-4 p-4 bg-gray-50 rounded-xl border-2 border-gray-200">
                                <p class="text-gray-600 text-sm font-semibold mb-2">Foto Saat Ini:</p>
                                <div class="relative inline-block">
                                    <img src="{{ asset('images/' . $kategori->foto_222142) }}"
                                        class="w-48 h-48 object-cover rounded-lg border-2 border-gray-300 shadow-md"
                                        alt="Current Image" id="currentImage">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-30 rounded-lg transition duration-300 flex items-center justify-center">
                                        <svg class="w-8 h-8 text-white opacity-0 hover:opacity-100 transition duration-300"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <!-- File Input -->
                        <div class="relative">
                            <input name="foto" type="file" id="foto" accept=".jpeg,.jpg,.png,.gif,.webp" class="hidden" {{ isset($kategori) ? '' : 'required' }} onchange="previewImage(event)">
                            <label for="foto"
                                class="flex items-center justify-center gap-3 w-full px-6 py-4 border-2 border-dashed border-gray-300 rounded-xl cursor-pointer hover:border-orange-500 hover:bg-orange-50 transition duration-300">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                    </path>
                                </svg>
                                <div class="text-center">
                                    <p class="text-sm font-semibold text-gray-700">Klik untuk upload foto</p>
                                    <p class="text-xs text-gray-500 mt-1">PNG, JPG, JPEG, GIF, WEBP (Max. 2MB)</p>
                                </div>
                            </label>
                        </div>

                        <!-- Preview New Image -->
                        <div id="imagePreview" class="hidden mt-4 p-4 bg-gray-50 rounded-xl border-2 border-gray-200">
                            <p class="text-gray-600 text-sm font-semibold mb-2">Preview Foto Baru:</p>
                            <img id="preview" src="" alt="Preview"
                                class="w-48 h-48 object-cover rounded-lg border-2 border-gray-300 shadow-md">
                        </div>

                        <div id="foto-error" class="text-red-500 text-sm mt-2"></div>
                        <p class="text-gray-500 text-xs mt-2 ml-1">
                            {{ isset($kategori) ? 'Biarkan kosong jika tidak ingin mengubah foto' : 'Upload foto kategori yang menarik' }}
                        </p>
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
                            <span>{{ isset($kategori) ? 'Perbarui Kategori' : 'Tambah Kategori' }}</span>
                        </button>

                        <a href="{{ route('admin_kategori') }}"
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
                    <p>• Gunakan nama kategori yang jelas dan mudah dipahami</p>
                    <p>• Deskripsi sebaiknya menjelaskan keunggulan dan fasilitas</p>
                    <p>• Harga harus dalam format angka tanpa titik atau koma</p>
                    <p>• Upload foto dengan kualitas baik dan ukuran maksimal 2MB</p>
                    <p>• Format foto yang didukung: JPG, JPEG, PNG, GIF, WEBP</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Preview image before upload
        function previewImage(event) {
            const file = event.target.files[0];
            const errorDiv = document.getElementById('foto-error');
            const previewContainer = document.getElementById('imagePreview');
            const preview = document.getElementById('preview');

            errorDiv.textContent = '';

            if (file) {
                // Validate file size (2MB)
                if (file.size > 2 * 1024 * 1024) {
                    errorDiv.textContent = 'Ukuran file terlalu besar. Maksimal 2MB.';
                    event.target.value = '';
                    previewContainer.classList.add('hidden');
                    return;
                }

                // Validate file type
                const validTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
                if (!validTypes.includes(file.type)) {
                    errorDiv.textContent = 'Format file tidak valid. Gunakan JPG, PNG, GIF, atau WEBP.';
                    event.target.value = '';
                    previewContainer.classList.add('hidden');
                    return;
                }

                // Show preview
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
        }

        // Format currency input
        const hargaInput = document.getElementById('harga');
        hargaInput?.addEventListener('input', function (e) {
            // Remove non-numeric characters
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>

    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #F75270 0%, #FF6B88 100%);
        }
    </style>
@endsection