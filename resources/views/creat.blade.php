@extends("layouts.app")
@section("title") 

@endsection
@section("content")
<form method="POST" action="{{route("store")}}">
@csrf

  <div class="mb-3">
    <label  class="form-label">movie_name</label>
    <input name="movie_name" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">movie_description</label>
    <textarea  name="movie_description" class="form-control" rows="3"></textarea>
  </div>

  <div class="mb-3">
    <label  class="form-label">movie_gene</label>
    <input name="movie_gener" type="text" class="form-control">

      @foreach ($user as $users)
      <option value="{{$users->id}}">{{$users->name}}</option>
      
      @endforeach
    </select>
  </div>

  <button href="" class="btn btn-success">Submit</button>
</form>
@endsection
