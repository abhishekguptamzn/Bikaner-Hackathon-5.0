<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Bharat Khojo</title>
  <link rel="icon" sizes="16x16"   type="image/png" href="https://i1.wp.com/www.tripplanz.com/wp-content/uploads/2017/07/cropped-TripProximity-transparent-favicon.png?ssl=1" />
  <link href="{{asset('/admin')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('/admin')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="{{asset('/admin')}}/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="{{asset('/admin')}}/css/sb-admin.css" rel="stylesheet">
  <link href="{{asset('/admin')}}/css/mystyle.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{route('login')}}">Bharat Khojo</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{route('login')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{route('addplace')}}">
<i class="fa fa-plus-square-o" aria-hidden="true"></i>
            <span class="nav-link-text">New Places</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="{{route('allplaces')}}">
        <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span class="nav-link-text">All Place</span>
          </a>
        </li>
       
        <!--
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">New Place</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">All Places</span>
          </a>
        </li> 
         
     
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li>
        -->
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      
      @yield('data')
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © BharatKhojo Organisation</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-primary">Logout</a>
          </div>
        </div>
      </div>
    </div>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('/admin')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('/admin')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('/admin')}}/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{asset('/admin')}}/vendor/chart.js/Chart.min.js"></script>
    <script src="{{asset('/admin')}}/vendor/datatables/jquery.dataTables.js"></script>
    <script src="{{asset('/admin')}}/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('/admin')}}/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('/admin')}}/js/sb-admin-datatables.min.js"></script>
    <script src="{{asset('/admin')}}/js/sb-admin-charts.min.js"></script>
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
    @yield('scripts')
</body>

</html>
