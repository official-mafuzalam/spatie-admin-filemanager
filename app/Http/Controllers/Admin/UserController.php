<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    //

    public function user()
    {

        $users = User::all();

        return view('admin.user.index', compact('users'));


    }

    public function show(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all();

        return view('admin.user.role', compact('user', 'roles', 'permissions'));
    }

    public function assignRole(Request $request, User $user)
    {
        if ($user->hasRole($request->role)) {
            return back()->with('success-trash', 'Role exists.');
        }

        $user->assignRole($request->role);
        return back()->with('success', 'Role assigned.');
    }

    public function removeRole(User $user, Role $role)
    {
        if ($user->hasRole($role)) {
            $user->removeRole($role);
            return back()->with('success-delete', 'Role removed.');
        }

        return back()->with('success', 'Role not exists.');
    }

    public function givePermission(Request $request, User $user)
    {
        if ($user->hasPermissionTo($request->permission)) {
            return back()->with('success-trash', 'Permission exists.');
        }
        $user->givePermissionTo($request->permission);
        return back()->with('success', 'Permission added.');
    }

    public function revokePermission(User $user, Permission $permission)
    {
        if ($user->hasPermissionTo($permission)) {
            $user->revokePermissionTo($permission);
            return back()->with('success-delete', 'Permission revoked.');
        }
        return back()->with('success', 'Permission does not exists.');
    }

    public function destroy(User $user)
    {
        if ($user->hasAnyRole(['super_admin', 'admin'])) {
            return back()->with('success-trash', 'You cannot delete a user with super_admin or admin role.');
        }

        $user->delete();

        return back()->with('success-delete', 'User deleted.');
    }

}