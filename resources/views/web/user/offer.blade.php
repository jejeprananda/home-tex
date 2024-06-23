@extends('app-web')

@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <!-- Pricing Card -->
            <div class="bg-white rounded-lg shadow lg:grid lg:grid-cols-3 dark:bg-gray-800">
                <div class="col-span-2 p-6 lg:p-8">
                    <h2 class="mb-1 text-2xl font-bold text-gray-900 dark:text-white">Gabung menjadi member setia Home-Texere
                    </h2>
                    <p class="text-lg font-light text-gray-500 dark:text-gray-400">Dapatkan Benefit dan keuntungannya</p>
                    <div class="grid gap-4 mt-4 lg:mt-6 sm:grid-cols-2 md:grid-cols-3">
                        <!-- List -->
                        <ul role="list" class="space-y-4 dark:text-white">
                            <li class="flex space-x-2.5 w-full">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="leading-tight text-gray-500 dark:text-gray-400">Diskon min.5% setiap
                                    pembelian</span>
                            </li>
                            <li class="flex space-x-2.5">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="leading-tight text-gray-500 dark:text-gray-400">24/7 Chat Support</span>
                            </li>
                            <li class="flex space-x-2.5">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="leading-tight text-gray-500 dark:text-gray-400">Garansi Uang Kembali
                                    100%</span>
                            </li>
                            <li class="flex space-x-2.5">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="leading-tight text-gray-500 dark:text-gray-400">Garansi Maksimal 2 Tahun</span>
                            </li>
                            <li class="flex space-x-2.5">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="leading-tight text-gray-500 dark:text-gray-400">Website Builder</span>
                            </li>
                        </ul>
                        <!-- List -->
                        <ul role="list" class="space-y-4 dark:text-white hidden sm:block">
                            <li class="flex space-x-2.5">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="leading-tight text-gray-500 dark:text-gray-400">Pengiriman Prioritas dengan
                                    kurir Home-Texere</span>
                            </li>
                            <li class="flex space-x-2.5">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="leading-tight text-gray-500 dark:text-gray-400">Marketing CRM</span>
                            </li>
                            <li class="flex space-x-2.5">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="leading-tight text-gray-500 dark:text-gray-400">Custom Templates</span>
                            </li>
                            <li class="flex space-x-2.5">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="leading-tight text-gray-500 dark:text-gray-400">Creative Assistant</span>
                            </li>
                            <li class="flex space-x-2.5">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="leading-tight text-gray-500 dark:text-gray-400">Multivariate Testing</span>
                            </li>
                        </ul>
                        <!-- List -->
                        <ul role="list" class="space-y-4 dark:text-white hidden lg:block">
                            <li class="flex space-x-2.5">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="leading-tight text-gray-500 dark:text-gray-400">Advanced Tools</span>
                            </li>
                            <li class="flex space-x-2.5">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="leading-tight text-gray-500 dark:text-gray-400">Multivariate Testing</span>
                            </li>
                            <li class="flex space-x-2.5">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="leading-tight text-gray-500 dark:text-gray-400">Reporting</span>
                            </li>
                            <li class="flex space-x-2.5">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="leading-tight text-gray-500 dark:text-gray-400">Custom Templates</span>
                            </li>
                            <li class="flex space-x-2.5">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="leading-tight text-gray-500 dark:text-gray-400">Dynamic Content</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex p-6 text-center bg-gray-50 lg:p-8 dark:bg-gray-700">
                    <div class="self-center w-full">
                        <div class="text-5xl font-extrabold text-gray-900 dark:text-white">Rp75.000</div>
                        <div class="mt-1 mb-4 text-gray-500 text-light dark:text-gray-400">per bulan</div>
                        @auth
                            @if (auth()->user()->role === '0')
                                <a onclick="swalMemberAdmin()"
                                    class="flex justify-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-bue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Jadi Member Sekarang</a>
                            @elseif(auth()->user()->role === '2')
                                <a onclick="swalMemberRegistered()"
                                    class="flex justify-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-bue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Jadi Member Sekarang</a>
                            @else
                                <a class="cursor-pointer flex justify-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-bue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                    data-modal-target="paymentModal" data-modal-toggle="paymentModal">Jadi Member
                                    Sekarang</a>
                            @endif
                        @else
                            <a onclick="swalMember()"
                                class="flex justify-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-bue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Jadi
                                Member Sekarang</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('web.layout.memberModal')

    <script>
        function swalMember() {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Anda harus Login untuk menjadi member!",
                footer: '<a href="/login">Login</a>',
                showCloseButton: true,
                showConfirmButton: false,
            });
        }

        function swalMemberRegistered() {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Anda sudah menjadi member!",
                showCloseButton: true,
                showConfirmButton: false,
            });
        }

        function swalMemberAdmin() {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Admin tidak dapat menjadi member!",
                showCloseButton: true,
                showConfirmButton: false,
            });
        }
    </script>
@endsection
