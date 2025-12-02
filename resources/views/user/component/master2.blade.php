<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul') - Admin BookingLap</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #F75270 0%, #FF6B88 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(247, 82, 112, 0.3);
        }
    </style>
</head>

<body class="bg-gray-50 overflow-x-hidden">
    <div class="flex min-h-screen">
        @include('admin.component.sidebar')
        <div class="flex-1 lg:ml-64">
            @yield('konten')
        </div>
    </div>
</body>

</html>