@extends('layouts.aplikacja')

@section('content')
<div class="container">
<br>
    <div class="demo-card-event mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title mdl-card--expand">
        
          <h2 class="container mdl-ca">
            {{$kasa['nazwa_kasy']}}
            </h2>
        
          
        </div>
        <div class="mdl-card__supporting-text">
          
         <p>Typ kasy: {{$kasa['typ_kasy']}}</p>
            <p>Numer fabryczny: {{$kasa['nr_fabryczny']}}</p>
            <p>Nr unikatowy: {{$kasa['nr_unikatowy']}}</p>
            <p>Nazwa lokalizacji: {{$kasa['nazwa_lok']}}</p>
            <p>Miejscowość lokalizacji: {{$kasa['miejscowosc_lok']}}</p>
            <p>Ulica lokalizacji: {{$kasa['ulica_lok']}}</p>
            <p>Kod pocztowy lokalizacji: {{$kasa['kod_lok']}}</p>
            <p>Poczta lokalizacji: {{$kasa['poczta_lok']}}</p>
            <p>Urząd skarbowy {{$kasa['us_id']}}</p>
            
          </div>
        <div class="mdl-card__actions mdl-card--border">
   
    
            <a href="/usluga/dodaj/{{$kasa['id']}}">   <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                <i class="material-icons">add</i> Dodaj usługę
              </button></a>
      
        <a href="/uslugi/fiskalizuj/{{$kasa['id']}}">   <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            <i class="material-icons">check_circle</i> Fiskalizuj kasę
          </button></a>  
 
          
       
        
          <div class="mdl-layout-spacer"></div>
          
        </div>
      </div>

 
</div>
@endsection
<style>
    .demo-card-event.mdl-card {
      width: 80%;
     
      background: #3E4EB8;
      margin: 0 auto;
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
    p {
      color: #fff;
    }
    </style>


