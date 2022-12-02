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
