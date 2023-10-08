@extends('layouts.body')

{{-- Page Title --}}
@section('page-title')
    <title>Octosync Software Ltd - BD</title>
    <meta name="description"
        content="Choose Octosync Software Ltd in Bangladesh for top-notch web and mobile app development at affordable prices.">
    <meta name="keywords"
        content="Mobile apps development in Bangladesh, Web development in Bangladesh, Mobile app development company in Bangladesh, Best mobile app development company, Best web development company,Mobile app development cost, Octosync Software Ltd, Octosync Software Ltd blog, Octosync Software Ltd Bangladesh, Web development bd, mobile app development bd">

    {{-- <meta name="robots" content="noindex, nofollow"> <!-- Prevents indexing and following --> --}}
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="author" content="Octosync Software Ltd">

    <!-- Add Open Graph meta tags to improve social media sharing -->
    <meta property="og:title" content="Octosync Software Ltd - Bangladesh">
    <meta property="og:description"
        content="Choose Octosync Software Ltd in Bangladesh for top-notch web and mobile app development at affordable prices.">
    <meta property="og:image" content="{{ url('/images/16_09_2023/1694847093.jpg        ', []) }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="276331691617763">

    <!-- Add Twitter Card meta tags for improved sharing on Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Octosync Software Ltd - Bangladesh">
    <meta name="twitter:description"
        content="Choose Octosync Software Ltd in Bangladesh for top-notch web and mobile app development at affordable prices.">
    <meta name="twitter:image" content="{{ url('/images/16_09_2023/1694847093.jpg       ', []) }}">
    <!-- Add canonical link to avoid duplicate content issues -->
    <link rel="canonical" href="{{ url('/') }}">
    <!-- META TAG END -->


    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "Octosync Software Ltd - Bangladesh",
        "description": "Choose Octosync Software Ltd in Bangladesh for top-notch web and mobile app development at affordable prices."
    }
    </script>
@endsection

@if ($announcement)
    <!-- Announcement Banner -->
    <div id="ab-full-width-with-dismiss-button-on-blue-bg" class="hs-removing:-translate-y-full bg-blue-600">
        <div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-8 mx-auto">
            <div class="flex">
                <p class="text-white">

                    {{ $announcement->message }}

                    <a class="decoration-2 underline font-semibold hover:text-white/[.8]" href=" {{ $announcement->link }}">Learn
                        more</a>
                </p>

                <div class="pl-3 ml-auto">
                    <button type="button"
                        class="inline-flex rounded-md p-1.5 text-white/[.8] hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-600 focus:ring-white"
                        data-hs-remove-element="#ab-full-width-with-dismiss-button-on-blue-bg">
                        <span class="sr-only">Dismiss</span>
                        <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                fill="currentColor" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Announcement Banner -->
@endif


