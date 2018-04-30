@extends('layouts.aplikacja')

@section('content')
<div class="container">
  <br>
  <div style="background:#fff"></div>
<div class="karta mdl-shadow--2dp" style="padding:20px;">
<h1>Fiskalizacja kasy ::: {{$nazwa['nazwa_kasy']}}</h1>
    {!! Form::open(['url' => 'firmy',  'method' => 'post']) !!}
    <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="text" id="sample1">
        <label class="mdl-textfield__label" for="sample1">Data fiskalizacji</label>
      </div><br>
      <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="sample1">
          <label class="mdl-textfield__label" for="sample1">Text...</label>
        </div><br>
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="sample1">
            <label class="mdl-textfield__label" for="sample1">Text...</label>
          </div>
    {!! Form::close() !!}

</div>
</div>
@endsection
<style>
  .karta {
    background: #fff;
  }
  </style>

