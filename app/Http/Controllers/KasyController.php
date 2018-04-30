<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Firma;
use App\Kasa;
use Carbon\Carbon;
use PDF;
class KasyController extends Controller
{
//     public function __construct()
// {
//     $this->middleware('auth');
// }
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
    public function create($id_firma)
    {
        $nazwafirmy = \App\Firma::find($id_firma);
        return view('kasy.dodaj',['firma'=>$id_firma,'nazwa'=>$nazwafirmy]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $obiekt = new Kasa;
        $obiekt->nazwa_kasy = $request->nazwa_kasy;
        $obiekt->firma_id = $request->firma_id;
        $obiekt->save();
        return redirect()->route('kasy',$obiekt->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $current = Carbon::now();
       $dzien = $current->addDays(30);
        $today = Carbon::today();
       
       
        $kasa = \App\Kasa::find($id);
       
        return view('kasy.dane',['kasa'=>$kasa, 'dzien'=>$dzien]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function nadchodzacefiskalizacje() {

        $nadchodzacefiskalizacje = 1;
        $current = Carbon::now();
        $current->addDays(30);
        $today = Carbon::today();
    }
    public function zgloszenie (){
        $pdf11 = PDF::loadView('wydruki.zgloszenie');
        $pdf11->setPaper('A4', 'landscape');
        $pdf11->stream('invoice1.pdf');
      
        return $pdf11->download('invoice1.pdf');
        
    }
}
