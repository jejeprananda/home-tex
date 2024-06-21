@extends('app-web')

@section('content')
    <!-- banner -->
    <div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url('images/banner-bg.jpg');">
        <div class="container">
            <h1 class="text-6xl text-gray-800 font-medium mb-4 capitalize">
                Koleksi terbaik untuk<br> Dekorasi rumah
            </h1>
            <p>Dari Inspirasi hingga Realisasi, <b class="text-primary">Home-Texere</b> Menyediakan Furnitur yang Sempurna
                untuk Anda!</p>
            <p>Temukan berbagai pilihan desain furnitur yang elegan dan praktis untuk melengkapi setiap ruangan.</p>
            <div class="mt-12">
                <a href="#"
                    class="bg-primary border border-primary text-white px-8 py-3 font-medium
                                rounded-md hover:bg-transparent hover:text-primary">Belanja
                    Sekarang</a>
            </div>
        </div>
    </div>
    <!-- ./banner -->

    <!-- features -->
    <div class="container py-16">
        <div class="w-10/12 grid grid-cols-1 md:grid-cols-3 gap-6 mx-auto justify-center">
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                <img src="/images/icons/delivery-van.svg" alt="Delivery" class="w-12 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Free Pemasangan</h4>
                    <p class="text-gray-500 text-sm">Dengan kurir Home-Texere</p>
                </div>
            </div>
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                <img src="/images/icons/money-back.svg" alt="Delivery" class="w-12 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Potongan Harga</h4>
                    <p class="text-gray-500 text-sm">Khusus untuk member!</p>
                </div>
            </div>
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                <img src="/images/icons/service-hours.svg" alt="Delivery" class="w-12 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">24/7 Support</h4>
                    <p class="text-gray-500 text-sm">Layanan Bantuan</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ./features -->

    <!-- categories -->
    <div class="container py-16">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">Kategori Furnitur</h2>
        <div class="grid grid-cols-3 gap-3">
            <div class="relative rounded-sm overflow-hidden group">
                <img src="/images/category/category-1.jpg" alt="category 1"
                    class="absolute inset-0 w-full h-full object-cover">
                <a href="/products/category/AC"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Air
                    Conditioner</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="/images/category/category-2.jpg" alt="category 1"
                    class="absolute inset-0 w-full h-full object-cover">
                <a href="/products/category/TV"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Television</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="/images/category/category-3.jpg" alt="category 1" class="w-full">
                <a href="/products/category/CUCI"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Mesin
                    Cuci
                </a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="/images/category/category-4.jpg" alt="category 1" class="w-full">
                <a href="/products/category/KW"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Kitchen
                    Ware</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="/images/category/category-5.jpg" alt="category 1" class="w-full">
                <a href="/products/category/KULKAS"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Kulkas</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="/images/category/category-6.jpg" alt="category 1" class="w-full">
                <a href="/products/category/BLENDER"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Blender</a>
            </div>
        </div>
    </div>
    <!-- ./categories -->

    <!-- new arrival -->
    <div class="container pb-16">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">top new arrival</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach ($products->sortByDesc('created_at')->take(4) as $product)
                <div class="bg-white shadow rounded overflow-hidden group">
                    <div class="relative">
                        <a href="products/show/{{ $product->id }}">
                            <img src="{{ $product->img[0] }}" alt="product 1" class="w-full h-48 object-cover">
                        </a>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="{{ '/products/show/' . $product->id }}">
                            <div class="h-20 overflow-hidden">
                                <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                    {{ $product->name }}
                                </h4>
                            </div>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-semibold">
                                Rp{{ number_format($product->price - ($product->price / 100) * $product->discount, 0, ',', '.') }}
                            </p>
                            @if ($product->discount != 0)
                                <p class="text-sm text-gray-400 line-through">
                                    Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                            @endif
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">Stock : {{ $product->stock }}</div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
                        to cart</a>
                </div>
            @endforeach
        </div>
    </div>
    <!-- ./new arrival -->

    <!-- ads -->
    <div class="container pb-16">
        <a href="#">
            <img src="/images/offer.jpg" alt="ads" class="w-full">
        </a>
    </div>
    <!-- ./ads -->

    <!-- product -->
    <div class="container pb-16">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">recomended for you</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach ($products->sortByDesc('created_at')->take(4) as $product)
                <div class="bg-white shadow rounded overflow-hidden group">
                    <div class="relative">
                        <a href="products/show/{{ $product->id }}">
                            <img src="{{ $product->img[0] }}" alt="product 1" class="w-full h-48 object-cover">
                        </a>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="{{ '/products/show/' . $product->id }}">
                            <div class="h-20 overflow-hidden">
                                <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                    {{ $product->name }}
                                </h4>
                            </div>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-semibold">
                                Rp{{ number_format($product->price - ($product->price / 100) * $product->discount, 0, ',', '.') }}
                            </p>
                            @if ($product->discount != 0)
                                <p class="text-sm text-gray-400 line-through">
                                    Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                            @endif
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">Stock : {{ $product->stock }}</div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add
                        to cart</a>
                </div>
            @endforeach
        </div>
    </div>
    <!-- ./product -->
@endsection
