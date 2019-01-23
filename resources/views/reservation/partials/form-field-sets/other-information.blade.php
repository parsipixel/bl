<fieldset>
    <legend>Other Information</legend>

    <div class="form-group required">
        <label for="ReservationAdult" class="col-sm-4 col-xs-12 col-form-label text-right">Adult Passengers</label>
        <div class="col-sm-2 col-xs-12">
            <input name="adult" class="form-control" type="number" id="ReservationAdult" required="required" value="{{ old('adult') }}"/>
        </div>
    </div>

    <div class="form-group">
        <label for="ReservationChild" class="col-sm-4 col-xs-12 col-form-label text-right">Child Passengers</label>
        <div class="col-sm-2 col-xs-12">
            <input name="child" class="form-control" type="number" id="ReservationChild" value="{{ old('child') }}"/>
        </div>
    </div>

    <div class="form-group">
        <label for="ReservationMessage" class="col-sm-4 col-xs-12 col-form-label text-right">Message</label>
        <div class="col-sm-6 col-xs-12">
            <textarea name="message" class="form-control"
                      placeholder="Please provide any other information, such as the number of luggage, boxes, golf bags, and etc."
                      cols="30" rows="6" id="ReservationMessage">{{ old('message') }}</textarea>
        </div>
    </div>
</fieldset>
