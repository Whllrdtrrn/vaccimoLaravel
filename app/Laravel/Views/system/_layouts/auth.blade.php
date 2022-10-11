<!DOCTYPE html>
<html lang="en">
<head>
    @include('system._components.metas')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/material-design-icons/css/material-design-iconic-font.min.css')}}"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/css/modified.css?v=1.1')}}" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
      body{
        
      }
      .bg-green {
        background-color: #4FB84D !important;
      }
      .text-green {
        color: #4FB84D !important;
      }
      .text-white {
        color: white !important;
      }
      .splash-container {
    max-width: 0 auto;
    margin: 90px auto;
}
.splash-container .panel {
    margin-bottom: 0px;
}
#bg-main{
  filter: brightness(0.7);

}

      
    </style>
  </head>
  <body class="be-splash-screen">
    @yield('content')
    <script src="{{asset('assets/lib/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/main.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      });
      
    </script>
  </body>

</html>