@extends('app-web')

@section('content')
    <!-- breadcrumb -->
    <div class="container py-4 flex items-center gap-3">
        <a href="../index.html" class="text-primary text-base">
            <i class="fa-solid fa-house"></i>
        </a>
        <span class="text-sm text-gray-400">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
        <p class="text-gray-600 font-medium">Profile</p>
    </div>
    <!-- ./breadcrumb -->

    <!-- wrapper -->
    <div class="container grid grid-cols-12 items-start gap-6 pt-4 pb-16">

        <!-- sidebar -->
        <div class="col-span-3">
            <div class="px-4 py-3 shadow flex items-center gap-4">
                <div class="flex-shrink-0">
                    <img src="/images/avatar.png" alt="profile"
                        class="rounded-full w-14 h-14 border border-gray-200 p-1 object-cover">
                </div>
                <div class="flex-grow">
                    <p class="text-gray-600">Profile</p>
                    <h4 class="text-gray-800 font-medium">{{ auth()->user()->name }}</h4>
                </div>
            </div>

            <div class="mt-6 bg-white shadow rounded p-4 divide-y divide-gray-200 space-y-4 text-gray-600">
                <div class="space-y-1 pl-8">
                    <a href="/users/{{ auth()->user()->id }}"
                        class="relative hover:text-primary block capitalize transition {{ Request::is('users/' . auth()->user()->id) ? 'text-red-700 font-bold' : '' }}">
                        Profile information
                    </a>
                </div>

                <div class="space-y-1 pl-8 pt-4">
                    <a href="#" class="relative hover:text-primary block font-medium capitalize transition">
                        <span class="absolute -left-8 top-0 text-base">
                            <i class="fa-solid fa-box-archive"></i>
                        </span>
                        order history
                    </a>
                    <a href="#" class="relative hover:text-primary block capitalize transition">
                        returns
                    </a>
                </div>

                <div class="space-y-1 pl-8 pt-4">
                    <a href="#" class="relative hover:text-primary block font-medium capitalize transition">
                        <span class="absolute -left-8 top-0 text-base">
                            <i class="fa-regular fa-credit-card"></i>
                        </span>
                        Payment methods
                    </a>
                    <a href="#" class="relative hover:text-primary block capitalize transition">
                        voucher
                    </a>
                </div>
            </div>
        </div>
        <!-- ./sidebar -->

        <!-- info -->
            <div
                class="col-span-9 grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800">
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
                    <figcaption class="flex items-center justify-center ">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>{{auth()->user()->name}}</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400 ">{{auth()->user()->phone_number}}</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400 ">{{auth()->user()->address}}</div>
                            <hr>
                            <p>{{auth()->user()->email}}</p>
                        </div>


                    </figcaption>

                </figure>
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project
                        </h3>
                        <p class="my-4">Designing with Figma components that can be easily translated to the utility
                            classes of Tailwind CSS is a huge timesaver!"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center ">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Roberta Casas</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                        </div>
                    </figcaption>
                </figure>
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-es-lg md:border-b-0 md:border-e dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mindblowing workflow</h3>
                        <p class="my-4">Aesthetically, the well designed components are beautiful and will undoubtedly
                            level up your next application."</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center ">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Jese Leos</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Software Engineer at Facebook</div>
                        </div>
                    </figcaption>
                </figure>
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white border-gray-200 rounded-b-lg md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
                        <p class="my-4">You have many examples that can be used to create a fast prototype for your team."
                        </p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center ">
                        <img class="rounded-full w-9 h-9"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                            <div>Joseph McFall</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">CTO at Google</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        <!-- ./info -->

    </div>
    <!-- ./wrapper -->
@endsection
