<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navContent"
                aria-controls="navContent"
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="open-menu" href="#" role="button">
            <i class="mdi mdi-arrow-expand-right"></i>
        </a>

        <div class="collapse navbar-collapse" id="navContent">
            <!-- Left Side Of Navbar -->
{{--
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle  hasTooltip"
                        title="Tables"
                        href="#" id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    ><i class="mdi mdi-table-large"></i></a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Families</a>
                        <a class="dropdown-item" href="#">Categories</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">VAT</a>
                        <a class="dropdown-item" href="#">Units</a>
                        <a class="dropdown-item" href="#">Titles</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link hasTooltip"
                        title="Users"
                        href="{{ route('Admin::users.index') }}"
                    ><i class="mdi mdi-account-multiple"></i></a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link hasTooltip"
                        title="Suppliers"
                        href="#"
                    ><i class="mdi mdi-truck"></i></a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link hasTooltip"
                        title="Customers"
                        href="#"><i class="mdi mdi-human-male-female"></i></a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link hasTooltip"
                        title="Products"
                        href="#"><i class="mdi mdi-tag"></i></a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link hasTooltip"
                        title="Estimates"
                        href="#"><i class="mdi mdi-square-inc-cash"></i></a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link hasTooltip"
                        title="Orders"
                        href="#"><i class="mdi mdi-factory"></i></a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link hasTooltip"
                        title="Mapping"
                        href="#"
                    ><i class="mdi mdi-pen"></i></a>
                </li>
            </ul>
--}}

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
            </ul>
        </div>
    </div>
</nav>
