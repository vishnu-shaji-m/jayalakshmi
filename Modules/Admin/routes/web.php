<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Controllers\AdminSettingsController;
use Modules\Admin\Http\Controllers\BannerAndMetaTagController;
use Modules\Admin\Http\Controllers\BlogController;
use Modules\Admin\Http\Controllers\CareerController;
use Modules\Admin\Http\Controllers\CareerEnquiryController;
use Modules\Admin\Http\Controllers\CityController;
use Modules\Admin\Http\Controllers\ContactEnquiryController;
use Modules\Admin\Http\Controllers\CountryController;
use Modules\Admin\Http\Controllers\DashboardController;
use Modules\Admin\Http\Controllers\FaqController;
use Modules\Admin\Http\Controllers\HomeAboutController;
use Modules\Admin\Http\Controllers\HomeFeatureController;
use Modules\Admin\Http\Controllers\JobTypeController;
use Modules\Admin\Http\Controllers\PolicyController;
use Modules\Admin\Http\Controllers\SiteSettingsController;
use Modules\Admin\Http\Controllers\SliderController;
use Modules\Admin\Http\Controllers\StateController;

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

// Define routes under the admin panel prefix
Route::prefix(app('backend.prefix'))->group(function () {
    // Admin login routes
    Route::get('login', [AdminController::class, 'show'])->name('admin.show');
    Route::post('login', [AdminController::class, 'login'])->name('admin.login');

    // Group routes that require the admin to be authenticated
    Route::middleware('admin.auth')->group(function () {
        // Admin logout route
        Route::post('logout', [AdminController::class, 'logout'])->name('admin.logout');

        // Redirect root to dashboard
        Route::get('/', function () {
            return redirect()->route('dashboard.index');
        });
        Route::resource('dashboard', DashboardController::class)->only('index')->names('dashboard');
        Route::resource('admin-settings', AdminSettingsController::class)->only(['index', 'edit', 'update'])->names('admin-settings');
        // updating the sort order
        Route::post('admin-settings/update-sort-order', [AdminSettingsController::class, 'updateSortOrder'])->name('admin-settings.updateSortOrder');
        // updating the toggle status
        Route::post('admin-settings/update-toggle-status', [AdminSettingsController::class, 'updateToggleStatus'])->name('admin-settings.updateToggleStatus');
        Route::get('site-settings/edit', [SiteSettingsController::class, 'edit'])->name('site-settings.edit');
        Route::put('site-settings/{siteSettings}/update', [SiteSettingsController::class, 'update'])->name('site-settings.update');
        Route::resource('sliders', SliderController::class)->except(['show'])->names('sliders');
        Route::get('home-about/edit', [HomeAboutController::class, 'edit'])->name('home-about.edit');
        Route::put('home-about/{homeAbout}/update', [HomeAboutController::class, 'update'])->name('home-about.update');
        Route::resource('home-features', HomeFeatureController::class)->except(['show'])->names('home-features');
        Route::resource('faq', FaqController::class)->except(['show'])->names('faq');
        Route::resource('blogs', BlogController::class)->names('blogs');
        Route::resource('banner-and-meta-tags', BannerAndMetaTagController::class)->only(['index', 'edit', 'update'])->names('banner-and-meta-tags');
        Route::resource('policies', PolicyController::class)->except(['show'])->names('policies');
        Route::resource('countries', CountryController::class)->only(['index'])->names('countries');
        Route::resource('states', StateController::class)->only(['index'])->names('states');
        Route::resource('cities', CityController::class)->only(['index'])->names('cities');
        Route::get('get-cities', [CityController::class, 'getCities'])->name('get-cities');
        Route::resource('job-types', JobTypeController::class)->only(['index'])->names('job-types');
        Route::resource('careers', CareerController::class)->except(['show'])->names('careers');
        Route::get('career-enquiries/export', [CareerEnquiryController::class, 'export'])->name('career-enquiries.export');
        Route::resource('career-enquiries', CareerEnquiryController::class)->only(['index', 'show', 'destroy'])->names('career-enquiries');
        Route::get('contact-enquiries/export', [ContactEnquiryController::class, 'export'])->name('contact-enquiries.export');
        Route::resource('contact-enquiries', ContactEnquiryController::class)->only(['index', 'show', 'destroy'])->names('contact-enquiries');
    });
});
