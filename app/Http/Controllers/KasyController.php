<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Firma;
use App\Kasa;
use App\Urzadskarbowy;
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
        // $us = \DB::table('usadres')->get();  
        $us = \App\Urzadskarbowy::all();
        $serwisanci = \App\Serwisant::all();
        // $us->toArray();
        $nazwafirmy = \App\Firma::find($id_firma);
        return view('kasy.dodaj',['firma'=>$id_firma,'nazwa'=>$nazwafirmy,'us'=>$us,'serwisanci'=>$serwisanci]);
        // return view('kasy.dodaj',['us'=>$us]);
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
        $obiekt->nr_fabryczny = $request->nr_fabryczny;
        $obiekt->nr_unikatowy = $request->nr_unikatowy;
        $obiekt->miejscowosc_lok = $request->miejscowosc_lok;
        $obiekt->ulica_lok = $request->ulica_lok;
        $obiekt->typ_kasy = $request->typ_kasy;
        $obiekt->serwisant = $request->serwisant;
        $obiekt->adres_producenta = $request->adres_producenta;
        $obiekt->kod_lok = $request->kod_lok;
        $obiekt->poczta_lok = $request->poczta_lok;
        $obiekt->czy_aktywna = $request->czy_aktywna;
      
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
    public function zgloszenie ($idkasy){
       
        $kasa = Kasa::find($idkasy);
        $pdf11 = PDF::loadView('wydruki.zgloszenie', $kasa);
        // $pdf11->setPaper('A4', 'landscape');
        $pdf11->stream('invoice1.pdf');
      
        return $pdf11->download('invoice1.pdf');
        
    }
    public function zgloszenieserwisu (){
        $data = [
            'foo' => 'bar'
        ];

        $pdf11 = PDF::loadView('wydruki.zgloszenieserwisu', $data);
        // $pdf11->setPaper('A4', 'landscape');
        $pdf11->stream('invoice1.pdf');
      
        return $pdf11->download('invoice1.pdf');
        
    }
}
