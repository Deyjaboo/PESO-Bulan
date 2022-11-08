<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;
use DB;
use DateTime;
use Carbon\Carbon;
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

                $data->CompanyWebsite = $web;
                $data->CompanyContact = $contact;
                $data->NumVacancies = $request->input('NumVacancies');
                $data->WorkingLocation = $request->input('WorkLocation');
                $data->Industry = $request->input('Industry');
                $data->JobDescription = $request->input('JobDes');
                $data->Requirements = $request->input('Requirements');

                $createdAt = Carbon::parse(date('Y-m-d H:i:s'));
                $data->DatePosted = $createdAt->format('M d Y');

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

}
