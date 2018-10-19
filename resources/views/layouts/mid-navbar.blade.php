<div class="row">
                <nav class="navbar navbar-expand-md navbar-light bg-white  w-100 mid-navbar">
                    <a href="/" class="navbar-brand">TBS</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mid-navbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse w-100" id="mid-navbar">
                        <form class="mx-2 my-auto d-inline w-75">
                            <div class="input-group">
                                <input type="text" class="form-control border border-right-0" placeholder="Search">
                                <span class="input-group-append">
                                    <button class="btn btn-outline-secondary border border-left-0" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                        
                        <ul class="navbar-nav w-25 d-flex justify-content-end">
                            <li class="nav-item mr-2">
                                <a class="nav-link" href="/basket">
                                    <span class="fas fa-shopping-basket fa-lg text-dark" title="Your Basket"></span>
                                </a>
                            </li>
                            @guest
                            <li class="nav-item mr-2">
                                <a class="nav-link" href="/register"><span class="fas fa-user fa-lg text-dark" title="Register"></span></a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="btn btn-sm btn-success " href="/login">Log In</a>
                            </li>
                            @else
                                <li>
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <span class="fas fa-user fa-lg text-dark"></span> {{ Auth::user()->name }} <span class="caret"></span>
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
                </nav>
            </div>