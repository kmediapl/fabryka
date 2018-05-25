@extends('layouts.aplikacja2')

@section('content')
<div class="container">

        <div class="ui segment">
<br>
 
<div class="ui grid">
    <div class="nine wide column">    <h2 class="">
        Nazwa kasy:   {{$kasa['nazwa_kasy']}}
           </h2>
       
         
    
       <div class="ui divider"></div>
         
        <p>Typ kasy: {{$kasa['typ_kasy']}}</p>
           <p>Numer fabryczny: {{$kasa['nr_fabryczny']}}</p>
           <p>Nr unikatowy: {{$kasa['nr_unikatowy']}}</p>
           <p>Nazwa lokalizacji: {{$kasa['nazwa_lok']}}</p>
           <p>Miejscowość lokalizacji: {{$kasa['miejscowosc_lok']}}</p>
           <p>Ulica lokalizacji: {{$kasa['ulica_lok']}}</p>
           <p>Kod pocztowy lokalizacji: {{$kasa['kod_lok']}}</p>
           <p>Poczta lokalizacji: {{$kasa['poczta_lok']}}</p>
           <p>Urząd skarbowy {{$kasa['us_id']}}</p>
           <p>Serwisant: {{$kasa['serwisant']}}</p>
           
       
           <div class="ui divider"></div>
  
   
           <a href="/usluga/dodaj/{{$kasa['id']}}">   <button class="ui pink button"> <i class="add circle icon"></i>Dodaj usługę</button></a>
     
       <a href="/uslugi/fiskalizuj/{{$kasa['id']}}"> 
         
         <button class="ui pink button"> <i class="check circle icon"></i> Fiskalizuj kasę</button></a></div>
    <div class="seven wide column">Usługi kasy: {{$kasa['nazwa_kasy']}}
    
    
        <div class="ui divider"></div>
    
       <a href="/kasa/zgloszenie/{{$kasa['id']}}"> <button class="ui pink button">  <i class="user icon"></i> Zgłoszenie kasy </button></a> 
       <a href="/kasa/zgloszenieserwisu/{{$kasa['id']}}"><button class="ui pink button">  <i class="user icon"></i> Zgłoszenie serwisu</button></a>
    
    </div>
   
  </div>
  
        
      
      
 
          
       
        
         
     

    </div>
</div>
@endsection


