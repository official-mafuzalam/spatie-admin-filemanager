<x-admin-layout>
    <x-slot name="main">

        <div class="w-full pt-5 px-4 sm:px-6 md:px-8">


            <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 text-center">
                        {{ $title }}
                    </h2>
                    <label class="inline-block text-sm font-medium dark:text-gray-400">
                        Bolg info
                    </label>

                </div>

                <form method="POST" action="{{ $url }}">
                    @csrf
                    <!-- Grid -->
                    <div class="grid grid-cols-12 gap-4 sm:gap-6">


                        <div class="col-span-3">
                            <label for="title" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Title
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="col-span-9">

                            <input name="title" id="title" type="text"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Title" value="{{ $blog->title }}">

                        </div>
                        <!-- End Col -->

                        <div class="col-span-3">
                            <label for="img_link" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Image link
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="col-span-9">

                            <input name="img_link" id="img_link" type="url"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="image link" value="{{ $blog->img_link }}">

                        </div>
                        <!-- End Col -->

                        <div class="col-span-3">
                            <label for="author" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Author
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="col-span-9">

                            <input name="author" id="author" type="text"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Author" value="{{ $blog->author }}">

                        </div>
                        <!-- End Col -->

                        <div class="col-span-3">
                            <label for="author_link"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Author link
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="col-span-9">

                            <input name="author_link" id="author_link" type="url"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Author_link" value="{{ $blog->author_link }}">

                        </div>
                        <!-- End Col -->

                        <div class="col-span-3">
                            <label for="date" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Date
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="col-span-9">

                            <input name="date" id="date" type="date"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Date" value="{{ $blog->date }}">


                        </div>
                        <!-- End Col -->

                        <div class="col-span-3">
                            <label for="keyword" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Keyword
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="col-span-9">

                            <textarea name="keyword"
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                rows="3" id="keywordInput" onkeydown="handleKeywordInput(event)" placeholder="keyword">{{ $blog->keyword }}</textarea>

                        </div>
                        <!-- End Col -->


                        <div class="col-span-3">
                            <label for="contant" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Contant
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="col-span-9">

                            <textarea name="content" id="contant"
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                rows="3">{{ $blog->content }}
                            </textarea>

                        </div>
                        <!-- End Col -->

                    </div>


                    @canany(['write','edit'])
                        <div class="mt-5 flex justify-center gap-x-2">
                            <input name="" type="submit" value="Save"
                                class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        </div>
                    @endcanany
                </form>
            </div>
            <!-- End Card -->


        </div>


        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

        <script>
            CKEDITOR.replace('content');
        </script>

        <script>
            function handleKeywordInput(event) {
                if (event.key === "Enter") {
                    event.preventDefault(); // Prevent the newline from being added
                    var keywordInput = document.getElementById("keywordInput");
                    var inputValue = keywordInput.value.trim(); // Trim leading and trailing spaces
                    if (inputValue) {
                        if (keywordInput.value.slice(-1) === ',') {
                            keywordInput.value += ' '; // Add a space after the comma if needed
                        } else {
                            keywordInput.value += ', '; // Add a comma and a space
                        }
                    }
                }
            }
        </script>

    </x-slot>
</x-admin-layout>
