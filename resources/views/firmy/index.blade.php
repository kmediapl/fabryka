@extends('layouts.aplikacja2')

@section('content')

    
       <div class="ui container">
         
          <div class="ui two column grid">
              <div class="column">
                <div class="ui segment">
                  <h3>Nadchodzące przeglądy +- 30dni</h3>
                  <div class="ui divider"></div>
                </div>
              </div>
              <div class="column">
                <div class="ui segment">
                    <h3>Nadchodzące przeglądy +- 30dni - miasta</h3>
                    <div class="ui divider"></div>
                </div>
              </div>
         
            </div>
            <div class="ui segment">
                <h3>Wyszukaj firmę</h3>
                <div class="ui divider"></div>
                <div class="ui input">
                    <input type="text" placeholder="Search...">
                  </div>
                  <div class="ui input">
                      <input type="text" placeholder="Search...">
                    </div>
                    <div class="ui animated button" tabindex="0">
                        <div class="visible content">Szukaj</div>
                        <div class="hidden content">
                            <i class="search icon"></i>
                        </div>
                      </div>
            </div>
<br>
<div class="ui segment">
<a href="firma/dodaj">
  <div class="ui animated  pink button" tabindex="0">
      <div class="visible content">Dodaj firmę</div>
      <div class="hidden content">
          <i class="add icon"></i>
      </div>
    </div>


 </a> 
        <table class="ui celled table" style="width:100%; ">
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

    <button class="ui pink button">  <i class="edit icon"></i> Edytuj firmę</button>
             <a href="kasa/dodaj/{{$firma['id']}}"> <button class="ui violet button">  <i class="add icon"></i> Dodaj kasę</button></a>
   </td>
</tr>
    @endforeach
   
</tbody>
</table>
{{ $firmy->links() }}
          </div>   </div>
@endsection



