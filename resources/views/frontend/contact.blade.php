@extends('frontend.template')
@section('data')
<div class="container7">
  <div class="jumbotron bgfound">
  <h1 class="col1 text-center">Contact Bharat Khojo</h1>
  <p>&nbsp;</p>
  <p class="text-center font-18">Need any help send us a quick mail</p>
</div>
<div class="container">


      <!-- Page Heading/Breadcrumbs -->


      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.3490706778794!2d77.20768021497376!3d28.6192983824231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd4b10d4ac97%3A0x8098ff8da0de8efb!2sMinistry+of+Tourism!5e0!3m2!1sen!2sin!4v1532600348540" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p>
           Thyagraj Marg Area, Teen Murti Marg Area,<br> New Delhi, Delhi 110004
            <br>
          </p>
          <p>
          <a href="tel:9090908989">9090908989</a>
          </p>
          <p>
            
</abbr>
            <a href="mailto:bharatkhojo@gmail.com">bharatkhojo@gmail.com
            </a>
          </p>
         
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <form action="{{route('contactform')}}" method="POST">
            @csrf
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input name="fullname" type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input name="contactno" type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input name="email" type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea name="message" rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-info" id="sendMessageButton">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    
</div>
@endsection