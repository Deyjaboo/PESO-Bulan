<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return Redirect::to('UserDash');
});
Route::get('/log', function () {
     return view('log');
});
// Route::get('/', function () {
//     return view('auth.login');
// })->name('auth.login');

// Route::middleware(['auth','isAdmin'])->group(function(){
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     });
// });
//  Route::get('/dashboard', function () {
//      return view('dashboard');
//  })->middleware(['auth','isAdmin'])->name('dashboard');
Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
   
    Route::get('/Manageduser', function () {
      return view('Manageduser');
   });

   Route::get('/ManagedCompany', function () {
    return view('ManagedCompany');
 });


});
Route::get('/UserDash', function () {
    return view('UserDash');
 });

  Route::middleware(['auth'])->group(function(){
   

    Route::get('/jobs', function () {
        return view('jobs');
     });


     Route::get('/Chart', function () {
        return view('Chart');
     });

     Route::get('/companies', function () {
        return view('companies');
     });

    
 });

 Route::get('/Aboutus', function () {
    return view('Aboutus');
 });




require __DIR__.'/auth.php';
