<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    //

    public function permission()
    {
        $permission = Permission::all();
        return view('admin.permission.index', compact('permission'));
    }
}