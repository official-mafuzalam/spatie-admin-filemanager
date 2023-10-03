<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    //

    public function role()
    {
        $roles = Role::all();
        return view('admin.role.index', compact('roles'));
    }

    public function createPage(){

        return view('admin.role.create');

    }
}