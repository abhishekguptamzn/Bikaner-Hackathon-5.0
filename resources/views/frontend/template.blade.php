<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="icon" sizes="16x16"   type="image/png" href="https://i1.wp.com/www.tripplanz.com/wp-content/uploads/2017/07/cropped-TripProximity-transparent-favicon.png?ssl=1" />

    <title>BharatKhojo</title>
<link rel="fe" type="text/css" href="">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('/frontend')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('/frontend')}}/css/modern-business.css" rel="stylesheet">
    <link href="{{asset('/frontend')}}/css/mystyle.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{route('homepage')}}">BharatKhojo</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto" id="cssmenu">
            <li class="nav-item">
              <a class="nav-link" href="{{route('homepage')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('listallplaces')}}">All Places</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}">Contact</a>
            </li>
             <li class="nav-item">
              <a class="nav-link newplace" href="{{route('newplace')}}">Add Place</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
  @yield('data')
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-1 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; BharatKhojo Organisation</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('/frontend')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('/frontend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
  
@yield('scripts')
{{Session::has('message')}}
@if(Session::has('message'))
1211
<script type="text/javascript">
var message = {!!session()->get('message')!!};
var classname = {!!session()->get('classname')!!};
  swal("Good job!", message,classname)
</script>  
@endif
<script type="text/javascript">
var thispage = window.location.href;
$("#cssmenu a[href="+'thispage'+"]").addClass("active");
$( "#cssmenu li" ).each(function( index ) {
if ( $(this).find("a").attr("href") == thispage ) {
$(this).find("a").addClass("active");
}
});
</script> 
  </body>

</html>
