<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
  
    @include('partials.header_admin')
    
    <div class="container my-5">
        <div class="row">
          <div class="col-md-6">
            <img src="{{$product->thumb}}" alt="Img" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="my-3">{{$product->title}}</h2>
            <p><strong>Descrizione</strong> {{$product->description}}</p>
            <p><strong>Prezzo</strong> {{$product->price}}</p>
            <p><strong>Serie</strong> {{$product->series}}</p>
            <p><strong>Data di uscita</strong> {{$product->sale_date}}</p>
            <p><strong>Tipo</strong> {{$product->type}}</p>
            <p><strong>ID:</strong>{{$product->id}}</p>
            


            <form class="d-inline-block" action="{{ route ("product.edit", $product->id) }}" method="GET">
                        
              <button class="btn btn-warning btn-sm" type="submit"><i class="bi bi-pencil-square"></i></button>
            
            </form>


            <form class="d-inline-block form-delete" data-element-name="{{ $product->title}}" action="{{ route('product.destroy', $product->id)}}" method="POST">
              @csrf
              @method("DELETE")
              <button  class="btn btn-danger btn-sm" type="submit"><i class="bi bi-archive"></i></button>
            </form>
          </div>



        </div>
      </div>
      @vite('resources/js/deleteForm.js')
</body>

