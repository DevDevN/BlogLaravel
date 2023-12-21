<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- ====== Modal Section Start -->
                    <section>
                        <div class="container py-1 mx-auto flex justify-center">
                            <a href="{{ route('posts.create')}}"
                                class="px-6 py-3 text-base font-medium text-white rounded-full bg-primary">
                                Add New Post
                            </a>
                        </div>
                    </section>
                </div>

                <!-- ====== Modal Section End -->

            </div>
        </div>

    </div>
    </div>
</x-app-layout>
