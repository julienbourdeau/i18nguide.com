<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Everything you need to know to internationalize your software - i18n Guide</title>

  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700|Open+Sans:400,600" rel="stylesheet">

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

  @section('header')
    @include('_partials/header')
  @show

  @yield('content')

  @section('footer')
    @include('_partials/footer')
  @show

  <script src="{{ mix('js/app.js') }}"></script>

  @include('_partials.analytics')

</body>
</html>
