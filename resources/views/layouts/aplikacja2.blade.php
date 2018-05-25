<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.css" />
    <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI-Calendar/76959c6f7d33a527b49be76789e984a0a407350b/dist/calendar.min.css" rel="stylesheet" type="text/css" />
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 
</head>
<body>
    <div id="app">

            <div class="ui fixed inverted menu">
                    <div class="ui container">
                      <a href="#" class="header item">
                        
                       FABRYKA IT
                      </a>
                      <a href="/" class="item"><i class="caret square right outline icon"></i>Wszystkie firmy</a>
                      <div class="ui simple dropdown item">
                          <i class="info circle icon"></i> Słowniki<i class="dropdown icon"></i>
                        <div class="menu">
                          <a class="item" href="#">Urzędy skarbowe</a>
                          <a class="item" href="#">Serwisanci</a>
                          <a class="item" href="#">Typy kas</a>
                          
                          
                        </div>
                      </div>
                      <a href="/" class="item"><i class="search icon"></i>Wyszukiwanie</a>
                      <div class="right menu"><a href="/" class="item">Logowanie</a></div>
                    </div>
                 
                  </div>
                  <br>

                  <br><br>

           
                    @include('flash::message')  
                    <div id="zaw" style="min-height:750px;">
                @yield('content')
                    </div>
                <br>

                <br><br>
              </div>
              <div class="ui inverted vertical footer segment">
                  <div class="ui center aligned container">
                   
                    <div class="ui inverted section divider"></div>
                    <p class="ui centered ">FABRYKA IT</p>
                    <div class="ui horizontal inverted small divided link list">
                      <a class="item" href="#">Site Map</a>
                      <a class="item" href="#">Contact Us</a>
                      <a class="item" href="#">Terms and Conditions</a>
                      <a class="item" href="#">Privacy Policy</a>
                    </div>
                  </div>
                </div>
      
       
            
            
       
 
   
                <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI-Calendar/76959c6f7d33a527b49be76789e984a0a407350b/dist/calendar.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.js"></script>

    <script>
            $('#flash-overlay-modal').modal();
        </script>

    
    <script type="text/javascript">
        $('.date').datepicker({  
           format: 'mm-dd-yyyy'
         });  
    </script> 
        
</body>
</html>
