@extends('layouts.aplikacja2')

@section('content')
<div class="ui container">
<br>
<div class="ui segment">
      <h3>
        Nazwa firmy:   {{$firma['nazwa_firmy']}} 
         </h3>        
              
        <h5>NIP:{{$firma['nip']}} </h5>        
         
              <h4>Adres:<br>
              {{$firma['kod_pocztowy']}},   {{$firma['miejscowosc']}}, {{$firma['ulica']}}, {{$firma['nr_domu']}}, {{$firma['nr_lokalu']}}
              </h4>
     
              <a href="/kasa/dodaj/{{$firma['id']}}">  <button class="ui pink button">  <i class="add icon"></i> Dodaj kasę</button></a>
      </div>


    <div class="ui divider"></div>

    <div class="ui link cards">
        @foreach($kasy as $kasa)
        <div class="ui card" >
          <div class="content">
              <p style="text-align:center; font-size:30px;border:none;">
              <i class="address card icon" style="border:none;"></i>
              </p>
              <p style="text-align:center;">
Nazwa kasy
              </p>
                    <h4 style="text-align:center;"> <a href="/kasy/{{$kasa['id']}}">{{$kasa['nazwa_kasy']}}</a></h4>
                    </div>  
                  
                    <div class="content">
                      <ul class="danelok">
                        <li>
                            <i class="home icon"></i>Miejscowość: {{$kasa['miejscowosc_lok']}}
                        </li>
                        <li>
                            <i class="home icon"></i>Ulica: {{$kasa['miejscowosc_lok']}}
                        </li>
                        <li>
                            <i class="home icon"></i>Numer domu lokalu: {{$kasa['miejscowosc_lok']}}
                        </li>
                      </ul>
                      
                       
                   

                    </div>
                    <div class="extra content">
                        <div class="ui two buttons">
                          <div class="ui purple button">Fiskalizuj kasę</div>
                          <div class="ui  pink button">Dodaj usługę</div>
                        </div>
                      </div>
                  </div>
        @endforeach

      </div>





</div>
@endsection

<style>
  .danelok li {
    list-style-type: none;
  }
</style>
