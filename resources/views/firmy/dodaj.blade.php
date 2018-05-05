@extends('layouts.aplikacja')

@section('content')
<div class="container">
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
<h3>Dodaj firmę</h3>
    {!! Form::open(['url' => 'firmy',  'method' => 'post']) !!}
    <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="text" id="nazwa_firmy" name="nazwa_firmy">
        <label class="mdl-textfield__label" for="sample1">Nazwa firmy</label>
      </div><br>
      <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="nip" name="nip">
          <label class="mdl-textfield__label" for="sample1">NIP</label>
        </div><br>
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="miejscowosc" name="miejscowosc">
            <label class="mdl-textfield__label" for="sample1">Miejscowość</label>
          </div><br>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="kod_pocztowy" name="kod_pocztowy">
            <label class="mdl-textfield__label" for="sample1">Kod pocztowy</label>
          </div><br>
          <div class="mdl-textfield mdl-js-textfield">
            <select name=" wojewodztwo" id="wojewodztwo">
              @foreach ($woj as $wojdane)
            <option>{{$wojdane->nazwa}}</option>
            @endforeach
            </select>
          
            <label class="mdl-textfield__label" for="wojewodztwo">Województwo</label>
          </div><br>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="poczta" name="poczta">
            <label class="mdl-textfield__label" for="sample1">Poczta</label>
          </div><br>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="ulica" name="ulica">
            <label class="mdl-textfield__label" for="sample1">Ulica</label>
          </div><br>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="nr_domu" name="nr_domu">
            <label class="mdl-textfield__label" for="sample1">Nr domu</label>
          </div><br>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="nr_lokalu" name="nr_lokalu">
            <label class="mdl-textfield__label" for="sample1">Nr lokalu</label>
          </div><br>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
              Dodaj firmę
            </button>
    {!! Form::close() !!}

</div>
</div>
@endsection
<style>
  .karta {
    background: #fff;
  }
  </style>



