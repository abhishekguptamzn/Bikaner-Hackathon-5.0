@extends('admin.template')
@section('data')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Add New Place</li>
</ol>

<div class="card-body">
    
    <form id="savenewplace" enctype="multipart/form-data" method="POST" action="{{route('savenewplace')}}" class="form" role="form" autocomplete="off">
        @csrf
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
                <input  required="" name="information" class="form-control" type="text" placeholder="" value="">
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
@endsection('data')