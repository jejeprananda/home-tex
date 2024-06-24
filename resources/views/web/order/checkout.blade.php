@extends('app-web')

@section('content')
    @php
        $totalPrice = $carts->sum(function ($cart) use ($products) {
            return $products->firstWhere('id', $cart->product_id)->price;
        });

        $totalDiscount = $carts->sum(function ($cart) use ($products) {
            $product = $products->firstWhere('id', $cart->product_id);
            return $product->price * ($product->discount / 100);
        });

        $productsID = $carts->map(function ($cart) use ($products) {
            return $products->firstWhere('id', $cart->product_id)->id;
        })
    @endphp
    <div class="w-full justify-center item-center">
        <section class="bg-white max-w-screen py-8 antialiased dark:bg-gray-900 md:py-16">
            <div action="#" class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Checkout</h2>

                <div class="flex justify-center item-center mt-6 sm:mt-8 lg:flex lg:items-start gap-4 lg:gap-6">
                    <div class="w-96 space-y-4 sm:space-y-6 lg:max-w-sm xl:max-w-lg">
                        <div
                            class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                            <p class="text-xl font-semibold text-gray-900 dark:text-white">Alamat Pengiriman</p>

                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <div>
                                    <label for="address"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Alamat
                                        Pengiriman
                                    </label>
                                    <input type="text" id="address" name="address" disabled
                                        value="{{ auth()->user()->address }}"
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                        placeholder="Enter your first name" required />
                                </div>

                                <div>
                                    <label for="name"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                                        Nama Penerima </label>
                                    <input type="text" id="name" disabled value="{{ auth()->user()->name }}"
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                        placeholder="Enter your last name" required />
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="phone"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Phone Number*
                                    </label>
                                    <div class="flex items-center">
                                        <div class="relative w-full">
                                            <input type="text" id="phone" disabled
                                                value="{{ auth()->user()->phone_number }}"
                                                class="z-20 block w-full rounded-e-lg border border-s-0 border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:border-s-gray-700  dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500"
                                                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                            <p class="text-xl font-semibold text-gray-900 dark:text-white">Kurir Pengiriman</p>

                            <div class="space-y-4">

                                <div class="flex items-center">
                                    <input id="another-address" type="radio" value="jne" name="delivery-address"
                                        class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                                    <label for="another-address"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"> JNE </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="another-address" type="radio" value="tiki" name="delivery-address"
                                        class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                                    <label for="another-address"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"> TIKI </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="another-address" type="radio" value="home-texere" name="delivery-address"
                                        checked
                                        class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />

                                    <label for="another-address"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Home-Texere
                                    </label>
                                </div>

                                <p id="helper-radio-text" class="text-xs font-normal text-gray-500 dark:text-gray-300">
                                    (Gratis biaya
                                    pemasangan dengan dengan menggunakan kurir Home-Texere)</p>


                            </div>
                        </div>
                    </div>

                    <div class="mt-6 min-w-0 flex-1 space-y-6 sm:mt-8 lg:mt-0">
                        <div class="space-y-4 sm:space-y-6">
                            @foreach ($carts as $cart)
                                <div
                                    class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                                    <div
                                        class="space-y-4 sm:space-y-6 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                        <a href="#" class="aspect-square w-20 shrink-0 block">
                                            <img class="h-full w-full dark:hidden"
                                                src="/{{ $products->firstWhere('id', $cart->product_id)->img[0] }}"
                                                alt="imac image" />
                                        </a>

                                        <div class="w-full min-w-0 flex-1 space-y-4 md:max-w-md ">
                                            <a href="#"
                                                class="text-base font-medium text-gray-900 dark:text-white hover:underline">{{ $products->firstWhere('id', $cart->product_id)->name }}</a>
                                        </div>

                                        <div class="flex items-center justify-between gap-4 md:justify-end ">

                                            <div class="text-right md:w-32 ">
                                                <p class="text-base font-bold text-gray-900 dark:text-white">
                                                    Rp{{ number_format($products->firstWhere('id', $cart->product_id)->price, 0, ',', '.') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div
                            class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                            <p class="text-xl font-semibold text-gray-900 dark:text-white">Order summary</p>

                            <div class="space-y-4">

                                <div class="space-y-2">
                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Kurir Pengiriman
                                        </dt>
                                        <dd id="selected-courier"
                                            class="text-base font-medium text-gray-900 dark:text-white">Home-Texere</dd>
                                    </dl>
                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Total Harga Awal
                                        </dt>
                                        <dd class="text-base font-medium text-gray-900 dark:text-white">
                                            Rp{{ number_format($totalPrice, 0, ',', '.') }}</dd>
                                    </dl>

                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Savings</dt>
                                        <dd class="text-base font-medium text-green-500">
                                            Rp{{ number_format($totalDiscount, 0, ',', '.') }}</dd>
                                    </dl>
                                    @if (auth()->user()->role === '2')
                                        <dl class="flex items-center justify-between gap-4">
                                            <dt class="text-base font-bold text-gray-500 dark:text-gray-400">Discount
                                                Member</dt>
                                            <dd class="text-base font-medium text-green-500">
                                                Rp{{ number_format($totalPrice * 0.05, 0, ',', '.') }}</dd>
                                        </dl>
                                    @endif

                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Biaya Pengiriman
                                        </dt>
                                        <dd id="shipping-cost" class="text-base font-medium text-gray-900 dark:text-white">
                                            Rp.100.000</dd>
                                    </dl>
                                </div>

                                <dl
                                    class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                                    <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                    @if (auth()->user()->role = '2')
                                        <dd class="text-base font-bold text-gray-900 dark:text-white">
                                            Rp{{ number_format($totalPrice - $totalDiscount - $totalPrice * 0.05, 0, ',', '.') }}
                                        </dd>
                                    @else
                                        <dd class="text-base font-bold text-gray-900 dark:text-white">
                                            Rp{{ number_format($totalPrice - $totalDiscount, 0, ',', '.') }}</dd>
                                    @endif

                                </dl>
                            </div>
                        </div>

                        <button data-modal-target="paymentModal" data-modal-toggle="paymentModal"
                            class="mb-2 me-2 flex w-full items-center justify-center rounded-lg bg-red-700 text-white px-5 py-2.5 text-sm font-medium border hover:bg-red-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-primary-300">Continue
                            to payment</button>
                        @include('web.layout.paymentModal')

                        <div class="flex items-center justify-center gap-2">
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> or </span>
                            <a href="/products" title=""
                                class="inline-flex items-center gap-1 text-sm font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">
                                Return to Shopping
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>

    {{-- JS --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const courierRadios = document.querySelectorAll('input[name="delivery-address"]');
            const selectedCourierElement = document.getElementById('selected-courier');
            const shippingCostElement = document.getElementById('shipping-cost');

            courierRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    selectedCourierElement.textContent = this.nextElementSibling.textContent.trim();
                    if (this.value === 'home-texere') {
                        shippingCostElement.textContent =
                            "Rp{{ number_format(100000, 0, ',', '.') }}";
                    } else {
                        shippingCostElement.textContent =
                            "Rp{{ number_format(150000, 0, ',', '.') }}";
                    }
                });
            });
        });
    </script>
    <script>
        document.querySelectorAll('input[name="delivery-address"]').forEach((elem) => {
            elem.addEventListener("change", function(event) {
                document.getElementById('courier').value = event.target.value;
            });
        });
    </script>
@endsection
