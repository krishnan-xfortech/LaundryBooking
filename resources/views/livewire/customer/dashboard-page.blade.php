<div>
    <div class="flex flex-col w-full h-[100vh] items-center bg-slate-200 gap-2">
        <div class="flex w-[99%] h-10 justify-between items-center bg-white rounded-lg mt-2">
            <div class="flex h-10 gap-2 items-center">
                <img src="{{ asset('assets/logo-ct.png') }}" class="w-7 h-7 flex items-center ml-2">
                <span class="text-md font-semibold ">Laundry Booking</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                    class="bi bi-geo-alt ml-5" viewBox="0 0 16 16">
                    <path
                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
                <span class="text-sm">City 1</span>
            </div>
            <div class="gap-2 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
                {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg> --}}
                <button class="w-20 h-10">Login</button>
            </div>
        </div>
        <div class="flex w-full h-[40%] bg-white">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/banner.png') }}"
                            class="absolute block w-full h-[40vh] object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://cdn.pixabay.com/photo/2017/05/06/10/50/concept-2289498_1280.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/docs/images/carousel/carousel-3.svg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/docs/images/carousel/carousel-4.svg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/docs/images/carousel/carousel-5.svg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>

        <div
            class="flex flex-col w-[99%] h-[250px] py-10 justify-center items-center px-10 bg-white rounded-lg relative">
            <div class="flex w-full h-20 justify-center items-center">
                <span class="text-xl font-semibold">Our Services</span>
            </div>
            <div class="flex w-full h-40 justify-center items-center gap-20 mt-5">
                <div
                    class="w-40 h-40 rounded-md bg-slate-300 relative drop-shadow-lg hover:scale-105 transition ease-in-out hover:cursor-pointer">
                    <img src="https://img.freepik.com/free-photo/front-view-beautiful-woman-doing-indoor-activity_23-2148813099.jpg?w=996&t=st=1688984220~exp=1688984820~hmac=c8c12128e3e56a4f47a56da1e7dd9297ab7ae0d466309b100553ea2f1316d6de"
                        class="object-cover rounded-t-md">
                    <span class="font-normal text-lg text-center w-full h-10 absolute bottom-0">Iron</span>
                </div>
                <div
                    class="w-40 h-40 rounded-md bg-slate-300 relative drop-shadow-lg hover:scale-105 transition ease-in-out hover:cursor-pointer">
                    <img src="https://img.freepik.com/free-photo/washing-machine-minimal-laundry-room-interior-design_53876-145501.jpg?w=996&t=st=1688986044~exp=1688986644~hmac=d12850fdd16d76b9dca16033af1cf89167e85baa08d9eabe53bd5e6ac15e61b7"
                        class="object-cover rounded-t-md">
                    <span class="font-normal text-lg text-center w-full h-10 absolute bottom-0">Wash</span>
                </div>
                <div
                    class="w-40 h-40 rounded-md bg-slate-300 relative drop-shadow-lg hover:scale-105 transition ease-in-out hover:cursor-pointer">
                    <img src="https://img.freepik.com/free-photo/still-life-say-no-fast-fashion_23-2149669583.jpg?w=996&t=st=1688986368~exp=1688986968~hmac=9cc0c5d6e5e77867fac86225de46f793869274334d55d377e3e929f1c03fbf24"
                        class="object-cover rounded-t-md">
                    <span class="font-normal text-lg text-center w-full h-10 absolute bottom-0">Wash & Fold</span>
                </div>
                <div
                    class="w-40 h-40 rounded-md bg-slate-300 relative drop-shadow-lg hover:scale-105 transition ease-in-out hover:cursor-pointer">
                    <img src="https://img.freepik.com/free-photo/front-view-beautiful-woman-doing-indoor-activity_23-2148813099.jpg?w=996&t=st=1688984220~exp=1688984820~hmac=c8c12128e3e56a4f47a56da1e7dd9297ab7ae0d466309b100553ea2f1316d6de"
                        class="object-cover rounded-t-md">
                    <span class="font-normal text-lg text-center w-full h-10 absolute bottom-0">Wash & Iron</span>
                </div>
            </div>
        </div>

        <div class="flex w-full h-60 py-10 justify-center items-center bg-gradient-to-r from-rose-100 to-teal-100">
            <figure class="w-full mx-auto text-center bg-gradient-to-r from-rose-100 to-teal-100">
                <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                    <path
                        d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                </svg>
                <blockquote>
                    <p class="text-xl italic font-medium">"Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Quibusdam, eaque reprehenderit nemo fugiat nesciunt magnam aliquam
                        accusantium"
                    </p>
                </blockquote>
                <figcaption class="flex items-center justify-center mt-6 space-x-3">
                    <img class="w-6 h-6 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                        alt="profile picture">
                    <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                        <cite class="pr-3 font-medium text-gray-900">Micheal Gough</cite>
                        <cite class="pl-3 text-sm text-gray-700">CEO at Google</cite>
                    </div>
                </figcaption>
            </figure>
        </div>

        <div class="flex w-full h-10 bg-slate-100">

        </div>

        <footer class="rounded-lg mt-3 w-full h-40">
            <div class="w-full p-4">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a href="#" class="flex items-center mb-4 sm:mb-0">
                        <img src="{{ asset('assets/logo-ct.png') }}" class="h-8 mr-3" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap">Laundry Booking</span>
                    </a>
                    <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0">
                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                        </li>
                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Contact</a>
                        </li>
                    </ul>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
                <span class="block text-sm text-gray-500 sm:text-center">© 2023 <a href="https://xfortech.com/"
                        class="hover:underline">Xfortech</a>. All Rights Reserved.</span>
            </div>
        </footer>

        {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
            </script>
            <script>
                var myModal = new bootstrap.Modal(document.getElementById('location_modal'));
                $(document).ready(function() {
                    myModal.show();
                });
            </script> --}}
    </div>
</div>
