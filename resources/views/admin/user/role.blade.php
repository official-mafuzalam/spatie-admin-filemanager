<x-admin-layout>
    <x-slot name="main">

        @section('page-title')
            <title>User Roles Permissions</title>
        @endsection

        <!-- Card Section -->
        <div class="w-full pt-5 px-4 sm:px-6 md:px-8">

            <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 text-center">
                        User Role Permissions
                    </h2>
                    <label class="inline-block text-sm font-medium dark:text-gray-400">
                        User info
                    </label>

                </div>
                <!-- Grid -->
                <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                    <div class="sm:col-span-3">
                        <label for="role-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            User Name
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <input id="role-name" type="text" name="name"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            value="{{ $user->name }}" disabled>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="role-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            User Email
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <input id="role-name" type="text" name="name"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            value="{{ $user->email }}" disabled>
                    </div>

                </div>
                <!-- End Grid -->
            </div>
            <!-- End Card -->

            <div class="w-full pt-4 px-4 sm:px-6 md:px-8">

                <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 text-center">
                            User Roles
                        </h2>
                    </div>
                    <div class="flex space-x-2 p-2">
                        @if ($user->roles)
                            @foreach ($user->roles as $user_role)
                                <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" method="POST"
                                    action="{{ route('admin.users.roles.remove', [$user->id, $user_role->id]) }}"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">{{ $user_role->name }}</button>
                                </form>
                            @endforeach
                        @endif
                    </div>
                    <form method="POST" action="{{ route('admin.users.roles', $user->id) }}">
                        @csrf

                        <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                            <div class="sm:col-span-3">
                                <label for="role"
                                    class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                    Roles
                                </label>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-9">
                                <select id="role" name="role" autocomplete="role-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
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
            </div>


            <div class="w-full pt-4 px-4 sm:px-6 md:px-8">


                <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 text-center">
                            User Permissions
                        </h2>
                    </div>
                    <div class="flex space-x-2 mt-4 p-2">
                        @if ($user->permissions)
                            @foreach ($user->permissions as $user_permission)
                                <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" method="POST"
                                    action="{{ route('admin.users.permissions.revoke', [$user->id, $user_permission->id]) }}"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">{{ $user_permission->name }}</button>
                                </form>
                            @endforeach
                        @endif
                    </div>
                    <form method="POST" action="{{ route('admin.users.permissions', $user->id) }}">
                        @csrf

                        <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                            <div class="sm:col-span-3">
                                <label for="permission"
                                    class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                    Permissions
                                </label>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-9">
                                <select id="permission" name="permission" autocomplete="permission-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                    @foreach ($permissions as $permission)
                                        <option value="{{ $permission->name }}">{{ $permission->name }}</option>
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


            </div>
            <!-- End Card Section -->


        </div>
        {{-- <div class="py-12 w-full">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                    <div class="flex p-2">
                        <a href="{{ route('admin.user') }}"
                            class="px-4 py-2 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">Users Index</a>
                    </div>
                    <div class="flex flex-col p-2 bg-slate-100">
                        <div>User Name: {{ $user->name }}</div>
                        <div>User Email: {{ $user->email }}</div>
                    </div>
                    <div class="mt-6 p-2 bg-slate-100">
                        <h2 class="text-2xl font-semibold">Roles</h2>
                        <div class="flex space-x-2 mt-4 p-2">
                            @if ($user->roles)
                                @foreach ($user->roles as $user_role)
                                    <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                        method="POST"
                                        action="{{ route('admin.users.roles.remove', [$user->id, $user_role->id]) }}"
                                        onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">{{ $user_role->name }}</button>
                                    </form>
                                @endforeach
                            @endif
                        </div>
                        <div class="max-w-xl mt-6">
                            <form method="POST" action="{{ route('admin.users.roles', $user->id) }}">
                                @csrf
                                <div class="sm:col-span-6">
                                    <label for="role" class="block text-sm font-medium text-gray-700">Roles</label>
                                    <select id="role" name="role" autocomplete="role-name"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('role')
                                    <span class="text-red-400 text-sm">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <button type="submit"
                                class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Assign</button>
                        </div>
                        </form>
                    </div>
                    <div class="mt-6 p-2 bg-slate-100">
                        <h2 class="text-2xl font-semibold">Permissions</h2>
                        <div class="flex space-x-2 mt-4 p-2">
                            @if ($user->permissions)
                                @foreach ($user->permissions as $user_permission)
                                    <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                        method="POST"
                                        action="{{ route('admin.users.permissions.revoke', [$user->id, $user_permission->id]) }}"
                                        onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">{{ $user_permission->name }}</button>
                                    </form>
                                @endforeach
                            @endif
                        </div>
                        <div class="max-w-xl mt-6">
                            <form method="POST" action="{{ route('admin.users.permissions', $user->id) }}">
                                @csrf
                                <div class="sm:col-span-6">
                                    <label for="permission"
                                        class="block text-sm font-medium text-gray-700">Permission</label>
                                    <select id="permission" name="permission" autocomplete="permission-name"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        @foreach ($permissions as $permission)
                                            <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('name')
                                    <span class="text-red-400 text-sm">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <button type="submit"
                                class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Assign</button>
                        </div>
                        </form>

                    </div>
                </div>

            </div>
        </div> --}}


    </x-slot>
</x-admin-layout>
