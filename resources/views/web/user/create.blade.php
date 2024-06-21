<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Home</title>

    <link rel="shortcut icon" href="/images/favicon/favicon.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link href="css/app.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
</head>

<body>
    <div class="bg-cover h-screen" style="background-image: url('/images/bg-large.jpg')">
        @include('/web/layout/navbar')
        <div class="bg-login">
            <div class="contain pt-24">
                <div class="max-w-lg bg-white mx-auto mt-24 shadow px-6 py-12 rounded overflow-hidden">
                    <h2 class="text-2xl uppercase font-medium mb-1">Create an account</h2>
                    <p class="text-gray-600 mb-6 text-sm">
                        Register for new cosutumer
                    </p>
                    <form action="{{ route('user/store') }}" method="post" autocomplete="off" onsubmit="return validatePasswords()">
                        @csrf
                        <div class="space-y-2">
                            <div>
                                <label for="name" class="text-gray-600 mb-2 block">Full Name</label>
                                <input type="text" name="name" id="name"
                                    class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                                    placeholder="fulan fulana">
                                @error('name')
                                    <p class="text-red-400 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="text-gray-600 mb-2 block">Email address</label>
                                <input type="email" name="email" id="email"
                                    class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                                    placeholder="youremail.@domain.com">
                                @error('email')
                                    <p class="text-red-400 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="password" class="text-gray-600 mb-2 block">Password</label>
                                <input type="password" name="password" id="password"
                                    class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                                    placeholder="*******">
                                @error('password')
                                    <p class="text-red-400 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="confirm" class="text-gray-600 mb-2 block">Confirm password</label>
                                <input type="password" name="confirm" id="confirm"
                                    class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                                    placeholder="*******">
                                <p id="confirm-error" class="text-red-400 text-sm" style="display: none;">Passwords do not match</p>
                            </div>
                            <div>
                                <label for="phone_number" class="text-gray-600 mb-2 block">Nomor Handphone</label>
                                <input type="text" name="phone_number" id="phone_number"
                                    class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                                    placeholder="Nomor Handphone" required>
                                @error('phone_number')
                                    <p class="text-red-400 text-sm">Masukan Nomor handphone Anda</p>
                                @enderror
                            </div>
                            <div>
                                <label for="address" class="text-gray-600 mb-2 block">Address</label>
                                <input type="text" name="address" id="address"
                                    class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                                    placeholder="Masukan Alamat Anda" Required>
                            </div>
                        </div>
                        <div class="mt-6">
                            <div class="flex items-center">
                                <input type="checkbox" name="aggrement" id="aggrement"
                                    class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                                <label for="aggrement" class="text-gray-600 ml-3 cursor-pointer">I have read and agree
                                    to the <a href="#" class="text-primary">terms & conditions</a></label>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" id="submit-button"
                                class="block w-full py-2 text-center text-white bg-red-700 border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">create
                                account</button>
                        </div>
                    </form>

                    <p class="mt-4 text-center text-gray-600">Already have account? <a href="/login"
                            class="text-primary">Login
                            now</a></p>
                </div>
            </div>
        </div>
    </div>
    <script>
        function validatePasswords() {
            const password = document.getElementById('password').value;
            const confirm = document.getElementById('confirm').value;
            const errorElement = document.getElementById('confirm-error');
            const agreement = document.getElementById('aggrement');
            const submitButton = document.getElementById('submit-button');

            let isValid = true;

            if (password !== confirm) {
                errorElement.style.display = 'block';
                isValid = false;
            } else {
                errorElement.style.display = 'none';
            }

            if (!agreement.checked) {
                alert('You must agree to the terms and conditions');
                isValid = false;
            }

            return isValid;
        }
    </script>
</body>
