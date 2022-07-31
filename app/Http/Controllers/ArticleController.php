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
      // Display all the articles published by the user
      $articles = Article::query()
                        ->with("comments", "user")
                        ->where("user_id", "=", Auth::user()->id)
                        ->get();

      return view("admin/articles", compact("articles"));
    }

    public function create()
    {
      // Display a new create article form
      $article = new Article;

      return view("admin/edit", compact("article"));
    }

    public function edit($id)
    {
      // Display prefilled form with article details for update
      $article = Article::query()
                          ->with("image")
                          ->findOrFail($id);

      return     view("admin/edit", compact("article"));
    }

    public function store(Request $request)
    {
      // Validate article form fields
      $this->validate($request, [
        "title" => "required|unique:articles|max:100",
        "perex" => "required||max:300",
        "content" => "required|min:50",
        "user_id" => "required"
      ]);
      // Save the article to DB
      $article = new Article;
 
      $article->user_id = $request->input("user_id");
      $article->title = $request->input("title");
      $article->content = $request->input("content");
      $article->perex = $request->input("perex");
       $article->save();

      // If user uploaded an image, take the image from temporary storage and move to the public_html folder
      if ($request->file('uploaded_file')) {
        $image_name = $request->file('uploaded_file')->getClientOriginalName();

        $request->file('uploaded_file')->move(
          '/home/u843963702/domains/ekaterinamelnichuk.com/public_html/blog/images/articles/', 
          $image_name
         );
         // Save the image path to DB
        $image = new Image;

        $image->path = '/images/articles/'.$image_name;
        $image->article_id = $article->id;

        $image->save();

      }

      session()->flash("success", "The article was successfully create!");

      return redirect(route("articles.edit", $article->id));
    }

    public function update($id, Request $request)
    {
      // Validate article form fields
      $this->validate($request, [
        "title" => "required|max:100",
        "perex" => "required|max:500",
        "content" => "required|min:50",
        "user_id" => "required"
      ]);
      // Create a new article and save to DB
      $article = Article::findOrFail($id);

      $article->user_id = $request->input("user_id");
      $article->title = $request->input("title");
      $article->content = $request->input("content");
      $article->perex = $request->input("perex");


      $article->save();

      // If user uploaded a new image during article update, remove the previous image and replace by a new one
       if ($request->file('uploaded_file')) {
        // First, delete previous image
        if ($article->image) {
          $image_previous = Image::findOrFail($article->image->id);
           $image_previous->delete();
        }
        
        // Second, replace by a new image
        $image_name = $request->file('uploaded_file')->getClientOriginalName();

        $request->file('uploaded_file')->move(
          '/home/u843963702/domains/ekaterinamelnichuk.com/public_html/blog/images/articles/', 
          $image_name
         );
      // Save a new image path to DB
        $image = new Image;
    
        $image->path = '/images/articles/'.$image_name;
        $image->article_id = $article->id;
    
        $image->save();
            
       }

      session()->flash("success", "The article was successfully edited!");

      return redirect(route("articles.edit", $article->id));

    }

    public function destroy($id)
    {
      // Find the article in DB
      $article = Article::query()
                      ->with("image")
                      ->findOrFail($id);
      // If article has an image, delete image record from DB
      if ($article->image) {
        $image = Image::findOrFail($article->image->id);
        $image->delete();
      }
      
      // Finally, delete the article
      $article->delete();

      session()->flash("success", 'The article was successfully deleted!');

      return redirect(route("articles.display"));

    }


}
