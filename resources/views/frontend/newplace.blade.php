@extends('frontend.template')
@section('data')
<div class="container7">
  <div class="jumbotron bgfound text-center">
  <h1 class="col1">Found a hidden place?</h1>
  <p>Share details,photos,location win amazing awards directly.<sup></sup></p>
  <p><a class="btn btn-info btn-sm" href="#" role="button">Know more</a></p>
</div>
<div class="container">
  <h6 class="display-4 font-24">Feel free to contact at <a href="mailto:dirarchraj@gmail.com">bharatkhojo@gmail.com</a></h6>
  <br>

  <div class="container">
    <div class="row">
        <div class="mx-auto col-sm-12 px-0">
                    <!-- form user info -->
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0 font-weight-normal">Add a place to Government Database.</h6>
                        </div>
                        <div class="card-body">

                            <form id="savenewplace" enctype="multipart/form-data" method="POST" action="{{route('savenewplace')}}" class="form" role="form" autocomplete="off">
@csrf
                                <h5 class="text-info">Place Information</h5>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Place name</label>
                                    <div class="col-lg-9">
                                        <input  required="" name="placename" class="form-control" type="text" placeholder="(e.g. Hawamahal)">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Category</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" name="category">
                    <option value="Select">Select</option>
                    <option value="Fort">Fort</option>
                    <option value="Temple">Temple</option>
                    <option value="Lake">Lake</option>
                    <option value="River">River</option>
                    <option value="Mountain">Mountain</option>
                    <option value="Place">Place</option>
                    <option value="Velley">Velley</option>
                    <option value="Amusement Park">Amusement Park</option>
                    <option value="Treaking">Treaking</option>
                    <option value="Wildlife">Wildlife</option>
                    <option value="Museum">Museum</option>
                    <option value="Others">Others</option>
                </select>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Location</label>
                                    <div class="col-lg-9">
                                        <input  required="" name="location" placeholder="Location of the attraction point" class="form-control" type="text" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">City</label>
                                    <div class="col-lg-9">
                                        <input  required="" name="city" placeholder="(e.g. Jaipur)" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">State</label>
                                    <div class="col-lg-9">
                                        <input name="state" class="form-control" placeholder="(e.g. Rajasthan)" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Image</label>
                                    <div class="col-lg-9">
                                        <input id="placeimg"  required="" class="form-control" type="file" name="placeimage">
                                        <img style="height: 50px; width: 50px;margin-top: 5px;" id="putimg" src="" alt="">
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Additional Information</label>
                                    <div class="col-lg-9">
                                        <input  required="" name="information" class="form-control" type="text" placeholder="Some Additional Information About the place" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Importance of Place</label>
                                    <div class="col-lg-9">
                                        <input  required="" name="importance" class="form-control" type="text" placeholder="Why do you think this place is important to attract visitors.">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">How you came to know about this place</label>
                                    <div class="col-lg-9">
                                        <select  required="" name="howknow" class="form-control">
                                          <option value="0">Select</option>
                                          <option value="1">Visited the Place</option>
                                          <option value="2">Someone Told you</option>
                                          <option value="3">Internet</option>
                                          <option value="4">Magazines, Books</option>
                                          <option value="5">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <h5 class="text-info">Personal Information <br><span class="text-muted font-12">We will not share your information with anyone</sub></h5>
                                  <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Full Name</label>
                                    <div class="col-lg-9">
                                        <input required="" name="fullname" class="form-control" type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Contact Number</label>
                                    <div class="col-lg-9">
                                        <input required="" name="contactno" class="form-control" type="number" placeholder="Mobile Number">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Email Address</label>
                                    <div class="col-lg-9">
                                        <input  required="" name="email" class="form-control" type="email" placeholder="Your Email Address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <input type="reset" class="btn btn-secondary" value="Reset">
                                        <input type="submit" class="btn btn-info" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form user info -->
        </div>
    </div>
</div>

</div>
</div>
    @endsection

    @section('scripts')
    <script type="text/javascript">
       var form = $("#savenewplace");
       $.validator.addMethod("mobileNoRegex", function(value, element) {

                return this.optional(element) || /^[6-9]\d{9}$/i.test(value);

            }, "Enter A Valid Mobile Number");

        form.on('submit',function(e){

  e.preventDefault();

    form.validate({

        errorElement: 'span',

        errorClass: 'help-block',

        highlight: function(element, errorClass, validClass) {

            $(element).closest('.form-group').addClass("has-error");

        },

        unhighlight: function(element, errorClass, validClass) {

            $(element).closest('.form-group').removeClass("has-error");

        },

        rules: {

            email: {
                required: true,
                minlength: 5,
            },
            contactno: {

                            required: true,

                            mobileNoRegex: true,

                            minlength: 10,

                        },
        },

        messages: {
            email: {
                required: "Email required",
            },
            contactno: {

                            minlength: "Please Enter your 12 digits Aadhar Number",

                        },
        }

    });

    if (form.valid() === true) {
            e.currentTarget.submit();
    } else {
    }
});

    </script>
    <script type="text/javascript">
        function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#putimg').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#placeimg").change(function() {
  readURL(this);
});
    </script>
    @endsection