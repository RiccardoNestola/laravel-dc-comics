{{-- <header>
    <div class="container">
        <a href="{{ route ("home") }}">
        <img src="{{ Vite::asset("resources/assets/img/dc-logo.png") }}" alt="img">
        </a>
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
            <li><a href="{{route ("product.index") }}">Product</a></li>
            </ul>
        </nav>
    </div>
</header> --}}

<header>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <span class="navbar-brand mb-0 h1 text-uppercase"><a class="text-decoration-none text-black" href="{{route ("product.index") }}">Admin Area</a></span>
        </div>
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            
            <li><a class=" text-decoration-none text-bg-light" href="{{route ("product.index") }}">Product</a></li>
            <li><a class=" text-decoration-none text-bg-light" href="{{route ("home") }}">Home</a></li>
            </ul>
    </nav>
</header>