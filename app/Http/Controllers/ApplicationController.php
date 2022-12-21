<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Auth;
use DB;
class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $folder_name = DB::table('jobs')->where('id', $request->input('job_id'))->value('Folder_Name');
        // $random_num = mt_rand(100, 1000);
        // $folder_name = $request->input('job_id');
        // $folder_name = $request->input('Folder_Name');
        $data = new Application();
            $data->JobID = $request->input('job_id');
            $data->JobTitle = $request->input('JobTitle');
            $data->UserID = auth()->user()->id;
            $data->UserName = auth()->user()->name;
            //for File Resume
            $file1 = $request->file('resume');
            $extension = $file1->getClientOriginalName();
            $filename = $extension;
            $file1->move($folder_name, "(".auth()->user()->name.")".$filename);
            $data->Resume = "(".auth()->user()->name.")".$filename;

            $data->CompanyName = DB::table('jobs')->where('id', $request->input('job_id'))->value('CompanyName');
            $data->WorkLocation = DB::table('jobs')->where('id', $request->input('job_id'))->value('WorkingLocation');
            
        $data->save();
        return redirect('UserDash')->with('message','Application sent successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
