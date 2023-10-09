<x-admin-layout>
    <x-slot name="main">

        @section('page-title')
            <title>Cost add</title>
        @endsection

        <!-- Card Section -->
        <div class="w-full pt-5 px-4 sm:px-6 md:px-8">

            <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 text-center">
                        Create New Cost
                    </h2>
                    <label class="inline-block text-sm font-medium dark:text-gray-400">
                        Cost info
                    </label>

                </div>

                <form action="{{ route('admin.cost') }}" method="POST">
                    @csrf
                    <!-- Grid -->
                    <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                        <div class="sm:col-span-3">
                            <label for="cost_date" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Cost Date
                            </label>
                        </div>
                        <div class="sm:col-span-9">
                            <input id="cost_date" type="date" name="cost_date"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="xxx" required>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="cost_name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Cost Name
                            </label>
                        </div>

                        <div class="sm:col-span-9">
                            <input id="cost_name" type="text" name="cost_name"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Domain" required>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="amount" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Amount
                            </label>
                        </div>

                        <div class="sm:col-span-9">
                            <input id="amount" type="number" name="amount"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="xxx" required>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="reference" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Reference
                            </label>
                        </div>

                        <div class="sm:col-span-9">
                            <input id="reference" type="text" name="reference"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Name of reference user" required>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="comment" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Comment
                            </label>
                        </div>

                        <div class="sm:col-span-9">
                            <input id="comment" type="text" name="comment"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Write some comment" value="Write some comment" required>
                        </div>

                    </div>
                    <!-- End Grid -->
                    @can('write')
                        <div class="mt-5 flex justify-end gap-x-2">
                            <input type="submit" value="Save"
                                class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">

                        </div>
                    @endcan
                </form>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Card Section -->

    </x-slot>
</x-admin-layout>
