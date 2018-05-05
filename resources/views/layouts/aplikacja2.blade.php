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

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.js"></script>
</head>
<body>
    <div id="app">

            <div class="ui fixed inverted menu">
                    <div class="ui container">
                      <a href="#" class="header item">
                        
                       FABRYKA IT
                      </a>
                      <a href="#" class="item">Home</a>
                      <div class="ui simple dropdown item">
                        Dropdown <i class="dropdown icon"></i>
                        <div class="menu">
                          <a class="item" href="#">Link Item</a>
                          <a class="item" href="#">Link Item</a>
                          <div class="divider"></div>
                          <div class="header">Header Item</div>
                          <div class="item">
                            <i class="dropdown icon"></i>
                            Sub Menu
                            <div class="menu">
                              <a class="item" href="#">Link Item</a>
                              <a class="item" href="#">Link Item</a>
                            </div>
                          </div>
                          <a class="item" href="#">Link Item</a>
                        </div>
                      </div>
                    </div>
                  </div>
     

              <div class="page-content">
                    @include('flash::message')  
                @yield('content')</div>

      
       
            
            
       
    </div>
   

    

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
