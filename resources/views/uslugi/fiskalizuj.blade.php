@extends('layouts.aplikacja')

@section('content')
<div class="container">
  <br>
  <div style="background:#fff"></div>
<div class="karta mdl-shadow--2dp" style="padding:20px;">
<h1>Fiskalizacja kasy ::: {{$nazwa['nazwa_kasy']}}</h1>
    {!! Form::open(['action' => ['UslugiController@fiskalizuj', $nazwa->id]]) !!}
    <div class="mdl-textfield mdl-js-textfield">
    <input  value="{{$nazwa->id}}" name="kasa_id" type="hidden">
    {{-- <input class="date form-control" type="text"> --}}
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input date" type="text" id="data" name="data">
        <label class="mdl-textfield__label" for="data">Data fiskalizacji</label>
      </div><br>
     
 
     <div>
        <label>Serwisant</label><br>
        <select class="" id="serwisant" style="width:300px;" name="serwisant">
            @foreach ($serwisanci as $udane)
          <option value=" {{$udane->nazwa_serwisanta}}"  >
              {{$udane->nazwa_serwisanta}}
          </option>
          @endforeach
        </select><br>
     </div>
     <div>
 <button id="but1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            Fiskalizuj kasę
          </button>  <br><br><br>
        </div>
    {!! Form::close() !!}
 
    <div style="float:right" >
 <button  id="but2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect ">
      Wszystkiekasy tej firmy
       </button></div>

</div>
</div>
@endsection
<style>
  .karta {
    background: #fff;
  }
  </style>

