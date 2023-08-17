<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>{{env('APP_NAME', '諾亞克')}}</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @stack('meta')

  <!-- Bootstrap CSS v5.1.3 -->
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/5.1.3/bootstrap.min.css') }}">

  <!-- select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme/dist/select2-bootstrap4.min.css">

  <style>
    /* 這樣label比較好點選,沒有gap */
    .form-check.form-check-inline{
      padding-right: 1rem;
      margin-right: 0rem;
    }
  </style>
  @stack('links')
</head>

<body>
  <div class="container-fluid">
    @yield('content')
  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script type="text/javascript" src="{{ URL::asset('js/jquery/jquery-3.5.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery/jquery.tmpl.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap/5.1.3/bootstrap.bundle.min.js') }}"></script>
  {{-- select2 --}}
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  @stack('scripts')
</body>

</html>