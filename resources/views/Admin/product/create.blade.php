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
    
    <div class="container">
      <form action="{{ route ("product.store") }}" method="POST"> @csrf
        <div class="form-group">

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

          <label>Titolo</label>
          <input type="text" class="form-control" placeholder="Inserisci valore" name="title">
        </div>
        <div class="form-group">
          <label>Descrizione</label>
          <textarea type="text" class="form-control" placeholder="Inserisci valore" name="description"></textarea>
        </div>
        <div class="form-group">
          <label>Foto</label>
          <input type="text" class="form-control" placeholder="Inserisci valore" name="thumb">
        </div>
        <div class="form-group">
          <label>Prezzo</label>
          <input type="text" class="form-control" placeholder="Inserisci valore" name="price">
        </div>
        <div class="form-group">
          <label>Serie</label>
          <input type="text" class="form-control" placeholder="Inserisci valore" name="series">
        </div>
        <div class="form-group">
          <label>Uscita</label>
          <input type="date" class="form-control" placeholder="Inserisci valore" name="sale_date">
        </div>
        <div class="form-group">
          <label>Tipo</label>
          <input type="text" class="form-control" placeholder="Inserisci valore" name="type">
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-primary btn-block">Salva</button>
        </div>
      </form>

    </div>
   
    
    
</body>

