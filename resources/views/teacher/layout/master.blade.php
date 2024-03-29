<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    @include('teacher.layout.top')
</head>
<body>

    <!-- Left Panel -->
        @include('teacher.layout.navigation')
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
            @include('teacher.layout.header')
        <!-- Header-->
            @yield('content')
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

   @include('teacher.layout.bottom')
</body>
</html>
