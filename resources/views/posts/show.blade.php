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
                        <img src="{{ $post->image_url }}" alt="image" class="w-full" />
                    </div>
                    <div>
                        <span
                            class="inline-block px-4 py-1 mb-5 text-xs font-semibold leading-loose text-center text-white rounded bg-primary">
                            {{ $post->published_at }}
                        </span>
                        <h3>
                            <a href="{{ route('posts.show', $post->id) }}"
                                class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                {{ $post->title }}
                            </a>
                        </h3>
                        <p class="text-base text-body-color dark:text-dark-6">
                            {{ $post->content }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====== Blog Section End -->
</x-app-layout>
