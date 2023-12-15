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
                    <div class="flex flex-wrap justify-center -mx-4">
                        <div class="w-full px-4">
                            <div class="mx-auto mb-[30px] max-w-[510px] text-center lg:mb-10">
                                <span class="block mb-2 text-lg font-semibold text-primary">
                                    Our Blogs
                                </span>
                                <h2
                                    class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px] dark:text-white">
                                    Our Recent News
                                </h2>
                                <p class="text-base text-body-color dark:text-white">
                                    There are many variations of passages of Lorem Ipsum available
                                    but the majority have suffered alteration in some form.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- ====== Modal Section Start -->
                    <section x-data="{modalOpen: false}">
                        <div class="container py-10 mx-auto flex justify-center">
                            <button @click="modalOpen = true"
                                class="px-6 py-3 text-base font-medium text-white rounded-full bg-primary">
                                Add New Post
                            </button>
                        </div>
                        <div x-show="modalOpen" x-transition
                            class="fixed top-0 left-0 flex items-center justify-center w-full h-full min-h-screen px-4 py-5 bg-dark/90">


                            <div @click.outside="modalOpen = false"
                                class="w-full max-w-[800px] rounded-[20px] bg-white dark:bg-dark-2 py-12 px-8 text-center md:py-[60px] md:px-[70px]">
                                <h3 class="pb-[18px] text-xl font-semibold text-dark dark:text-white sm:text-2xl">
                                    Create you post
                                </h3>
                                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-6">
                                        <label class="mb-[10px] block text-base font-medium text-dark dark:text-white">
                                        </label>
                                        <div class="relative">
                                            <input type="text" placeholder="Devid Jhon" name="title" required
                                                class="w-full bg-transparent rounded-md border border-stroke dark:border-dark-3 py-[10px] pr-3 pl-12 text-dark-6 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2" />
                                            <span class="absolute top-1/2 left-4 -translate-y-1/2">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.8">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M3.72039 12.8864C4.50179 12.105 5.5616 11.666 6.66667 11.666H13.3333C14.4384 11.666 15.4982 12.105 16.2796 12.8864C17.061 13.6678 17.5 14.7276 17.5 15.8327V17.4993C17.5 17.9596 17.1269 18.3327 16.6667 18.3327C16.2064 18.3327 15.8333 17.9596 15.8333 17.4993V15.8327C15.8333 15.1696 15.5699 14.5338 15.1011 14.0649C14.6323 13.5961 13.9964 13.3327 13.3333 13.3327H6.66667C6.00363 13.3327 5.36774 13.5961 4.8989 14.0649C4.43006 14.5338 4.16667 15.1696 4.16667 15.8327V17.4993C4.16667 17.9596 3.79357 18.3327 3.33333 18.3327C2.8731 18.3327 2.5 17.9596 2.5 17.4993V15.8327C2.5 14.7276 2.93899 13.6678 3.72039 12.8864Z"
                                                            fill="#9CA3AF" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M10.0007 3.33268C8.61994 3.33268 7.50065 4.45197 7.50065 5.83268C7.50065 7.21339 8.61994 8.33268 10.0007 8.33268C11.3814 8.33268 12.5006 7.21339 12.5006 5.83268C12.5006 4.45197 11.3814 3.33268 10.0007 3.33268ZM5.83398 5.83268C5.83398 3.5315 7.69946 1.66602 10.0007 1.66602C12.3018 1.66602 14.1673 3.5315 14.1673 5.83268C14.1673 8.13387 12.3018 9.99935 10.0007 9.99935C7.69946 9.99935 5.83398 8.13387 5.83398 5.83268Z"
                                                            fill="#9CA3AF" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="mx-auto mb-2 inline-block h-1 w-[180px] rounded bg-primary"></span>
                                    <p class="mb-10 text-base leading-relaxed text-body-color dark:text-dark-6">
                                    <div class="mb-12">
                                        <div class="px-4 md:w-1/2 lg:w-1/3">
                                            <div class="mb-12">
                                                <label for="Content"
                                                    class="mb-[10px] block text-base font-medium text-dark dark:text-white">
                                                </label>
                                                <textarea rows="5" placeholder="Content" name="content"
                                                    class="w-[600px] bg-transparent rounded-md border border-stroke dark:border-dark-3 p-5 text-dark-6 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    </p>
                                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                                        <div class="mb-12">
                                            <label
                                                class="mb-[10px] block text-base font-medium text-dark dark:text-white">
                                                Attachments
                                            </label>
                                            <div class="relative">
                                                <label for="file"
                                                    class="flex min-h-[175px] w-full cursor-pointer items-center justify-center rounded-md border border-dashed border-primary p-6">
                                                    <div>
                                                        <input type="file" name="file" id="file" class="sr-only">
                                                        <span
                                                            class="mx-auto mb-3 flex h-[50px] w-[50px] items-center justify-center rounded-full border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M2.5013 11.666C2.96154 11.666 3.33464 12.0391 3.33464 12.4993V15.8327C3.33464 16.0537 3.42243 16.2657 3.57871 16.4219C3.73499 16.5782 3.94695 16.666 4.16797 16.666H15.8346C16.0556 16.666 16.2676 16.5782 16.4239 16.4219C16.5802 16.2657 16.668 16.0537 16.668 15.8327V12.4993C16.668 12.0391 17.0411 11.666 17.5013 11.666C17.9615 11.666 18.3346 12.0391 18.3346 12.4993V15.8327C18.3346 16.4957 18.0712 17.1316 17.6024 17.6004C17.1336 18.0693 16.4977 18.3327 15.8346 18.3327H4.16797C3.50493 18.3327 2.86904 18.0693 2.4002 17.6004C1.93136 17.1316 1.66797 16.4957 1.66797 15.8327V12.4993C1.66797 12.0391 2.04106 11.666 2.5013 11.666Z"
                                                                    fill="#3056D3"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M9.41074 1.91009C9.73618 1.58466 10.2638 1.58466 10.5893 1.91009L14.7559 6.07676C15.0814 6.4022 15.0814 6.92984 14.7559 7.25527C14.4305 7.58071 13.9028 7.58071 13.5774 7.25527L10 3.67786L6.42259 7.25527C6.09715 7.58071 5.56951 7.58071 5.24408 7.25527C4.91864 6.92984 4.91864 6.4022 5.24408 6.07676L9.41074 1.91009Z"
                                                                    fill="#3056D3"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M10.0013 1.66602C10.4615 1.66602 10.8346 2.03911 10.8346 2.49935V12.4994C10.8346 12.9596 10.4615 13.3327 10.0013 13.3327C9.54106 13.3327 9.16797 12.9596 9.16797 12.4994V2.49935C9.16797 2.03911 9.54106 1.66602 10.0013 1.66602Z"
                                                                    fill="#3056D3"></path>
                                                            </svg>
                                                        </span>
                                                        <span class="text-base text-body-color dark:text-dark-6">
                                                            Drag &amp; drop or
                                                            <span class="text-primary underline"> browse </span>
                                                        </span>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="w-1/2 px-3">
                                            <a @click="modalOpen = false"
                                                class="block w-full p-3 text-base font-medium text-center transition border rounded-md border-stroke text-dark dark:text-white hover:border-red-600 hover:bg-red-600 hover:text-white">
                                                Cancel
                                            </a>
                                        </div>
                                        <div class="w-1/2 px-3">
                                            <button type="submit"
                                                class="block w-full p-3 text-base font-medium text-center text-white transition border rounded-md border-primary bg-primary hover:bg-blue-dark">
                                                Create Post
                                            </button>
                                        </div>
                                </form>
                            </div>

                        </div>
                </div>
                </section>
                <!-- ====== Modal Section End -->


            </div>
        </div>

    </div>
    </div>
</x-app-layout>
