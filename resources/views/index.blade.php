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
                    <a class="nav-link js-scroll-trigger" href="#about" style="color : rgb(28,41,79);margin-right: 20px; min-width: 60px; font-size: 12px; " >{{__('strings.navbar.about')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#for_pupils" style="color : rgb(28,41,79);margin-right: 20px; min-width: 60px; font-size: 12px;" >{{__('strings.navbar.for_pupils')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#dates" style="font-size: 12px;color : rgb(28,41,79);margin-right: 20px; min-width: 60px; " >{{__('strings.navbar.dates')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#info" style="color : rgb(28,41,79);margin-right: 20px; min-width: 60px;font-size: 12px; " >{{__('strings.navbar.info')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#speakers" style="color : rgb(28,41,79);margin-right: 20px; min-width: 60px; font-size: 12px;" >{{__('strings.navbar.speakers')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#partners" style="color: rgb(28,41,79); margin-right: 20px; min-width: 60px; font-size: 12px;">{{__('strings.navbar.partners')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#organizators" style="color: rgb(28,41,79); margin-right: 20px; min-width: 60px;font-size: 12px;">{{__('strings.navbar.organizators')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#faq" style="color: rgb(28,41,79); margin-right: 20px; min-width: 60px;font-size: 12px;">{{__('strings.navbar.faq')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact" style="color: rgb(28,41,79); margin-right: 20px; min-width: 60px;font-size: 12px;">{{__('strings.navbar.contacts')}}</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button type="button" class="dropdown-toggle" data-toggle="dropdown" style="background: #fff; border: 1px solid #f8f8f8; padding: 5px 0; min-width: 30px; margin-right: 20px;font-size: 12px;">
                            {{ucfirst(app()->getLocale())}}
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" >
                            <ul class="ct-language__dropdown" style="display: block;">
                                <li><a href="/language/kz" class="lang-en lang-select" data-lang="en" style="font-size: 15px; text-transform: uppercase; line-height: 30px; color: #767a89;">Қазақ</a></li>
                                <li><a href="/language/en" class="lang-en lang-select" data-lang="en" style="font-size: 15px; text-transform: uppercase; line-height: 30px; color: #767a89;">English</a></li>
                                <li><a href="/language/ru" class="lang-ru lang-select" data-lang="es" style="font-size: 15px; text-transform: uppercase; line-height: 30px; color: #767a89;">Русский</a></li>
                            </ul>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#apply" style="color: #fff; background-color: rgb(233,180,39); border-radius: 30px; margin-right: 20px; min-width: 120px;font-size: 12px;" >{{__('strings.navbar.apply')}}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="card" style="padding: 20px; margin-top: 70px;">
    <h3>The information about all applied students</h3>
    <div align="center">
        <a href="{{route('export_excel.excel')}}" class="btn btn-success" style="margin-bottom: 30px;">
            Export to Excel
        </a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">City</th>
            <th scope="col">School</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $u)
            <tr>
                <th scope="row">{{$u->id}}</th>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->phone}}</td>
                <td>{{$u->city}}</td>
                <td>{{$u->school}}</td>
{{--                <td style="width: 50%; display: flex; justify-content: space-evenly;">--}}
{{--                    <a href="{{route('users.show', $u->id)}}" class="btn btn-info">Details</a>--}}
{{--                    <a href="{{route('users.edit',$u->id)}}" class="btn btn-success">Edit</a>--}}
{{--                    <form class="form-delete" action="{{route('users.destroy',$u->id)}}" method="post">--}}
{{--                        @method('DELETE')--}}
{{--                        @csrf--}}
{{--                        <button class="btn btn-danger" onclick="return confirm ('Do you want to delete this user?')" type="submit">--}}
{{--                            Delete--}}
{{--                        </button>--}}
{{--                    </form>--}}
{{--                </td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
    {{--        {{$users->links()}}--}}
</div>
