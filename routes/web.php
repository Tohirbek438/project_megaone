<?php

use Illuminate\Support\Facades\Route;

Route::get('/lang/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return redirect()->back();
})->name('language');
Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])->name('home');
Route::get('/contact', [\App\Http\Controllers\SiteController::class, 'contact'])->name('site.contact');
Route::get('/blog-index/{name?}', [\App\Http\Controllers\BlogController::class, 'index'])->name('blogs-index');
Route::get('/blogs-show/{id}', [\App\Http\Controllers\BlogController::class, 'show'])->name('site.show');
Route::get('/filter',[\App\Http\Controllers\FilterBlogController::class,'filter'])->name('filter');
Route::post('/save-appointments',[\App\Http\Controllers\AppointmentSaveController::class,'saveAppointments'])->name('save-appointments');
Route::middleware('auth')->group(function () {
    Route::get('/admin/index', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::resource('admin/blog', \App\Http\Controllers\AdminBlogController::class);
    Route::resource('admin/category-blog', \App\Http\Controllers\BlogCategoryController::class);
    Route::resource('admin/media', \App\Http\Controllers\MediaAdminController::class);
    Route::resource('admin/category-media', \App\Http\Controllers\CategoryMediaController::class);
    Route::resource('admin/department', \App\Http\Controllers\DepartmentController::class);
    Route::resource('admin/comment', \App\Http\Controllers\CommentController::class);
    Route::resource('admin/treatment', \App\Http\Controllers\TreatmentController::class);
    Route::resource('admin/information', \App\Http\Controllers\InformationPatientController::class);
    Route::resource('admin/page', \App\Http\Controllers\PageController::class);
    Route::resource('admin/menu', \App\Http\Controllers\MenuController::class);
    Route::resource('admin/home', \App\Http\Controllers\HomePageController::class);
    Route::resource('admin/header', \App\Http\Controllers\AboutController::class);
    Route::resource('admin/contact', \App\Http\Controllers\ContactController::class);
    Route::resource('user/show', \App\Http\Controllers\AdminUserController::class);
    Route::resource('appointment/table',\App\Http\Controllers\AppointmentController::class);
    Route::resource('appointment/form',\App\Http\Controllers\FormForAppointmentController::class);
    Route::get('admin/edit/{id}',[\App\Http\Controllers\ChangePasswordController::class,'ChangeEdit'])->name('parol.change');
    Route::put('admin/update/{id}',[\App\Http\Controllers\ChangePasswordController::class,'updatePassword'])->name('update.password');
    Route::get('/admin/category-gallery/{name}',[\App\Http\Controllers\MediaCategoryController::class,'category'])->name('categoryforGallery');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [\App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('appointment/table',\App\Http\Controllers\AppointmentController::class);
require __DIR__ . '/auth.php';
