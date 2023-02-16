<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header_admin')

    <div class="container">

      @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>
                      {{$error}}
                  </li>  
                @endforeach
              </ul>
            </div>
          @endif
      
      <form action="{{ route ("product.update",$product -> id) }}" method="POST"> @csrf @method("PUT")
        <div class="form-group">
          <label>Titolo</label>
          <input type="text" class="form-control" placeholder="Inserisci valore" name="title" value="{{$product->title}}">
        </div>
        <div class="form-group">
          <label>Descrizione</label>
          <textarea type="text" class="form-control" placeholder="Inserisci valore" name="description">{{$product->description}}</textarea>
        </div>
        <div class="form-group">
          <label>Foto</label>
          <input type="text" class="form-control" placeholder="Inserisci valore" name="thumb" value="{{$product->thumb}}">
        </div>
        <div class="form-group">
          <label>Prezzo</label>
          <input type="text" class="form-control" placeholder="Inserisci valore" name="price" value="{{$product->price}}">
        </div>
        <div class="form-group">
          <label>Serie</label>
          <input type="text" class="form-control" placeholder="Inserisci valore" name="series" value="{{$product->series}}">
        </div>
        <div class="form-group">
          <label>Uscita</label>
          <input type="date" class="form-control" placeholder="Inserisci valore" name="sale_date" value="{{$product->sale_date}}">
        </div>
        <div class="form-group">
          <label>Tipo</label>
          <input type="text" class="form-control" placeholder="Inserisci valore" name="type" value="{{$product->type}}">
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-warning btn-block">Modifica</button>
        </div>
      </form>

    </div>
   
    
    
</body>

