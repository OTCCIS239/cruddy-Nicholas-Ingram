<nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
    <div class="container">
        <a href="#" class="navbar-brand">My Video Game Store</a>
        <ul class="navbar-nav">
            <li class="nav-item @if(Request::segment(1) == '') active @endif">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    Products
                </a>
                <div class="dropdown-menu">
                    <a href="/products/games" class="dropdown-item">Games</a>
                    <a href="/products/consoles" class="dropdown-item">Consoles</a>
                    <a href="/products/accessories" class="dropdown-item">Console Accessories</a>
                </div>
            </li>
            <li class="nav-item @if(Request::segment(1) == 'users') active @endif">
                <a class="nav-link" href="/users">Users</a>
            </li>
            <li class="nav-item @if(Request::segment(1) == 'orders') active @endif">
                <a class="nav-link" href="/orders">Orders</a>
            </li>
        </ul>
    </div>
</nav>
