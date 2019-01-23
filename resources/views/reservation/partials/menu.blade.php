<div class="reservation col-xs-12">
    <h2>Online Reservation</h2>

    <p class="reservation-type">Please Select Shuttle Service Type</p>

    <h3 class="col-lg-4 col-md-4 col-sm-3 col-xs-12" itemscope itemtype="http://schema.org/Product">
        <a itemprop="url" class="text-center {{ url()->current() == route('from') ? 'current' : '' }}" href="{{ route('from') }}" class="text-center">
            <span class="fa fa-plane hidden-xs"></span>
            <span class="fa fa-long-arrow-right hidden-xs"></span>
            <span class="fa fa-home hidden-xs"></span>
            <span class="clearfix" itemprop="name">From Airport</span>
        </a>
    </h3>

    <h3 class="col-lg-4 col-md-4 col-sm-3 col-xs-12" itemscope itemtype="http://schema.org/Product">
        <a itemprop="url" class="text-center  {{ url()->current() == route('to') ? 'current' : '' }}" href="{{ route('to') }}">
            <span class="fa fa-home hidden-xs"></span>
            <span class="fa fa-long-arrow-right hidden-xs"></span>
            <span class="fa fa-plane hidden-xs"></span>
            <span class="clearfix" itemprop="name">To Airport</span>
        </a>
    </h3>

    <h3 class="col-lg-4 col-md-4 col-sm-6 col-xs-12" itemscope itemtype="http://schema.org/Product">
        <a itemprop="url" class="text-center  {{ url()->current() == route('ltl') ? 'current' : '' }}" href="{{ route('ltl') }}">
            <span class="fa fa-home hidden-xs"></span>
            <span class="fa fa-long-arrow-right hidden-xs"></span>
            <span class="fa fa-home hidden-xs"></span>
            <span class="clearfix" itemprop="name">From a Location To Another</span>
        </a>
    </h3>
</div>
