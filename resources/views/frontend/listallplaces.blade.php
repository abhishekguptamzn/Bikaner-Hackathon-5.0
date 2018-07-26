@extends('frontend.template')
@section('data')


     <div class="container7">
  <div class="jumbotron bgfound text-center">
  <h1 class="col1">Discover All Places</h1>
  <p>&nbsp;</p>
  <p >See details,photos,location of ultimate visting destinations.</p>

</div>

<div class="container">
  

      <div class="row">
        @forelse($places as $place)
        <div class="col-lg-4 mb-4">
        <div class="card">
  <img style="width: 200px;height: 200px;" class="card-img-top py-2 mx-auto" src="{{asset('place_images')}}/{{$place->placeimagemain}}" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">{{$place->placename}}</h4>
    <p class="card-text limitcss">{{$place->information}}</p>
    <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{$place->city.','.$place->state}}</p>
    <p><span class="badge badge-success">Verified</span></p>
    <a href="{{route('seeplace',$place->id)}}" class="btn btn-info btn-sm">More Information</a>
  </div>
</div></div>


        @empty
    <p class="text-muted text-center">NO PLACE FOUND</p>
        @endforelse
        {{ $places->links() }}

      </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
     
    
</div>
    @endsection()