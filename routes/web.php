<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MenusController;
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



Route::get('/', function () {
    
    $menus = [
        "b1"=> ["title"=> "Bread Basket", "body"=> "Assortment of fresh baked fruit breads and muffins 5.50"],
        "b2"=> ["title"=> "Honey Almond Granola with Fruits", "body"=> "Natural cereal of honey toasted oats, raisins, almonds and dates 7.00"],
        "b3"=> ["title"=> "Belgian Waffle", "body"=> "Vanilla flavored batter with malted flour 7.50"],
        "b4"=> ["title"=> "Scrambled eggs", "body"=> "Scrambled eggs, roasted red pepper and garlic, with green onions 7.50"],
        "b5"=> ["title"=> "Blueberry Pancakes", "body"=> "With syrup, butter and lots of berries 8.50"],

];
return view('home', ["data"=> $menus]);

});

Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/about-us', function () {
    return view('about-us');
});


Route::resource('/menus',MenusController::class);

Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');