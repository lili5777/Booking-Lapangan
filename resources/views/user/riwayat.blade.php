@extends('user.component.master')
@section('judul', 'Riwayat')
@section('konten')
    @include('user.component.navbar')

    <div class="bg-[#F8DFD4] w-full p-6 space-y-8 min-h-[600px]">
        <h1 class="text-center text-3xl font-semibold text-gray-700 mb-8">Riwayat Booking</h1>

        @forelse ($booking as $b)
            <div
                class="flex flex-col md:flex-row bg-white rounded-lg p-6 gap-6 shadow-md border border-gray-200 hover:shadow-lg transition duration-200">
                <div class="w-full md:w-1/4 flex justify-center md:justify-start">
                    <img src="{{ asset('images/'.$kategori->where('id', $lapangan->where('id', $b->id_lapangan)->first()->id_kategori)->first()->foto_222142) }}" alt="Lapangan" class="w-28 h-28 rounded-lg object-cover">
                </div>

                <div class="flex-grow md:w-1/2 text-gray-700 space-y-2 px-5">
                    <h2 class="text-lg font-semibold">Kategori:
                        <span
                            class="font-normal">{{ $kategori->where('id', $lapangan->where('id', $b->id_lapangan)->first()->id_kategori)->first()->name_222142 ?? 'Kategori Tidak Ditemukan' }}</span>
                    </h2>
                    <p class="text-md">Lapangan:
                        <span
                            class="font-normal">{{ $lapangan->where('id', $b->id_lapangan)->first()->urutan_222142 ?? 'Data tidak tersedia' }}</span>
                    </p>
                    
                    <div class="grid grid-cols-2 gap-1 text-sm font-medium mt-4">
                        <div class="text-gray-600">Tanggal:</div>
                        <div>{{ $b->tgl_booking_222142 }}</div>
                        <div class="text-gray-600">Mulai:</div>
                        <div>{{ $b->jam_mulai_222142 }}</div>
                        <div class="text-gray-600">Selesai:</div>
                        <div>{{ $b->jam_selesai_222142 }}</div>
                    </div>
            
                </div>

                <div class="w-full md:w-1/4 flex flex-col items-center text-center text-gray-700 mt-5 md:mt-0">
                    <h2 class="text-lg font-semibold">Total Harga</h2>
                    <p class="text-xl font-bold mb-3 text-[#C69774]">Rp. {{ number_format($b->total_222142, 0, ',', '.') }}</p>

                    <div class="flex gap-3 items-center mt-2">
                        {{-- Status Badge --}}
                        <div
                            class="px-3 py-1 rounded-lg font-semibold text-sm text-white
                            {{ $b->status_222142 == 'proses' ? 'bg-yellow-500' : ($b->status_222142 == 'aktif' ? 'bg-green-600' : 'bg-red-600') }}">
                            {{ ucfirst($b->status_222142) }}
                        </div>

                        {{-- Tombol Konfirmasi Pembayaran --}}
                        @if ($b->status_222142 == 'proses' && !$konfir->where('id_booking', $b->id)->first())
                            <a href="{{ route('konfirbukti', $b->id) }}"
                                class="bg-blue-500 text-white py-2 px-4 rounded-lg font-medium hover:bg-blue-600 transition duration-200 text-sm">
                                Konfirmasi Pembayaran
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center text-gray-600 py-12">
                <p class="text-lg font-medium">Tidak ada riwayat booking.</p>
            </div>
        @endforelse
    </div>

    @include('user.component.footer')
@endsection
