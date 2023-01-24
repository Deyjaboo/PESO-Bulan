<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\UserController;
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
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('dashboard',[Controller::class ,'show_dash']);
   //  Route::get('/Manageduser', function () {
   //    return view('Manageduser');
   // });

    Route::get('/ManagedCompany', function () {
     return view('ManagedCompany');
    });

 
 

//Controller
 Route::get('Manageduser',[Controller::class ,'data_view']);

//Edit
Route::get('UserEdit/{id}',[Controller::class ,'user_show']);

Route::post('edit_jobs/{id}',[JobsController::class ,'update_jobs'])->name('edit_jobs');
 //CompanyController 
 Route::get('ListOfCompany',[CompanyController::class ,'data_view_company']);
 Route::post('addcompany',[CompanyController::class ,'store']);
 Route::post('edit_company/{id}',[CompanyController::class ,'company_edit'])->name('edit_company');
 //JobsController
 Route::get('jobs',[JobsController::class ,'data_view'])->name('jobs');
 Route::post('addjob',[JobsController::class ,'store']);
 Route::get('ListJobs',[JobsController::class ,'data_view_jobs']);
 Route::get('download_file/{id}',[JobsController::class ,'download_resume']);
 Route::get('download/{id}',[JobsController::class ,'download']);
 Route::get('download_view/{id}',[JobsController::class ,'details_download']);

  //SeminarController
Route::post('add_seminar',[SeminarController::class ,'store']);
Route::get('Chart',[SeminarController::class ,'data_view_seminar']);
Route::post('edit_seminar/{id}',[SeminarController::class ,'seminar_edit'])->name('edit_seminar');

});
// Route::get('/UserDash', function () {
//     return view('UserDash');
//  });

  Route::middleware(['auth'])->group(function(){
   
 //ApplicationController
 Route::post('apply_job',[ApplicationController::class ,'store']);
 Route::get('profile',[Controller::class ,'profile_view']);

//  Route::get('/profile', function () {
//   return view('profile');
//  });

Route::post('user_update/{id}',[UserController::class ,'update_user'])->name('user_update');
    
 });
//  view jobs userdash
 Route::get('UserDash',[JobsController::class ,'view_jobs']);

 Route::get('/Aboutus', function () {
    return view('Aboutus');
 });

 Route::get('/dashjobs', function () {
    return view('dashjobs');
   });
   Route::get('dashjobs',[JobsController::class ,'data_view_dashjobs']);
//  Route::get('/companies', function () {
//    return view('companies');
// });
Route::get('companies',[CompanyController::class ,'details_company']);
Route::get('CompanyView/{id}',[CompanyController::class ,'details_company1']);
Route::get('UserDashView/{id}',[JobsController::class ,'details_jobs']);

Route::get('SeminarPage',[SeminarController::class ,'Seminar_View']);

Route::get('SearchUserDash',[JobsController::class ,'search']);
Route::get('SearchCompany',[CompanyController::class ,'search']);



require __DIR__.'/auth.php';
