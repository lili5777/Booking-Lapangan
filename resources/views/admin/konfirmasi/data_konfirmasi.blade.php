@extends('user.component.master')
@section('judul', 'Data Pengguna')
@section('konten')
    <div class="flex bg-[#F8DFD4]">
        @include('admin.component.sidebar')
        <div class="w-full">
            <h1 class="text-center w-full text-gray-600 font-extrabold text-4xl py-5">Data Konfirmasi</h1>
            <div class="pl-10 pt-10">
                <a href="{{ route('tambah_konfirmasi') }}"
                    class="bg-[#C69774] py-3 px-3 rounded-lg text-white font-bold hover:bg-green-600 trancition duration-500 ">Tambah</a>
            </div>
            <div class="py-5 pl-10 pr-10">
                <table class="border border-gray-700 w-full ">
                    <thead>
                        <th class="border-gray-700 border">No</th>
                        <th class="border-gray-700 border">Name</th>
                        <th class="border-gray-700 border">Bukti</th>
                        <th class="border-gray-700 border">status</th>
                        <th class="border-gray-700 border">Aksi</th>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($data as $index => $d)
                            <tr>
                                <td class="border-gray-700 border">{{ $index + 1 }}</td>
                                <td class="border-gray-700 border">
                                    {{ $user->where('id', $booking->where('id', $d->id_booking)->first()->id_user)->first()->name }}
                                </td>
                                <td class="grid place-content-center border border-gray-700">
                                    <img src="{{ asset('images/' . $d->foto_222142) }}" class="w-32" alt=""
                                        onclick="openModal('{{ asset('images/' . $d->foto_222142) }}')">
                                </td>
                                <td class="border-gray-700 border">
                                    <div class="flex flex-col items-center gap-2">
                                        <!-- Status Button -->
                                        <form action="{{ route('terimakonfirmasi', $d->id) }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="bg-[#C69774] rounded-sm text-white px-5 py-1 hover:bg-red-600 transition duration-300">
                                                Terima
                                            </button>
                                        </form>
                                        <form action={{route('tolakkonfirmasi',$d->id)}}"" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="bg-[#C69774] rounded-sm text-white px-5 py-1 hover:bg-red-600 transition duration-300">
                                                Tolak
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td class="border-gray-700 border">
                                    <div class="flex flex-col items-center gap-2">
                                        <!-- Aksi Buttons -->
                                        <a href="{{ route('proses_editkonfirmasi', $d->id) }}"
                                            class="bg-[#C69774] rounded-sm text-white px-5 py-1 hover:bg-blue-600 transition duration-300">
                                            Edit
                                        </a>
                                        <form action="{{ route('proses_hapuskonfirmasi', $d->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-[#C69774] rounded-sm text-white px-5 py-1 hover:bg-red-600 transition duration-300">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
                    <div class="bg-white rounded-lg overflow-hidden">
                        <button onclick="closeModal()" class="absolute top-4 right-4 text-white text-xl">&times;</button>
                        <img id="modalImage" src="" alt="Full-size Image" class="w-96">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        function openModal(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('imageModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('imageModal').classList.add('hidden');
        }
    </script>

@endsection
