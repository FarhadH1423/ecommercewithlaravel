@extends('layouts.admin')
@section('content')

<h2>Order More   <a href="{{ route('banner.create') }}" class="btn btn-primary">Add banner<a></h2>
<br>

<table class="table ">
  <thead>
    <tr>
      <th scope="col"> Id</th>
      
      <th scope="col">User Name</th>

      <th scope="col">Total Amount</th>
      <th scope="col">Details</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($checks as $check)
    {{-- @php
    $img = explode(",", $banner->picture);
    @endphp --}}

    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      
      {{-- <td>{{App\Models\User::find($check->user_id)->name}}</td> --}}
      <td>{{$check->user->name}}</td>

      <td>{{$check->sub_total }}</td>
      
      {{-- <td>
        @foreach ($img as $item)
        <img src="{{asset('assets/images/service/'. $item)}}" height="30px" width="30px"  alt="">
        @endforeach
      </td> --}}
      <td><a href="{{ route('order.details',$check->id) }}" class="btn btn-success mr-2">Details<a> </td>
        {{-- <td><a href="{{ route('banner.delete',$banner->id) }}" class="btn btn-danger"> Delete</a></td> --}}
    </tr>
    
@endforeach

  </tbody>
</table>

@endsection



