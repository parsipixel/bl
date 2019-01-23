<fieldset>
    <legend>Your Address Information</legend>
    <div class="form-group required">
        <label for="ReservationOrgAddress" class="col-sm-4 col-xs-12 col-form-label text-right">Address</label>
        <div class="col-sm-6 col-xs-12">
            <input name="org_address" class="form-control" type="text" id="ReservationOrgAddress" required="required" value="{{ old('org_address') }}"/>
        </div>
    </div>

    <div class="form-group required">
        <label for="ReservationOrgCity" class="col-sm-4 col-xs-12 col-form-label text-right">City</label>
        <div class="col-sm-6 col-xs-12">
            <input name="org_city" class="form-control" type="text" id="ReservationOrgCity" required="required" value="{{ old('org_city') }}"/>
        </div>
    </div>

</fieldset>
