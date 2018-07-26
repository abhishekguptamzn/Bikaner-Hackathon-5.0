@extends('frontend.template')
@section('data')
  <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('{{asset('images')}}/bg2.jpg">
            <div class="carousel-caption d-none d-md-block">
             
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('{{asset('images')}}/img3.jpg">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('{{asset('images')}}/img4.jpg">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
<div class="container">
  

      <h4 class="my-4 col1">Top 8 Visiting Places</h4>
  <hr>
      <!-- Marketing Icons Section -->
      <div class="row">
        @forelse($places as $place)
        <div class="col-lg-4 mb-4">
        <div class="card">
  <img style="width: 200px;    height: 200px;" class="card-img-top py-2 mx-auto" src="{{asset('place_images')}}/{{$place->placeimagemain}}" alt="Card image">
  <div class="card-body">
    <h4 class="card-title textcap">{{$place->placename}}</h4>
    <p class="card-text limitcss ">{{$place->information}}</p>
    <p class="textcap"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$place->city.','.$place->state}}</p>
    <p><span class="badge badge-success">Verified</span></p>
    <a href="{{route('seeplace',$place->id)}}" class="btn btn-info btn-sm">More Information</a>
  </div>
</div></div>
        @empty
    <p class="text-muted text-center">NO PLACE FOUND</p>
        @endforelse
      </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
      <h4 class="col1">Post a hidden Place</h4>

     

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p class="display-4 font-18 font-weight-normal">Help the government and citizens to explore new and hidden place and win amazing awards.</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-info btn-block" href="{{route('newplace')}}">Know More</a>
        </div>
      </div>

    
</div>
    @endsection()