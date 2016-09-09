@extends('layout.default')

@section('content')
    @include('reservation.partials.menu')

    <div style="margin: 13px 0">&nbsp;</div>
    <h2>To Airport: </h2>
    <div>&nbsp;</div>

    @include('layout.partials.message')

    <form action="{{ route('reserve') }}" class="col-sm-10 col-sm-pull-1 col-sm-push-1 col-xs-12  form-horizontal clearfix" role="form"
          id="ReservationToAirportForm" method="post" accept-charset="utf-8">
        {{ csrf_field() }}

        <div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>
        <fieldset>
            <legend>Personal Information</legend>
            <div class="form-group required"><label for="ReservationName" class="col-sm-4 col-xs-12 control-label">Name</label><input name="name"
                                                                                                                                      class="" type="text"
                                                                                                                                      id="ReservationName"
                                                                                                                                      required="required"/></div>
            <div class="form-group required"><label for="ReservationPhone" class="col-sm-4 col-xs-12 control-label">Phone/Mobile Number</label><input
                        name="phone" class="" type="tel" id="ReservationPhone" required="required"/></div>
            <div class="form-group required"><label for="ReservationEmail" class="col-sm-4 col-xs-12 control-label">Email</label><input
                        name="email" class="" type="email" id="ReservationEmail" required="required"/></div>
        </fieldset>
        <input type="hidden" name="type" value="To Airport" id="ReservationType"/>
        <fieldset>
            <legend>Your Address Information</legend>
            <div class="form-group required"><label for="ReservationOrgAddress" class="col-sm-4 col-xs-12 control-label">Address</label><input
                        name="org_address" class="" type="text" id="ReservationOrgAddress" required="required"/></div>
            <div class="form-group required"><label for="ReservationOrgCity" class="col-sm-4 col-xs-12 control-label">City</label><input
                        name="org_city" class="" type="text" id="ReservationOrgCity" required="required"/></div>
        </fieldset>
        <fieldset>
            <legend>Destination Information</legend>
            <div class="form-group"><label for="ReservationAirport" class="col-sm-4 col-xs-12 control-label">Airport</label><select name="airport"
                                                                                                                                    class="" id="ReservationAirport">
                    <option value="SFO">San Francisco International Airport (SFO)</option>
                    <option value="SJC">San Jose International Airport (SJC)</option>
                    <option value="OAK">Oakland International Airport (OAK)</option>
                </select></div>
            <div class="form-group"><label for="ReservationPickupDate" class="col-sm-4 col-xs-12 control-label">Date of Pick Up</label><input
                        name="pickup_date" class="" type="text" id="ReservationPickupDate"/></div>
            <div class="form-group"><label for="ReservationPickupTime" class="col-sm-4 col-xs-12 control-label">Time of Pick Up</label><input
                        name="pickup_time" class="" type="text" id="ReservationPickupTime"/></div>
        </fieldset>
        <fieldset>
            <legend>Other Information</legend>
            <div class="form-group required"><label for="ReservationAdult" class="col-sm-4 col-xs-12 control-label">Adult Passengers</label><input
                        name="adult" class="" type="text" id="ReservationAdult" required="required"/></div>
            <div class="form-group"><label for="ReservationChild" class="col-sm-4 col-xs-12 control-label">Child Passengers</label><input
                        name="child" class="" type="text" id="ReservationChild"/></div>
            <div class="form-group"><label for="ReservationMessage" class="col-sm-4 col-xs-12 control-label">Message</label><textarea
                        name="message" class="" row="5"
                        placeholder="Please provide any other information, such as the number of luggage, boxes, golf bags, and etc." cols="30" rows="6"
                        id="ReservationMessage"></textarea></div>
        </fieldset>
        <div class="text-center"><input value="Submit" class="btn btn-primary btn-lg" type="submit"/></div>
    </form>
@endsection
