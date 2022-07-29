

@extends('layouts/main')

@section('content')

<div class="articles">

@if ($article->id)
<form id="articles__form" class="articles__form" action="{{route("articles.update", $article->id)}}" method="POST" enctype="multipart/form-data">
@method("PATCH")

@else 
<form id="articles__form" class="articles__form" action="{{route("articles.store")}}" method="POST" enctype="multipart/form-data">
@endif
  @csrf
  <div class="articles__headline">
    <h1 class="articles__title">{{$article->id ? "Edit" : "Create new"}} article</h1>
    <input class="articles__button" form="articles__form" type="submit" form="articles_form" value="Publish Article"> 
  </div>
  
  @include("common/messages")

  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
  
  <label for="title" class="articles__label">Article Title</label>
  @error('title')
    <div class="message__error">{{ $message }}</div >
  @enderror
  <input class="articles__input" id="title" type="text" placeholder="My First Article" name="title" value="{{old("title", $article->title)}}" required>

  <label for="perex" class="articles__label">Perex</label>
  @error('perex')
    <div class="message__error">{{ $message }}</div >
  @enderror
  {{-- <input class="articles__input" id="perex" type="text" placeholder="My First Perex" name="perex" value="{{old("perex", $article->perex)}}"> --}}


  <textarea class="articles__textarea" name="perex" id="perex" placeholder="My first perex" required>{{old("content", $article->perex)}}</textarea>

  

  @if ($article->id && $article->image)
  <label class="articles__label" for="image">Featured image</label>
  <div class="preview">
    {{-- <p class="preview__text">No files currently selected for upload</p> --}}
  </div>
    <img class="articles__image" src="{{$article->image->path}}" alt="Article image">

    <div class="articles__buttons">
      <label for="file" class="articles__upload--new">Upload a new image</label>


    <input class="articles__input" id="file" type="file" name="uploaded_file" style="display: none;">





    <a href="{{route("image.destroy", $article->image->id)}}"><button class="articles__delete"  type="button">Delete</button></a>
    </div>

    

  @else 

  <label class="articles__label" for="image">Featured image</label>
  <div class="preview">
    <p class="preview__text">No files currently selected for upload</p>
  </div>
  <label for="file" class="articles__upload">Upload an image</label>
  <input class="articles__input" id="file" type="file" name="uploaded_file" style="display: none;">
  

  {{-- <label for="image_name">Image name</label>
  <input id="image_name" type="text" name="name" value="" placeholder="Image description">  --}}
  @endif


      {{-- Creating markdown --}}
    @error('content')
      <div class="message__error">{{ $message }}</div >
    @enderror
  <input type="hidden" name="content" id="content">

  <div class="flex flex-col space-y-2">

    <div id="editor" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"><div>

      

      @if ($article->id)
        {!! \Illuminate\Support\Str::markdown($article->content) !!}
      @elseif (old("content", $article->content))
      {!! \Illuminate\Support\Str::markdown(old("content", $article->content)) !!}
      @endif
      



</div>

</form>


</div>

<script src="{{ mix('js/markdown.js') }}" ></script>
<script src="{{mix('js/preview.js')}}"></script>
@endsection

