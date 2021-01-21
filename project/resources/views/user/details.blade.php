@extends('layouts.user')
@section('content')

<h2>Back <a href="{{ route('user.order') }}" class="btn btn-primary"> Click<a></h2>
<br>

<table class="table ">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Quantity</th>
    </tr>
  </thead>
  <tbody>


  @foreach($details as $check)
    {{-- @php
    $img = explode(",", $banner->picture);
    @endphp --}}

    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$check->product_name }}</td>
      <td>{{$check->product_price }}</td>
      <td>{{$check->product_quantity }}</td>
      
      {{-- <td>
        @foreach ($img as $item)
        <img src="{{asset('assets/images/service/'. $item)}}" height="30px" width="30px"  alt="">
        @endforeach
      </td> --}}
      {{-- <td><a href="{{ route('order.details',$check->id) }}" class="btn btn-success mr-2">Details<a> </td> --}}
        {{-- <td><a href="{{ route('banner.delete',$banner->id) }}" class="btn btn-danger"> Delete</a></td> --}}
    </tr>
    
@endforeach


  </tbody>
</table>

@endsection



