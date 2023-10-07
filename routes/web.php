<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\AnnouncementController;

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

Route::get('/session', function () {

    $session = session()->all();

    echo "<pre>";
    print_r($session);
    echo "</pre>";


});

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

Route::middleware(['role:editor'])->group(function () {
    Route::get('editor/dashboard', 'EditorController@dashboard')->name('editor.dashboard');
    // Other editor routes
});

Route::middleware(['role:user'])->group(function () {
    Route::get('user/dashboard', 'UserController@dashboard')->name('user.dashboard');
    // Other user routes
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

        Route::get('/users/{user}', [UserController::class, 'show'])->name('admin.users.show');

        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
        
        Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('admin.users.roles');
        
        Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('admin.users.roles.remove');
        
        Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('admin.users.permissions');
        
        Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('admin.users.permissions.revoke');

        Route::get('/check-permissions',[PermissionController::class, 'checkPer']);



        // Images
        
        Route::get('/image-upload', [ImageController::class, 'index'])->name('admin.image_add');

        Route::post('/image-upload', [ImageController::class, 'store'])->name('image.store');

        Route::get('/images_all', [ImageController::class, 'images_all'])->name('admin.images_all');

        Route::delete('/delete-image/{folder}/{image}', [ImageController::class, 'deleteImage'])->name('deleteImage');

        Route::delete('/delete-folder/{folder}', [ImageController::class, 'deleteFolder'])->name('deleteFolder');


        // Blog

        Route::get('/add_blog', [BlogController::class, 'add_blogPage'])->name('admin.add_blogPage');

        Route::post('/add_blog', [BlogController::class, 'add_blog'])->name('admin.add_blog');

        Route::get('/blog_all', [BlogController::class, 'blog_allPage'])->name('admin.blog_allPage');

        Route::get('/blog_edit/{id}', [BlogController::class, 'blog_edit'])->name('admin.blog_edit');

        Route::post('/blog_update/{id}', [BlogController::class, 'blog_update'])->name('admin.blog_update');

        Route::get('/blog_delete/{id}', [BlogController::class, 'blog_delete'])->name('admin.blog_delete');

        Route::get('/blog_status/{status}/{id}', [BlogController::class, 'blog_status'])->name('admin.blog_status');

        
        

    });

});












require __DIR__ . '/auth.php';