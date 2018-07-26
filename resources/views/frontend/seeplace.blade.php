@extends('frontend.template')
@section('data')
<div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">&nbsp;
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-4">
          <img style="width: 100%" class="img-fluid" src="{{asset('place_images')}}/{{$place->placeimagemain}}" alt="">
        </div>

        <div class="col-md-8">
          <h3 class="my-3">{{$place->placename}}</h3>
          <p>{{$place->information}}</p>
         <p><i class="fa fa-map-marker text-info font-26" style="vertical-align: middle;margin: 10px" aria-hidden="true"></i> {{$place->city.','.$place->state}}</p>
    <p><span class="badge badge-success">Verified</span> 
<span class="badge badge-info">Page Visits: {{$place->views}}</span></p>
        </div>

      </div>
      <!-- /.row -->
      <!-- Related Projects Row -->
      <h3 class="my-4">See More Places</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

      </div>
      <!-- /.row -->
</div>
    @endsection