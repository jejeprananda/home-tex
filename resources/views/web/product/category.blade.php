@extends('app-web')

@section('content')
    <!-- breadcrumb -->
    <div class="container py-4 flex items-center gap-3">
    </div>
    <!-- ./breadcrumb -->

    <!-- shop wrapper -->
    <div class="container grid md:grid-cols-4 grid-cols-2 gap-6 pt-4 pb-16 items-start">
        <!-- sidebar -->
        <!-- drawer init and toggle -->
        <div class="text-center md:hidden">
            <button
                class="text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 block md:hidden"
                type="button" data-drawer-target="drawer-example" data-drawer-show="drawer-example"
                aria-controls="drawer-example">
                <ion-icon name="grid-outline"></ion-icon>
            </button>
        </div>

        <!-- drawer component -->
        <div id="drawer-example"
            class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800"
            tabindex="-1" aria-labelledby="drawer-label">
            <h5 id="drawer-label"
                class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg
                    class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>Info</h5>
            <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
        </div>

        <!-- ./sidebar -->
        <div class="col-span-1 bg-white px-4 pb-6 shadow rounded overflow-hiddenb hidden md:block">
            <div class="divide-y divide-gray-200 space-y-5">
                <div>
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Categories</h3>
                    <div class="space-y-2">
                        <a href="/products/category/AC" class="cursor-pointer">
                            <div class="flex items-center mb-2">
                                <label for="cat-1" class="text-gray-600 ml-3 cursor-pointer">AC</label>
                            </div>
                        </a>
                        <a href="/products/category/TV" class="cursor-pointer">
                            <div class="flex items-center mb-2">

                                <label for="cat-2" class="text-gray-600 ml-3 cursor-pointer">TV</label>

                            </div>
                        </a>
                        <a href="/products/category/CUCI" class="cursor-pointer">
                            <div class="flex items-center mb-2">
                                <label for="cat-3" class="text-gray-600 ml-3 cursor-pointer">Mesin Cuci</label>
                            </div>
                        </a>
                        <a href="/products/category/BLENDER" class="cursor-pointer">
                            <div class="flex items-center mb-2">
                                <label for="cat-4" class="text-gray-600 ml-3 cursor-pointer">Blender</label>
                            </div>
                        </a>
                        <a href="/products/category/KW">
                            <div class="flex items-center mb-2">
                                <label for="cat-4" class="text-gray-600 ml-3 cursor-pointer">Kitchen Ware</label>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- products -->
        <div class="col-span-3">
            <div class="flex items-center mb-4">
                <select name="sort" id="sort"
                    class="w-44 text-sm text-gray-600 py-3 px-4 border-gray-300 shadow-sm rounded focus:ring-primary focus:border-primary">
                    <option value="">Default sorting</option>
                    <option value="price-low-to-high">Price low to high</option>
                    <option value="price-high-to-low">Price high to low</option>
                    <option value="latest">Latest product</option>
                </select>
            </div>

            <div class="grid md:grid-cols-3 grid-cols-2 gap-6">
                @foreach ($products as $product)
                    <div class="bg-white shadow rounded overflow-hidden group" key="{{ $product->id }}">
                        <div class="relative">
                            <a href="{{ '/products/show/' . $product->id }}">
                                <img src="/{{ $product->img[0] }}" alt="product 1" class="w-full">
                            </a>
                        </div>
                        <div class="pt-4 pb-3 px-4">
                            <a href="#">
                                <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                    {{ $product->name }}
                                </h4>
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

        <!-- ./products -->
    </div>
    <!-- ./shop wrapper -->
@endsection
