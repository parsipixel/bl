@extends('layout.default')

@section('content')
    <h2 class="title">Airports</h2>
    <p>Blue Shuttle operates in San Francisco Bay Area. It provides Door to
        Door, Non-Stop and Direct Airport Shuttle Rides to and from San
        Francisco International Airport (SFO), San Jose International Airport
        (SJC) and Oakland International Airport (OAK).</p>

    <img src="{{ asset('img/SFO.jpg') }}" alt="San Francisco International Airport (SFO)" class="img-rounded pull-right airports" />

    <h3>- San Francisco International Airport:</h3>
    <p>
        San Francisco International Airport (SFO) is an international airport
        located 13 miles south of downtown San Francisco, California. SFO has
        flights to points throughout North America and is a major gateway to
        Europe and Asia. <br> SFO is the largest airport in the Bay Area and in
        2013, it was the seventh busiest in the United States and the
        twenty-second busiest airport in the world by passenger count. For more
        information about San Francisco International Airport, please go to: <a	href="http://www.flysfo.com/" title="San Francisco International Airport">www.flysfo.com</a>
    </p>
    <div class="clearfix"></div>
    <hr>

    <img src="{{ asset('img/SJC.jpg') }}" alt="San Jose International Airport (SJC)" class="img-rounded pull-right airports" />

    <h3>- San Jose International Airport:</h3>
    <p>
        Norman Y. Mineta San Jose International Airport (SJC) is a city-owned
        public airport inSan Jose, Santa Clara County, California. It is named
        for San Jose native Norman Mineta, Transportation Secretary in the
        Cabinet ofGeorge W. Bush and Commerce Secretary in the Cabinet of Bill
        Clinton. The name also recognizes Mineta's service as a Councilman for,
        and Mayor of, San Jose. It is two miles northwest of Downtown San Jose
        near the intersections of U.S. Route 101, Interstate 880, and State
        Route 87. The dominant carrier is Southwest Airlines with Alaska
        Airlines as the second largest. The airport has free Wi-Fi in all
        terminals. <br> For more information about San Jose International
        Airport, please go to: <a href="http://www.flysanjose.com/"
                                  title="San Jose International Airport">www.flysanjose.com</a>
    </p>
    <div class="clearfix"></div>
    <hr>

    <img src="{{ asset('img/OAK.jpg') }}" alt="Oakland International Airport (OAK)" class="img-rounded pull-right airports" />

    <h3>- Oakland International Airport:</h3>
    <p>
        Oakland International Airport (OAK) is a public airport five miles
        south of downtown Oakland, in Alameda County, California, United
        States. It is owned by the Port of Oakland.It is one of three
        international airports in the San Francisco Bay Area. The airport has
        passenger service to destinations in the United States, as well as
        Mexico and Europe. Cargo flights fly to destinations in the United
        States, Canada and Japan. OAK is the closest airport to the San
        Francisco financial district both geographically and by public transit.
        <br> For more information about Oakland International Airport, please
        go to: <a href="http://www.oaklandairport.com/"
                  title="Oakland International Airport">www.oaklandairport.com</a> <br>
    </p>

    <div class="clearfix"></div>
    <hr>
    <p><strong>Blue Shuttle also provides transportations, from the Bay Area to
            other airports outside the San Francisco Bay Area.</strong>
        <br>These airports	include:</p>
    <ul>
        <li>Sacramento International Airport (SMF)</li>
        <li>Stockton Metropolitan Airport (SCK)</li>
        <li>Modesto City-County Airport (MOD)</li>
        <li>Monterey Peninsula Airport (MRY)</li>
        <li>Merced Municipal Airport/MacReady Field (MCE)</li>
    </ul>
@endsection
