@extends('layouts.body')

{{-- Page Title --}}
@section('page-title')
    <title>{{ $blog->title }}</title>
    <meta name="description" content="{{ $blog->title }}">
    <meta name="keywords" content="{{ $blog->keyword }}">

    {{-- <meta name="robots" content="noindex, nofollow"> <!-- Prevents indexing and following --> --}}
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="author" content="Friends IT Ltd">

    <!-- Add Open Graph meta tags to improve social media sharing -->
    <meta property="og:title" content="{{ $blog->title }}">
    <meta property="og:description"
        content="{{ htmlspecialchars(implode(' ', array_slice(preg_split('/\s+/', strip_tags($blog->content)), 0, 30))) }}">
    <meta property="og:image" content="{{ $blog->img_link }}">
    <meta property="og:url" content="{{ route('blog_single', ['id'=>$blog->blog_id]) }}">
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="276331691617763">
    <meta property="fb:pages" content="112708198032677">
    <meta property="ia:markup_url" content="{{ route('blog_single', ['id'=>$blog->blog_id]) }}">

    <!-- Add Twitter Card meta tags for improved sharing on Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $blog->title }}">
    <meta name="twitter:description"
        content="{{ htmlspecialchars(implode(' ', array_slice(preg_split('/\s+/', strip_tags($blog->content)), 0, 30))) }}">
    <meta name="twitter:image" content="{{ $blog->img_link }}">
    <!-- Add canonical link to avoid duplicate content issues -->
    <link rel="canonical" href="{{ route('blog_single', ['id'=>$blog->blog_id]) }}">
    <!-- META TAG END -->


    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "{{ $blog->title }}",
        "description": "{{ htmlspecialchars(implode(' ', array_slice(preg_split('/\s+/', strip_tags($blog->content)), 0, 30))) }}"
    }
    </script>
@endsection



