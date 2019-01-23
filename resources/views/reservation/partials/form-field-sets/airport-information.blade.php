<fieldset>
    <legend>Airport Information</legend>
    <div class="form-group">
        <label for="ReservationAirport" class="col-sm-4 col-xs-12 col-form-label text-right">Airport</label>
        <div class="col-sm-6 col-xs-12">
            @include('reservation.partials.form-inputs.airports')
        </div>
    </div>

    <div class="form-group">
        <label for="ReservationAirline" class="col-sm-4 col-xs-12 col-form-label text-right">Airline</label>
        <div class="col-sm-6 col-xs-12">
            <input name="airline" class="form-control" type="text" id="ReservationAirline" value="{{ old('airline') }}"/>
        </div>
    </div>

    <div class="form-group">
        <label for="ReservationFlight" class="col-sm-4 col-xs-12 col-form-label text-right">Flight Number</label>
        <div class="col-sm-3 col-xs-12">
            <input name="flight" class="form-control" type="text" id="ReservationFlight" value="{{ old('flight') }}"/>
        </div>
    </div>

    <div class="form-group">
        <label for="ReservationPickupDate" class="col-sm-4 col-xs-12 col-form-label text-right">Date of Pick Up</label>
        <div class="col-sm-3 col-xs-12">
            <input name="pickup_date" class="datepicker form-control" type="date" id="ReservationPickupDate" data-provide="datepicker" value="{{ old('pickup_date') }}"/>
        </div>
    </div>

    <div class="form-group">
        <label for="ReservationPickupTime" class="col-sm-4 col-xs-12 col-form-label text-right">Arrival time</label>
        <div class="col-sm-3 col-xs-12">
            <input name="pickup_time" class="form-control" type="time" id="ReservationPickupTime" value="{{ old('pickup_time') }}"/>
        </div>
    </div>

</fieldset>
