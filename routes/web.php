<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Route::get('/admin', function () {
//     return view('admin.index');
// })->middleware(['auth', 'role:admin'])->name('admin.index');

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/', [HomeController::class, 'index'])->name('admin.index');

        // Roles

        Route::get('/role', [RoleController::class, 'role'])->name('admin.role');

        Route::get('/role/create', [RoleController::class, 'roleCreatePage'])->name('admin.role.createPage');
        
        Route::post('/role/create', [RoleController::class, 'create'])->name('admin.role.create');

        Route::get('/role/edit/{id}', [RoleController::class, 'roleEditPage'])->name('admin.role.edit');

        Route::put('/role/update/{id}', [RoleController::class, 'roleUpdate'])->name('admin.role.update');

        Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('admin.role.permissions');

        Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('admin.role.permissions.revoke');



        // Permissions

        Route::get('/permission', [PermissionController::class, 'permission'])->name('admin.permission');
        
        Route::get('/permission/create', [PermissionController::class, 'permissionCreatePage'])->name('admin.permission.createPage');
        
        Route::post('/permission/create', [PermissionController::class, 'permissionCreate'])->name('admin.permission.create');

        Route::get('/permission/edit/{id}', [PermissionController::class, 'permissionEditPage'])->name('admin.permission.edit');

        Route::put('/permission/update/{id}', [PermissionController::class, 'permissionUpdate'])->name('admin.permission.update');

        Route::post('/permissions/{permission}/roles', [PermissionController::class, 'givePermission'])->name('admin.permissions.role');

        Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('admin.permissions.roles.revoke');


        // Users

        Route::get('/users', [UserController::class, 'user'])->name('admin.user');


    });

});












require __DIR__ . '/auth.php';