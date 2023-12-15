<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <!-- ====== Blog Section Start -->
    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 bg-dark dark:bg-dark">
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">
                @foreach($posts as $post)
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="w-full mb-10">
                            <div class="mb-8 overflow-hidden rounded">
                                <img src="{{ $post->image_url }}" alt="image" class="w-full" />
                            </div>
                            <div>
                                <span class="inline-block px-4 py-1 mb-5 text-xs font-semibold leading-loose text-center text-white rounded bg-primary">
                                    {{ $post->published_at}}
                                </span>
                                <h3>
                                    <a href="{{ route('posts.show', $post) }}" class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                <p class="text-base text-body-color dark:text-dark-6">
                                    {{ $post->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ====== Blog Section End -->
</x-app-layout>
