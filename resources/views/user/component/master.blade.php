<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul') - BookingLap</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- Styles & Scripts Configuration -->
    @include('user.component.styles')
</head>

<body class="font-poppins bg-gray-50 overflow-x-hidden">
    <!-- Navigation -->
    @include('user.component.navbar')

    <!-- Main Content -->
    @yield('konten')

    <!-- Footer -->
    @include('user.component.footer')

    <!-- JavaScript -->
    @include('user.component.scripts')
</body>

</html>