@extends('layouts.admin')

@section('content')


<div class="container">
   <main class="py-4">
      <h1>Update Banners</h1>
 
      <form method="POST" action="{{route('banner.update',$banners->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
         @csrf
         <div class="form-group"><label for="name">Title</label> <input placeholder="Title" name="name" type="text" value="{{ $banners->title}}" id="name" class="form-control"></div>
         @error('name')
         <div class="alert alert-danger">{{ $message }}</div>
          @enderror
         <div class="form-group"><label for="subtitle">Subtitle</label> <textarea placeholder="subtitle" name="subtitle" cols="50" rows="10" id="subtitle" class="form-control">{{ $banners->subtitle}}</textarea></div>
        @error('subtitle')
         <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <div class="form-group"><label for="link">Link</label> <textarea placeholder="link" name="link" cols="50" rows="10" id="link" class="form-control">{{ $banners->link}}</textarea></div>
        @error('link')
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


 