@section('main_contant')
    <!-- Hero -->
    <div style="height: 100vh"
        class="grid place-items-center relative overflow-hidden before:absolute before:top-0 before:left-1/2 before:bg-no-repeat before:bg-top before:bg-cover before:w-full before:h-full before:-z-[1] before:transform before:-translate-x-1/2 ">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pb-10">
            <!-- Announcement Banner -->
            <div class="flex justify-center">
                <a class="inline-flex items-center gap-x-2 bg-white border border-gray-200 text-sm text-gray-800 p-1 pl-3 rounded-full transition hover:border-gray-300 dark:bg-gray-800 dark:border-gray-700 dark:hover:border-gray-600 dark:text-gray-200"
                    href="#">
                    PRO release - Join to waitlist
                    <span
                        class="py-2 px-3 inline-flex justify-center items-center gap-x-2 rounded-full bg-gray-200 font-semibold text-sm text-gray-600 dark:bg-gray-700 dark:text-gray-400">
                        <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span>
                </a>
            </div>
            <!-- End Announcement Banner -->

            <!-- Title -->
            <div class="mt-5 max-w-4xl text-center mx-auto">
                <h1 class="block font-bold text-gray-800 text-2xl md:text-5xl lg:text-5xl dark:text-gray-200">
                    Welcome to
                    <span class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent">
                        Octosync Software Ltd
                    </span>
                </h1>
            </div>
            <!-- End Title -->

            <div class="mt-5 max-w-3xl text-center mx-auto">
                <p class="text-lg text-gray-600 dark:text-gray-400">We are team of talented developer making websites,
                    mobile apps and development software.</p>
            </div>

            <!-- Buttons -->
            <div class="mt-8 grid gap-3 w-full sm:inline-flex sm:justify-center">
                <a class="inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 border border-transparent text-white text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white py-3 px-4 dark:focus:ring-offset-gray-800"
                    href="#about">
                    Get started
                    <svg class="w-3 h-3" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </a>
            </div>
            <!-- End Buttons -->
        </div>
    </div>


    <!-- End Hero -->
    @if (!$blogs->isEmpty())
        <!-- Card Blog -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Title -->
            <div class="max-w-2xl text-center mx-auto mb-10 lg:mb-14">
                <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Read our leatest news &
                    blog
                </h2>
            </div>
            <!-- End Title -->
            <!-- Grid -->
            <div class="grid lg:grid-cols-2 lg:gap-y-16 gap-10">
                <!-- Card -->
                @foreach ($blogs as $blog)
                    <a class="group rounded-xl overflow-hidden" href="{{ route('blog_single', ['id' => $blog->blog_id]) }}">
                        <div class="sm:flex">
                            <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
                                <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out w-full h-full absolute top-0 left-0 object-cover rounded-xl"
                                    src="{{ $blog->img_link }}" alt="Image Description">
                            </div>

                            <div class="grow mt-4 sm:mt-0 sm:ml-6 px-4 sm:px-0">
                                <h3
                                    class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-gray-300 dark:group-hover:text-white">
                                    {{ $blog->title }}
                                </h3>
                                <p
                                    class="mt-4 inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium">
                                    Read more
                                    <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                    <!-- End Card -->
                @endforeach


            </div>
            <!-- End Grid -->


        </div>
        <!-- End Grid -->
    @endif




    {{-- Our uniqueness --}}

    <!-- Features -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto" id="about">
        <!-- Grid -->
        <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
            <div>
                <img class="rounded-xl"
                    src="https://images.unsplash.com/photo-1648737963503-1a26da876aca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=900&h=900&q=80"
                    alt="Image Description">
            </div>
            <!-- End Col -->

            <div class="mt-5 sm:mt-10 lg:mt-0">
                <div class="space-y-6 sm:space-y-8">
                    <!-- Title -->
                    <div class="space-y-2 md:space-y-4">
                        <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-gray-200">
                            Our uniqueness
                        </h2>
                        <p class="text-gray-500">
                            Octosync Software Ltd. has provided efficient custom software development services for over a
                            decade. No matter how unique your requirement is, we got you covered with our next generation.
                            We will build, redesign, and integrate your software solution dedicated to your business needs.
                            Our solutions are cost-effective and ensure maximum Return on investment (ROI). We can also come
                            to a Service Level Agreement (SLA-based approach). Client satisfaction is our topmost priority.
                        </p>
                    </div>
                    <!-- End Title -->

                    <!-- List -->
                    <ul role="list" class="space-y-2 sm:space-y-4">
                        <li class="flex space-x-3">
                            <!-- Solid Check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-blue-600 dark:text-blue-500" width="16"
                                height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z"
                                    fill="currentColor" fill-opacity="0.1" />
                                <path
                                    d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z"
                                    fill="currentColor" />
                            </svg>
                            <!-- End Solid Check -->

                            <span class="text-sm sm:text-base text-gray-500">
                                <span class="font-bold">User Friendly</span> Software Development
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <!-- Solid Check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-blue-600 dark:text-blue-500" width="16"
                                height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z"
                                    fill="currentColor" fill-opacity="0.1" />
                                <path
                                    d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z"
                                    fill="currentColor" />
                            </svg>
                            <!-- End Solid Check -->

                            <span class="text-sm sm:text-base text-gray-500">
                                Powerful & Unique <span class="font-bold">features</span>
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <!-- Solid Check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-blue-600 dark:text-blue-500" width="16"
                                height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z"
                                    fill="currentColor" fill-opacity="0.1" />
                                <path
                                    d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z"
                                    fill="currentColor" />
                            </svg>
                            <!-- End Solid Check -->

                            <span class="text-sm sm:text-base text-gray-500">
                                <span class="font-bold">Minimal Cost </span>Service
                            </span>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Features -->

    {{-- Our uniqueness --}}




    <!-- Icon Blocks -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">

        <!-- Title -->
        <div class="max-w-2xl text-center mx-auto mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Our key product's
            </h2>
        </div>
        <!-- End Title -->

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 items-center gap-6 md:gap-10">

            <!-- Card -->
            <div class="w-full h-full bg-white shadow-lg rounded-lg dark:bg-slate-900">
                <a class="group flex flex-col justify-center hover:bg-gray-200 p-5 rounded-xl dark:hover:bg-slate-800"
                    href="{{ route('polytechnic') }}">
                    <div class="flex items-center gap-x-4 mb-3">
                        <div
                            class="inline-flex justify-center items-center w-[62px] h-[62px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-building" viewBox="0 0 16 16">
                                <path
                                    d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
                                <path
                                    d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z" />
                            </svg>
                        </div>
                        <div class="flex-shrink-0">
                            <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">Polytechnic Institute
                                System</h3>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">The simplest way to manage all kind of management work in a
                        Polytechnic Institute.
                    </p>
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="w-full h-full bg-white shadow-lg rounded-lg dark:bg-slate-900">
                <a class="group flex flex-col justify-center hover:bg-gray-200 p-5 rounded-xl dark:hover:bg-slate-800"
                    href="{{ route('collage') }}">
                    <div class="flex items-center gap-x-4 mb-3">
                        <div
                            class="inline-flex justify-center items-center w-[62px] h-[62px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-building" viewBox="0 0 16 16">
                                <path
                                    d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
                                <path
                                    d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z" />
                            </svg>
                        </div>
                        <div class="flex-shrink-0">
                            <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">Collage Management System
                            </h3>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">The simplest way to manage all kind of management work in a
                        Collage.
                    </p>
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="w-full h-full bg-white shadow-lg rounded-lg dark:bg-slate-900">
                <a class="group flex flex-col justify-center hover:bg-gray-200 p-5 rounded-xl dark:hover:bg-slate-800"
                    href="{{ route('school') }}">
                    <div class="flex items-center gap-x-4 mb-3">
                        <div
                            class="inline-flex justify-center items-center w-[62px] h-[62px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-building" viewBox="0 0 16 16">
                                <path
                                    d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
                                <path
                                    d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z" />
                            </svg>
                        </div>
                        <div class="flex-shrink-0">
                            <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">School Management System
                            </h3>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">The simplest way to manage all kind of management work in a
                        School.
                    </p>
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="w-full h-full bg-white shadow-lg rounded-lg dark:bg-slate-900">
                <a class="group flex flex-col justify-center hover:bg-gray-200 p-5 rounded-xl dark:hover:bg-slate-800"
                    href="{{ route('shop') }}">
                    <div class="flex items-center gap-x-4 mb-3">
                        <div
                            class="inline-flex justify-center items-center w-[62px] h-[62px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z" />
                            </svg>
                        </div>
                        <div class="flex-shrink-0">
                            <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">Shop Management System
                            </h3>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">The simplest way to manage all kind of management work in a
                        School.
                    </p>
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="w-full h-full bg-white shadow-lg rounded-lg dark:bg-slate-900">
                <a class="group flex flex-col justify-center hover:bg-gray-200 p-5 rounded-xl dark:hover:bg-slate-800"
                    href="{{ route('ticket') }}">
                    <div class="flex items-center gap-x-4 mb-3">
                        <div
                            class="inline-flex justify-center items-center w-[62px] h-[62px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bus-front" viewBox="0 0 16 16">
                                <path
                                    d="M5 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm8 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm-6-1a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H7Zm1-6c-1.876 0-3.426.109-4.552.226A.5.5 0 0 0 3 4.723v3.554a.5.5 0 0 0 .448.497C4.574 8.891 6.124 9 8 9c1.876 0 3.426-.109 4.552-.226A.5.5 0 0 0 13 8.277V4.723a.5.5 0 0 0-.448-.497A44.303 44.303 0 0 0 8 4Zm0-1c-1.837 0-3.353.107-4.448.22a.5.5 0 1 1-.104-.994A44.304 44.304 0 0 1 8 2c1.876 0 3.426.109 4.552.226a.5.5 0 1 1-.104.994A43.306 43.306 0 0 0 8 3Z" />
                                <path
                                    d="M15 8a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1V2.64c0-1.188-.845-2.232-2.064-2.372A43.61 43.61 0 0 0 8 0C5.9 0 4.208.136 3.064.268 1.845.408 1 1.452 1 2.64V4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v3.5c0 .818.393 1.544 1 2v2a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V14h6v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-2c.607-.456 1-1.182 1-2V8ZM8 1c2.056 0 3.71.134 4.822.261.676.078 1.178.66 1.178 1.379v8.86a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 11.5V2.64c0-.72.502-1.301 1.178-1.379A42.611 42.611 0 0 1 8 1Z" />
                            </svg>
                        </div>
                        <div class="flex-shrink-0">
                            <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">Bus Ticket Sell System
                            </h3>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">The simplest way to manage all kind of management work in a
                        School.
                    </p>
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="w-full h-full bg-white shadow-lg rounded-lg dark:bg-slate-900">
                <a class="group flex flex-col justify-center hover:bg-gray-200 p-5 rounded-xl dark:hover:bg-slate-800"
                    href="{{ route('ecommerce') }}">
                    <div class="flex items-center gap-x-4 mb-3">
                        <div
                            class="inline-flex justify-center items-center w-[62px] h-[62px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cart3" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </div>
                        <div class="flex-shrink-0">
                            <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">Ecommerce System
                            </h3>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">The simplest way to manage all kind of management work in a
                        School.
                    </p>
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="w-full h-full bg-white shadow-lg rounded-lg dark:bg-slate-900">
                <a class="group flex flex-col justify-center hover:bg-gray-200 p-5 rounded-xl dark:hover:bg-slate-800"
                    href="{{ route('custom') }}">
                    <div class="flex items-center gap-x-4 mb-3">
                        <div
                            class="inline-flex justify-center items-center w-[62px] h-[62px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-gear" viewBox="0 0 16 16">
                                <path
                                    d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                <path
                                    d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                            </svg>
                        </div>
                        <div class="flex-shrink-0">
                            <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">Custome Software
                            </h3>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">The simplest way to manage all kind of management work in a
                        School.
                    </p>
                </a>
            </div>
            <!-- End Card -->


        </div>
    </div>
    <!-- End Icon Blocks -->

@endsection
