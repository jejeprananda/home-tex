<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Home</title>

    <link rel="shortcut icon" href="/images/favicon/favicon.ico" type="image/x-icon">

    @vite('resources/css/main.css')
    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>

<body>
    <div class="bg-login h-screen">
        @include('/web/layout/navbar')

        {{-- Logo --}}
        <div class="h-24 w-screen flex item-center justify-center mt-20">
            <img src="/images/logo.png" class="margin-auto">
        </div>

        <!-- login -->
        <div class="contain py-16">
            <div class="max-w-lg bg-white mx-auto shadow px-6 py-7 rounded overflow-hidden">
                <h2 class="text-2xl uppercase font-medium mb-1">Login</h2>
                <form action="{{ route('loginUser') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="space-y-2">
                        <div>
                            <label for="email" class="text-gray-600 mb-2 block">Email address</label>
                            <input type="email" name="email" id="email"
                                class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                                placeholder="youremail.@domain.com">
                        </div>
                        <div>
                            <label for="password" class="text-gray-600 mb-2 block">Password</label>
                            <input type="password" name="password" id="password"
                                class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                                placeholder="*******">
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center">
                            <input type="checkbox" name="remember" id="remember"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="remember" class="text-gray-600 ml-3 cursor-pointer">Remember me</label>
                        </div>
                        <a href="#" class="text-primary">Forgot password</a>
                    </div>
                    <div class="mt-4">
                        <button type="submit"
                            class="block w-full py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">Login</button>
                    </div>
                </form>

                <p class="mt-4 text-center text-gray-600">Don't have account? <a href="{{route('user/create')}}"
                        class="text-primary">Register
                        now</a></p>
            </div>
        </div>
        <!-- ./login -->
        <div class="absolute bottom-0 w-screen">
            @include('web/layout/copyright')
        </div>

    </div>
</body>

</html>
