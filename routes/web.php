<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObituaryController;

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

use App\Http\Controllers\LandingController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\AnimalsController;


Route::get('dashboard', function()
{
    return View::make('content');
});

Route::resource('dashboard', ObituaryController::class);
Route::get('/', [LandingController::class, 'index'])->name('user.home');
Route::get('/pets' , [AnimalsController::class, 'displayall'])->name('user.pets');
Route::controller(AnimalsController::class)->group(function(){
    Route::get("/pets-profile/{id}",'displaypets');
    Route::get('/pets' , 'displayall')->name('user.pets');
    Route::get('/obituary' , 'displaydeceased')->name('obituary.pets');;
   
});


// Route::middleware(['auth:web'])->group(function () {

// });


// Route::middleware(['auth:web_admin'])->group(function () {
// }); 






/* ARTISAN */
Route::get('migrate', function () {
    Artisan::call('migrate');
});
// Route::get('migrate-fresh', function () {
//     Artisan::call('migrate:fresh');
// });
Route::get('db-seeder', function () {
    Artisan::call('db:seed', [
        '--class' => DatabaseSeeder::class
    ]);
});




Route::get('route-cache', function () {
    Artisan::call('route:cache');
});
Route::get('route-clear', function () {
    Artisan::call('route:clear');
});
Route::get('route-list', function () {
    Artisan::call('route:list');
});

Route::get('config-clear', function () {
    Artisan::call('config:clear');
});
Route::get('cache-clear', function () {
    Artisan::call('cache:clear');
});

Route::get('view-clear', function () {
    Artisan::call('view:clear');
});

Route::get('sockets/serve', function () {
    \Illuminate\Support\Facades\Artisan::call('websockets:serve --port=6001');
    // Artisan::call('websockets:serve');
});
