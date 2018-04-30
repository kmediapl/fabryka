@extends('layouts.aplikacja')

@section('content')
<div class="container">
  <br>
  
<div class="karta mdl-shadow--2dp" style="padding:20px;" >
<h3>Dodaj firmę</h3>
    {!! Form::open(['url' => 'firmy',  'method' => 'post']) !!}
    <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="text" id="sample1">
        <label class="mdl-textfield__label" for="sample1">Nazwa firmy</label>
      </div><br>
      <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="sample1">
          <label class="mdl-textfield__label" for="sample1">Text...</label>
        </div><br>
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="sample1">
            <label class="mdl-textfield__label" for="sample1">Text...</label>
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



