@extends('base')

@section('content')
<div class="container">
    <h1 class="text-center my-5"> Articles</h1>
    <div class="d-flex justify-content-center">
        <a href="{{route('product.create')}}" class="btn btn-info my-3"><i class="fas fa-plus"></i> Ajouter un article</a> 
    </div>
    
    <table class="table table-hover">
        <thead>
          <tr class="table-active">
            
            <th scope="col">ID</th>
            <th scope="col">Titre</th>
            <th scope="col">taille</th>
            <th scope="col">prix</th>
            <th scope="col">reference</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->name}}</td>
            <td>{{$article->size}}</td>
            <td>{{$article->price}}€</td>
            <td>{{$article->reference}}</td>
            <td class='d-flex'> 
                <a href="{{route('product.edit',$article->id)}}" class='btn btn-warning mx-3'> <i class="fas fa-edit"> editer</i></a>

                <form action="{{route('product.delete',$article->id)}}" method="post">
                  @csrf
                  @method("DELETE")
                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Supprimer</button>
                </form>
             </td>
            </tr>
            @endforeach
            
        </tbody>
      </table>
      <div class="d-flex justify-content-center mt-5">
        {{$articles->links('vendor.pagination.custom')}}
    </div>
</div>
@endsection