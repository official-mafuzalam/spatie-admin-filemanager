<x-admin-layout>
    <x-slot name="main">

        @section('page-title')
            <title>Upload Image</title>
        @endsection

        <div class="w-full pt-5 px-4 sm:px-6 md:px-8">

            <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 text-center">
                        Upload New Image
                    </h2>
                    <label class="inline-block text-sm font-medium dark:text-gray-400">
                        Image info
                    </label>

                </div>

                <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Grid -->
                    <div class="grid grid-cols-12 gap-4 sm:gap-6">


                        <div class="col-span-3">
                            <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Image choose
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="col-span-9">
                            <label for="small-file-input" class="sr-only">Choose file</label>
                            <input type="file" name="image" id="small-file-input"
                                class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
                                file:bg-transparent file:border-0
                                file:bg-gray-100 file:mr-4
                                file:py-2 file:px-4
                                dark:file:bg-gray-700 dark:file:text-gray-400"
                                accept="image/jpeg, image/png, image/jpg, image/gif, image/svg+xml">

                        </div>
                        <!-- End Col -->
                    </div>

                    @can('write')
                        <div class="mt-5 flex justify-center gap-x-2">
                            <input name="" type="submit" value="Save"
                                class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        </div>
                    @endcan
                </form>
            </div>
            <!-- End Card -->


        </div>
    </x-slot>
</x-admin-layout>
