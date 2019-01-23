@extends('layout.default')

@section('content')
    @include('reservation.partials.menu')

    <div style="margin: 13px 0">&nbsp;</div>
    <h2>To Airport: </h2>
    <div>&nbsp;</div>

    @include('layout.partials.message')

    <form action="{{ route('reserve') }}" class="col-sm-10 col-sm-pull-1 col-sm-push-1 col-xs-12  form-horizontal clearfix"
          role="form" id="ReservationToAirportForm" method="post" accept-charset="utf-8">

        {{ csrf_field() }}
        <input type="hidden" name="type" value="To Airport" id="ReservationType"/>

        @include('reservation.partials.form-field-sets.personal-information')
        @include('reservation.partials.form-field-sets.your-address')
        @include('reservation.partials.form-field-sets.destination-airport')
        @include('reservation.partials.form-field-sets.other-information')

        <div class="text-center">
            @include('reservation.partials.form-inputs.submit-button')
        </div>
    </form>
@endsection
