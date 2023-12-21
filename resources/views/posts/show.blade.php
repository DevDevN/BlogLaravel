<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Show') }}
        </h2>
    </x-slot>

    <!-- ====== Blog Section Start -->
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center -mx-4 pt-10">
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div class="w-full mb-10">
                    <div class="mb-8 overflow-hidden rounded">
                        <img src="{{ asset("/storage/" . $path) }}" alt="image" class="w-full" />
                    </div>
                    <div>
                        <span
                            class="inline-block px-4 py-1 mb-5 text-xs font-semibold leading-loose text-center text-white rounded bg-primary">
                            {{ $post->published_at }}
                        </span>
                        <h3>
                            <div class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                {{ $post->title }}
                            </div>
                        </h3>
                        <p class="text-base text-body-color dark:text-dark-6">
                            {{ $post->content }}
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-1/2 px-3">
                        <a href="{{ route('posts.destroy' , $post)}}"
                            class="block w-full p-3 text-base font-medium text-center transition border rounded-md border-stroke text-dark dark:text-white hover:border-red-600 hover:bg-red-600 hover:text-white">
                            Delete
                        </a>
                    </div>
                    <div class="w-1/2 px-3">
                        <a href="{{ route('posts.edit' , $post) }}"
                            class="block w-full p-3 text-base font-medium text-center text-white transition border rounded-md border-primary bg-primary hover:bg-blue-dark">
                            Update
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====== Blog Section End -->
</x-app-layout>
