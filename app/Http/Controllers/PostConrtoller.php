<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;
use App\models\user;
class PostConrtoller extends Controller
{
    public function index(){

        $postfromdb=post::all();
        // @dd($postfromdb);
       
    return view('test', ['posts' =>  $postfromdb]);

}

public function show(post $post){
    return view('show',['post'=>$post]);


    ///////////////////////////////////////////////////////////////////
// $singlemovedb=post::where("id",$postId)->first();
// $singlemovedb=post::find($postId);
// if (is_null($singlemovedb)){                       طريقه تانيه 
//     return to_route(route:"index");
// }
// return view('show',['post'=>$singlemovedb]);
///////////////////////////////////////////////////////////////////////////
}
public function creat(){
    $alluserdb=user::all();
    return view('creat',["user"=>$alluserdb]);
}

//////////////////////////////////////////////
public function store(post $post){
    // التحقق من المدخلات
    $validatedData = $post->validate([
        'movie_name' => 'required|string|max:255',
        'movie_description' => 'required|string',
        'movie_gener' => 'required|string|max:255',
    ]);

    $post = new Post();
    $post->movie_name = $validatedData['movie_name'];
    $post->movie_description = $validatedData['movie_description'];
    $post->movie_gener = $validatedData['movie_gener'];
    $post->save();

    return redirect()->route('index');
}
///////////////////////////////////////////////////////////////////////



public function edit(Post $post){
    $users = User::all();
    return view('edit', ['users' => $users, 'post' => $post]);
}



public function update($postId){
    $movie_name = request()->input('title');
    $movie_description = request()->input('Description');
    $movie_gener = request()->input('gener');

    // التحقق من صحة البيانات
    $validatedData = request()->validate([
        'title' => 'required|string|max:255',
        'Description' => 'required|string',
        'gener' => 'required|string|max:255',
    ]);

    // العثور على المنشور الموجود
    $post = Post::find($postId);


    // تحديث المنشور الموجود
    $post->movie_name = $validatedData['title'];
    $post->movie_description = $validatedData['Description'];
    $post->movie_gener = $validatedData['gener'];
    $post->save();

    // إعادة التوجيه إلى المسار الخاص بالعرض مع ID المنشور المحدث
    return redirect()->route('index', ['post' => $postId]);
}

public function delete($postId){
    $post = post::find($postId);
    $post->delete();
    return to_route(route: "index");

}
}