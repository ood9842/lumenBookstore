<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('layouts.navbar')
        <div class="container-fluid h-100">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block" id="sidebar">
                    @include('layouts.sidebar')
                </div>
                <div class="col-lg-9 offset-lg-3">
                    @include('includes.header')
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>

