@extends("layouts.app")
@section("title") show 

@endsection
@section("content")

        </li>
    </div>
  </div>
</nav>
<div class="card mr-4">
  <h5 class="card-header">post info</h5>
  <div class="card-body">
    <h5 class="card-title">movie_name: {{$post->movie_name}}</h5>
    <p class="card-text">movie_description:{{$post->movie_description}}</p>
  </div>
</div>


<div class="card mt-5">
  <h5 class="card-header">post creat info</h5>
  <div class="card-body">
    <h5 class="card-title">name : ahmad</h5>
    <p class="card-text">email:ahmad@gmail.com</p>
    <p class="card-text">description:php is cool language.</p>

  </div>
</div>
@endsection
