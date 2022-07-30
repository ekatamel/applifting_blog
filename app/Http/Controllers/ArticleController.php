<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Image;
use Auth;

class ArticleController extends Controller
{
    public function display()
    {
      $articles = Article::query()
                        ->with("comments", "user")
                        ->where("user_id", "=", Auth::user()->id)
                        ->get();

      dump(base_path());
      dump(public_path());

      return view("admin/articles", compact("articles"));
    }

    public function create()
    {
      $article = new Article;

      return view("admin/edit", compact("article"));
    }

    public function edit($id)
    {
      $article = Article::query()
                          ->with("image")
                          ->findOrFail($id);

      return view("admin/edit", compact("article"));
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        "title" => "required|unique:articles|max:100",
        "perex" => "required||max:300",
        "content" => "required|min:50",
        "user_id" => "required"
      ]);
      // Article saving
      $article = new Article;

      // $perex = preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $request->input("content")); 

      $article->user_id = $request->input("user_id");
      $article->title = $request->input("title");
      $article->content = $request->input("content");
      $article->perex = $request->input("perex");


      // if (count($perex) > 2) {
      //   $article->perex = $perex[1] . " " . $perex[2]; 
      // } else if (count($perex) > 1) {
      //   $article->perex = $perex[1]; 
      // } else {
      //   $article->perex = $article->content;
      // }
      

      $article->save();

      // Image saving
      if ($request->file('uploaded_file')) {
        $image_name = $request->file('uploaded_file')->getClientOriginalName();

        $request->file('uploaded_file')->move(
        public_path('/images/articles/'), 
        $image_name

        // $request->file('uploaded_file')->move(
        //   base_path('/public/images/articles/'), 
        //   $image_name

    );

      $image = new Image;

      $image->path = '/images/articles/'.$image_name;
      // $image->name = $request->name ?? null;
      $image->article_id = $article->id;

      $image->save();

      }

      

      session()->flash("success", "The article was successfully create!");

      return redirect(route("articles.edit", $article->id));
    }

    public function update($id, Request $request)
    {
      // dd($request);
      $this->validate($request, [
        "title" => "required|max:100",
        "perex" => "required|max:500",
        "content" => "required|min:50",
        "user_id" => "required"
      ]);
      
      $article = Article::findOrFail($id);

      // $perex = preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $request->input("content")); 

      $article->user_id = $request->input("user_id");
      $article->title = $request->input("title");
      $article->content = $request->input("content");
      $article->perex = $request->input("perex");


      $article->save();

       // Image saving
       if ($request->file('uploaded_file')) {
        // First, delete previous image
        if ($article->image) {
          $image_previous = Image::findOrFail($article->image->id);
           $image_previous->delete();
        }
        

        // Second, replace by a new image
        $image_name = $request->file('uploaded_file')->getClientOriginalName();

       $request->file('uploaded_file')->move(
         public_path('/images/articles/'), 
         $image_name
     );
 
        $image = new Image;
    
        $image->path = '/images/articles/'.$image_name;
        // $image->name = $request->name ?? null;
        $image->article_id = $article->id;
    
        $image->save();
            
       }

       

      session()->flash("success", "The article was successfully edited!");

      return redirect(route("articles.edit", $article->id));

    }

    public function destroy($id)
    {
      $article = Article::query()
                      ->with("image")
                      ->findOrFail($id);

      if ($article->image) {
        $image = Image::findOrFail($article->image->id);
      $image->delete();
      }
      

      $article->delete();

      session()->flash("success", 'The article was successfully deleted!');



      return redirect(route("articles.display"));

    }


}
