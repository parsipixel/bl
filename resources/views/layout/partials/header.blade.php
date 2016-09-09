<header class="container header clearfix">
    <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
        <h1 class="logo">
            <a href="{{ route('home') }}" itemprop="url" style="float: left;">
                <span itemprop="name">Blue Shuttle</span>
                <img src="{{ asset('img/blueshuttle_logo.gif') }}" alt="blueshuttle_logo" class="img-responsive" itemprop="logo">
            </a>
        </h1>
    </div>
    <nav class="col-lg-6 col-md-7 col-sm-12 col-xs-12 navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#collapse">
                <span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="{{ Route::is('reservation')? 'active' : '' }}"><a href="{{ route('reservation') }}">Online Reservation</a></li>
                <li class="{{ Route::is('airports')? 'active' : '' }}"><a href="{{ route('airports') }}">Airports</a></li>
                <li class="{{ Route::is('about-us')? 'active' : '' }}"><a href="{{ route('about-us') }}">About us</a></li>
                <li class="{{ Route::is('contact-us')? 'active' : '' }}"><a href="{{ route('contact-us') }}">Contact us</a></li>
            </ul>
        </div>
    </nav>
</header>

<section class="slider">
    <div class="container slider-1">
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pull-right">
            <section class="tel hasFloat" style="color: #fff; ">
                <span style="float: left;" class="hidden-md hidden-sm hidden-xs tel-icon fa fa-phone-square"></span>

                <p class="toll-free">For the fastest response, please call from anywhere:</p>

                <h3 itemprop="telephone">650-642-1307</h3>
            </section><!-- tel -->
        </div>
    </div><!-- container -->
</section><!-- slider -->
