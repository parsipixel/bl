<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/LocalBusiness">
<head>
    <meta itemprop="name" content="Blue Shuttle">
    <meta itemprop="description"
          content="Blue Shuttle , San Francisco Airport Shuttle, San Jose Airport Shuttle, Oakland Airport Shuttle, SFO Airport Shuttle, SJC Airport Shuttle, OAK Airport Shuttle, Online Reservations, DOOR to DOOR Shuttle, Airport Shuttle Service, Airport Shuttle Transportation, Airport to Airport Transfer, Airport Transportation, Airport Van, Blue Van">
    <meta itemprop="image" content="http://www.blueshuttle.com/img/blueshuttle_logo.gif">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description"
          content="Most reliable, affordable, and professional door to door Non-Stop shuttle/charter services to and from San Francisco, San Jose, and Oakland International Airports."/>
    <meta name="keywords"
          content="Blue Shuttle, San Francisco Airport Shuttle, San Jose Airport Shuttle, Oakland Airport Shuttle, SFO Airport Shuttle, SJC Airport Shuttle, OAK Airport Shuttle, Online Reservations, DOOR to DOOR Shuttle, Airport Shuttle Service, Airport Shuttle Transportation, Airport to Airport Transfer, Airport Transportation, Airport Van, Blue Van"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tel.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300"/>
    <link href="{{ asset('favicon.ico') }}" type="image/x-icon" rel="icon"/>
    <link href="{{ asset('favicon.ico') }}" type="image/x-icon" rel="shortcut icon"/>
    <script type="text/javascript" src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <title>
        Blue Shuttle | Airport Shuttle, SFO, SJC, OAK Airport, Online Reservations Shuttle Service
    </title>
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.min.js') }}"></script>
    <![endif]-->
</head>
<body itemscope itemtype="http://schema.org/LocalBusiness">
<div class="main-wraper">
    <header>
			<span itemscope itemtype="http://schema.org/Organization">
				<img src="{{ asset('img/blueshuttle_van.jpg') }}" class="img-responsive" alt="Blue Shuttle van" style="margin: 14px auto 0;" itemprop="image"/>			</span>

        <h1 class="logo">
            <a href="{{ route('home') }}" itemprop="url">
                <span itemprop="name">Blue Shuttle</span>
                <img src="{{ asset('img/blueshuttle_logo.gif') }}" class="img-responsive" alt="blueshuttle_logo" style="margin: 13px auto 0;" itemprop="logo"/> </a></h1>
    </header>
    <article class="homepage">
        <div class="container">
            <section class="tel "
                     style="color: #fff; ">


                <p class="toll-free">For the fastest response, please call from anywhere:</p>

                <h3 itemprop="telephone">650-642-1307</h3>

            </section><!-- tel -->
            <a class="btn btn-lg btn-default" href="/reservation"
               style="color: #003A67; font-weight: bold; font-size: 20px; display: block; width: 260px; padding: 14px 0px; margin: 10px auto 0px;">Online
                Reservation</a>
        </div>
    </article>
    <footer class="container">
        <nav class="links" role="navigation">
            <ul class="footer-links">
                <li><a href="/">Home</a> /</li>
                <li><a href="/reservation">Online Reservation</a> /</li>
                <li><a href="/airports">Airports</a> /</li>
                <li><a href="/about-us">About us</a> /</li>
                <li><a href="/contact-us">Contact us</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>

        <div class="row text-center" style="margin: 9px 0px 2px;">
            <script src="https://apis.google.com/js/platform.js" async defer></script>
            <g:plusone></g:plusone>
        </div>

        <div class="clearfix"></div>

        <div class="social-links">
            Find us on Social Media:
            <p>
                <a class="btn btn-circle"
                   href="http://www.facebook.com/BlueShuttle.co"><span
                            class="fa fa-facebook"></span></a> <a class="btn btn-circle"
                                                                  href="http://twitter.com/_Blueshuttle"><span class="fa fa-twitter"></span></a>

                <a class="btn btn-circle"
                   href="https://plus.google.com/share?url=http://www.blueshuttle.com"
                   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                    <span class="fa fa-google-plus" alt="Share on Google+"></span>
                </a>
            </p>
        </div>


        <div class="clearfix"></div>
        <hr>
        <p class="text-center" style="color: #aaa; font-size: 10px;">
            Copyright @ 2014 - All rights reserved. Designed by <a
                    href="http://www.parsipixel.com/" title="ParsiPixel"
                    target="_blank">ParsiPixel</a>
        </p>

    </footer>
</div>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-54058356-1', 'auto');
    ga('send', 'pageview');
</script>

</body>
</html>
