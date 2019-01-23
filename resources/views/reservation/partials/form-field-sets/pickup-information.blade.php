<fieldset>
    <legend>Pick up Information</legend>
    <div class="form-group">
        <label for="ReservationPickupDate" class="col-sm-4 col-xs-12 col-form-label text-right">Date of Pick Up</label>
        <div class="col-sm-4 col-xs-12">
            <input name="pickup_date" class="datepicker form-control" type="date" id="ReservationPickupDate" value="{{ old('pickup_date') }}"/>
        </div>
    </div>
    <div class="form-group">
        <label for="ReservationPickupTime" class="col-sm-4 col-xs-12 col-form-label text-right">Time of Pick Up</label>
        <div class="col-sm-4 col-xs-12">
            <input name="pickup_time" class="form-control" type="time" id="ReservationPickupTime" value="{{ old('pickup_time') }}"/>
        </div>
    </div>
</fieldset>
