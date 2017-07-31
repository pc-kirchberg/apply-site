<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta property="og:title" content="@yield('title')" />
  <meta property="og:url" content="{{ Request::url() }}" />
  <meta property="og:image" content="https://pupilscom-esl1.eu/wp-content/uploads/2015/11/cropped-LOGO-sans-font-192x192.png" />

  <title>@yield('title')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,600" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body class="@yield('body-class')">
<div class="flex-center position-ref full-height">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Apply to the Pupils' Committee</a>
      </div>

      <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav">
          <li class="{{ Route::currentRouteName() === 'process' ? 'active' : '' }}"><a href="{{ route('process') }}">Process</a></li>
          <li class="{{ Route::currentRouteName() === 'positions' ? 'active' : '' }}"><a href="{{ route('positions') }}">Positions</a></li>
          <li class="{{ Route::currentRouteName() === 'form' ? 'active' : '' }}"><a href="{{ route('form') }}">Apply</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="content">
    @yield('content')
  </div>
</div>
<script src="{{ mix('/js/app.js') }}"></script>
@stack('js')
</body>
</html>
