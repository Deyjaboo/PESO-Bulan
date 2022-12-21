<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use DateTime;
use Carbon\Carbon;
use DB;
class CompanyController extends Controller
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
        $data = new Company();
                $data->CompanyName = $request->input('CompanyName');
                $data->Location = $request->input('Location');
                $data->Contact = $request->input('ContactNum');
                
                if($request->input('Website') != null){
                    $data->Website = $request->input('Website');
                }else{
                    $data->Website = "None";
                }
                
                $data->Industry = $request->input('Industry');
                $data->About = $request->input('About');

                $createdAt = Carbon::parse(date('Y-m-d H:i:s'));
                $data->Date = $createdAt->format('M d Y');

                //for picture
                $file1 = $request->file('Picture');
                $extension = $file1->getClientOriginalName();
                $filename = $extension;
                $file1->move('images/', $filename);
                $data->logo = $filename;
             
            $data->save();
            return redirect('ManagedCompany')->with('message','Company has been registered!');
    }
    public function data_view_company()
    {
        $data = DB::table('companies')->get();
        return view('ListOfCompany',['data'=>$data]);
    }
    public function details_company()
    {
        $data = DB::table('companies')->inRandomOrder()
        ->limit(10)
        ->get();
        return view('companies',['data'=>$data]);
    }
    public function details_company1($id)
    {
        // $data = DB::table('companies')->get();
        $data = DB::select('select * from companies where id = ?', [$id]);
        return view('modal.CompanyView',['data'=>$data]);
    }
    public function search(Request $request){
        $search = $request->input('input-text');
        $data = Company::query()
        ->where('CompanyName', 'LIKE', "%{$search}%")->get();

        return view('companies',['data'=>$data]);
    }
    public function company_edit(Request $request, $id)
    {
               if ($request->file('logo') != null){
                $CompanyName = $request->input('CompanyName');
                $Location = $request->input('Location');
                $Contact = $request->input('Contact');
                $Website = $request->input('Website');
                $Industry = $request->input('Industry');
                $About = $request->input('About');
                //for picture
                $file1 = $request->file('logo');
                $extension = $file1->getClientOriginalName();
                $filename = $extension;
                $file1->move('images/', $filename);
                $logo = $filename;
                // $Date = $request->input('Date');
                // $logo = $request->input('logo');

                DB::table('companies')
                ->where('id', $id)
                ->update(array(
                    'CompanyName' => $CompanyName,
                    'Location' => $Location,
                    'Contact' => $Contact,
                    'Website' => $Website,
                    'Industry' => $Industry,
                    'About' => $About,
                    'logo' => $logo,

                ));
               }else{
                $CompanyName = $request->input('CompanyName');
                $Location = $request->input('Location');
                $Contact = $request->input('Contact');
                $Website = $request->input('Website');
                $Industry = $request->input('Industry');
                $About = $request->input('About');

                DB::table('companies')
                ->where('id', $id)
                ->update(array(
                    'CompanyName' => $CompanyName,
                    'Location' => $Location,
                    'Contact' => $Contact,
                    'Website' => $Website,
                    'Industry' => $Industry,
                    'About' => $About,

                ));
               }
               
       
            return redirect('ListOfCompany')->with('message','Company details updated successfully!');
    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }

   
}
