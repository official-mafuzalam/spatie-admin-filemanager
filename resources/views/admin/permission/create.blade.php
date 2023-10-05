<x-admin-layout>
    <x-slot name="main">

        <!-- Card Section -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Card -->
            <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-700">
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
                        Create New Permission
                    </h2>
                </div>

                <form action="{{ route('admin.permission.create') }}" method="POST">
                    @csrf
                    <!-- Grid -->
                    <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                        <div class="sm:col-span-3">
                            <label for="role-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Permission Name
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <input id="role-name" type="text" name="name"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="admin">
                        </div>

                        @error('name')
                            <div class="sm:col-span-3">
                            </div>

                            <div class="sm:col-span-9">
                                <span class="text-red-600">{{ $message }}</span>
                            </div>
                        @enderror


                        <!-- End Col -->

                    </div>
                    <!-- End Grid -->

                    <div class="mt-5 flex justify-end gap-x-2">
                        <input type="submit" value="Save"
                            class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">

                    </div>
                </form>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Card Section -->

    </x-slot>
</x-admin-layout>
