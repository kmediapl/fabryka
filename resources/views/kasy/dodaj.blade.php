@extends('layouts.aplikacja2')

@section('content')
<div class="container">
    <div class="ui segment">


<h2>Dodaj kasę dla firmy ::
  

  
  {{$nazwa['nazwa_firmy']}} </h2>
  <div class="ui divider"></div>
    {!! Form::open(['url' => 'kasy',  'method' => 'post', 'class'=>'ui form']) !!}


      <div class="inline field">
          <div class="ui toggle checkbox">
           
            <input type="checkbox" tabindex="0" checked  value="1" name="czy_aktywna" id="czy_aktywna">
            <label>Czy aktywna</label>
          </div>
        </div>

<input type="hidden" value="{{$firma}}" name="firma_id">

    <div class="field">
        <label  for="nazwa_kasy">Nazwa kasy</label>
        <input  type="text" id="nazwa_kasy" name="nazwa_kasy">
       
      </div>
      <div class="two fields">
          <div class="field">
      <div class="field">
          <label  for="nr_fabryczny">Nr fabryczny</label>
          <input  type="text" id="nr_fabryczny" name="nr_fabryczny">
        
        </div>  </div>
        <div class="field">
        <div class="field">
            <label  for="nr_unikatowy">Nr unikatowy</label>
            <input  type="text" id="nr_unikatowy" name="nr_unikatowy">
           
          </div>  </div>

      </div>





          <div class="field">
              <label  for="nazwa_lok">Nazwa lokalizacji</label>
              <input  type="text" id="nazwa_lok" name="nazwa_lok">
            
            </div>

            <div class="four fields">
                <div class="fluid field">
            <div class="field">
                <label  for="miejscowosc_lok">Miejscowość lokalizacji</label>
                <input  type="text" id="miejscowosc_lok" name="miejscowosc_lok">
                
              </div>
            </div>
              <div class="fluid field">
              <div class="field">
                  <label  for="ulica_lok">Ulica lokalizacji</label>
                  <input  type="text" id="ulica_lok" name="ulica_lok">
                 
                </div>
              </div>
              <div class="fluid field">
                  <div class="field">
                      <label  for="ulica_lok">Numer domu lokalizacji</label>
                      <input  type="text" id="numerlokalu_lok" name="numerlokalu_lok">
                     
                    </div>
                  </div>
                  <div class="fluid field">
                      <div class="field">
                          <label  for="ulica_lok">Numer lokalu lokalizacji</label>
                          <input  type="text" id="numerlaka_lok" name="numerdomu_lok">
                         
                        </div>
                      </div>
                </div>



                <div class="two fields">

                <div class="field">
                    <label  for="kod_lok">Kod lokalizacji</label>
                    <input  type="text" id="kod_lok" name="kod_lok">
                   
                  </div><br>
                  <div class="field">
                      <label  for="poczta_lok">Poczta lokalizacji</label>
                      <input  type="text" id="poczta_lok" name="poczta_lok">
                    </div>
                    </div>
                    <div class="three fields">
                        <div class=" field">
                    <label>Nazwa kasy</label>
                    <select class="" id="typ_kasy" style="width:300px;" name="typ_kasy">
                        @foreach ($typkas as $udane)
                      <option value=" {{$udane->id}}"  >
                          {{$udane->nazwa_kasy}}
                      </option>
                      @endforeach
                    </select></div>
                    <div class=" field">
                    <label>Urząd skarbowy</label>
                    <select class="ui fluid dropdown" id="us_id" style="width:300px;" name="us_id">
                        @foreach ($us as $udane)
                      <option value="{{$udane->id}}"  >
                          {{$udane->nazwa_us}}
                      </option>
                      @endforeach
                    </select></div>
                    <div class="field">
                    <label>Serwisant</label>
                    <select class="" id="serwisant" style="width:300px;" name="serwisant">
                        @foreach ($serwisanci as $udane)
                      <option value=" {{$udane->nazwa_serwisanta}}"  >
                          {{$udane->nazwa_serwisanta}}
                      </option>
                      @endforeach
                    </select>
                        </div></div>
                    
                    <br>
              
                    <br>
                    <button class="ui pink button">  <i class="add icon"></i> Dodaj kasę</button>
    {!! Form::close() !!}

  </div>
</div>
@endsection




