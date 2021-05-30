@extends('base')

@section('content')
    <div class="mx-auto my-5 card" style="width: 20rem;">
        <img class="card-img-top" width="250" height="250" src="{{asset($article->image)}}">
        <div class="card-body">
          <h5 class="card-title">{{$article->name}}</h5>
          <p class="card-text">{{!!$article->description!!}}</p>
        </div>
        <div class="d-flex justify-content-center my-5">
            <a href="{{route('articles')}}" class="btn btn-primary">
            <i class="fas fa-reply-all"></i>
            Retour
            </a>
        </div>
      </div>
    
@endsection