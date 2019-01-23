<select name="airport" class="form-control" id="ReservationAirport">
    <option value="SFO" {{ old('airport') == 'SFO' ? 'selected' : '' }}>San Francisco International Airport (SFO)</option>
    <option value="SJC" {{ old('airport') == 'SJC' ? 'selected' : '' }}>San Jose International Airport (SJC)</option>
    <option value="OAK" {{ old('airport') == 'OAK' ? 'selected' : '' }}>Oakland International Airport (OAK)</option>
</select>
