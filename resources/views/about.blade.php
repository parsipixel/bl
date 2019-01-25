@extends('layout.default')

@section('content')
    @include('layout.partials.gallery')

    <h2>About us</h2>

    <p>At BLUE SHUTTLE, we provide the most reliable, affordable, and
        professional door to door Non-Stop shuttle/charter services to and/or
        from San Francisco, San Jose, and Oakland International Airports.</p>

    <p>The service we provide is NON-STOP and DOOR to DOOR! Just like a taxi
        or limousine, only more affordable and reliable. You don't have to pay
        so much anymore to taxis or limousines in order to get to the airport.
        You don't have to worry anymore if they are going to show up at the
        right time! And, you don't have to share the ride with others and spend
        so much time on the road just to get to the airport! All you need to do
        is make a phone call and try Blue Shuttle only once. We are confident
        that once you use our service, you'll be satisfied enough to call us
        again and again...</p>

    <p>Blue Shuttle was founded in May of 2000, as a transportation company,
        in San Francisco Bay Area. It provides transportation services to
        individuals, schools, hotels and companies. Blue Shuttle's main service
        is to and from airport, but it also provides transportation to any
        other destinations, in or out of the Bay Area.</p>

    <p>Blue Shuttle has Corporate Accounts with several hotels, schools and
        companies, whose need, includes transportation
        to and/or from one location to another.</p>

    <p>Blue Shuttle has been picked by many satisfied customers as one of
        the best and highly regarded transportation companies in the beautiful
        San Francisco Bay Area.</p>
    <br>

    <div class="text-center">
        <div class="col-md-6 col-md-push-3">
            <div class="thumbnail">
                <img src="{{ asset('img/blueshuttle_about_1.jpg') }}" alt="Wedding trip in Bay Area, provided by Blue Shuttle" class="img-responsive"
                     data-src="holder.js/600x308">

                <div class="caption">
                    <p>Wedding trip in Bay Area, provided by Blue Shuttle</p>
                </div>
            </div>
        </div>
    </div>
@endsection
