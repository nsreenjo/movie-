@extends("layouts.app")
@section("title") 

@endsection
@section("content")
<form method="POST" action="{{route("update",$post->id)}}">
@csrf
@method('PUT')
  <div class="mb-3">
    <label  class="form-label">Title</label>
    <input name="title" value="{{$post->movie_name}}" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea  name="Description" class="form-control" rows="3"> {{$post->movie_description}}</textarea>
  </div>

  <div class="mb-3">

    <label  class="form-label">gener</label>
    <input name="gener" value="{{$post->movie_gener}}" type="text" class="form-control">
  
    </div>

  <button href="" class="btn btn-success">Update</button>
</form>
@endsection