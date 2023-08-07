<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FooterMenuController;
use App\Http\Controllers\FooterSubMenuController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NavbarMenusController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingpageController::class, 'index']);

Route::get('/dashboard', function () {
    return to_route('navbar');
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.send');

    Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.send');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/navbar', [NavbarController::class, 'index'])->name('navbar')->middleware('auth');
    Route::get('/navbar/add', [NavbarController::class, 'create'])->name('navbar.add')->middleware('auth');
    Route::post('/navbar/add', [NavbarController::class, 'store'])->name('navbar.create');
    Route::post('/navbar/edit', [NavbarController::class, 'update'])->name('navbar.edit');
    Route::get('/navbar/delete/{id}', [NavbarController::class, 'destroy'])->name('navbar.delete');

    Route::post('/navbar/addmenu', [NavbarMenusController::class, 'store'])->name('navbar.createmenu');
    Route::get('/navbar/editmenu/{id}', [NavbarMenusController::class, 'edit'])->name('navbar.editmenu')->middleware('auth');
    Route::post('/navbar/editmenu/{id}', [NavbarMenusController::class, 'update'])->name('navbar.updatemenu');
    Route::get('/navbar/deletemenu/{id}', [NavbarMenusController::class, 'destroy'])->name('navbar.deletemenu');

    Route::get('/section', [SectionController::class, 'index'])->name('section')->middleware('auth');
    Route::get('/section/add', [SectionController::class, 'create'])->name('section.add')->middleware('auth');
    Route::post('/section/add', [SectionController::class, 'store'])->name('section.create');
    Route::get('/section/edit/{id}', [SectionController::class, 'edit'])->name('section.edit')->middleware('auth');
    Route::post('/section/edit/{id}', [SectionController::class, 'update'])->name('section.update');
    Route::get('/section/delete/{id}', [SectionController::class, 'destroy'])->name('section.delete');

    Route::post('/card/add', [CardController::class, 'store'])->name('card.create');
    Route::get('/card/edit/{id}', [CardController::class, 'edit'])->name('card.edit')->middleware('auth');
    Route::post('/card/edit/{id}', [CardController::class, 'update'])->name('card.update');
    Route::get('/card/delete/{id}', [CardController::class, 'destroy'])->name('card.delete');

    Route::get('/footer', [FooterController::class, 'index'])->name('footer')->middleware('auth');
    Route::get('/footer/add', [FooterController::class, 'create'])->name('footer.add')->middleware('auth');
    Route::post('/footer/add', [FooterController::class, 'store'])->name('footer.create');
    Route::get('/footer/edit/', [FooterController::class, 'edit'])->name('footer.edit')->middleware('auth');
    Route::post('/footer/edit', [FooterController::class, 'update'])->name('footer.update');
    Route::get('/footer/delete/{id}', [FooterController::class, 'destroy'])->name('footer.delete');

    Route::post('/footer/addmenu', [FooterMenuController::class, 'store'])->name('footer.createmenu');
    Route::get('/footer/editmenu/{id}', [FooterMenuController::class, 'edit'])->name('footer.editmenu')->middleware('auth');
    Route::post('/footer/editmenu/{id}', [FooterMenuController::class, 'update'])->name('footer.updatemenu');
    Route::get('/footer/deletemenu/{id}', [FooterMenuController::class, 'destroy'])->name('footer.deletemenu');

    Route::post('/footer/addsubmenu', [FooterSubMenuController::class, 'store'])->name('footer.createsubmenu');
    Route::get('/footer/editsubmenu/{id}', [FooterSubMenuController::class, 'edit'])->name('footer.editsubmenu')->middleware('auth');
    Route::post('/footer/editsubmenu/{id}', [FooterSubMenuController::class, 'update'])->name('footer.updatesubmenu');
    Route::get('/footer/deletesubmenu/{id}', [FooterSubMenuController::class, 'destroy'])->name('footer.deletesubmenu');
});
