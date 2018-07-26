@extends('admin.template')
@section('data')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Edit Place</li>
</ol>

<div class="card-body">
    
    <form enctype="multipart/form-data" method="POST" action="{{route('updateplace',$place->id)}}" class="form" role="form" autocomplete="off">
        @csrf
        {{ method_field('PUT') }}

        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Place name</label>
            <div class="col-lg-9">
                <input readonly="" value="{{$place->placename}}" name="placename" class="form-control" type="text" placeholder="(e.g. Hawamahal)">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Category</label>
            <div class="col-lg-9">
                <select disabled="" name="category" class="form-control">
                    @php
                    $options = [
                    'Select'=>'Select',
                    'Fort'=>'Fort',
                    'Temple'=>'Temple',
                    'Lake'=>'Lake',
                    'Mountain'=>'Mountain',
                    'Place'=>'Place',
                    'Velley'=>'Velley',
                    'Amusement Park'=>'Amusement Park',
                    'Trekking'=>'Trekking',
                    'Wildlife'=>'Wildlife',
                    'Museum'=>'Museum',
                    'Others'=>'Others',
                    ];
                    @endphp
                    @foreach ($options as $key => $value)
                    <option value="{{ $key }}"
                        @if ($key == old('category', $place->category))
                        selected="selected"
                        @endif
                    >{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Location</label>
            <div class="col-lg-9">
                <input readonly="" value="{{$place->location}}" name="location" placeholder="Location of the attraction point" class="form-control" type="text" >
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">City</label>
            <div class="col-lg-9">
                <input readonly="" value="{{$place->city}}" name="city" placeholder="(e.g. Jaipur)" class="form-control" type="text">
                
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">State</label>
            <div class="col-lg-9">
                <input readonly=""  value="{{$place->state}}"  name="state" class="form-control" placeholder="(e.g. Rajasthan)" type="text">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Image</label>
            <div class="col-lg-9">
                <input readonly="" id="placeimg" class="form-control" type="file" name="placeimage">
                <img style="height: 50px; width: 50px;margin-top: 5px;" id="putimg" src="{{asset('place_images')}}/{{$place->placeimagemain}}" alt="">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Additional Information</label>
            <div class="col-lg-9">
                <input readonly="" value="{{$place->information}}"  name="information" class="form-control" type="text" placeholder="" >
            </div>
        </div>
        @if($place->importance)
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Why Important</label>
            <div class="col-lg-9">
                <input value="{{$place->importance}}" readonly="" class="form-control" type="text">
            </div>
        </div>
        @endif
        @if($place->howknow)
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">How Submitter Know</label>
            <div class="col-lg-9">
                <select disabled="" class="form-control">
                    @php
                    $options = [
                    '0'=>'Select',
                    '1'=>'Visited the Place',
                    '2'=>'Someone Told you',
                    '3'=>'Internet',
                    '4'=>'Magazines, Books',
                    '5'=>'Others',
                    ];
                    @endphp
                    @foreach ($options as $key => $value)
                    <option value="{{ $key }}"
                        @if ($key == old('howknow', $place->howknow))
                        selected="selected"
                        @endif
                    >{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @endif
        @if($place->fullname)
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Submitted By</label>
            <div class="col-lg-9">
                <input value="{{$place->fullname}}" readonly="" class="form-control" type="text">
            </div>
        </div>
        @endif
        @if(!$place->fullname)
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Submitted By</label>
            <div class="col-lg-9">
                <input value="Administrator" readonly="" class="form-control" type="text">
            </div>
        </div>
        @endif
        @if($place->contactno)
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Contact No.</label>
            <div class="col-lg-9">
                <input value="{{$place->contactno}}" readonly="" class="form-control" type="text">
            </div>
        </div>
        @endif
        @if($place->email)
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Email Address</label>
            <div class="col-lg-9">
                <input value="{{$place->email}}" readonly="" class="form-control" type="text">
            </div>
        </div>
        @endif
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Status</label>
            <div class="col-lg-9">
                
                <select disabled="" name="status" class="form-control">
                    @php
                    $options = [
                    '0'=>'Pending',
                    '1'=>'Approve',
                    '2'=>'Rejected',];
                    @endphp
                    @foreach ($options as $key => $value)
                    <option value="{{ $key }}"
                        @if ($key == old('status', $place->status))
                        selected="selected"
                        @endif
                    >{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
</div>
@endsection('data')