<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendRoutesController;

Route::get('/',[FrontendRoutesController::class, 'homePage'])->name('homePage');
Route::get('/About',[FrontendRoutesController::class, 'aboutPage'])->name('aboutPage');
Route::get('/Resume',[FrontendRoutesController::class, 'resumePage'])->name('resumePage');
Route::get('/Services',[FrontendRoutesController::class, 'servicesPage'])->name('servicesPage');
Route::get('/Projects',[FrontendRoutesController::class, 'projectsPage'])->name('projectsPage');
Route::get('/Contact',[FrontendRoutesController::class, 'contactPage'])->name('contactPage');
// Page Routes End //
