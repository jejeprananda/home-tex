<!-- Navbar -->
<div>
    <nav class="bg-gray-800">
        <div class="container flex">
            <a href="/"><img src="/images/logo.png" class="h-20 relative left-0"></a>
            <div
                class="px-8 w-48 py-8 bg-primary md:flex justify-center item-center text-center cursor-pointer relative group hidden">
                <span class="capitalize ml-2 text-white">Categories</span>

                <!-- dropdown -->
                <div
                    class="absolute z-40 w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-dashed group-hover:opacity-100 transition duration-300 invisible group-hover:visible">
                    <a href="#" class="flex bg-white items-center px-6 py-3 hover:bg-gray-100 transition">
                        <span class="ml-6 text-gray-600 text-sm">AC</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <span class="ml-6 text-gray-600 text-sm">TV</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <span class="ml-6 text-gray-600 text-sm">Mesin Cuci</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <span class="ml-6 text-gray-600 text-sm">Kitchen Ware</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <span class="ml-6 text-gray-600 text-sm">Kulkas</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <span class="ml-6 text-gray-600 text-sm">Blender</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <span class="ml-6 text-gray-600 text-sm">Vacuum Cleaner</span>
                    </a>
                </div>
            </div>

            <div class="flex items-center justify-between flex-grow md:pl-12 py-5">
                <div class="flex items-center space-x-6 capitalize">
                    <a href="/" class="text-gray-200 hover:text-white transition">Home</a>
                    <a href="/products" class="text-gray-200 hover:text-white transition">Shop</a>
                    <a href="/about" class="text-gray-200 hover:text-white transition">About us</a>

                </div>
                <div class="flex">
                    {{-- Cart --}}
                    @auth
                        <a href="/order/cart/{{ auth()->user()->id }}">
                            <button id="cartDropdownButton1" type="button"
                                class="inline-flex text-white items-center justify-center p-2 rounded-lg text-sm font-medium leading-none text-gray-900 dark:text-white dark:hover:bg-gray-700">
                                <div class="relative sm:me-2.5">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
                                    </svg>
                                </div>
                                <p>
                                    Cart
                                </p>
                            </button>
                        </a>
                    @endauth
                    {{-- Profile --}}
                    @auth
                        @if (auth()->user()->role == '0')
                            <a href="{{ route('products/list') }}"
                                class="text-gray-200 hover:text-white transition w-32 m-0 p-2">Admin Dash</a>
                            <form action="{{ route('logout') }}" method="post" class="w-24 m-0">
                                @csrf
                                <button type="submit" title=""
                                    class="inline-flex text-center text-white rounded bg-red-600 w-full items-center gap-2 rounded-md px-3 py-2 text-sm dark:hover:bg-gray-600">
                                    Sign Out </button>
                            </form>
                        @else
                            <button id="userDropdownButton1" data-dropdown-toggle="userDropdown1" type="button"
                                class="inline-flex items-center rounded-lg justify-center p-2 dark:hover:bg-gray-700 text-sm font-medium leading-none text-gray-900 dark:text-white">
                                <svg class="w-5 h-5 me-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <p class="text-white">Akun</p>
                                <svg class="w-4 h-4 text-gray-900 text-white ms-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 9-7 7-7-7" />
                                </svg>
                            </button>
                        @endif


                        <div id="userDropdown1"
                            class="hidden z-10 w-56 divide-y divide-gray-100 overflow-hidden overflow-y-auto rounded-lg bg-white antialiased shadow dark:divide-gray-600 dark:bg-gray-700">
                            <ul class="p-2 text-start text-sm font-medium text-gray-900 dark:text-white">
                                <li><a href="user/profile" title=""
                                        class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                        Akun Saya </a></li>
                                <li><a href="/order/{{auth()->user()->email}}" title=""
                                        class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                        Penasan Saya </a></li>
                                <li><a href="users/member" title=""
                                        class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                        Member </a></li>
                            </ul>

                            <div class="p-2 text-sm font-medium text-gray-900 dark:text-white">
                                <form action="{{ route('logout') }}" method="post" class="w-24 m-0">
                                    @csrf
                                    <button type="submit" title=""
                                        class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                        Sign Out </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-200 hover:text-white transition">Login</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    @if (session('success'))
        <div id="success-message" class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
        <script>
            setTimeout(function() {
                document.getElementById('success-message').style.display = 'none';
            }, 5000);
        </script>
    @endif
</div>
<!-- ./navbar -->
