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
Route::get('/dashbord',[BackendRoutesController::class, 'dashbordPage'])->name('dashbord');






// Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
});
