<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\Controller;
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
   
   //  Route::get('/Manageduser', function () {
   //    return view('Manageduser');
   // });

    Route::get('/ManagedCompany', function () {
     return view('ManagedCompany');
    });
    //Controller
 Route::get('Manageduser',[Controller::class ,'data_view']);
 
 //CompanyController
 Route::get('ListOfCompany',[CompanyController::class ,'data_view_company']);
 Route::post('addcompany',[CompanyController::class ,'store']);

 //JobsController
 Route::get('jobs',[JobsController::class ,'data_view'])->name('jobs');
 Route::post('addjob',[JobsController::class ,'store']);
 Route::get('ListJobs',[JobsController::class ,'data_view_jobs']);


});
Route::get('/UserDash', function () {
    return view('UserDash');
 });

  Route::middleware(['auth'])->group(function(){
   

   

     Route::get('/Chart', function () {
        return view('Chart');
     });


  

    
 });

 Route::get('/Aboutus', function () {
    return view('Aboutus');
 });

 Route::get('/companies', function () {
   return view('companies');
});


require __DIR__.'/auth.php';
