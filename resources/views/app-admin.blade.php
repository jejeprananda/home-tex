<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/x-icon">
    <title>Home Texere</title>
    <link rel="shortcut icon" href="/images/favicon/favicon.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link href="css/app.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    {{-- @vite('resources/css/app.css')
    @vite('resources/css/main.css') --}}
</head>

<body>
    <div class="flex">
        <div class="relative">
            @include('admin.layout.sidebar')
        </div>
        <div class="relative left-8 top-8 mt-8">
            @yield('content')
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
