<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Controllers\Session;

class UslugiController extends Controller
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
    public function create($id_kasa)
    {
        $nazwakasy = \App\Kasa::find($id_kasa);
        $firma = $nazwakasy->firma;
        return view('uslugi.dodaj',['kasa'=>$id_kasa,'nazwa'=>$nazwakasy, 'firma'=>$firma]);
    }
    public function fiskalizujform($id_kasa)
    {
        $nazwakasy = \App\Kasa::find($id_kasa);
        $serwisanci = \App\Serwisant::all();
        return view('uslugi.fiskalizuj',['kasa'=>$id_kasa,'nazwa'=>$nazwakasy,'serwisanci'=>$serwisanci]);
    }
    public function fiskalizuj(Request $request)
    {
        $id_kasa=$request->kasa_id;
        $nazwakasy = \App\Kasa::find($id_kasa);
        
        if(!\App\Usluga::find($id_kasa)) {
           
            $usluga = new \App\Usluga;
            $usluga->kasa_id=$request->kasa_id;
            $usluga->nazwa_usługi ='Fiskalizacja';
            $usluga->czy_wykonane=1;
            $usluga->serwisant=$request->serwisant;
            $usluga->save();
            return redirect()->route('kasy',$id_kasa);
        }
        else {
            flash('Kasa została juz zfiskalizowana');

            return redirect()->route('kasy',$id_kasa);
        }



        // return view('kasa.show',['kasa'=>$id_kasa]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
