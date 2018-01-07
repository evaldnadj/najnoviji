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
use Illuminate\routes\Request;
use App\Adrese;

Route::get('/', function () {
    return view('welcome');
});

Route::get('neka', function () {
    $niz= ['Jedan','Dva','Tri'];
    return view('neka',compact('niz'));
});

Route::get('nova/{a}', function ($a) {
    //return view('neki.nekinovi');
    return $a;
});

Route::get('nekinovi', function () {
    return view('neki.nekinovi');
});

Route::get('josjedna', function () {
    return view('josjedna');
});

Route::get('kon/{a}', 'NoviController@mika');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('adrese/stvori', function() {
    echo '<form method="POST" action="/adrese/stvori">
    <input type="text" name="ulica" placeholder="Ulica"><br>
    <input type="text" name="broj" placeholder="Broj"><br>
    <input type="text" name="grad" placeholder="Grad"><br>
    <input type="submit" value="Kreiraj adresu"><br>
    </form>'; 
});

Route::post('adrese/stvori', function(Request $request) {
    $post_data = $request->all();
    $adresa = Adrese::create($post_data);
});














