<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('layouts.navbar')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 d-none d-md-block">
                    @include('layouts.sidebar')
                </div>
                <div class="col-md-9" id="content">
                    @include('includes.header')
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>

