<nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
    <div class="container">
        <a href="#" class="navbar-brand">My Video Game Store</a>
        <ul class="navbar-nav">
            <li class="nav-item @if(Route::is('home')) active @endif">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    Products
                </a>
                <div class="dropdown-menu">
                    <a href="{{ url('/products/games') }}" class="dropdown-item">Games</a>
                    <a href="{{ url('/products/consoles') }}" class="dropdown-item">Consoles</a>
                    <a href="{{ url('/products/accessories') }}" class="dropdown-item">Console Accessories</a>
                </div>
            </li>
            <li class="nav-item @if(Route::is('users')) active @endif">
                <a class="nav-link" href="{{ route('users') }}">Users</a>
            </li>
            <li class="nav-item @if(Route::is('orders')) active @endif">
                <a class="nav-link" href="{{ route('orders') }}">Orders</a>
            </li>
        </ul>
    </div>
</nav>
