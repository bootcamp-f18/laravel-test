<?php

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
    return view('welcome');
});

Route::get('/things', function() {

    // return "Hello, there!";
    // return redirect('http://www.google.com');

    // $text = '';
    // for ($i=0; $i<100; $i++) {
    //     $text .= "All work and no play makes Janine a dull girl.\n";
    // }
    // return $text;

    return view('things.index');

});

Route::get('/things/raindrops', function() { return view('things.raindrops'); });
Route::get('/things/whiskers', function() {

    $kittens = [
        'https://kittenrescue.org/wp-content/uploads/2017/03/KittenRescue_KittenCareHandbook.jpg',
        'https://images.wallpaperscraft.com/image/kitten_briton_look_kid_96414_1280x720.jpg'
    ];

    return view('things.whiskers', compact('kittens'));

});
Route::get('/things/pizza', function() { return view('things.pizza'); });
Route::get('/things/paintball', function() { return view('things.paintball'); });
