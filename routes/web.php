<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/say/{name}',function($name){
    echo "<h1>Hello $name</h1>";
}); */
/* Route::get('/say/{name?}', function ($name = 'MY NAME') {
    echo "<h1>Hello $name</h1>";
});
Route::get('/say/{name}/{age}', function ($name, $age) {
    echo "<h1>Hello $name Your Age is $age</h1>";
});

Route::get('/test/{name}/{age}', function ($name, $age) {
    echo "<h1>Hello $name Your Age is $age</h1>";
}); */

/* Route::get('product/{id}/{name}',function($id,$name){
    echo "product ID is $id and name is $name";
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']); */

/* Route::get('product/{id}/{name}',function($id){
    echo "product ID is $id ";
})->whereNumber('id')->whereAlphaNumeric('name'); */


/* Route::get('/user/{id}', function (string $id) {
    echo $id;
}); */

/* Route::get('admin/product/show/hamada',function(){
    echo "Product Details !";
})->name("product.show");
 */


Route::prefix('users')->as("users.")->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/delete', [UserController::class, 'delete'])->name('delete');
});

Route::prefix('calculator')->as("calculator.")->group(function () {
    Route::get('/sum/{x}/{y}/{z}',[CalculatorController::class,'sum'])->name('sum');

    Route::get('show',[CalculatorController::class,'show'])->name('show');
});
