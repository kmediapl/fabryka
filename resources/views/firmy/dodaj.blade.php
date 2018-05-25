@extends('layouts.aplikacja2')

@section('content')
<div class="container">
    <div class="ui segment">
  <br>
  @if (count($errors) > 0)
   <div class = "alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif
<div class="karta mdl-shadow--2dp" style="padding:20px;" >
<h2>Dodaj firmę</h2>
<div class="ui divider"></div>
    {!! Form::open(['url' => 'firmy',  'method' => 'post', 'class'=>'ui form']) !!}
    <div class="">
        <label class="" for="sample1">Nazwa firmy</label>
        <input class="" type="text" id="nazwa_firmy" name="nazwa_firmy">
        
      </div>
      <div class="">
          <label class="" for="sample1">NIP</label>
          <input class="" type="text" id="nip" name="nip">
         
        </div><br>
        <div class="four fields">
        <div class=" field">
            <label class="" for="sample1">Miejscowość</label>
            <input class="" type="text" id="miejscowosc" name="miejscowosc">
           
          </div>
          <div class="field">
              <label class="" for="sample1">Kod pocztowy</label>
            <input class="" type="text" id="kod_pocztowy" name="kod_pocztowy">
            
          </div>
          <div class="field">
              <label class="" for="wojewodztwo">Województwo</label>
            <select name=" wojewodztwo" id="wojewodztwo">
              @foreach ($woj as $wojdane)
            <option>{{$wojdane->nazwa}}</option>
            @endforeach
            </select>
          
            
          </div>
          
          <div class="field">
              <label class="" for="sample1">Poczta</label>
            <input class="" type="text" id="poczta" name="poczta">
           
          </div>
        </div>
        <div class="three fields">
          <div class="field">
              <label class="" for="sample1">Ulica</label>
            <input class="" type="text" id="ulica" name="ulica">
            
          </div>
          <div class="field">
              <label class="" for="sample1">Nr domu</label>
            <input class="" type="text" id="nr_domu" name="nr_domu">
          
          </div><br>
          <div class="field">
              <label class="" for="sample1">Nr lokalu</label>
            <input class="" type="text" id="nr_lokalu" name="nr_lokalu">
           
          </div></div>
          
            <button class="ui pink button">  <i class="user icon"></i>   Dodaj firmę</button>

    {!! Form::close() !!}
  </div>
</div>
</div>
@endsection



