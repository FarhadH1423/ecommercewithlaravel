@extends('layouts.admin')
@section('content')

<h2>banner <a href="{{ route('banner.create') }}" class="btn btn-primary">Add banner<a></h2>
<br>

<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Subtitle</th>
      <th scope="col">Link</th>
      <th scope="col">Picture</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($banners as $banner)
    @php
    $img = explode(",", $banner->picture);
    @endphp

    <tr>
      <th scope="row">{{$banner->id}}</th>
      <td>{{$banner->title }}</td>
      <td>{{$banner->subtitle }}</td>
      <td>{{$banner->link }}</td>
      <td>
        @foreach ($img as $item)
        <img src="{{asset('assets/images/service/'. $item)}}" height="30px" width="30px"  alt="">
        @endforeach
      </td>
      <td><a href="{{ route('banner.edit',$banner->id) }}" class="btn btn-success mr-2">Update<a> </td>
        <td><a href="{{ route('banner.delete',$banner->id) }}" class="btn btn-danger"> Delete</a></td>
    </tr>
    
@endforeach

  </tbody>
</table>

@endsection



