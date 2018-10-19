<!doctype html>
<html lang="en">
    @include('layouts.head')
    <body>
        <div class="container nav-wrapper">
            @include('layouts.top-navbar')

            @include('layouts.mid-navbar')

            @include('layouts.mega-navbar')

            @include('layouts.delivery')

            @yield('under-delivery')
        </div>       
        
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-none d-md-block bg-white sidebar p-4">
                    @yield('sidebar')
                </div>

                <main role="main" class="col-md-8 ml-sm-auto col-lg-9 p-4 bg-white">
                    @yield('content')
                </main>
            </div>
        </div>        
        
        <!-- Footer -->
        @include('layouts.footer')
        <!-- Footer -->
    </body>
</html>