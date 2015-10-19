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
    @include('admin.partials.footer')
  </div>
</body>
      <script src="{{ elixir('js/all.js') }}"></script>
      @yield('scripts')
</html>