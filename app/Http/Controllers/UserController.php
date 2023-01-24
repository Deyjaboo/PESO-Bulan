<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function update_user(Request $request, $id)
    {
        if ($request->file('imageUpload') != null){
        $randomNumber = random_int(10, 99);
        $randomNumber1 = random_int(100, 999);
        $Name = $request->input('name');
        $Address = $request->input('address');
        $Sex = $request->input('sex');
        $number = $request->input('cp_num');
        $job1 = $request->input('Job1');
        $job2 = $request->input('Job2');
        $email = $request->input('email');
        $password = $request->input('password');
         //for picture
         $file1 = $request->file('imageUpload');
         $extension = $file1->getClientOriginalName();
         $filename = $extension;
         $file1->move('images/', $filename);
         $logo = $filename;

        DB::table('users')
        ->where('id', $id)
        ->update(array(
            'name' => $Name,
            'address' => $Address,
            'sex' => $Sex,
            'contact' => $number,
            'job1' => $job1,
            'job2' => $job2,
            'email' => $email,
            'password' => Hash::make($request->get('password')),
            'pass_confirm'=> "@".$randomNumber.$request->password.$randomNumber1,
            'pic' => $logo,
        ));
    }else{
        $randomNumber = random_int(10, 99);
        $randomNumber1 = random_int(100, 999);
        $Name = $request->input('name');
        $Address = $request->input('address');
        $Sex = $request->input('sex');
        $number = $request->input('cp_num');
        $job1 = $request->input('Job1');
        $job2 = $request->input('Job2');
        $email = $request->input('email');
        $password = $request->input('password');
         //for picture

        DB::table('users')
        ->where('id', $id)
        ->update(array(
            'name' => $Name,
            'address' => $Address,
            'sex' => $Sex,
            'contact' => $number,
            'job1' => $job1,
            'job2' => $job2,
            'email' => $email,
            'password' => Hash::make($request->get('password')),
            'pass_confirm'=> "@".$randomNumber.$request->password.$randomNumber1,
        ));
    }

            return redirect('profile')->with('message','User details updated successfully!');
    }
}
