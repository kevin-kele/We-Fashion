@extends('base')

@section('content')
   
    <div class="jumbotron">
        <h2 class="display-4 text-center">{{$article->name}}</h2>
        <div class="container">
        <p class="text-center">
            {!!$article->description!!}
        </p>
        <div class="d-flex justify-content-center my-5">
            <a href="{{route('articles')}}" class="btn btn-primary">
            <i class="fas fa-reply-all"></i>
            Retour
            </a>
        </div>
    </div>
    </div>
    
@endsection