@extends('user.component.master2')
@section('judul')
@section('konten')
<div class="flex bg-[#F8DFD4]">
    <div class="w-full">
        <div class=" place-items-center grid mb-16">
            <img src="{{asset('images/badminton_logo_-_Dibuat_dengan_PosterMyWall__1_-removebg-preview.png')}}" alt="" class="w-72 h-72">
            <h1 class="font-bold text-gray-600">Kamu Admin bekerja yang fokus dan baik karena senangnya pelanggan itu semua berkat kamu..!!</h1>
        </div>
        <div class="flex justify-around">

            <div class="bg-[#C69774] h-28 rounded-lg w-56 place-content-center items-center grid transition-transform transform hover:scale-110 shadow-2xl">
                <h1 class="text-white font-bold text-xl">Pengguna</h1>
                <h1 class="text-center text-white text-4xl font-extrabold">{{$pengguna}}</h1>
            </div>
            <div class="bg-[#C69774] h-28 rounded-lg w-56 place-content-center items-center grid transition-transform transform hover:scale-110 shadow-2xl">
                <h1 class="text-white font-bold text-xl">Lapangan</h1>
                <h1 class="text-center text-white text-4xl font-extrabold">{{$lapangan}}</h1>
            </div>
            <div class="bg-[#C69774] h-28 rounded-lg w-56 place-content-center items-center grid transition-transform transform hover:scale-110 shadow-2xl">
                <h1 class="text-white font-bold text-xl">Pesanan</h1>
                <h1 class="text-center text-white text-4xl font-extrabold">{{$pesan}}</h1>
            </div>
            <div class="bg-[#C69774] h-28 rounded-lg w-56 place-content-center items-center grid transition-transform transform hover:scale-110 shadow-2xl">
                <h1 class="text-white font-bold text-xl">Konfirmasi</h1>
                <h1 class="text-center text-white text-4xl font-extrabold">{{$konfir}}</h1>
            </div>
        </div>
    </div>



</div>


@endsection
