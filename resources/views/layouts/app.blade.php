<!DOCTYPE html>
<html dir="{{ __('settings.appdir') }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script>window.laravel = { csrfToken: '{{ csrf_token() }}'  }</script>
  <title>البرنامج! | </title>

  

  <!-- Bootstrap -->
  {!! Html::style('vendors/bootstrap/dist/css/bootstrap-ar.css') !!}
  <!-- Font Awesome -->
  {!! Html::style('vendors/font-awesome/css/font-awesome.min.css') !!}
  <!-- NProgress -->
  <!-- {!! Html::style('vendors/nprogress/nprogress.css') !!} -->
  <!-- Custom Theme Style -->
  {!! Html::style('build/css/custom-ar.css') !!}

  

  <style>

 

</style>

 @yield('customstyle')
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
      
      @include('layouts.sidebar')
      @include('layouts.header')

       @yield('content')

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
 
  
       <script src="{{ asset('js/app.js') }}"></script>
    <!-- jQuery -->
    {!! Html::script('vendors/jquery/dist/jquery.min.js') !!}
    <!-- Bootstrap -->
    {!! Html::script('vendors/bootstrap/dist/js/bootstrap.min.js') !!}
    <!-- FastClick -->
    {!! Html::script('vendors/fastclick/lib/fastclick.js') !!}
    <!-- NProgress -->
    {!! Html::script('vendors/nprogress/nprogress.js') !!}
    
    <!-- Custom Theme Scripts -->
  
    {!! Html::script('build/js/custom.min.js') !!}


       @yield('customscript')

       
          
  </body>
</html>
