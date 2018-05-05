@extends('layouts.aplikacja')

@section('content')
<div class="container">
  <br>
  <div style="background:#fff"></div>

<div class="karta mdl-shadow--2dp" style="padding:20px;">
<h1>Usługi dla kasy ::: {{$nazwa['nazwa_kasy']}} firmy {{$firma['nazwa_firmy']}}</h1>
    {!! Form::open(['url' => 'firmy',  'method' => 'post']) !!}
    <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="text" id="sample1">
        <label class="mdl-textfield__label" for="sample1">Nazwa usługi wpisanej do książki serwisowej: </label>
      </div><br>
      <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input date" type="text" id="sample1">
          <label class="mdl-textfield__label" for="sample1">Data wykonania</label>
        </div><br>
        <label>Czy wykonane?</label>
        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
            <input type="checkbox" id="switch-1" class="mdl-switch__input" checked>
            <span class="mdl-switch__label"></span>
          </label><br>
          <button id="but1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            Dodaj usługę
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



