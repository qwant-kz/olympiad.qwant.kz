<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Olympiad</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />

    <!-- Animate on scroll library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&display=swap" rel="stylesheet">

</head>

<body id="page-top">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="images/logo.png" alt="logo" class="logoQ"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about" style="color: rgb(28,41,79);margin-right: 20px; " >{{__('strings.navbar.about')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#faq" style="color: rgb(28,41,79); margin-right: 20px;">{{__('strings.navbar.faq')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#speakers" style="color: rgb(28,41,79); margin-right: 20px;">{{__('strings.navbar.speakers')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#sponsors" style="color: rgb(28,41,79); margin-right: 20px;">{{__('strings.navbar.sponsors')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact" style="color: rgb(28,41,79); margin-right: 20px;">{{__('strings.navbar.contacts')}}</a>
                </li>
                {{--                <li class="nav-item">--}}
                {{--                    <div class="dropdown">--}}
                {{--                        <button type="button" class="dropdown-toggle" data-toggle="dropdown">--}}
                {{--                            {{ucfirst(app()->getLocale())}}--}}
                {{--                        </button>--}}
                {{--                        <div class="dropdown-menu dropdown-menu-right">--}}
                {{--                            <ul class="ct-language__dropdown">--}}
                {{--                                <li><a href="/language/change/kk" class="lang-en lang-select" data-lang="en">Қазақ</a></li>--}}
                {{--                                <li><a href="/language/change/en" class="lang-en lang-select" data-lang="en">English</a></li>--}}
                {{--                                <li><a href="/language/change/ru" class="lang-ru lang-select" data-lang="es">Русский</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#apply" style="color: #fff; background-color: rgb(233,180,39); border-radius: 30px; margin-right: 20px;">{{__('strings.navbar.apply')}}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">

    <div class="row" style="margin-top: 50px;">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="row" style="margin-top: 50px;">
                @if(session('success'))
                    <div class="alert alert-danger" role="alert">
                        <strong>Error!</strong> {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center " style="margin-bottom: 30px;">Sign In</h5>
                    <form class="form-signin" action="/login" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" required autofocus name="email">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" required name="password">
                        </div>

                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                        <hr class="my-4">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
