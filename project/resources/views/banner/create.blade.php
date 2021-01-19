@extends('layouts.admin')

@section('content')

{{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

<div class="container">
   <main class="py-4">
      <h1>Create Banner</h1>
      <form method="POST" action="{{route('banner.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
         @csrf
         <div class="form-group"><label for="title">Title</label> <input placeholder="Title" name="title" type="text" value="" id="title" class="form-control"></div>
         @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group"><label for="subtitle">Subtitle</label> <textarea placeholder="subtitle" name="subtitle" cols="50" rows="10" id="subtitle" class="form-control"></textarea></div>
         @error('subtitle')
        <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group"><label for="link">Link</label> <input placeholder="link" name="link" cols="50" rows="10" id="link" class="form-control"></div>
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
<div class="imgtag">
<img src="" alt="" style="display: none" height="200px" width="300px">
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
