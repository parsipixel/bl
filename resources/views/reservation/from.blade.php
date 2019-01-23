@extends('layout.default')

@section('content')
    @include('reservation.partials.menu')
    <div style="margin: 13px 0">&nbsp;</div>
    <h2>From Airport: </h2>
    <div>&nbsp;</div>

    @include('layout.partials.message')

    <form action="{{ route('reserve') }}" class="col-sm-10 col-sm-pull-1 col-sm-push-1 col-xs-12  form-horizontal clearfix" role="form"
          id="ReservationFromAirportForm" method="post" accept-charset="utf-8" novalidate>

        {{ csrf_field() }}
        <input type="hidden" name="type" value="From Airport" id="ReservationType"/>

        @include('reservation.partials.forms.personal-information')
        @include('reservation.partials.forms.airport-information')
        @include('reservation.partials.forms.destination-address')
        @include('reservation.partials.forms.other-information')

        <div class="text-center"><input value="Submit" class="btn btn-primary btn-lg" type="submit"/></div>
    </form>
@endsection
