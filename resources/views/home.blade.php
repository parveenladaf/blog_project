@extends('layouts.default')
@section('content')

<style>
  .card {
    margin: 20px;
    width: 50rem;
  }

  .content {
    width: 90%;
    max-width: 1000px;
    margin: 0 auto;

    display: grid;

    grid-template-columns: 1fr;
    grid-template-rows: auto;
    grid-gap: 20px;
  }

  @media only screen and (min-width: 500px) {
    .content {
      grid-template-columns: 1fr 1fr;
    }
  }

  @media only screen and (min-width: 850px) {
    .content {
      grid-template-columns: 1fr 1fr 1fr;
    }
  }
</style>

<div class="content">
  @foreach ($response['contents'] ?? '' as $article)

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$article->title}}</h5>
      <p class="card-text">{{$article->post}}</p>
      
      @if($response['edit'] == 'true')
      
      <a href="{{ route('post', $article->id) }}" class="card-link">Edit</a>
      <a href="{{'post/'. $article->id}}" class="card-link">Delete</a>
    
      @endif     
    </div>
  </div>
  @endforeach
</div>

@stop