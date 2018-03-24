<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- bootstrap -->
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item {{ Request::is('posts') ? 'active' : '' }}">
            <a class="nav-link" href="{{route('posts.index')}}">Posts </a>
          </li>
          <li class="nav-item {{ Request::is('posts/create') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('posts.create') }}">Create post</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container theme-showcase" role="main">
        <br />
        @yield('content')
    </div>
    <footer>
        @yield('footer')
    </footer>
<!-- Bootstrap -->
    <script href="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script href="{{ URL::asset('js/jquery-3.2.1.slim.min')}}"></script>
    <script href="{{ URL::asset('js/popper.min.js')}}"></script>
</body>
</html>