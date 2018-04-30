@extends('layouts.aplikacja')

@section('content')
<div class="container">
<br>
    <div class="" style ="  width: 100%;  min-height: 256px; margin: 0 auto;">
       
          
          <h3>
           Nazwa firmy:   {{$firma['nazwa_firmy']}} 
            </h3>
    
          
        <h5>NIP:{{$firma['nip']}} </h5>
         
  
          
         
              <h4>Adres:<br>
              {{$firma['kod_pocztowy']}},   {{$firma['miejscowosc']}}, {{$firma['ulica']}}, {{$firma['nr_domu']}}, {{$firma['nr_lokalu']}}
              </h4>
         

     
        <div class="mdl-card__actions mdl-card--border">
         <a href="/kasa/dodaj/{{$firma['id']}}">   <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                <i class="material-icons">add</i> Dodaj kasę
              </button>
        
          <div class="mdl-layout-spacer"></div>
          
        </div>
      </div>

    </br>


        @foreach($kasy as $kasa)
        <div class="demo-card-event mdl-card mdl-shadow--2dp" style ="    min-height: 256px; background: #3E4EB8;">
                    <h4 style="text-align:center;"><a href="/kasy/{{$kasa['id']}}">{{$kasa['nazwa_kasy']}}</a></h4>
                    </div>
        @endforeach



</div>
@endsection
<style>
    .firma {
      width: 80%;
    
    }
    .demo-card-event > .mdl-card__actions {
      border-color: rgba(255, 255, 255, 0.2);
    }
    .demo-card-event > .mdl-card__title {
      align-items: flex-start;
    }
    .demo-card-event > .mdl-card__title > h4 {
      margin-top: 0;
    }
    .demo-card-event > .mdl-card__actions {
      display: flex;
      box-sizing:border-box;
      align-items: center;
    }
    .demo-card-event > .mdl-card__actions > .material-icons {
      padding-right: 10px;
    }
    .demo-card-event > .mdl-card__title,
    .demo-card-event > .mdl-card__actions,
    .demo-card-event > .mdl-card__actions > .mdl-button {
      color: #fff;
    }
    </style>


