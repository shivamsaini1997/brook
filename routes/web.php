<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\ProjectdetailController;
use App\Models\Feature;

// ------------Admin Route--------------

Route::get('/admin', [AdminController::class, 'adminlogin'])->name('admin-login');
Route::post('/admin', [AdminController::class, 'loginAdmin'])->name('admin-login');
Route::get('/register', [AdminController::class, 'adminRegister'])->name('admin-register');
Route::post('/register', [AdminController::class, 'registerStore'])->name('admin-register');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    // Dashboard Route
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Banner Routes
    Route::get('/admin/add-banner', [AdminController::class, 'addBanner'])->name('add-banner');
    Route::post('/admin/add-banner', [AdminController::class, 'store'])->name('add-banner');
    Route::get('/admin/manage-banner', [AdminController::class, 'managebanner'])->name('manage-banner');
    Route::get('/admin/manage-banner/edit/{id}', [AdminController::class, 'editbanner'])->name('edit-banner');
    Route::post('/admin/manage-banner/update/{id}', [AdminController::class, 'updatebanner'])->name('update-banner');
    Route::get('/admin/manage-banner/delete/{id}', [AdminController::class, 'deletebanner'])->name('delete-banner');
    Route::get('/admin/manage-banner/status/{id}/{status}', [AdminController::class, 'banner_status'])->name('banner-status');

    // Feature Routes
    Route::get('/admin/add-feature', [AdminController::class, 'addfeature'])->name('add-feature');
    Route::post('/admin/add-feature', [AdminController::class, 'storefeature']);
    Route::get('/admin/manage-feature', [AdminController::class, 'managefeature'])->name('manage-feature');
    Route::get('/admin/manage-feature/edit/{id}', [AdminController::class, 'editfeature'])->name('edit-feature');
    Route::post('/admin/manage-feature/update/{id}', [AdminController::class, 'updatefeature'])->name('update-feature');
    Route::get('/admin/manage-feature/status/{id}/{status}', [AdminController::class, 'featureSatus'])->name('feature-status');
    Route::get('/admin/manage-feature/delete/{id}', [AdminController::class, 'deletefeature'])->name('feature-delete');

    // About Routes
    Route::match(['POST', 'GET'], '/admin/add-about', [AdminController::class, 'storeAbout'])->name('add-about');
    Route::get('/admin/manage-about', [AdminController::class, 'manageAbout'])->name('manage-about');

    // Service Routes
    Route::get('/admin/add-service', [AdminController::class, 'addService'])->name('add-service');
    Route::post('/admin/add-service', [AdminController::class, 'serviceStore'])->name('service-store');
    Route::get('/admin/manage-service', [AdminController::class, 'manageService'])->name('manage-service');
    Route::get('/admin/manage-service/edit/{id}', [AdminController::class, 'editService'])->name('edit-service');
    Route::post('/admin/manage-service/update/{id}', [AdminController::class, 'updateService'])->name('update-service');
    Route::get('/admin/manage-service/delete/{id}', [AdminController::class, 'deleteService'])->name('delete-service');
    Route::get('/admin/manage-service/status/{id}/{status}', [AdminController::class, 'serviceStatus'])->name('status-service');

    // Testimonial Routes
    Route::get('/admin/add-testimonial', [AdminController::class, 'addTestimonial'])->name('add-testimonial');
    Route::post('/admin/add-testimonial', [AdminController::class, 'testimonialStore'])->name('testimonial-store');
    Route::get('/admin/manage-testimonial', [AdminController::class, 'manageTestimonial'])->name('manage-testimonial');
    Route::get('/admin/manage-testimonial/edit/{id}', [AdminController::class, 'editTestimonial'])->name('edit-testimonial');
    Route::post('/admin/manage-testimonial/update/{id}', [AdminController::class, 'updateTestimonial'])->name('update-testimonial');
    Route::get('/admin/manage-testimonial/delete/{id}', [AdminController::class, 'deleteTestimonial'])->name('delete-testimonial');

    // Project Routes
    Route::get('/admin/add-project', [AdminController::class, 'addProject'])->name('add-project');
    Route::post('/admin/add-project', [AdminController::class, 'projectStore'])->name('project-store');
    Route::get('/admin/manage-project', [AdminController::class, 'manageProject'])->name('manage-project');
    Route::get('/admin/manage-project/edit/{id}', [AdminController::class, 'editProject'])->name('edit-project');
    Route::post('/admin/manage-project/update/{id}', [AdminController::class, 'updateProject'])->name('update-project');
    Route::get('/admin/manage-project/delete/{id}', [AdminController::class, 'deleteProject'])->name('delete-project');
    Route::get('/admin/manage-project/status/{id}/{status}', [AdminController::class, 'projectStatus'])->name('status-project');

    // Blog Routes
    Route::match(['POST', 'GET'], '/admin/add-blog', [AdminController::class, 'addBlog'])->name('add-blog');
    Route::get('/admin/manage-blog', [AdminController::class, 'manageBlog'])->name('manage-blog');
    Route::match(['POST', 'GET'], '/admin/manage-blog/edit/{id}', [AdminController::class, 'editBlog'])->name('edit-blog');
    Route::get('/admin/manage-blog/status/{id}/{status}', [AdminController::class, 'blogStatus'])->name('status-blog');
    Route::get('/admin/manage-blog/delete/{id}', [AdminController::class, 'deleteBlog'])->name('delete-blog');
});
// ------------Admin Route--------------


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-details/{slug}', [BlogController::class, 'blogDetails'])->name('blog-details');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact',[ContactController::class,'contactForm'])->name('contact-form');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/project-detail/{slug}', [ProjectdetailController::class, 'index'])->name('project-detail');


Route::get('/upload', function () {
    return view('frontend.upload');
});
Route::post('/upload', [ContactController::class, 'upload'])->name('upload');
