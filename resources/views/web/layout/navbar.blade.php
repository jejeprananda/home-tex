<!-- Navbar -->
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
                    <img src="images/icons/sofa.svg" alt="sofa" class="w-5 h-5 object-contain">
                    <span class="ml-6 text-gray-600 text-sm">Sofa</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <img src="images/icons/terrace.svg" alt="terrace" class="w-5 h-5 object-contain">
                    <span class="ml-6 text-gray-600 text-sm">Terarce</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <img src="images/icons/bed.svg" alt="bed" class="w-5 h-5 object-contain">
                    <span class="ml-6 text-gray-600 text-sm">Bed</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <img src="images/icons/office.svg" alt="office" class="w-5 h-5 object-contain">
                    <span class="ml-6 text-gray-600 text-sm">office</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <img src="images/icons/outdoor-cafe.svg" alt="outdoor" class="w-5 h-5 object-contain">
                    <span class="ml-6 text-gray-600 text-sm">Outdoor</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <img src="images/icons/bed-2.svg" alt="Mattress" class="w-5 h-5 object-contain">
                    <span class="ml-6 text-gray-600 text-sm">Mattress</span>
                </a>
            </div>
        </div>

        <div class="flex items-center justify-between flex-grow md:pl-12 py-5">
            <div class="flex items-center space-x-6 capitalize">
                <a href="/" class="text-gray-200 hover:text-white transition">Home</a>
                <a href="/products" class="text-gray-200 hover:text-white transition">Shop</a>
                <a href="#" class="text-gray-200 hover:text-white transition">About us</a>
                <a href="#" class="text-gray-200 hover:text-white transition">Contact us</a>
            </div>
            <div class="flex">
                @auth
                    @if (auth()->user()->role == '0')
                        <a href="{{ route('admin') }}"
                            class="text-gray-200 hover:text-white transition w-32 m-0 p-2">Admin Dash</a>
                    @else
                        <a href="{{ route('user/profile') }}"
                            class="text-gray-200 hover:text-white transition w-24 m-0 p-2">Profile</a>
                    @endif

                    <form action="{{ route('logout') }}" method="post" class="w-24 m-0">
                        @csrf
                        <button type="submit" class="bg-primary text-white rounded p-2">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-200 hover:text-white transition">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
<!-- ./navbar -->
