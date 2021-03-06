<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/LocalBusiness">
<head>
    <meta charset="UTF-8">
    <meta itemprop="name" content="Blue Shuttle">
    <meta itemprop="description" name="description"
          content="Most reliable, affordable, and professional door to door Non-Stop shuttle/charter services to and from San Francisco, San Jose, and Oakland International Airports.">
    <meta itemprop="keywords" name="keywords"
          content="Blue Shuttle, San Francisco Airport Shuttle, San Jose Airport Shuttle, Oakland Airport Shuttle, SFO Airport Shuttle, SJC Airport Shuttle, OAK Airport Shuttle, Online Reservations, DOOR to DOOR Shuttle, Airport Shuttle Service, Airport Shuttle Transportation, Airport to Airport Transfer, Airport Transportation, Airport Van, Blue Van">
    <meta itemprop="image" content="{{ asset('img/blueshuttle_logo.gif') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:400,300') }}">

    <script type="text/javascript" src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    @if(isset($images))
        <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
        {{--        <link rel="stylesheet" href="{{ asset('css/uikit-rtl.min.css') }}">--}}
        <script type="text/javascript" src="{{ asset('js/uikit.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/uikit-icons.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    @endif

    {{-- Date Picker --}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.css">--}}
    {{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>--}}

    <title>{{ $title }} | Blue Shuttle - Online Reservations | Airport Shuttle, SFO, SJC, OAK Airport </title>
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.min.js') }}"></script>
    <![endif]-->

    @yield('extra-assets')
</head>
<body itemscope itemtype="http://schema.org/LocalBusiness">
<div>
    <div class="top hidden-xs"></div>
    @include('layout.partials.header')
    <article class="container">
        @yield('content')
    </article>
    @include('layout.partials.yelp')
    @include('layout.partials.footer')
</div>

@include('layout.partials.scripts')
@yield('script')

</body>
</html>
