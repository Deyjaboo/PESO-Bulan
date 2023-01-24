<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Users;
use DB;
use auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function show_dash()
    {
        $users_num = DB::table('users')->where("role","user")->count();
        $companies_num = DB::table('companies')->count();
        
        $jobs_num = DB::table('jobs')->count();
        $jobs_new = DB::table('jobs')->where("Status","New")->count();
        return view('dashboard',['users_num'=>$users_num,'companies_num'=>$companies_num,'jobs_num'=>$jobs_num,'jobs_new'=>$jobs_new]);
    }
    public function data_view()
    {
        $data = DB::table('users')->where("role","user")->get();
        return view('Manageduser',['data'=>$data]);
    }
    
    public function user_show()
    {
        $data = DB::table('users')->where("id", $id)->get();
        return view('modal.UserEdit',['data'=>$data]);
    }
    public function profile_view()
    {
        $data = DB::table('users')->where("id", auth()->user()->id)->get();
        $data1 = DB::table('applications')->where("UserID", auth()->user()->id)->get();
        return view('profile',['data'=>$data,'data1'=>$data1]);
    }
    
  
}
