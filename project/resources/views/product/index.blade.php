@extends('layouts.admin')
@section('content')

<h2>Products <a href="{{ route('product.create') }}" class="btn btn-primary">Add product<a></h2>
<br>

<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Picture</th>
      <th scope="col">Category</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)
    @php
        $img = explode(",", $product->picture);
    @endphp
    <tr>

      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->price }}</td>
      <td>{{$product->quantity }}</td>
      
      <td>
      @foreach ($img as $item)
      <img src="{{asset('assets/images/service/'. $item)}}" height="30px" width="30px"  alt="">
      @endforeach
    </td>
    <td>{{$product->category->name}}</td>
    
    
      <td><a href="{{ route('product.edit',$product->id) }}" class="btn btn-success mr-2">Update<a> </td>
        <td><a href="{{ route('product.delete',$product->id) }}" class="btn btn-danger"> Delete</a></td>
    </tr>
    
@endforeach

  </tbody>
</table>

@endsection



