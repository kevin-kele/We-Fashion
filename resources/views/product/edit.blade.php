@extends('base')

@section('content')

<div class="container">
   <h1 class="text-center mt-5">Edit {{$article->name}}</h1>
   <form action="{{route('product.update',$article->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="col-12">
            <div class="form-groupe ">
                <label>name</label>
                <input type="text" name="name" value='{{$article->name}}' class="form-control">
                @error('name')
                <span class="invalid-feedback" role="alert"> {{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-groupe">
                <label>description</label>
                <textarea id="tiny-editor" type="text" name="description" class="form-control"> </textarea>
                @error('description')
                <span class="invalid-feedback" role="alert"> {{$message}}</span>
                @enderror
            </div>
            <script>
                tinymce.init({
                  selector: '#tiny-editor'
                });
              </script>
        </div>
        <div class="col-12">
            <div class="form-groupe">
                <label>prix</label>
                <input type="number" name="price" class="form-control">
                @error('price')
                <span class="invalid-feedback" role="alert"> {{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <label for="size" class="form-label mt-4">taille</label>
            <select class="form-select" name='size' id="size">
              <option value='xs'>xs</option>
              <option value='s'>s</option>
              <option value='m'>m</option>
              <option value='l'>l</option>
              <option value='xl'>xl</option>
            </select>
        </div> 

        <div class="col-12">
            <label for="availabilty" class="form-label mt-4">Standard/En solde</label>
            <select class="form-select" name='availabilty' id="availabilty">
              <option value='standard'>standard</option>
              <option value='en solde'>en solde</option>
            </select>
        </div>
        <div class="col-12">
            <div class="form-groupe">
                <label>reference</label>
                <input type="text" name="reference" class="form-control">
                @error('reference')
                <span class="invalid-feedback" role="alert"> {{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <button type="submit" class='btn btn-primary'>Envoyer</button>
        </div>
   </form>
</div>
@endsection