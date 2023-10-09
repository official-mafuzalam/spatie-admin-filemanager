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
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\PublicController;

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



// Public

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/about-us', [PublicController::class, 'about'])->name('about_us');

Route::get('/services', [PublicController::class, 'services'])->name('services');

Route::get('/products/polytechnic-management-system', [PublicController::class, 'polytechnic'])->name('polytechnic');

Route::get('/products/collage-management-system', [PublicController::class, 'collage'])->name('collage');

Route::get('/products/school-management-system', [PublicController::class, 'school'])->name('school');

Route::get('/products/shop-management-system', [PublicController::class, 'shop'])->name('shop');

Route::get('/products/ticket-management-system', [PublicController::class, 'ticket'])->name('ticket');

Route::get('/products/ecommerce-management-system', [PublicController::class, 'ecommerce'])->name('ecommerce');

Route::get('/products/custom-software', [PublicController::class, 'custom'])->name('custom');

Route::get('/blogs', [PublicController::class, 'blog'])->name('blog');

Route::get('/blog/{id}', [PublicController::class, 'blog_single'])->name('blog_single');

Route::get('/contact', [PublicController::class, 'contactPage'])->name('contactPage');

Route::post('/contact', [PublicController::class, 'contact'])->name('contact');

Route::post('/subscribe', [PublicController::class, 'subscribe'])->name('subscribe');

Route::get('/privacy-policy', [PublicController::class, 'privacy'])->name('privacy-policy');

Route::get('/our-mission-and-vision', [PublicController::class, 'missionVision'])->name('missionVision');










// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




// login User Profile

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Super Admin Only

Route::middleware(['auth', 'role:super_admin'])->group(function () {

    Route::prefix('admin')->group(function () {

        // login User info
        Route::get('/info', function () {
            $user = Auth::user();
            echo "<pre>";
            print_r($user);
            echo "</pre>";
        });

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

        Route::get('/check-permissions', [PermissionController::class, 'checkPer']);

    });
});



// Super Admin, Admin.

Route::middleware(['auth', 'role:super_admin|admin'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/', [HomeController::class, 'index'])->name('admin.index');


        // Images

        Route::get('/image-upload', [ImageController::class, 'index'])->name('admin.image_add');

        Route::post('/image-upload', [ImageController::class, 'store'])->name('image.store');

        Route::get('/images_all', [ImageController::class, 'images_all'])->name('admin.images_all');

        Route::delete('/delete-image/{folder}/{image}', [ImageController::class, 'deleteImage'])->name('deleteImage');

        Route::delete('/delete-folder/{folder}', [ImageController::class, 'deleteFolder'])->name('deleteFolder');

    });
});

// Super Admin, Admin, Manager, User.

Route::middleware(['auth', 'role:super_admin|admin|manager|user'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/', [HomeController::class, 'index'])->name('admin.index');


        // Blog

        Route::get('/add_blog', [BlogController::class, 'add_blogPage'])->name('admin.add_blogPage');

        Route::post('/add_blog', [BlogController::class, 'add_blog'])->name('admin.add_blog');

        Route::get('/blog_all', [BlogController::class, 'blog_allPage'])->name('admin.blog_allPage');

        Route::get('/blog_edit/{id}', [BlogController::class, 'blog_edit'])->name('admin.blog_edit');

        Route::post('/blog_update/{id}', [BlogController::class, 'blog_update'])->name('admin.blog_update');

        Route::get('/blog_delete/{id}', [BlogController::class, 'blog_delete'])->name('admin.blog_delete');

        Route::get('/blog_status/{status}/{id}', [BlogController::class, 'blog_status'])->name('admin.blog_status');


        // Announcement


        Route::get('/announcement', [AnnouncementController::class, 'announcementPage'])->name('admin.announcementPage');

        Route::get('/announcement_add', [AnnouncementController::class, 'announcementAddPage'])->name('admin.announcementAddPage');

        Route::post('/announcement_add', [AnnouncementController::class, 'announcementAdd'])->name('admin.announcementAdd');

        Route::get('/announcement_edit/{id}', [AnnouncementController::class, 'announcement_edit'])->name('admin.announcement_edit');

        Route::post('/announce_update/{id}', [AnnouncementController::class, 'announcement_update'])->name('admin.announcement_update');

        Route::get('/announcement_delete/{id}', [AnnouncementController::class, 'announcement_delete'])->name('admin.announcement_delete');

        Route::get('/announcement_status/{status}/{id}', [AnnouncementController::class, 'announcement_status'])->name('admin.announcement_status');


        // Subscriber

        Route::get('/subscribers', [AnnouncementController::class, 'subscribers'])->name('admin.subscribers');


        // Account

        Route::get('/account', [AccountController::class, 'index'])->name('admin.accountPage');
        
        Route::get('/deposit_all', [AccountController::class, 'deposit_allPage'])->name('admin.deposit_allPage');
        
        Route::get('/deposit', [AccountController::class, 'depositPage'])->name('admin.depositPage');
       
        Route::post('/deposit', [AccountController::class, 'deposit'])->name('admin.deposit');

        Route::get('/cost_all', [AccountController::class, 'cost_allPage'])->name('admin.cost_allPage');

        Route::get('/cost', [AccountController::class, 'costPage'])->name('admin.costPage');

        Route::post('/cost', [AccountController::class, 'cost'])->name('admin.cost');
       


    });

});












require __DIR__ . '/auth.php';