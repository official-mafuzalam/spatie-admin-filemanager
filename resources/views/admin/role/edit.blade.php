<x-admin-layout>
    <x-slot name="main">

        @section('page-title')
            <title>Role Edit</title>
        @endsection

        <!-- Card Section -->
        <div class="w-full pt-5 px-4 sm:px-6 md:px-8">

            <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 text-center">
                        Edit Role
                    </h2>
                    <label class="inline-block text-sm font-medium dark:text-gray-400">
                        Role info
                    </label>

                </div>

                <form action="{{ route('admin.role.update', $role->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <!-- Grid -->
                    <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                        <div class="sm:col-span-3">
                            <label for="role-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Role Name
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <input id="role-name" type="text" name="name"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="admin" value="{{ $role->name }}">
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
        </div>
        <!-- End Card -->

        <!-- Card Section -->
        <div class="w-full pt-5 px-4 sm:px-6 md:px-8">


            <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 text-center">
                        Roles Permissions
                    </h2>
                </div>
                <div class="flex space-x-2 p-2">
                    @if ($role->permissions)
                        @foreach ($role->permissions as $role_permission)
                            <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" method="POST"
                                action="{{ route('admin.role.permissions.revoke', [$role->id, $role_permission->id]) }}"
                                onsubmit="return confirm('Are you sure to delete this permission?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit">{{ $role_permission->name }}</button>
                            </form>
                        @endforeach
                    @endif
                </div>
                <form method="POST" action="{{ route('admin.role.permissions', $role->id) }}">
                    @csrf
                    <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                        <div class="sm:col-span-3">
                            <label for="role-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Permission
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <select id="permission" name="permission" autocomplete="permission-name"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->name ?? '' }}">{{ $permission->name ?? '' }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="mt-5 flex justify-end gap-x-2">
                        <input type="submit" value="Assign"
                            class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">

                    </div>

                </form>

            </div>
            <!-- End Card Section -->
        </div>
    </x-slot>
</x-admin-layout>
