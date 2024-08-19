@extends("layouts.app")
@section("title") test

@endsection
@section("content")

        </li>
    </div>
  </div>
</nav>
<a href="{{route("creat")}}" type="button" class="btn btn-success">creat post</a>

 
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">movie_name</th>
      <th scope="col">movie_description</th>
      <th scope="col">movie_gener</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post )
      <tr>
      <th >{{$post->id}}</th>
      <td>{{$post->movie_name}}</td>
      <td>{{$post->movie_description}}</td>
      <td>{{$post->movie_gener}}</td>
      <td>      
<a href="{{route("show",$post["id"])}}" class = "btn btn-info">view</a>
<a href="{{route('edit',$post["id"])}}" class = "btn btn-primary">Edit</a>
<form style ="display: inline" method="POST"  action="{{route("destroy",$post["id"])}}">
  @csrf
  @method("DELETE")
<button href="#" class = "btn btn-danger">Delete</button>
</form>
      </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
