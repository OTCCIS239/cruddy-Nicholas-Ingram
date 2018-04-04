<nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
    <div class="container">
        <a href="#" class="navbar-brand">My Video Game Store</a>
        <ul class="navbar-nav">
            <li class="nav-item @if(Route::is('home')) active @endif">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item @if(Route::is('products')) active @endif">
                <a class="nav-link" href="{{ route('products') }}">Products</a>
            </li>
            <li class="nav-item @if(Route::is('product-details')) active @endif">
                <a class="nav-link" href="{{ route('product-details') }}">Product Details</a>
            </li>
            <li class="nav-item @if(Route::is('orders')) active @endif">
                <a class="nav-link" href="{{ route('orders') }}">Orders</a>
            </li>
        </ul>
    </div>
</nav>
