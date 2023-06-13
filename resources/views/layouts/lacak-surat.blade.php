<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIMAFT</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('asset/dist/css/toastr.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('asset/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('asset/dist/css/adminlte.min.css') }}">
  
  <livewire:styles/>
  <livewire:scripts/>
  <style>
    @media only screen and (min-width: 460px) {
      .timeline-width {width: 400px;}
    }
  </style>
</head>
<body class="bg-light">
  <!-- Automatic element centering -->
  <div class="d-flex justify-content-center">

    {{ $slot }}

  </div>
  <script src="{{ asset('asset/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('asset/dist/js/toastr.js') }}"></script>
  @stack('scripts')
  </body>
</html>