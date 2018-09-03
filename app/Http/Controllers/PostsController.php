<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Article;
class PostsController extends Controller
{
    public function index(){

        $articles= DB::table('articles')->paginate(12);
        return view('index', compact('articles'));



    }
    public function show($id){
        $article = Article::find($id);
        return view('posts.show', compact('article'));

    }
    public function create(){
        return view("posts.create", compact('article'));

    }
    public function store(){
   $this->validate(request(),[
       'title' => 'required|min:4',
       'slug' => 'required',
       'description_short' => 'required',
       'description' =>'required',
       'image'=>''

   ]);

   Post::create(
        request(array('title','slug','description_short','description', 'image'))
   );
   return redirect('/');

    }
    public function edit(Article $article){
        return view("posts.edit", compact('article'));

    }
    public function update(Article $article){
        $this->validate(request(),[
            'title' => 'required|min:4',
            'slug' => 'required',
            'description_short' => 'required',
            'description' =>'required',
            'image' => ''
        ]);
        $article->update(request(['title','slug','description_short','description','image']));
        return redirect('/');
    }
    public function destroy(Article $article){
        $article->delete();
        return redirect('/');
    }
}
