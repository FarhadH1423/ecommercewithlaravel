@extends('layouts.admin')
@section('content')



<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
   
    <tr>

      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email }}</td>
   
    
    
        {{-- <td><a href="{{ route('product.edit',$product->id) }}" class="btn btn-success mr-2">Update<a> </td>
        <td><a href="{{ route('product.delete',$product->id) }}" class="btn btn-danger"> Delete</a></td> --}}
    </tr>
    
@endforeach

  </tbody>
</table>

@endsection



