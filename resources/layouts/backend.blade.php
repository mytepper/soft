<html>
    <head>
        <title>App Name - @yield('title')</title>
		{{ HTML::style('css/css.css'); }}
		{{ HTML::script('js/scrollTo.js'); }}
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
