<x-admin-layout>
    <x-slot name="main">

        <!-- Content -->
        <div class="w-full pt-5 px-4 sm:px-6 md:px-8">

            <div class="bg-slate-300 rounded-xl shadow dark:bg-slate-800">

                <!-- Table Section -->
                <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">

                    <!-- Card -->
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div
                                    class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                                    <!-- Header -->
                                    <div
                                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                                        <div>
                                            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                                Subscribers
                                            </h2>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Add Subscribers, edit and more.
                                            </p>
                                        </div>

                                        {{-- <div>
                                            <div class="inline-flex gap-x-2">
                                                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                                    href="#">
                                                    View all
                                                </a>

                                                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                                    href="{{ route('admin.announcementAddPage') }}">
                                                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none">
                                                        <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" />
                                                    </svg>
                                                    Create New
                                                </a>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <!-- End Header -->

                                    <!-- Table -->
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                        <thead class="bg-gray-50 dark:bg-slate-800">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left">
                                                    <div class="flex items-center gap-x-2">
                                                        <span
                                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            ID
                                                        </span>
                                                    </div>
                                                </th>

                                                <th scope="col" class="px-6 py-3 text-left">
                                                    <div class="flex items-center gap-x-2">
                                                        <span
                                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Email
                                                        </span>
                                                    </div>
                                                </th>

                                                <th scope="col" class="px-6 py-3 text-left">
                                                    <div class="flex items-center gap-x-2">
                                                        <span
                                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Action
                                                        </span>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            @if (!$subscribers->isEmpty())
                                                @foreach ($subscribers as $item)
                                                    <tr
                                                        class="bg-white hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-slate-800">
                                                        <td class="h-px w-60 whitespace-nowrap">
                                                            <div class="block h-full p-6">
                                                                <span class="text-sm text-gray-600 dark:text-gray-400">
                                                                    {{ $item->id }}
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td class="h-px w-40 min-w-[18rem]">
                                                            <div class="px-6 py-3">
                                                                <span class="text-sm text-gray-600 dark:text-gray-400">
                                                                    {{ $item->email }}
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td class="h-px w-px whitespace-nowrap">
                                                            <div class="px-6 py-1.5">
                                                                <div
                                                                    class="hs-dropdown relative inline-block [--placement:bottom-right]">
                                                                    <button id="hs-table-dropdown-2" type="button"
                                                                        class="hs-dropdown-toggle py-1.5 px-2 inline-flex justify-center items-center gap-2 rounded-md text-gray-700 align-middle focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                                        <svg class="w-4 h-4"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            fill="currentColor" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                                                        </svg>
                                                                    </button>
                                                                    {{-- <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden divide-y divide-gray-200 min-w-[10rem] z-10 bg-white shadow-2xl rounded-lg p-2 mt-2 dark:divide-gray-700 dark:bg-gray-800 dark:border dark:border-gray-700"
                                                                    aria-labelledby="hs-table-dropdown-2">
                                                                    <div class="py-2 first:pt-0 last:pb-0">
                                                                        <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                            href="{{ route('admin.announcement_edit', ['id' => $item->id]) }}">
                                                                            Edit
                                                                        </a>
                                                                        <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-green-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                            href="{{ route('admin.announcement_status', ['status' => 1, 'id' => $item->id]) }}">
                                                                            Publish
                                                                        </a>
                                                                        <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-yellow-700 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                            href="{{ route('admin.announcement_status', ['status' => 0, 'id' => $item->id]) }}">
                                                                            Draft
                                                                        </a>
                                                                    </div>
                                                                    <div class="py-2 first:pt-0 last:pb-0">
                                                                        <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-red-600 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-red-500 dark:hover:bg-gray-700"
                                                                            href="{{ route('admin.announcement_delete', ['id' => $item->id]) }}">
                                                                            Delete
                                                                        </a>
                                                                    </div>
                                                                </div> --}}
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td>
                                                        <span
                                                            class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent">
                                                            No Subscriber found in database
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                    <!-- End Table -->

                                    <!-- Footer -->
                                    <div
                                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                                        <div class="max-w-sm space-y-3">
                                            <select
                                                class="py-2 px-3 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option selected>5</option>
                                                <option>6</option>
                                            </select>
                                        </div>

                                        <div>
                                            <div class="inline-flex gap-x-2">
                                                <button type="button"
                                                    class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                                    </svg>
                                                    Prev
                                                </button>

                                                <button type="button"
                                                    class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                    Next
                                                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Footer -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Table Section -->



            </div>
            <!-- End Card -->
        </div>

    </x-slot>
</x-admin-layout>
