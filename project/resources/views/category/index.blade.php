@extends('layouts.admin')
@section('content')

<h2>catg <a href="{{ route('category.create') }}" class="btn btn-primary">Add catg<a></h2>
<br>

<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Details</th>
      <th scope="col">Picture</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($catgs as $catg)
    @php
    $img = explode(",", $catg->picture);
    @endphp

    <tr>
      <th scope="row">{{$catg->id}}</th>
      <td>{{$catg->name }}</td>
      <td>{{$catg->details }}</td>
      <td>
        @foreach ($img as $item)
        <img src="{{asset('assets/images/service/'. $item)}}" height="30px" width="30px"  alt="">
        @endforeach
      </td>
      <td><a href="{{ route('category.edit',$catg->id) }}" class="btn btn-success mr-2">Update<a> </td>
        <td><a href="{{ route('category.delete',$catg->id) }}" class="btn btn-danger"> Delete</a></td>
    </tr>
    
@endforeach

  </tbody>
</table>

@endsection



