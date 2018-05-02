@extends('layouts.aplikacja')

@section('content')
<div class="container">
  <br>
<div style="background:#fff"></div>
<div class="karta mdl-shadow--2dp" style="padding:20px;width: 80%;  min-height: 256px; margin: 0 auto;">
<h4>Dodaj kasę dla firmy ::
  

  
  {{$nazwa['nazwa_firmy']}} </h4>
    {!! Form::open(['url' => 'kasy',  'method' => 'post']) !!}
<div style="width:20%;float:right;">
    <label>Czy aktywna</label><label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="czy_aktywna">
        <input type="checkbox" id="czy_aktywna" class="mdl-switch__input" checked>
        <span class="mdl-switch__label"></span>
      </label>
</div>
<input type="hidden" value="{{$firma}}" name="firma_id">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="nazwa_kasy" name="nazwa_kasy">
        <label class="mdl-textfield__label" for="nazwa_kasy">Nazwa kasy</label>
      </div><br>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="text" id="nr_fabryczny" name="nr_fabryczny">
          <label class="mdl-textfield__label" for="nr_fabryczny">Nr fabryczny</label>
        </div><br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="nr_unikatowy" name="nr_unikatowy">
            <label class="mdl-textfield__label" for="nr_unikatowy">Nr unikatowy</label>
          </div><br>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="text" id="nazwa_lok" name="nazwa_lok">
              <label class="mdl-textfield__label" for="nazwa_lok">Nazwa okalizacji</label>
            </div><br>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="miejscowosc_lok" name="miejscowosc_lok">
                <label class="mdl-textfield__label" for="miejscowosc_lok">Miejscowość lokalizacji</label>
              </div><br>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="ulica_lok" name="ulica_lok">
                  <label class="mdl-textfield__label" for="ulica_lok">Ulica lokalizacji</label>
                </div><br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="kod_lok" name="kod_lok">
                    <label class="mdl-textfield__label" for="kod_lok">Kod lokalizacji</label>
                  </div><br>
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="text" id="poczta_lok" name="poczta_lok">
                      <label class="mdl-textfield__label" for="poczta_lok">Poczta lokalizacji</label>
                    </div><br>
                    <label>Serwisant</label><br>
                    <select class="" id="serwisant" style="width:300px;">
                        @foreach ($serwisanci as $udane)
                      <option value=" {{$udane->nazwa_serwisanta}}"  >
                          {{$udane->nazwa_serwisanta}}
                      </option>
                      @endforeach
                    </select><br>
                    <label>Urząd skarbowy</label><br>
                    <select class="" id="us_id" style="width:300px;">
                        @foreach ($us as $udane)
                      <option value="{{$udane->id}}"  >
                          {{$udane->nazwa_us}}
                      </option>
                      @endforeach
                    </select><br><br>
              
                    <br>
            
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



