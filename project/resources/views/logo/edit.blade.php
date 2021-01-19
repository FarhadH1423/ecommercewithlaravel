@extends('layouts.admin')

@section('content')


<div class="container">
   <main class="py-4">
      <h1>Update Category</h1>
 
      <form method="POST" action="{{route('logo.update',$logos->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
         @csrf
   
        <div class="form-group"><label for="picture">Photo</label> <input placeholder="Picture" name="picture[]" multiple  type="file" id="Picture" class="form-control"></div>
        @error('photo')
       <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
         <input type="submit" value="Submit" class="btn btn-primary">
      </form>
   </main>
</div>

@endsection


 
