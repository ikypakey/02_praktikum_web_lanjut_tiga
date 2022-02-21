<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

use App\Http\Controllers\PageHome;
use App\Http\Controllers\PageProducts;
use App\Http\Controllers\PageNews;
use App\Http\Controllers\PageProgram;
use App\Http\Controllers\PageAboutUs;
use App\Http\Controllers\PageContactUs;

//--Route Home -Menampilkan Halaman Home----//
Route::get('/', [PageHome::class, 'index']);

//--Route Prefix Category----//
Route::prefix('/category')->group(function(){
    Route::get('/marbel-edu-games', [PageProducts::class, 'marble']);
    Route::get('/riri-story-books', [PageProducts::class, 'storyBooks']);
    Route::get('/kolak-kids-songs', [PageProducts::class, 'kidsSong']);
});

//--Route Param News--//
Route::get('news', [PageNews::class, 'news']);
Route::get('news/{title}', [PageNews::class, 'newsTitle']);

//--Route Prefix Program--//
Route::prefix('/program')->group(function(){
    Route::get('/karir', [PageProgram::class, 'karir']);

    Route::get('/magang', [PageProgramr::class, 'magang']);

    Route::get('/kunjunganIndustri', [PageProgram::class, 'kunjunganIndustri']);
});

//--Route Biasa About Us--//
Route::get('/about-us',[PageAboutUs::class, 'aboutUs']);

//--Route Resource Contact Us--//
Route::resource('/contact-us', PageContactUs::class,);
