<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul') - Admin BookingLap</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- @include('admin.component.styles') --}}
</head>

<body class="font-poppins bg-[#F8DFD4] overflow-x-hidden">
    <div class="flex">
        @include('admin.component.sidebar')
        <div class="w-full">
            @yield('konten')
        </div>
    </div>

    {{-- @include('user.component.scripts') --}}
</body>

</html>