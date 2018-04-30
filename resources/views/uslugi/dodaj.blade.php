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
          <input class="mdl-textfield__input" type="text" id="sample1">
          <label class="mdl-textfield__label" for="sample1">Data wykonania</label>
        </div><br>
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="sample1">
            <label class="mdl-textfield__label" for="sample1">Czy wykonane</label>
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



