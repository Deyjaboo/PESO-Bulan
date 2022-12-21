<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;
use DB;
use DateTime;
use Carbon\Carbon;
use App\Models\Application;
use Illuminate\Support\Facades\Stroage;
use File;
use ZipArchive;
use Auth;
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

        $count = DB::table('jobs')->count();
        
        $random_num = mt_rand(100, 1000);
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

                $data->Folder_Name = $random_num."_".$request->input('JobTitle')."_".$count;
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

  
    public function update_jobs(Request $request, $id)
    {
        $randomNumber = random_int(10, 99);
  
        $JobTitle = $request->input('JobTitle');
        $CompanyName = $request->input('CompanyName');
        $CompanyWebsite = $request->input('CompanyWebsite');
        $CompanyContact = $request->input('CompanyContact');
        $NumVacancies = $request->input('NumVacancies');
        $WorkingLocation = $request->input('WorkingLocation');
        $Industry = $request->input('Industry');
        $JobDescription = $request->input('JobDescription');
        $Requirements = $request->input('Requirements');

        // $random_num = mt_rand(100, 1000);
        // $num = $id - 1;
        // $Folder_Name = $random_num."_".$request->input('JobTitle')."_".$num;

        $Status = $request->input('Status');

        DB::table('jobs')
        ->where('id', $id)
        ->update(array(
            'JobTitle' => $JobTitle,
            'CompanyName' => $CompanyName,
            'CompanyWebsite' => $CompanyWebsite,
            'CompanyContact' => $CompanyContact,
            'NumVacancies' => $NumVacancies,
            'WorkingLocation' => $WorkingLocation,
            'Industry' => $Industry,
            'JobDescription' => $JobDescription,
            'Requirements' => $Requirements,
            // 'Folder_Name' => $Folder_Name,
            'Status' => $Status,
        ));
            return redirect('ListJobs')->with('message1','Job details updated successfully!');
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
        $data = DB::table('jobs')->where("Status","New")->inRandomOrder()
        ->limit(10)
        ->get();
        $count = DB::table('jobs')->count();
        $sem = DB::table('seminars')->where("Status","New")->inRandomOrder()
        ->limit(3)
        ->get();
        $sem1 = DB::table('seminars')->count();
        return view('UserDash',['data'=>$data,'sem'=>$sem,'sem1'=>$sem1,'count'=>$count]);
    }

    public function data_view()
    {
        $data = DB::table('companies')->get();
        return view('jobs',['data'=>$data]);
    }
    public function data_view_dashjobs()
    {
        $data = DB::table('jobs')->get();
        return view('dashjobs',['data'=>$data]);
    }
    public function data_view_jobs()
    {   
        // $TableData = DB::table('applications')->get();
        // $count = DB::table('applications')->count();
        $data = DB::table('jobs')->get();
        return view('ListJobs',['data'=>$data]);
        // return view('ListJobs',['data'=>$data,'TableData'=>$TableData,'count'=>$count]);
    }
    public function details_jobs($id)
    {
        // $data = DB::table('companies')->get();
        $data = DB::select('select * from jobs where id = ?', [$id]);
        return view('modal.UserDashView',['data'=>$data]);
    }
    public function download_resume($id)
    {
        //  $data = DB::table('applications')->where("JobTitle",$id)->value('Resume');
        // $data = DB::table('applications')->where("JobTitle",$id)->value('Resume');
        // $count = DB::table('applications')->where("JobTitle",$id)->count();
        // foreach($data as $data){
        //     foreach ($data->Resume as $resume) {
        //         response()->download(public_path('resume/'.$resume));
        //     }
        // }
        // for($i=0;$i < $count;$i++){
        //      response()->download(public_path('resume/'.$data[$i]->Resume));
        // }
        // if($count == 0){
        //     return redirect('ListJobs')->with('message','Nothing to download!');
        // }else{
            // for($i=0;$i < $count;$i++){
                // return response()->download(public_path('resume/'.$data->Resume));
            // }
            // return redirect('ListJobs')->with('message','Download successful!');
        // }

    }
    public function download($id)
    {
        $download_name = DB::table('jobs')->where("id",$id)->value('Folder_Name');
        $count = DB::table('applications')->where("JobID",$id)->count();
        if($count == 0){
            return redirect('ListJobs')->with('message','Nothing to download!');
        }else{
            $zip = new ZipArchive;
            $CompanyName = DB::table('jobs')->where("id",$id)->value('CompanyName');
            $JobTitle = DB::table('jobs')->where("id",$id)->value('JobTitle');
    
            $fileName = $CompanyName."(".$JobTitle.")".'.zip';
       
            if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
            {
                $files = File::files(public_path($download_name));
       
                foreach ($files as $key => $value) {
                    $relativeNameInZipFile = basename($value);
                    $zip->addFile($value, $relativeNameInZipFile);
                }
                $zip->close();
            }
        
            return response()->download(public_path($fileName));
            return redirect('ListJobs');
        }
   
    }
    public function details_download($id)
    {
        // $data = DB::table('companies')->get();
        $data = DB::select('select * from jobs where id = ?', [$id]);
        $TableData = DB::table('applications')->where("JobID",$id)->get();
        $count = DB::table('applications')->where("JobID",$id)->count();
        
        return view('modal.DownloadView',['data'=>$data,'TableData'=>$TableData,'count'=>$count]);
    }
    public function search(Request $request){
        $search1 = $request->input('input-text1');
        $search2 = $request->input('input-text2');

        if($search1!=null && $search2!=null){
            $data = Jobs::query()
            ->where('JobTitle', 'LIKE', "%{$search1}%")->orwhere('CompanyName', 'LIKE', "%{$search1}%")
            ->where('WorkingLocation', 'LIKE', "%{$search2}%")->where("Status","New")->inRandomOrder()
            ->limit(10)
            ->get();
        }elseif($search1!=null && ($search2==null || $search2==" ")){
            $data = Jobs::query()
            ->where('JobTitle', 'LIKE', "%{$search1}%")->orwhere('CompanyName', 'LIKE', "%{$search1}%")
            ->where("Status","New")
            ->inRandomOrder()
            ->limit(10)
            ->get();
        }elseif($search2!=null && ($search1==null || $search1==" ")){
            $data = Jobs::query()
            ->where('WorkingLocation', 'LIKE', "%{$search2}%")->inRandomOrder()
            ->where("Status","New")
            ->limit(10)
            ->get();
        }else{
            $data = DB::table('jobs')->get();
        }
        
        $count = DB::table('jobs')->count();
        $sem = DB::table('seminars')->where("Status","New")->inRandomOrder()
        ->limit(3)
        ->get();
        $sem1 = DB::table('seminars')->count();
        return view('UserDash',['data'=>$data,'sem'=>$sem,'sem1'=>$sem1,'count'=>$count]);
       
    }
}
