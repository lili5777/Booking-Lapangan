<div class="w-full flex  h-screen  bg-gradient-to-b from-[#C69774] to-[#F8DFD4]">

    <div class="w-1/2   px-20">
        <p class="text-4xl font-bold pt-52">
            @auth
                Nikmati pengalaman bermain seru di lapangan bulu tangkis, {{ auth()->user()->name }}!
            @else
                Nikmati pengalaman bermain seru di lapangan bulu tangkis.
            @endauth
        </p>
    <p class="pt-3 text-xl"> Pesan sekarang dan rasakan keseruannya!</p>
    <div class="flex gap-5 pt-5">
        <div class="">
            <a href="{{route('lapangan')}}">
                <div class="bg-[#F8DFD4] px-10 py-2 text-[#637E76] font-bold rounded-lg hover:text-[#F8DFD4] hover:bg-[#637E76] transition delay-150 duration-200 ease-in-out">Pesan</div>
            </a>
        </div>
        <div class="">
            {{-- <a href="#">
                <div class="bg-[#F8DFD4] px-10 py-2 text-[#637E76] font-bold rounded-lg hover:text-[#F8DFD4] hover:bg-[#637E76] transition delay-150 duration-200 ease-in-out">Memulai</div>
            </a> --}}
        </div>

    </div>
    </div>
    <div class="w-1/2 grid place-items-center">
        <img src="{{asset('images/3d-illustration-athletic-man-doing-sport-activities.png')}}" alt="" class="w-[500px]">
    </div>

</div>
