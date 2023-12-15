<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Blog</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ url('/dashboard') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <!-- ====== About Section Start -->
        <section class="overflow-hidden lg:pt-[120px] lg:pb-[90px] dark:bg-dark">
            <div class="container mx-auto">
                <div class="flex flex-wrap items-center justify-between -mx-4">
                    <div class="w-full px-4 lg:w-6/12">
                        <div class="flex items-center -mx-3 sm:-mx-4">
                            <div class="w-full px-3 sm:px-4 xl:w-1/2">
                                <div class="py-3 sm:py-4">
                                    <img src="https://cdn.tailgrids.com/2.0/image/marketing/images/about/about-01/image-1.jpg"
                                        alt="" class="w-full rounded-2xl" />
                                </div>
                                <div class="py-3 sm:py-4">
                                    <img src="https://cdn.tailgrids.com/2.0/image/marketing/images/about/about-01/image-2.jpg"
                                        alt="" class="w-full rounded-2xl" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:px-4 xl:w-1/2">
                                <div class="relative z-10 my-4">
                                    <img src="https://cdn.tailgrids.com/2.0/image/marketing/images/about/about-01/image-3.jpg"
                                        alt="" class="w-full rounded-2xl" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                        <div class="mt-10 lg:mt-0">
                            <span class="block mb-4 text-lg font-semibold dark:text-white">
                                Why Choose Us
                            </span>
                            <h2 class="mb-5 text-3xl font-bold text-dark dark:text-white sm:text-[40px]/[48px]">
                                Any publication, on any topic, on our website:)
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== About Section End -->


    </div>
</body>

</html>
