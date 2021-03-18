<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MainController;

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



//Route::get('/language/{lang}', function ($lang) {
//    \Illuminate\Support\Facades\App::setLocale($lang);
//    return view('welcome');
//});

Route::middleware(['set_locale'])->group(function (){
    Route::get('/', function () {
        return view('welcome');
    });

    Route::post('userInfo/create', [\App\Http\Controllers\UserInfoController::class, 'create'])->name('apply');

//Route::get('language/change/{locale}', 'LanguageController@changeLanguage');

    Route::get('language/{locale}', [LanguageController::class, 'changeLanguage']);

    Route::get('login', [MainController::class, 'login_page']);

    Route::post('login', [MainController::class, 'login']);

    Route::get('index', [MainController::class, 'index']);

    Route::get('export_excel/excel', [MainController::class, 'excel'])->name('export_excel.excel');

}
);

Route::post('userInfo/create', [\App\Http\Controllers\UserInfoController::class, 'create'])->name('apply');

//Route::get('language/change/{locale}', 'LanguageController@changeLanguage');

Route::get('language/{locale}', [LanguageController::class, 'changeLanguage']);

Route::get('login', [MainController::class, 'login_page']);

Route::post('login', [MainController::class, 'login']);

Route::get('index', [MainController::class, 'index']);

Route::get('export_excel/excel', [MainController::class, 'excel'])->name('export_excel.excel');
