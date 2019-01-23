@extends('layout.default')

@section('content')
    <h2>Contact us</h2>
    <div class="container">

        @include('layout.partials.message')
        <p style="border-bottom: 1px dashed #eee; padding: 27px 0; margin-bottom: 27px;">
            For further assistance, concerns, comments, questions and to create a
            Corporate Account, please call us at:
            <span itemprop="telephone">650-642-1307</span><br> You can also
            email us at: <a href="mailto:blueshuttle@gmail.com" style="font-weight: bold;" itemprop="email">blueshuttle@gmail.com</a>
            <br>
            <br>
            Thank
            you for choosing BLUE SHUTTLE.
        </p>

        <div class="contact-tel col-md-5" style="margin-top: 50px !important;">
            <section class="tel "
                     style="color: #003A67; ">

		<span style="float: none; display: block;"
              class="text-center hidden-xs tel-icon fa fa-phone-square">
        </span>

                <p class="toll-free">For the fastest response, please call from anywhere:</p>

                <h3 itemprop="telephone">650-642-1307</h3>

            </section><!-- tel -->
        </div>

        <div class="contact-form col-md-7">
            <form action="{{ route('post.contact-us') }}" class="form-horizontal clearfix" role="form" id="ContactUsIndexForm" method="post" accept-charset="utf-8">

                {{ csrf_field() }}
                <fieldset>
                    <legend>Contact us</legend>

                    <div class="form-group required">
                        <label for="ContactUsName" class="col-md-5 col-form-label text-right">Name</label>
                        <div class="col-sm-6 col-xs-12">
                            <input name="name" class="form-control" type="text" id="ContactUsName" required="required"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ContactUsPhone" class="col-md-5 col-form-label text-right">Phone/Mobile Number</label>
                        <div class="col-sm-6 col-xs-12">
                            <input name="phone" class="form-control" type="tel" id="ContactUsPhone"/>
                        </div>
                    </div>

                    <div class="form-group required">
                        <label for="ContactUsEmail" class="col-md-5 col-form-label text-right">Email</label>
                        <div class="col-sm-6 col-xs-12">
                            <input name="email" class="form-control" type="email" id="ContactUsEmail" required="required"/>
                        </div>
                    </div>

                    <div class="form-group required">
                        <label for="ContactUsMessage" class="col-md-5 col-form-label text-right">Message</label>
                        <div class="col-sm-6 col-xs-12">
                            <textarea name="message" class="form-control" cols="30" rows="6" id="ContactUsMessage" required="required"></textarea>
                        </div>
                    </div>

                </fieldset>

                <div class="text-center">
                    <input value="Submit" class="btn btn-primary" type="submit"/>
                </div>
            </form>
        </div>
    </div>
@endsection
