@extends('layouts/main')

@section('content')
<div class="articles">
<div class="articles__headline">
  <h1 class="articles__title">My articles</h1>
<a class="articles__button" href="{{route("articles.create")}}">Create new article</a>
</div>

<div class="articles__table-container">
<table class="articles__table">
  <tr style="width: 100%;">
    <th style="width: 21.8%;"><p class="articles__head">Article title<img src="/images/icons/sorting.png" alt="Sorting icon"></p></th>
    <th  style="width: 36.5%;"><p class="articles__head">Perex<img src="/images/icons/sorting.png" alt="Sorting icon"></p></th>
    <th  style="width: 14.2%;"><p class="articles__head">Author<img src="/images/icons/sorting.png" alt="Sorting icon"></p></th>
    <th style="width: 14.2%;"><p class="articles__head"># of comments<img src="/images/icons/sorting.png" alt="Sorting icon"></p></th>
    <th style="width: 10%;"><p class="articles__head">Actions<img src="/images/icons/sorting.png" alt="Sorting icon"></p></th>
  </tr>


  @foreach ($articles as $article)
  <tr>
    <td class="articles__data">{{$article->title}}</td>
    <td class="articles__data">{{$article->perex}}</td>
    <td class="articles__data">{{$article->user->name}}</td>
    <td class="articles__data">{{count($article->comments)}}</td>
    <td>

      <div class="articles__actions">
        <a class="articles__action" href="{{route('articles.edit', $article->id)}}"><img src="/images/icons/edit.png" alt="Edit icon"></a>

      <form action="{{route("articles.destroy", $article->id)}}" method="POST">
        @method("DELETE")
        @csrf
        <button class="articles__action" type="submit">
          <img src="/images/icons/trash.png" alt="Delete icon">
        </button>
      </form>

      
    </div>
      
    </td>
  </tr>
  @endforeach
</table>
</div>
</div>




    
@endsection