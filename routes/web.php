<?php

use App\BizKimiz;
use App\Brand;
use App\Explore;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Slide;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', function (){
    return view('frontend.construction');
});

Route::group(['prefix' => 'dev', 'middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('frontend.main.index');
    })->name('homepage');

    Route::get('cikis', function (){
        Auth::logout();
        return redirect('/');
    });

    Route::get('contact', function (){
        return view('frontend.pages.contact');
    })->name('contact');

    Route::get('page/{slug}', [ PageController::class, 'viewPage' ])->name('phypages');
    Route::get('blog/{slug}', [ BlogController::class, 'viewBlog' ])->name('phyblogs');

});

Route::get('lang/{item?}', function ($item='tr'){
    Session::put('locale', $item);
    return Redirect::back();
})->name('lang');

//Route::get('contact', [ ContactController::class, 'index' ])->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
