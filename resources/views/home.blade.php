@extends('base')

@section('content')
    <div class="container">
        <div class="jumbotron">
        <h1 class='display-3 text-center'>Articles</h1>
        <div class="articles row justify-content-center">
            @foreach($articles as $article)
            <div class="col-md-4">
                <div class="card my-3 " >
                    <div class="card-body">
                        <h5 class="card-title text-center">
                           <img width="250" height="250" src="{{asset($article->image)}}"> 
                        </h5>
                        <h5 class="card-title text-center">
                            {{$article->name}}
                        </h5>
                        <p class="card-text">
                            {{$article->description}}
                        </p>
                        <p class="card-text">
                           prix: {{$article->price}} €
                        </p>
                        <p class="card-text">
                            taille: {{$article->size}}
                         </p>
                         @if($article->availabilty =="en solde")
                                <p class="alert alert-danger col-3">
                                    {{$article->availabilty}}
                                </p>
                         @else
                         <p class="card-text">
                            {{$article->availabilty}}
                        </p>
                        @endif
                    </div>
                    <a href="{{route('product',$article->slug)}}" class="btn btn-primary">
                        Ajouter <i class="fas fa-feather-alt"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5">
            {{$articles->links('vendor.pagination.custom')}}
        </div>
    </div>
@endsection