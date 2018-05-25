@extends('layouts.aplikacja2')
@section('content')
<div class="container">
    <div class="ui segment">


<h1>Usługi dla kasy ::: {{$nazwa['nazwa_kasy']}} firmy {{$firma['nazwa_firmy']}}</h1>
    {!! Form::open(['url' => 'firmy',  'method' => 'post', 'class'=>'ui form']) !!}
    <div class="ui divider"></div>

     
      <div >
          <label class="" for="nazwa_uslugi">Nazwa usługi wpisanej do książki serwisowej: </label>
          <input type="text" placeholder="Podaj nazwę usługi" id="nazwa_uslugi">
        </div>

        <div >
            <label class="" for="nazwa_uslugi">Data wykonania: </label>
            <input type="text" placeholder="Podaj datę..." id="data_wykonania">
          </div>
<br>
          <div class="inline field">
              <div class="ui toggle checkbox">
                <input type="checkbox" tabindex="0" checked value="1">
                <label>Czy wykonana</label>
              </div>
            </div>
   
          <button class="ui pink button">  <i class="add icon"></i>     Dodaj usługę</button>

    {!! Form::close() !!}

</div>
</div>

<script>
$('#data_wykonania').calendar();

</script>
@endsection




