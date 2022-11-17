<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;
use DB;
use DateTime;
use Carbon\Carbon;
use App\Models\Application;
use Illuminate\Support\Facades\Stroage;

class JobsController extends Controller
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
        $data = new Jobs();
                $data->JobTitle = $request->input('JobTitle');
                $data->CompanyName = $request->input('CompanyName');
                // $company = DB::table('companies')->where('CompanyName', $request->input('CompanyName'))->value('CompanyName');
                $web = DB::table('companies')->where('CompanyName', $request->input('CompanyName'))->value('Website');
                $contact = DB::table('companies')->where('CompanyName', $request->input('CompanyName'))->value('Contact');
                $logo = DB::table('companies')->where('CompanyName', $request->input('CompanyName'))->value('logo');

                $data->CompanyWebsite = $web;
                $data->CompanyContact = $contact;
                $data->NumVacancies = $request->input('NumVacancies');
                $data->WorkingLocation = $request->input('WorkLocation');
                $data->Industry = $request->input('Industry');
                $data->JobDescription = $request->input('JobDes');
                $data->Requirements = $request->input('Requirements');

                $createdAt = Carbon::parse(date('Y-m-d H:i:s'));
                $data->DatePosted = $createdAt->format('M d Y');

                $data->logo = $logo;
                $data->Status = "New";
            $data->save();
            return redirect('jobs')->with('message','Job has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(Jobs $jobs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobs $jobs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobs $jobs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobs $jobs)
    {
        //
    }
    public function view_jobs()
    {
        $data = DB::table('jobs')->get();
        return view('UserDash',['data'=>$data]);
    }

    public function data_view()
    {
        $data = DB::table('companies')->get();
        return view('jobs',['data'=>$data]);
    }
    public function data_view_jobs()
    {
        $data = DB::table('jobs')->get();
        return view('ListJobs',['data'=>$data]);
    }
    public function details_jobs($id)
    {
        // $data = DB::table('companies')->get();
        $data = DB::select('select * from jobs where id = ?', [$id]);
        return view('modal.UserDashView',['data'=>$data]);
    }
    public function download_resume($id)
    {
         $data = DB::table('applications')->where("JobTitle",$id)->value('Resume');
        // $data = DB::table('applications')->where("JobTitle",$id)->value('Resume');
        $count = DB::table('applications')->where("JobTitle",$id)->count();
        // foreach($data as $data){
        //     foreach ($data->Resume as $resume) {
        //         response()->download(public_path('resume/'.$resume));
        //     }
        // }
        // for($i=0;$i < $count;$i++){
        //      response()->download(public_path('resume/'.$data[$i]->Resume));
        // }
        if($count == 0){
            return redirect('ListJobs')->with('message','Nothing to download!');
        }else{
            // for($i=0;$i < $count;$i++){
                return response()->download(public_path('resume/'.$data->Resume));
            // }
            // return redirect('ListJobs')->with('message','Download successful!');
        }
        
        
    }
}
