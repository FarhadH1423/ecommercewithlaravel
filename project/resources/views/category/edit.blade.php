@extends('layouts.admin')

@section('content')


<div class="container">
   <main class="py-4">
      <h1>Update Category</h1>
 
      <form method="POST" action="{{route('category.update',$catgs->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
         @csrf
         <div class="form-group"><label for="name">Title</label> <input placeholder="Title" name="name" type="text" value="{{ $catgs->name}}" id="name" class="form-control"></div>
         @error('name')
         <div class="alert alert-danger">{{ $message }}</div>
          @enderror
         <div class="form-group"><label for="details">Details</label> <textarea placeholder="details" name="details" cols="50" rows="10" id="details" class="form-control">{{ $catgs->details}}</textarea></div>
        @error('details')
         <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          
        <div class="form-group"><label for="picture">Photo</label> <input placeholder="Picture" name="picture[]" multiple  type="file" id="Picture" class="form-control"></div>
        @error('photo')
       <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
         <input type="submit" value="Submit" class="btn btn-primary">
      </form>
   </main>
</div>

@endsection


 
