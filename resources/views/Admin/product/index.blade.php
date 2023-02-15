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



    <main>

        <div class="container">
            <div class="p-3 d-flex justify-content-end">
                <a class="btn btn-warning btn-sm" href="{{ route ("product.create")}}"></i>Aggiungi nuovo</a>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col" class="d-none d-md-table-cell">Descrizione</th>
                    <th scope="col" class="d-none d-md-table-cell">Foto</th>
                    <th scope="col" class="d-none d-md-table-cell">Prezzo</th>
                    <th scope="col" class="d-none d-md-table-cell">Serie</th>
                    <th scope="col" class="d-none d-md-table-cell">Uscita</th>
                    <th scope="col" class="d-none d-md-table-cell">Tipo</th>
                    <th scope="col" class="d-none d-md-table-cell"><i class="bi bi-pencil-fill"></i></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                  <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td class="w-25">{{$product->title}}</td>
                    <td class="d-none d-md-table-cell w-25">{{ Str::limit($product->description,20)}}</td>
                    <td class="d-none d-md-table-cell"><img class="img-fluid rounded" src="{{$product->thumb}}" alt=""></td>
                    <td class="d-none d-md-table-cell">{{$product->price}}</td>
                    <td class="d-none d-md-table-cell">{{$product->series}}</td>
                    <td class="d-none d-md-table-cell w-25">{{$product->sale_date}}</td>
                    <td class="d-none d-md-table-cell w-25">{{$product->type}}</td>
                    <td>
                      <a href="{{ route("product.show", $product->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-folder2-open"></i></a>
                    </td>
                    <td>
                        <a class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                    </td>
                    <td>
                        <form action="{{ route('product.destroy', $product->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button  class="btn btn-danger btn-sm" type="submit"><i class="bi bi-archive"></i></button>
                      </form>
                    </td>
                    @endforeach
                  </tr>
                </tbody>
              </table>
        </div>
       
    </main>

    
      

</body>

</html>
