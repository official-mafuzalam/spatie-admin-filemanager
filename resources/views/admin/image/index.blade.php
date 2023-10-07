<x-admin-layout>
    <x-slot name="main">

        <div class="w-full pt-5 px-4 sm:px-6 md:px-8">

            <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
                <div class="mb-8">
                    <div
                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                Images
                            </h2>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                All Images, edit and more.
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                    href="#">
                                    View all
                                </a>

                                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                    href="{{ route('admin.image_add') }}">
                                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                    Create New
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="grid gap-x-8 gap-y-4 grid-cols-1">
                    @foreach ($folders as $folder)
                        <div class="border p-2">
                            <h2 class="text-lg font-semibold">{{ $folder['name'] }}</h2>
                            <div class="grid gap-4 md:grid-cols-3 grid-cols-2">
                                @foreach ($folder['images'] as $image)
                                    <div class="relative">
                                        <img class="w-full h-auto rounded-t-xl"
                                            src="{{ asset('images/' . $folder['name'] . '/' . $image) }}"
                                            alt="{{ $image }}">
                                        <form
                                            action="{{ route('deleteImage', ['folder' => $folder['name'], 'image' => $image]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE') <!-- Use this to set the HTTP method to DELETE -->
                                            <button type="submit"
                                                class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded">
                                                Delete
                                            </button>
                                        </form>
                                        <button
                                            class="absolute bottom-2 right-2 bg-blue-500 text-white px-2 py-1 rounded"
                                            onclick="copyImagePath('{{ asset('images/' . $folder['name'] . '/' . $image) }}')">
                                            Copy
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                            <form action="{{ route('deleteFolder', ['folder' => $folder['name']]) }}" method="POST">
                                @csrf
                                @method('DELETE') <!-- Use this to set the HTTP method to DELETE -->
                                <button type="submit" class="mt-2 bg-red-500 text-white px-2 py-1 rounded">
                                    Delete Folder
                                </button>
                            </form>
                        </div>
                    @endforeach

                </div>
            </div>
            <!-- End Card -->
        </div>

        <script>
            function copyImagePath(imagePath) {
                var tempInput = document.createElement('input');
                document.body.appendChild(tempInput);
                tempInput.setAttribute('value', imagePath);
                tempInput.select();
                document.execCommand('copy');
                document.body.removeChild(tempInput);
                alert('Image path copied: ' + imagePath);
            }
        </script>
    </x-slot>
</x-admin-layout>
