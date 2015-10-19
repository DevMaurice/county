<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('site.title') }} Admin</title>

    <link href="{{ elixir('css/all.css') }}"
          rel="stylesheet">
    @yield('styles')

    <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body> 
  <div class="container">
    @include('admin.partials.navbar')    
    @yield('content') 
        <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
      
        </div>     
    @include('admin.partials.footer')
  </div>
</body>
      <script src="{{ elixir('js/all.js') }}"></script>
      @yield('scripts')
</html>