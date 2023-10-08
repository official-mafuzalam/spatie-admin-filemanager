@extends('layouts.body')

{{-- Page Title --}}
@section('page-title')
    <title>Services | Octosync Software Ltd BD</title>
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
    <meta property="og:title" content="Services | Octosync Software Ltd BD">
    <meta property="og:description"
        content="Choose Octosync Software Ltd in Bangladesh for top-notch web and mobile app development at affordable prices.">
    <meta property="og:image" content="{{ url('/images/16_09_2023/1694847093.jpg', []) }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="276331691617763">

    <!-- Add Twitter Card meta tags for improved sharing on Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Services | Octosync Software Ltd BD">
    <meta name="twitter:description"
        content="Choose Octosync Software Ltd in Bangladesh for top-notch web and mobile app development at affordable prices.">
    <meta name="twitter:image" content="{{ url('/images/16_09_2023/1694847093.jpg', []) }}">
    <!-- Add canonical link to avoid duplicate content issues -->
    <link rel="canonical" href="{{ url('/') }}">
    <!-- META TAG END -->


    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "Services | Octosync Software Ltd BD",
        "description": "Choose Octosync Software Ltd in Bangladesh for top-notch web and mobile app development at affordable prices."
    }
    </script>
@endsection


@section('main_contant')
    <!-- Features -->
    <div id="web-development" class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
            <div>
                <img class="rounded-xl"
                    src="https://www.usnews.com/dims4/USNEWS/fb6e5fb/2147483647/crop/2000x1334+0+2/resize/970x647/quality/85/?url=https%3A%2F%2Fwww.usnews.com%2Fcmsmedia%2F65%2F62%2Fc9cb60d24ac89d56462b1228574a%2F201009-codingcomputer-stock.jpg"
                    alt="Image Description">
            </div>
            <!-- End Col -->

            <div class="mt-5 sm:mt-10 lg:mt-0">
                <div class="space-y-6 sm:space-y-8">
                    <!-- Title -->
                    <div class="space-y-2 md:space-y-4">
                        <h2 class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent font-bold text-3xl lg:text-4xl">
                            Web design & development
                        </h2>
                        <p class="text-gray-500">
                            Transform your online presence with our expert Web Design & Development services. Our skilled
                            team creates captivating websites that leave a lasting impression, while also ensuring seamless
                            functionality and optimal user experience. Let us bring your vision to life and elevate your
                            digital presence to new heights.
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
                                <span class="font-bold">Responsive</span> designing
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
                                Powerful <span class="font-bold">features</span>
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
                                User Experience Design
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
    <!-- Features -->
    <div id="app-development" class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
            
            <div class="mt-5 sm:mt-10 lg:mt-0">
                <div class="space-y-6 sm:space-y-8">
                    <!-- Title -->
                    <div class="space-y-2 md:space-y-4">
                        <h2 class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent font-bold text-3xl lg:text-4xl">
                            Mobile app development
                        </h2>
                        <p class="text-gray-500">
                            Transform your online presence with our expert Web Design & Development services. Our skilled
                            team creates captivating websites that leave a lasting impression, while also ensuring seamless
                            functionality and optimal user experience. Let us bring your vision to life and elevate your
                            digital presence to new heights.
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
                                <span class="font-bold">Responsive</span> designing
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
                                Powerful <span class="font-bold">features</span>
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
                                User Experience Design
                            </span>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>
            </div>
            <!-- End Col -->

            <div>
                <img class="rounded-xl"
                    src="https://www.usnews.com/dims4/USNEWS/fb6e5fb/2147483647/crop/2000x1334+0+2/resize/970x647/quality/85/?url=https%3A%2F%2Fwww.usnews.com%2Fcmsmedia%2F65%2F62%2Fc9cb60d24ac89d56462b1228574a%2F201009-codingcomputer-stock.jpg"
                    alt="Image Description">
            </div>
            <!-- End Col -->

        </div>
        <!-- End Grid -->
    </div>
    <!-- End Features -->
    <!-- Features -->
    <div id="software-development" class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
            
            <div>
                <img class="rounded-xl"
                    src="https://www.usnews.com/dims4/USNEWS/fb6e5fb/2147483647/crop/2000x1334+0+2/resize/970x647/quality/85/?url=https%3A%2F%2Fwww.usnews.com%2Fcmsmedia%2F65%2F62%2Fc9cb60d24ac89d56462b1228574a%2F201009-codingcomputer-stock.jpg"
                    alt="Image Description">
            </div>
            <!-- End Col -->

            
            <div class="mt-5 sm:mt-10 lg:mt-0">
                <div class="space-y-6 sm:space-y-8">
                    <!-- Title -->
                    <div class="space-y-2 md:space-y-4">
                        <h2 class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent font-bold text-3xl lg:text-4xl">
                            Custome software development
                        </h2>
                        <p class="text-gray-500">
                            Transform your online presence with our expert Web Design & Development services. Our skilled
                            team creates captivating websites that leave a lasting impression, while also ensuring seamless
                            functionality and optimal user experience. Let us bring your vision to life and elevate your
                            digital presence to new heights.
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
                                <span class="font-bold">Responsive</span> designing
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
                                Powerful <span class="font-bold">features</span>
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
                                User Experience Design
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
@endsection