@section('main_contant')
    <!-- Blog Article -->
    <!-- Blog Article -->
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="grid lg:grid-cols-3 gap-y-8 lg:gap-y-0 lg:gap-x-6">
            <!-- Content -->
            <div class="lg:col-span-2">
                <div class="py-8 lg:pr-8">
                    <div class="space-y-5 lg:space-y-8">
                        <a class="inline-flex items-center gap-x-1.5 text-sm text-gray-600 decoration-2 hover:underline dark:text-blue-400"
                            href="{{ route('blog') }}">
                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                            </svg>
                            Back to Blog
                        </a>

                        <h2 class="text-3xl font-bold lg:text-4xl dark:text-white">{{ $blog->title }}</h2>

                        <div class="flex items-center gap-x-5">
                            <a class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-800 dark:text-gray-200"
                                href="#">
                                Company News
                            </a>
                            <p class="text-xs sm:text-sm text-gray-800 dark:text-gray-200">
                                {{ \Carbon\Carbon::parse($blog->date)->format('F d, Y') }}
                            </p>
                        </div>


                        <figure>
                            <img class="w-full object-cover rounded-xl" src="{{ $blog->img_link }}"
                                alt="Image Description">
                            {{-- <figcaption class="mt-3 text-sm text-center text-gray-500">
                                A man and a woman looking at a cell phone.
                            </figcaption> --}}
                        </figure>

                        <div class="space-y-3">

                            <div class="text-base text-gray-800 dark:text-gray-300">
                                {!! $blog->content !!}
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- End Content -->

            <!-- Sidebar -->
            <div
                class="lg:col-span-1 lg:w-full lg:h-full lg:bg-gradient-to-r lg:from-gray-400 lg:via-transparent lg:to-transparent dark:from-slate-700">
                <div class="sticky top-0 left-0 py-8 lg:pl-8">
                    <!-- Avatar Media -->
                    <div class="group flex items-center gap-x-3 border-b border-gray-200 pb-8 mb-8 dark:border-gray-700">
                        <a class="block flex-shrink-0" href="#">
                            <img class="h-10 w-10 rounded-full"
                                src="https://spng.pngfind.com/pngs/s/610-6104451_image-placeholder-png-user-profile-placeholder-image-png.png"
                                alt="Image Description">
                        </a>

                        <a class="group grow block" target="_blank" href="{{ $blog->author_link }}">
                            <h5
                                class="group-hover:text-gray-600 text-sm font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                                {{ $blog->author }}
                            </h5>
                            {{-- <p class="text-sm text-gray-500">
                                UI/UX enthusiast
                            </p> --}}
                        </a>

                        <div class="grow">
                            <div class="flex justify-end">
                                <a type="button" href="{{ $blog->author_link }}" target="_blank"
                                    class="py-1.5 px-2.5 inline-flex justify-center items-center gap-x-1.5 rounded-full border border-transparent font-semibold bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-900 text-xs">
                                    <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        <path fill-rule="evenodd"
                                            d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                                    </svg>
                                    Follow
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Avatar Media -->

                    <div class="space-y-6">
                        <p class="text-sm font-bold text-gray-800 dark:text-gray-200 ">
                            Latest blogs
                        </p>
                        <!-- Media -->
                        @if (!$blogs->isEmpty())
                            @foreach ($blogs as $blog)
                                <a class="group flex items-center gap-x-6"
                                    href="{{ route('blog_single', ['id' => $blog->blog_id]) }}">
                                    <div class="grow">
                                        <span
                                            class="text-sm font-bold text-gray-800 group-hover:text-blue-600 dark:text-gray-200 dark:group-hover:text-blue-500">
                                            {{ $blog->title }}
                                        </span>
                                    </div>

                                    <div class="flex-shrink-0 relative rounded-lg overflow-hidden w-20 h-20">
                                        <img class="w-full h-full absolute top-0 left-0 object-cover rounded-lg"
                                            src="{{ $blog->img_link }}" alt="Image Description">
                                    </div>
                                </a>
                                <!-- End Media -->
                            @endforeach
                        @else
                            <span class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent">
                                No blog found in database
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <!-- End Sidebar -->
        </div>
    </div>
    <!-- End Blog Article -->
    <!-- End Blog Article -->

    <!-- Sticky Share Group -->
    <div class="sticky bottom-6 inset-x-0 text-center">
        <div class="inline-block bg-purple-800 shadow-md rounded-full py-3 px-4 dark:bg-purple-600">
            <div class="flex items-center gap-x-1.5">

                <!-- Button -->
                <div class="hs-dropdown relative inline-flex">
                    <button type="button" id="blog-article-share-dropdown"
                        class="hs-dropdown-toggle flex items-center gap-x-2 text-sm text-gray-200 hover:text-gray-800 dark:text-gray-800 dark:hover:text-gray-200">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z" />
                            <path fill-rule="evenodd"
                                d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z" />
                        </svg>
                        Share
                    </button>
                    <div class="hs-dropdown-menu w-56 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden mb-1 z-10 bg-gray-900 shadow-md rounded-xl p-2 dark:bg-black"
                        aria-labelledby="blog-article-share-dropdown">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-gray-400"
                            href="javascript:void(0);" onclick="copyCurrentURL()">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                                <path
                                    d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
                            </svg>
                            Copy link
                        </a>
                        <div class="border-t border-gray-600 my-2"></div>
                        <a target="_blank"
                            class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-gray-400"
                            href="https://twitter.com/intent/tweet?url={{ urlencode(route('blog_single', ['id' => $blog->blog_id])) }}">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                            Share on Twitter
                        </a>
                        <a target="_blank"
                            class="fb-xfbml-parse-ignore flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-gray-400"
                            href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('blog_single', ['id' => $blog->blog_id])) }}&amp;src=sdkpreparse">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                            Share on Facebook
                        </a>
                    </div>
                </div>
                <!-- Button -->
            </div>
        </div>
    </div>
    <!-- End Sticky Share Group -->
    {{-- <a target="_blank" href="https://twitter.com/intent/tweet?url=https://friendsit.xyz"
        data-size="large">
        Tweet
    </a> --}}

    {{-- <div class="fb-share-button" data-href="https://friendsit.xyz" data-layout="" data-size=""><a target="_blank"
            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffriendsit.xyz%2F&amp;src=sdkpreparse"
            class="fb-xfbml-parse-ignore">Share</a></div> --}}

    <script>
        function copyCurrentURL() {
            var currentURL = window.location.href;
            var tempInput = document.createElement('input');
            document.body.appendChild(tempInput);
            tempInput.setAttribute('value', currentURL);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);
            alert('URL copied: ' + currentURL);
        }
    </script>


@endsection
