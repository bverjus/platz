<!DOCTYPE html>
<html>
  <head>
    @include('templates.partials._head')
  </head>

  <body>
    <a name="ancre"></a>

    <!-- CACHE -->
    <div class="cache"></div>

    <!-- HEADER -->

    @include('templates.partials._header')


    <!-- FILTER -->

    @include('templates.partials._filter')

    <!-- PORTFOLIO -->

        @yield('content')

    <!-- SCRIPT -->

    @include('templates.partials._scripts')
  </body>
</html>
