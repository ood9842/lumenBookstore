<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('layouts.navbar')
        <div class="container-fluid">
            <div class="row" id="row-main">
                <div class="col-md-3" id="sidebar">
                   
                </div>
                <div class="col-md-9" id="content">
                    @include('includes.header')
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>

