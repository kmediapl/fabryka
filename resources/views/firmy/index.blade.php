@extends('layouts.aplikacja')

@section('content')

       <br>
       <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col mdl-color--white mdl-shadow--2dp" style="padding:20px;">
                <h5>Nadchodzące fiskalizacje</h5>
            </div>
            <div class="mdl-cell mdl-cell--6-col mdl-color--white mdl-shadow--2dp" style="padding:20px;">
                    <h5>Nadchodzące fiskalizacje</h5>
            </div>
          
          </div>

          <div class="mdl-cell mdl-cell--12-col mdl-color--white mdl-shadow--2dp">  
         <div class="mdl-tooltip mdl-tooltip--large" for="addfirm">
DODAJ FIRMĘ
</div><a href="firma/dodaj">
          <button id="addfirm" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
  <i class="material-icons">add</i>
</button>   </a> 
        <table class="mdl-data-table mdl-js-data-table  " style="width:100%; ">
                <thead>
                  <tr>
                    <th>Nazwa firmy</th>
                    <th>Miejscowość</th>
                    <th>Ulica</th>
                    <th>Akcja</th>
                  </tr>
                </thead>
                <tbody>
 
@foreach ($firmy as $firma)
<tr>
   <td><a href="firmy/{{$firma['id']}}">{{$firma['nazwa_firmy']}}</a></td><td>{{$firma['miejscowosc']}}</td><td>{{$firma['ulica']}}</td>
   <td>

        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        <i class="material-icons">mode_edit</i>      Edytuj firmę
              </button>
             <a href="kasa/dodaj/{{$firma['id']}}"> <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
             <i class="material-icons">add_box</i> Dodaj kasę
                  </button></a>
   </td>
</tr>
    @endforeach
   
</tbody>
</table>
          </div>
@endsection



