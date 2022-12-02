<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;
use DateTime;
use Carbon\Carbon;
use DB;
class SeminarController extends Controller
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
    $data = new Seminar();
        $data->SeminarTitle = $request->input('SeminarTitle');
        $data->SeminarDescription = $request->input('SeminarDescription');
        $data->SeminarRequirements = $request->input('SeminarRequirements');

        $createdAt1 = Carbon::parse($request->input('DateStart'));
        $data->DateStart = $createdAt1->format('M d Y');

        $createdAt2 = Carbon::parse($request->input('DateEnd'));
        $data->DateEnd = $createdAt2->format('M d Y');

        $data->DateStart1 = $request->input('DateStart');
        $data->DateEnd1 = $request->input('DateEnd');

        $data->SeminarSlots = $request->input('Slots');
        $data->Status = "New";
    $data->save();
    return redirect('Chart')->with('message','Seminar Added Successfully!');
    }
    public function data_view_seminar()
    {
        $data = DB::table('seminars')->get();
        return view('chart',['data'=>$data]);
    }
    
    public function seminar_edit(Request $request, $id)
    {
               
                $SeminarTitle = $request->input('Title');
                $SeminarDescription = $request->input('Description');
                $SeminarRequirements = $request->input('Requirements');

                $createdAt1 = Carbon::parse($request->input('Start'));
                $DateStart = $createdAt1->format('M d Y');
                $createdAt2 = Carbon::parse($request->input('End'));
                $DateEnd = $createdAt2->format('M d Y');

                $DateStart1 = $request->input('Start');
                $DateEnd1 = $request->input('End');

                $SeminarSlots = $request->input('Slots');
               
                $Status = $request->input('Status');

        DB::table('seminars')
        ->where('id', $id)
        ->update(array(
            'SeminarTitle' => $SeminarTitle,
            'SeminarDescription' => $SeminarDescription,
            'SeminarRequirements' => $SeminarRequirements,
            'DateStart' => $DateStart,
            'DateEnd' => $DateEnd,
            'DateStart1' => $DateStart1,
            'DateEnd1' => $DateEnd1,
            'SeminarSlots' => $SeminarSlots,
            'Status' => $Status,

        ));
       
            return redirect('Chart')->with('message','Report updated successfully!');
    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function show(Seminar $seminar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function edit(Seminar $seminar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seminar $seminar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seminar $seminar)
    {
        //
    }
}
