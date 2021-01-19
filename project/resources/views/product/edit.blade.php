@extends('layouts.admin')

@section('content')
<div class="container">
   <main class="py-4">
      <h1>Update Product</h1>
 
      <form method="POST" action="{{route('product.update',$product->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
        @csrf
        <div class="form-group"><label for="price">price</label> <input placeholder="name" name="name" type="text" value="{{ $product->name }}" id="name" class="form-control"></div>
        @error('name')
       <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group"><label for="price">price</label> <input placeholder="price" name="price" type="text" value="{{ $product->price }}" id="price" class="form-control"></div>
        @error('price')
       <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group"><label for="quantity">quantity</label> <input placeholder="quantity" name="quantity" type="text" value="{{ $product->quantity }}" id="quantity" class="form-control"></div>
        @error('quantity')
       <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <select class="form-control" name="cat_id">
           @foreach($categories as $category)
             <option value="{{$category->id}}" {{$product->category->id == $category->id  ? 'selected' : ''}}> {{$category->name}} </option>
           @endforeach
         </select>
        @error('category')
       <div class="alert alert-danger">{{ $message }}</div>
        @enderror
         
        
        <div class="form-group"><label for="picture">Photo</label> <input placeholder="Picture" name="picture[]" multiple  type="file" id="Picture" class="form-control"></div>
        @error('photo')
       <div class="alert alert-danger">{{ $message }}</div>
        @enderror
       
        <input type="submit" value="Submit" class="btn btn-primary"> 
        
     </form>
     <div class="imgtag">

   </div>
  </main>
  
</div>





@endsection

@section('script')


<script>
   $(document).on('change','#Picture', function(){
       var files = event.target.files;
       $('.imgtag').html('');
       if (files) {
           var filesAmount = files.length;
           for (i = 0; i < filesAmount; i++) {
               var reader = new FileReader();
               reader.onload = function(event) {
                 $('.imgtag').append(`<img src="${event.target.result}" alt=""  height="100px" width="120px">`);
               }
               reader.readAsDataURL(files[i]); 
           }
       }


 

   });
 
 

</script> 
@endsection

 
