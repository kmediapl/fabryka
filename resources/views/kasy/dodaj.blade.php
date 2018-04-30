@extends('layouts.aplikacja')

@section('content')
<div class="container">
  <br>
<div style="background:#fff">Dodaj kasę dla firmy ::
  
  
  
  {{$nazwa['nazwa_firmy']}}</div>
<div class="karta mdl-shadow--2dp" style="padding:20px;">
    {!! Form::open(['url' => 'kasy',  'method' => 'post']) !!}
<input type="hidden" value="{{$firma}}" name="firma_id">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="nazwa_kasy" name="nazwa_kasy">
        <label class="mdl-textfield__label" for="nazwa_kasy">Nazwa kasy</label>
      </div><br>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="text" id="nr_fabryczny" name="nr_fabryczny">
          <label class="mdl-textfield__label" for="nr_fabryczny">nr_fabryczny</label>
        </div><br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="nr_unikatowy" name="nr_unikatowy">
            <label class="mdl-textfield__label" for="nr_unikatowy">nr_unikatowy</label>
          </div><br>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="text" id="nazwa_lok" name="nazwa_lok">
              <label class="mdl-textfield__label" for="nazwa_lok">nazwa_lok</label>
            </div><br>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="miejscowosc_lok" name="miejscowosc_lok">
                <label class="mdl-textfield__label" for="miejscowosc_lok">miejscowosc_lok</label>
              </div><br>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="ulica_lok" name="ulica_lok">
                  <label class="mdl-textfield__label" for="ulica_lok">ulica_lok</label>
                </div><br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="kod_lok" name="kod_lok">
                    <label class="mdl-textfield__label" for="kod_lok">kod_lok</label>
                  </div><br>
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="text" id="poczta_lok" name="poczta_lok">
                      <label class="mdl-textfield__label" for="poczta_lok">poczta_lok</label>
                    </div><br>
               
            
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
              Dodaj kasę
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



