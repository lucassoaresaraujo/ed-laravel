<!doctype html>
<html class="no-js" lang="{{ config('app.locale') }}">

<head>
    @include('layouts.partials.meta')

    @include('layouts.partials.css')

</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #CCEDFF!important;">-->
<!--<h5 class="navbar-brand my-0 mr-md-auto font-weight-normal">-->
<!--<img src="img/logo.png" alt="Edital Direcionado" width="155px">-->
<!--</h5>-->
<!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">-->
<!--<span class="navbar-toggler-icon"></span>-->
<!--</button>-->
<!--<div class="collapse navbar-collapse " id="navbarNav">-->
<!--<ul class="navbar-nav">-->
<!--<li class="nav-item active">-->
<!--<a class="nav-link" href="#">Sobre</a>-->
<!--</li>-->
<!--<li class="nav-item">-->
<!--<a class="nav-link" href="#">AFRBF</a>-->
<!--</li>-->
<!--<li class="nav-item">-->
<!--<a class="nav-link" href="#">Edital Direcionado</a>-->
<!--</li>-->
<!--<li class="nav-item">-->
<!--<a class="nav-link" href="#">O Planejamento</a>-->
<!--</li>-->
<!--</ul>-->
<!--</div>-->
<!--</nav>-->

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm"
     style="background-color: #CCEDFF!important;">
    <h5 class="my-0 mr-md-auto font-weight-normal">
        <img src="img/logo.png" alt="Edital Direcionado" width="155px">
    </h5>
    <nav class="my-2 my-md-0 mr-md-3" style="text-transform: uppercase;">
        @yield('menu-principal')
    </nav>
</div>

    @yield('content')


<footer>
    <p style="text-align: center;">Edital Direcionado - 2018</p>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>
