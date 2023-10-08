<x-admin-layout>
    <x-slot name="main">
        <!-- Content -->
        <div class="w-full pt-5 px-4 sm:px-6 md:px-8">


            <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 text-center">
                        {{ $title }}
                    </h2>
                    <label class="inline-block text-sm font-medium dark:text-gray-400">
                        Announcement info
                    </label>

                </div>

                <form method="POST" action="{{ $url }}">
                    @csrf
                    <!-- Grid -->
                    <div class="grid grid-cols-12 gap-4 sm:gap-6">


                        <div class="col-span-3">
                            <label for="message" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Message
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="col-span-9">

                            <input name="message" id="message" type="text"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Message" value="{{ $announce->message }}">

                        </div>
                        <!-- End Col -->

                        <div class="col-span-3">
                            <label for="link" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Web link
                            </label>
                        </div>
                        <!-- End Col -->


                        <div class="col-span-9">

                            <input name="link" id="link" type="url"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Link" value="{{ $announce->link }}">

                        </div>
                        <!-- End Col -->

                    </div>


                    <div class="mt-5 flex justify-center gap-x-2">
                        <input name="" type="submit" value="Save"
                            class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                    </div>

                </form>

            </div>
            <!-- End Card -->


        </div>

    </x-slot>
</x-admin-layout>
