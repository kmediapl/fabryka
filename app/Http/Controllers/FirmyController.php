<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Firma;

class FirmyController extends Controller
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
        $firmy = \App\Firma::paginate(15);
        return view('firmy.index',['firmy'=>$firmy]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $woj = DB::table('wojewodztwa')->get();
        return view('firmy.dodaj',['woj'=>$woj]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = array(
            'nazwa_firmy.required' => 'Podaj nazwę firmy',
            'nip.required'  => 'A messagdsadasdasde is required',
        );
        $request->validate([
            'nazwa_firmy' => 'required',
            'nip' => 'required'
        ],$message);
        
        $firma = new \App\Firma;
        $firma->nazwa_firmy = $request->nazwa_firmy;
        $firma->nip = $request->nip;
        $firma->miejscowosc = $request->miejscowosc;
        $firma->wojewodztwo = $request->wojewodztwo;
        $firma->poczta = $request->poczta;
        $firma->ulica = $request->ulica;
        $firma->nr_domu= $request->nr_domu;
        $firma->nr_lokalu = $request->nr_lokalu;
        $firma->save();
        flash('Firma została dodana');
        return redirect()->route('firmy',$firma->id);
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kasy = \App\Firma::find($id)->kasy;
        $firma = \App\Firma::find($id);
        return view('firmy.dane',['firma'=>$firma,'kasy'=>$kasy]);
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
}
