@extends('frontend.template')
@section('data')
<div class="container7">
  <div class="jumbotron bgfound">
  <h1 class="col1 text-center">About Bharat Khojo</h1>
  <p>&nbsp;</p>
  <p class="text-center font-18">A Database with thousands of monuments,forts,destinations</p>
</div>
<div class="container">
      <!-- Page Hxeading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">&nbsp;
      </h1>


      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img width="" class="img-fluid rounded mb-4" src="{{asset('images')}}/image1.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <h2>Read About BharatKhojo</h2>
          <hr>
          <p>
Since 2017 we, Bharatkhojo have arranged and handled several thousand Indian hidden places for our clients, many of whom have travelled more than once a place. We pride ourselves in saying that "we are small enough to care, and large enough to deliver". Our team of professionals will do everything possible to ensure that your holiday in the Indian sub-continent works like clockwork, despite the challenges of travelling in a continent, not known for its efficient infrastructure.
<p>

Get in touch with us, and allow us to create your Indian experience for you.
Email us now, what you want to see and do in the Indian subcontinent. 

</p>
To upload the details of hidden place visited by you, <a class="text-info" href="{{route('newplace')}}">Click here.</a></p>
        </div>
      </div>
      <!-- /.row -->
    </div>
@endsection