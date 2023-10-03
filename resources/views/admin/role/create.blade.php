<x-admin-layout>
    <x-slot name="main">

        <!-- Card Section -->
        <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Card -->
            <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
                        Profile
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Manage your name, password and account settings.
                    </p>
                </div>

                <form>
                    <!-- Grid -->
                    <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                        <div class="sm:col-span-3">
                            <label for="af-account-email"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Email
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <input id="af-account-email" type="email"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="maria@site.com">
                        </div>
                        <!-- End Col -->

                    </div>
                    <!-- End Grid -->

                    <div class="mt-5 flex justify-end gap-x-2">
                        <button type="button"
                            class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                            Cancel
                        </button>
                        <button type="button"
                            class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                            Save changes
                        </button>
                    </div>
                </form>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Card Section -->

    </x-slot>
</x-admin-layout>
