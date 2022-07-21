<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**
 * 
 * Authentication route
 * 
 * 
 */



Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login/check', [AuthController::class, 'loginCheck'])->name('login.check');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/blog-detailed', [PageController::class, 'blogDetailed']);
Route::get('/blog-list', [PageController::class, 'bloglist']);
Route::get('/blog-detailed', [PageController::class, 'blogDetailed']);
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/project-detailed', [PageController::class, 'projectDetailed'])->name('project.detailed');
Route::get('/career', [PageController::class, 'career'])->name('career');
Route::get('/case-study', [PageController::class, 'caseStudy'])->name('case.study');
Route::get('/projects', [PageController::class, 'project1']);
Route::get('/projects-2', [PageController::class, 'project2']);
Route::get('/service-detailed', [PageController::class, 'serviceDetailed']);
Route::get('/social-media-marketing', [PageController::class, 'socialMediaMarketing']);
Route::get('/search-engine-optimization', [PageController::class, 'searchEngineOptimization']);
Route::get('/writing-solutions', [PageController::class, 'writingSolutions']);
Route::get('/online-advertising', [PageController::class, 'onlineAdvertising']);
Route::get('/content-marketing', [PageController::class, 'contentMarketing'])->name('content.marketing');
Route::get('/programming-tech', [PageController::class, 'programmingTech'])->name('programming.tech');
Route::get('/design-photography', [PageController::class, 'designPhotography'])->name('design.photography');
Route::get('/video-animations', [PageController::class, 'videoAnimations'])->name('video.animations');
Route::get('/event-managemant', [PageController::class, 'eventManagemant'])->name('event.managemant');
Route::get('/404', [PageController::class, 'pages404']);
Route::get('/blog/show/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/store/subscription', [SubscriptionController::class, 'store'])->name('store.subscription');
Route::post('/store/contact/info', [ContactController::class, 'store'])->name('store.contact.info');

//project details route
Route::get('/atr', [ProjectController::class, 'atrDetails'])->name('atr.details');
Route::get('uct', [ProjectController::class, 'uctDetails'])->name('uct.details');
Route::get('itec', [ProjectController::class, 'itecDetails'])->name('itec.details');

Route::middleware(['auth'])->name('admin.')->prefix('admin')->group(function () {


    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

    /**  Category  **/
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::post('store/category', [CategoryController::class, 'store'])->name('store.category');
    Route::post('update/category', [CategoryController::class, 'update'])->name('update.category');
    Route::post('destroy/category', [CategoryController::class, 'destroy'])->name('destroy.category');

    /** Tag  **/
    Route::get('/tag', [TagController::class, 'index'])->name('tag');
    Route::post('store/tag', [TagController::class, 'store'])->name('store.tag');
    Route::post('update/tag', [TagController::class, 'update'])->name('update.tag');
    Route::post('destroy/tag', [TagController::class, 'destroy'])->name('destroy.tag');


    /** Blog  **/
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::post('/store/blog', [BlogController::class, 'store'])->name('store.blog');





    /** logout */
    Route::get('/logout', [AuthController::class, 'logout']);
});
