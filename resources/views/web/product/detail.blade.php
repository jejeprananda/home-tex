@extends('app-web')

@section('content')
    {{-- {{dd($product->img[0])}} --}}
    <section class="py-8 bg-white md:py-16 dark:bg-gray-900 antialiased">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="grid lg:grid-cols-2 gap-8">
                <div class="max-w-md lg:max-w-lg mx-auto">
                    <div id="product-1-tab-content">
                        <div id="product-1-tab-content">
                            @for ($i = 0; $i < count($product->img); $i++)
                                <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-900"
                                    id="product-1-image-{{ $i }}" role="tabpanel"
                                    aria-labelledby="product-1-image-{{ $i }}-tab">
                                    <img class="w-full mx-auto dark:hidden" src="/{{ $product->img[$i] }}" alt="" />
                                </div>
                            @endfor
                        </div>
                        {{-- @foreach ($product->img as $img[])
                            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-900" id="product-1-image-1" role="tabpanel"
                                aria-labelledby="product-1-image-1-tab">
                                <img class="w-full mx-auto dark:hidden" src="/{{ $img }}" alt="" />
                            </div>
                        @endforeach --}}
                    </div>

                    <ul class="grid grid-cols-4 gap-4 mt-8" id="product-1-tab" data-tabs-toggle="#product-1-tab-content"
                        data-tabs-active-classes="border-gray-200 dark:border-gray-700"
                        data-tabs-inactive-classes="border-transparent hover:border-gray-200 dark:hover:dark:border-gray-700 dark:border-transparent"
                        role="tablist">
                        @for ($i = 0; $i < count($product->img); $i++)
                            <li class="me-2" role="presentation">
                                <button
                                    class="h-20 w-20 overflow-hidden border-2 rounded-lg sm:h-20 sm:w-20 md:h-24 md:w-24 p-2 cursor-pointer mx-auto"
                                    id="product-1-image-1-tab" data-tabs-target="#product-1-image-{{ $i }}"
                                    type="button" role="tab" aria-controls="product-1-image-{{ $i }}"
                                    aria-selected="false">
                                    <img class="object-contain w-full h-full dark:hidden" src="/{{ $product->img[$i] }}"
                                        alt="" />
                                    <img class="object-contain w-full h-full hidden dark:block"
                                        src="/{{ $product->img[$i] }}" alt="" />
                                </button>
                            </li>
                        @endfor
                    </ul>

                </div>

                <div class="mt-6 md:mt-0">

                    @if ($product->stock != 0)
                        <span
                            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                            In stock
                        @else
                            <span
                                class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                Out of stock
                    @endif
                    </span>
                    <p class="mt-4 text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                        {{ $product->name }}
                    </p>
                    <div class="mt-4 xl:items-center xl:gap-4 xl:flex">
                        <div class="flex items-center gap-2">
                            <a href="#"
                                class="text-sm font-medium leading-none text-gray-900 underline hover:no-underline dark:text-white">
                                345 Reviews
                            </a>
                        </div>
                        <div class="flex items-center gap-1 mt-4 xl:mt-0">
                            <svg class="w-5 h-5 text-primary-700 dark:text-primary-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
                            </svg>
                            <p class="text-sm font-medium text-primary-700 dark:text-primary-500">
                                @auth
                                    pengiriman ke {{ auth()->user()->address }}
                                @else
                                    Login untuk melihat alamat pengiriman
                                @endauth
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center justify-between gap-4 mt-6 sm:mt-8">
                        <div class="flex justify-between gap-1">>
                            <p class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white">
                                Rp{{ number_format($product->price - ($product->price / 100) * $product->discount, 0, ',', '.') }}
                            </p>

                            @if ($product->discount != 0)
                                <p class="text-sm text-red-400 line-through">
                                    Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="flex items-center justify-between mt-6 sm:gap-4 sm:flex sm:items-center sm:mt-8">
                        <div class="sm:gap-4 sm:items-center sm:flex">
                            @auth
                                <a onclick="swal()" title=""
                                    class="text-white mt-4 sm:mt-0 bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 flex items-center justify-center"
                                    role="button">
                                @else
                                    <a onclick="swal()" title=""
                                        class="text-white mt-4 sm:mt-0 bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 flex items-center justify-center"
                                        role="button">
                                    @endauth
                                    <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                    </svg>

                                    Add to cart
                                </a>
                        </div>

                    </div>
                    <div class="sm:col-span-2 mt-4">
                        <p class="text-base font-medium text-gray-900 dark:text-white">
                            Description
                        </p>
                        <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />
                        <p class="mb-6 text-gray-500 dark:text-gray-400">
                            {{ $product->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
