@extends('admin.template')
@section('data')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">All Places</li>
</ol>

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Place</th>
          <th>City</th>
          <th>State</th>
          <th>Submitted By</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse($places as $place)
        <tr>
          <td>{{$place->placename}}</td>
          <td>{{$place->city}}</td>
          <td>{{$place->state}}</td>
          <td>
            @if($place->fullname)
            {{$place->fullname}}
            @else
            Administrator
            @endif
          </td>
          <td>
            @if($place->status == 1)
            <span class="badge badge-success">Approved</span></td>
            @elseif($place->status == 2)
            <span class="badge badge-danger">Rejected</span></td>
            @else
            <span class="badge badge-warning">Pending</span></td>
            @endif
            <td><a href="{{route('editplace',$place->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
           <a id="{{$place->id}}" class="deleteplacebtn" href="javascript:void(0)"> <i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a>
             <select id="{{$place->id}}" class="form-control changstatus">
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
          </td>
        </tr>
        @empty
        @endforelse
      </tbody>
    </table>
  </div>
</div>

@endsection('data')

@section('scripts')
<script type="text/javascript">
  $(".deleteplacebtn").click(function() {
    var x = confirm("Are you sure you want to Delete");
    if (x) {
    var thisid  = $(this).attr("id");
     $.ajax({
               type:'GET',
               url:'/deleteplace/'+thisid,
               success:function(data){
                  location.reload();
               }
            });
     }
  });
 $(".changstatus").change(function() {
      var thisid  = $(this).attr("id");
      var newstatus  = $(this).val();
     $.ajax({
               type:'GET',
               url:'/changestatus/'+thisid,
               data: {newstatus: newstatus},
               success:function(data){
                 location.reload();
               }
            });
 });
</script>
@endsection