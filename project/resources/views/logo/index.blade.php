@extends('layouts.admin')
@section('content')



<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Picture</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row">{{$logos->id}}</th>    
      <td>
        <img src="{{asset('assets/images/service/'. $logos->picture)}}" height="30px" width="30px"  alt="">
      </td>
      <td><a href="{{ route('logo.edit',$logos->id) }}" class="btn btn-success mr-2">Update<a> </td>
        
    </tr>
    


  </tbody>
</table>

@endsection



