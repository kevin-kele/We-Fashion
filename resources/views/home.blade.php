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
                            {{$article->name}}
                        </h5>
                        <p class="card-text">
                            {{$article->description}}
                        </p>
                        <p class="card-text">
                           prix: {{$article->price}}
                        </p>
                        <p class="card-text">
                            taille: {{$article->size}}
                         </p>
                         @if($article->availability =="en solde")
                                <p class="alert alert-danger col-3">
                                    {{$article->availability}}
                                </p>
                         @else
                         <p class="card-text">
                            {{$article->availability}}
                        </p>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5">
            {{$articles->links('vendor.pagination.custom')}}
        </div>
    </div>
@endsection