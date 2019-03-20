<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Snow Shopping</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/prod">Items</a></li>

            <li class="dropdown" id="change_admin1">
                @guest
                <a class='dropdown-toggle' data-toggle='dropdown' href='orders.blade.php'><img id='basket_icon' src='css/images/profile.png'></a>
                <ul class='dropdown-menu'>
                    <li><a href='/login'>Sigh In</a></li>
                    <li><a href='/reg'>Sign Up</a></li>
                </ul>
                @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" style="color: black" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @if(Auth::user()->name == 'Admin' )
            <li><a href="/orders">ALL ORDERS</a></li>
            @else
            <li class="nav-item dropdown">
                <a href='/basket'><img id='basket_icon' src='css/images/basket.png'></a>
            </li>
            @endif
            @endguest
        </ul>
    </div>
</nav>
