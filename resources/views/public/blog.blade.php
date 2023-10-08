@extends('layouts.body')

{{-- Page Title --}}
@section('page-title')
    <title>Blog | Octosync Software Ltd</title>
    <meta name="description" content="Read all blog from Octosync Software Ltd.">
    <meta name="keywords"
        content="Mobile apps development in Bangladesh, Web development in Bangladesh, Mobile app development company in Bangladesh, Best mobile app development company, Best web development company,Mobile app development cost, Octosync Software Ltd, Octosync Software Ltd blog, Octosync Software Ltd Bangladesh, Web development bd, mobile app development bd">

    {{-- <meta name="robots" content="noindex, nofollow"> <!-- Prevents indexing and following --> --}}
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="author" content="Octosync Software Ltd">

    <!-- Add Open Graph meta tags to improve social media sharing -->
    <meta property="og:title" content="Blog | Octosync Software Ltd - BD">
    <meta property="og:description" content="Read all blog from Octosync Software Ltd.">
    <meta property="og:image" content="{{ url('/images/11_08_2023/meta_img.png', []) }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="276331691617763">

    <!-- Add Twitter Card meta tags for social media sharing on Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Blog | Octosync Software Ltd - BD">
    <meta name="twitter:description" content="Read all blog from Octosync Software Ltd.">
    <meta name="twitter:image" content="{{ url('/images/11_08_2023/meta_img.png', []) }}">
    <meta name="twitter:url" content="{{ url('/') }}">

    <!-- Add canonical link to avoid duplicate content issues -->
    <link rel="canonical" href="{{ url('/') }}">
    <!-- META TAG END -->


    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "Octosync Software Ltd - BD",
        "description": "Read all blog from Octosync Software Ltd."
    }
    </script>
@endsection


@section('main_contant')
    <!-- Card Blog -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        @if (!$blogs->isEmpty())
            <div class="grid lg:grid-cols-2 gap-6">
                <!-- Card -->

                @foreach ($blogs as $blog)
                    <a class="group relative block" href="{{ route('blog_single', ['id' => $blog->blog_id]) }}">
                        <div
                            class="flex-shrink-0 relative rounded-xl overflow-hidden w-full h-[350px] before:absolute before:inset-x-0 before:w-full before:h-full before:bg-gradient-to-t before:from-gray-900/[.7] before:z-[1]">
                            <img class="w-full h-full absolute top-0 left-0 object-cover" src="{{ $blog->img_link }}"
                                alt="Image Description">
                        </div>

                        <div class="absolute top-0 inset-x-0 z-10">
                            <div class="p-4 flex flex-col h-full sm:p-6">
                                <!-- Avatar -->
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="h-[2.875rem] w-[2.875rem] border-2 border-white rounded-full"
                                            src="https://spng.pngfind.com/pngs/s/610-6104451_image-placeholder-png-user-profile-placeholder-image-png.png"
                                            alt="Image Description">
                                    </div>
                                    <div class="ml-2.5 sm:ml-4">
                                        <h4 class="font-semibold text-white">
                                            {{ $blog->author }}
                                        </h4>
                                        <p class="text-xs text-white/[.8]">
                                            {{ $blog->date }}
                                        </p>
                                    </div>
                                </div>
                                <!-- End Avatar -->
                            </div>
                        </div>

                        <div class="absolute bottom-0 inset-x-0 z-10">
                            <div class="flex flex-col h-full p-4 sm:p-6">
                                <h3 class="text-lg sm:text-3xl font-semibold text-white group-hover:text-white/[.8]">
                                    {{ $blog->title }}
                                </h3>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                @endforeach


            </div>
            <!-- End Grid -->
        @else
            <div class="mt-5 max-w-4xl text-center mx-auto">
                <h1 class="block font-bold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-gray-200">
                    <span class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent">
                        No blog found
                    </span>
                </h1>
            </div>
        @endif
    </div>
    <!-- End Card Blog -->
@endsection
