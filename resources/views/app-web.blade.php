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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- @vite('resources/css/app.css')
    @vite('resources/css/main.css') --}}
    <link href="/css/app.css" rel="stylesheet" />
    <link href="/css/main.css" rel="stylesheet" />
</head>

<body>




    @include('/web/layout/navbar')
    @yield('content')
    @include('web/layout/footer')


    @include('web/layout/copyright')

    {{-- Hubungi WA --}}
    <a href="http://wa.me/08987847242" target="_blank">
        <div class="fixed bottom-4 right-6 w-32">
            <img src="/images/wa-logo.png" class="animate-bounce">
            <p class="p-4 h-12 rounded bg-primary text-white font-bold text-center text-xs shadow-2xl">Hubungi Kami!</p>
        </div>
    </a>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        function swal() {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Anda harus Login untuk menambah keranjang!",
                footer: '<a href="/login">Login</a>',
                showCloseButton: true,
                showConfirmButton: false,
            });
        }

        function swalAdmin() {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Admin tidak dapat menambah keranjang!",
                showCloseButton: true,
                showConfirmButton: false,
            });
        }
    </script>
</body>

</html>
