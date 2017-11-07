<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('layouts.navbar')
        <div class="w3-main" style="margin-left:300px;margin-top:43px;">
            @include('includes.header')
            @yield('content')
        </div>
    </body>
</html>

