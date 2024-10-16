<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendRoutesController;
use App\Http\Controllers\Backend\BackendRoutesController;

Route::get('/',[FrontendRoutesController::class, 'homePage'])->name('homePage');
Route::get('/About',[FrontendRoutesController::class, 'aboutPage'])->name('aboutPage');
Route::get('/Resume',[FrontendRoutesController::class, 'resumePage'])->name('resumePage');
Route::get('/Services',[FrontendRoutesController::class, 'servicesPage'])->name('servicesPage');
Route::get('/Projects',[FrontendRoutesController::class, 'projectsPage'])->name('projectsPage');
Route::get('/Contact',[FrontendRoutesController::class, 'contactPage'])->name('contactPage');
// Page Routes End //


Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])
->group(function () 
{
Route::get('/admin_dashbord',[BackendRoutesController::class, 'admin_dashbord'])->name('admin_dashbord');
Route::get('/admin_testimunial',[BackendRoutesController::class, 'admin_testimunial'])->name('admin_testimunial');
Route::get('/admin_testimunial_edit',[BackendRoutesController::class, 'admin_testimunial_edit'])->name('admin_testimunial_edit');
Route::get('/admin_service',[BackendRoutesController::class, 'admin_service'])->name('admin_service');
Route::get('/admin_service_edit',[BackendRoutesController::class, 'admin_service_edit'])->name('admin_service_edit');
Route::get('/admin_contactForm_edit',[BackendRoutesController::class, 'admin_contactForm_edit'])->name('admin_contactForm_edit');






// Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
});
