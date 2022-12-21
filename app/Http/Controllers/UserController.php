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
        $randomNumber = random_int(10, 99);
  
        $Name = $request->input('Name');
        $Address = $request->input('Address');
        $Sex = $request->input('Sex');
        $number = $request->input('Number');
        $job1 = $request->input('Job1');
        $job2 = $request->input('Job2');
        $email = $request->input('email');
        $password = $request->input('password');

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
            'pass_confirm'=> "@".$randomNumber.$password,
        ));
            return redirect('Manageduser')->with('message','User details updated successfully!');
    }
}
