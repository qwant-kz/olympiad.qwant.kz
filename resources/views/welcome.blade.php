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
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"  charset="utf-8"/>

    <!-- Animate on scroll library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;800&display=swap" rel="stylesheet">

{{--    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">--}}
{{--    <style>--}}
{{--        @import url('../../ofont.ru_Bebas Neue.ttf');--}}
{{--    </style>--}}
    <style type="text/css">
        .faq{
            margin: auto;
            font-family: 'Playfair Display', serif;
        }

        .overlay{
            margin: auto;
            font-family: 'Playfair Display', serif;
        }

        .questions {
            margin: auto;
        }

        .h3-header {
            text-align: center;
        }

        .collapsed:hover {
            color: #e9b528;
        }

        /*.accordion-button:focus {
            outline: 0;
        }*/

        /*.accordion-button{
            box-shadow: 0 10px 6px -6px #777;
        }*/
        .accordion-button:hover,
        .accordion-button:focus
        {
            outline: none;
            box-shadow: 0 10px 6px -6px #777;
            -webkit-appearance: none;
            border-bottom: none;
            border-top: 1px solid #ECF0F1;
        }

        .accordion-button:not(.collapsed) {
            color: #e9b528;
            background-color: #F7F9F9;
        }

        .accordion-button:not(.collapsed)::after {
            color: #e9b528;

        }

        .accordion-button::after {
            color: #e9b528;
        }

        .accordion-collapse {
            background-color: #EBF5FB;
        }

    </style>

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

<header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="video/video2.mp4" type="video/mp4">
    </video>
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <h1 class="display-3"  style="font-size: 35px; font-family: 'Playfair Display', serif;">{{__('strings.welcome.header')}}</h1>
{{--                <p class="lead mb-0">For talented pupils</p>--}}
                <p class="text-center mt-3 mb-3">
                    <a href="#headerPopup" id="headerVideoLink" target="_blank" class="popup-modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-play-btn-fill" viewBox="0 0 16 16">
                            <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
                        </svg>
                    </a>
                </p>
                <p class="lead mb-0">{{__('strings.welcome.time')}}</p>
                <p class="lead mb-0">{{__('strings.welcome.format')}}</p>
                <p class="text-center mt-2">
                    <a href="#apply" id="headerVideoLink" class="btn btn-outline-warning popup-modal">{{__('strings.welcome.apply')}}</a>
                </p>
                <div id="headerPopup" class="mfp-hide embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" width="854" height="480" src="https://www.youtube.com/embed/qN3OueBm9F4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="about">
    <div class="container">
        <h3 class="h3-header mb-5" style="font-family: 'Playfair Display', serif; color: rgb(28,41,79);"><b>{{__('strings.about.about')}}</b></h3>
        <div class="row">
            <div class="col-12 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                <iframe style="width: 100%; height: 100%" name="demo" src="https://www.youtube.com/embed/_c2Lzs86mUU"></iframe>

            </div>
            <div class="col-12 col-md-6 mt-4 mt-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="50" style="color: rgb(28,41,79);">
                <b>{{__('strings.about.text')}}</b>

                <br><br>
                {{__('strings.about.goal')}}
                <br><br>{{__('strings.about.g1')}}
                <br>{{__('strings.about.g2')}}
                <br>{{__('strings.about.g3')}}
            </div>
        </div>
    </div>

</section>

<section id="for_pupils" class="bg-light">
    <div class="container">
        <h3 class="h3-header mb-5" style="font-family: 'Playfair Display', serif; color: rgb(28,41,79);"><b>{{__('strings.for_pupils.about')}}</b></h3>
{{--        <h2 style="margin-top: 70px; margin-bottom: 70px;--}}
{{--                font-family: 'Playfair Display', serif;">{{__('strings.for_pupils.about')}}</h2>--}}
        <div class="row schoolRow">
            <div class="col-12 schoolCol">
                <div class="row school1">
                    <div class="col-6 schdiv1">
                        <div class="schoolText">
                            <h3 class="sch-h3" style="color: rgb(28,41,79);">{{__('strings.for_pupils.h1')}}</h3>
                            <div class="schP">
                                <p class="partext" style="color: rgb(28,41,79);">{{__('strings.for_pupils.t1')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 schdi1">
                        <div class="bordsch">
                            <img class="sch1" src="images/for_pupils1.png" style="height: 400px; width: 500px;">
                        </div>
                    </div>
                </div>
                <div class="row school1">
                    <div class="col-6 schdiv2">
                        <div class="bordsch">
                            <img class="sch2" src="images/for_pupils2.png" style="height: 400px; width: 500px;">
                        </div>
                    </div>
                    <div class="col-6 schdiv1">
                        <div class="schoolText">
                            <h3 class="sch-h3" style="color: rgb(28,41,79);">{{__('strings.for_pupils.h2')}}</h3>
                            <div  class="schP">
                                <p class="partext" style="color: rgb(28,41,79);">{{__('strings.for_pupils.t21')}}<br>

                                    {{__('strings.for_pupils.t22')}}<br>

                                    {{__('strings.for_pupils.t23')}}<br>

                                    {{__('strings.for_pupils.t24')}} <a href="http://alpharabius.kz/" class="alpharabius"><b>Alpharabius.kz</b></a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="dates">
    <h3 class="h3-header mb-5" style="font-family: 'Playfair Display', serif; color: rgb(28,41,79);"><b>{{__('strings.dates.header')}}</b></h3>
{{--                    <h2 style="margin-top: 70px; margin-bottom: 70px;--}}
{{--                font-family: 'Playfair Display', serif;">{{__('strings.dates.header')}}</h2>--}}
                    <div class="" id="stages">
                        <div class="container">
                            <div class="steps-form">
                                <div class="steps-row setup-panel">
                                    <div class="steps-step aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                                        <a href="#step-9" type="button" class="btn btn-indigo btn-circle" style="background-color: rgb(233,180,39); color:rgb(28,41,79);">1 </a>
                                        <p class="steps" style="color: rgb(28,41,79);">{{__('strings.dates.stage1')}}</p>
                                        <p class="steps" style="color: rgb(28,41,79);">{{__('strings.dates.stage1_text')}}</p>
                                    </div>
                                    <div class="steps-step aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
                                        <a href="#step-10" type="button" class="btn btn-default btn-circle" disabled="disabled" style="background-color: rgb(233,180,39); color:rgb(28,41,79);">2</a>
                                        <p class="steps" style="color: rgb(28,41,79);">{{__('strings.dates.stage2')}}</p>
                                        <p class="steps" style="color: rgb(28,41,79);">{{__('strings.dates.stage2_text')}}</p>
                                    </div>
                                    <div class="steps-step aos-init aos-animate" data-aos="fade-right" data-aos-delay="500">
                                        <a href="#step-11" type="button" class="btn btn-default btn-circle" disabled="disabled" style="background-color: rgb(233,180,39); color:rgb(28,41,79);">3</a>
                                        <p class="steps" style="color: rgb(28,41,79);">{{__('strings.dates.stage3')}}</p>
                                        <p class="steps" style="color: rgb(28,41,79);">{{__('strings.dates.stage3_text')}}</p>
                                    </div>
                                    <div class="steps-step aos-init aos-animate" data-aos="fade-right" data-aos-delay="700">
                                        <a href="#step-11" type="button" class="btn btn-default btn-circle" disabled="disabled" style="background-color: rgb(233,180,39); color:rgb(28,41,79);">4</a>
                                        <p class="steps" style="color: rgb(28,41,79);">{{__('strings.dates.stage4')}}</p>
                                        <p class="steps" style="color: rgb(28,41,79);">{{__('strings.dates.stage4_text')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    <h4 style="margin-top: 35px; margin-bottom: 35px;
               color: rgb(28,41,79); font-size: 20px;">{{__('strings.dates.notes')}}</h4>

</section>

<section id="info" class="bg-light">
    <div class="container">
        <h3 class="h3-header mb-5" style="font-family: 'Playfair Display', serif; color: rgb(28,41,79);"><b>{{__('strings.info.header')}}</b></h3>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 single-block active aos-init aos-animate"  data-aos="fade-up" data-aos-delay="100">
                            <div class="feature-block" style="height: 230px; color: rgb(28,41,79);">
                        <span class="fb-icon color-info">
                          <div class="text-light">1</div>
                        </span>
                                <h4 class="title">{{__('strings.info.stage1')}} </h4>
                            </div> <!-- /.feature-block -->
                        </div> <!-- /.single-block -->
                        <div class="col-lg-4 col-sm-6 single-block active aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-block" style="height: 230px; color: rgb(28,41,79);">
                        <span class="fb-icon color-warning">
                            <div class="text-light">2</div>
                        </span>
                                <h4 class="title">{{__('strings.info.stage2')}} </h4>
                            </div> <!-- /.feature-block -->
                        </div> <!-- /.single-block -->
                        <div class="col-lg-4 col-sm-6 single-block active aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                            <div class="feature-block" style="height: 230px; color: rgb(28,41,79);">
                        <span class="fb-icon color-success">
                            <div class="text-light">3</div>
                        </span>
                                <h4 class="title">{{__('strings.info.stage3')}}</h4>
                            </div> <!-- /.feature-block -->
                        </div> <!-- /.single-block -->
                    </div>
        <h4 style="margin-top: 35px; margin-bottom: 35px;
               color: rgb(28,41,79); font-size: 20px;">{{__('strings.info.info')}}</h4>
                </div>
            </div>
        </div>
</section>

<section id="apply">
    <div class="container">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="h3-header mb-5" style="font-family: 'Playfair Display', serif; color: rgb(28,41,79);"><b>{{__('strings.application.header')}}</b></h3>
                                <form action="userInfo/create"  method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text"  class="form-control" name="name" placeholder="{{__('strings.application.fullname')}}" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="{{__('strings.application.email')}}" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="tel" name="phone" class="form-control" placeholder="{{__('strings.application.phone')}}" required >
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="city" class="form-control" placeholder="{{__('strings.application.city')}}" required>
                                        {{--                                        <label for="inputCity">City</label>--}}
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="school" class="form-control" placeholder="{{__('strings.application.school')}}" required>
                                    </div>

                                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" style="text-align: center">{{__('strings.application.apply')}}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section id="speakers" class="bg-light" >
    <h3 class="h3-header mb-5" style="font-family: 'Playfair Display', serif; color: rgb(28,41,79);"><b>{{__('strings.speakers.header')}}</b></h3>
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="row justify-content-center" style="color: rgb(28,41,79);">
                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                    <div class="speakers-img">
                        <picture>
                            <source srcset="https://qwant.job-fair.kz/landing/img/qwant/yernur.webp" type="image/webp">
                            <img src="https://qwant.job-fair.kz/landing/img/qwant/yernur.png" alt="" loading="lazy" style="height: 175px; width: 175px;">
                        </picture>
                    </div>
                    <h4 class="text-center">{{__('strings.speakers.speaker1_name')}}</h4>
                    <p class="text-center">{{__('strings.speakers.speaker1_title')}}</p>
                </div>
                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                    <div class="speakers-img">
                        <picture>
                            <source srcset="" type="image/webp">
                            <img src="Speakers/Mussin_b_(cropped).jpg" alt="" loading="lazy" style="height: 175px; width: 175px; border-radius: 50%;">
                        </picture>
                    </div>
                    <h4 class="text-center">{{__('strings.speakers.speaker2_name')}}</h4>
                    <p class="text-center">{{__('strings.speakers.speaker2_title')}}</p>
                </div>
                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="speakers-img">
                        <picture>
                            <source srcset="https://qwant.job-fair.kz/landing/img/qwant/yelmira.webp" type="image/webp">
                            <img src="https://qwant.job-fair.kz/landing/img/qwant/yelmira.png" alt="" loading="lazy" style="height: 175px; width: 175px;">
                        </picture>
                    </div>
                    <h4 class="text-center">{{__('strings.speakers.speaker4_name')}}</h4>
                    <p class="text-center">{{__('strings.speakers.speaker4_title')}}</p>
                </div>
                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                    <div class="speakers-img">
                        <picture>
                            {{--                            <source srcset="" type="image/webp">--}}
                            <img src="Speakers/kanat_kozhakhmet.jpg" alt="Avatar" loading="lazy" style="height: 175px; width: 175px; border-radius: 50%">
                        </picture>
                    </div>
                    <h4 class="text-center">{{__('strings.speakers.speaker7_name')}}</h4>
                    <p class="text-center">{{__('strings.speakers.speaker7_title')}}</p>
                </div>
                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                    <div class="speakers-img">
                        <picture>
                            <source srcset="https://qwant.job-fair.kz/landing/img/qwant/kwame.webp" type="image/webp">
                            <img src="https://qwant.job-fair.kz/landing/img/qwant/kwame.png" alt="" loading="lazy" style="height: 175px; width: 175px;">
                        </picture>
                    </div>
                    <h4 class="text-center">{{__('strings.speakers.speaker3_name')}}</h4>
                    <p class="text-center">{{__('strings.speakers.speaker3_title')}}</p>
                </div>
                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="speakers-img">
                        <picture>
                            <source srcset="https://qwant.job-fair.kz/landing/img/qwant/arman.webp" type="image/webp">
                            <img src="https://qwant.job-fair.kz/landing/img/qwant/arman.png" alt="" loading="lazy" style="height: 175px; width: 175px;">
                        </picture>
                    </div>
                    <h4 class="text-center">{{__('strings.speakers.speaker5_name')}}</h4>
                    <p class="text-center">{{__('strings.speakers.speaker5_title')}} <br> @nfactorial.school</p>
                </div>
                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="250">
                    <div class="speakers-img">
                        <picture>
                            <source srcset="https://qwant.job-fair.kz/landing/img/qwant/kanat.webp" type="image/webp">
                            <img src="https://qwant.job-fair.kz/landing/img/qwant/kanat.png" alt="" loading="lazy" style="height: 175px; width: 175px;">
                        </picture>
                    </div>
                    <h4 class="text-center">{{__('strings.speakers.speaker6_name')}}</h4>
                    <p class="text-center">{{__('strings.speakers.speaker6_title')}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="partners">
    <div class="container">
        <h3 class="h3-header mb-5" style="font-family: 'Playfair Display', serif; color: rgb(28,41,79);"><b>{{__('strings.partners.header')}}</b></h3>

        <div class="row" style="display: flex; margin:auto; justify-content: center;">
            <div class="logoBox col-sm-2">
                <img src="Logo/BCPD_Primary.png" class="logoSponsor" alt="Sponsor1">
            </div>

            <div class="logoBox col-sm-2">
                <img src="Logo/qwant-02.png" class="logoSponsor" alt="Sponsor2">
            </div>
            <div class="logoBox col-sm-2">
                <img src="Logo/Microsoft-logo_rgb_c-gray.png" class="logoSponsor" alt="Sponsor2">
            </div>
            <div class="logoBox col-sm-2">
                <img src="images/sponsorZerde.png" class="logoSponsor" alt="Sponsor3">
            </div>

            <div class="logoBox col-sm-2">
                <img src="Logo/Qwasar-Logo-06.png" class="logoSponsor" alt="Sponsor4">
            </div>
        </div>
    </div>
</section>

<section id="organizators">
    <div class="container">
        <h3 class="h3-header mb-5" style="font-family: 'Playfair Display', serif; color: rgb(28,41,79);"><b>{{__('strings.organizators.header')}}</b></h3>
        <div class="blocksTop" style="color: rgb(28,41,79);">
            <div class="organizator1">
                <div>
                    <h5 class="org1"><b>{{__('strings.organizators.org_name1')}}</b></h5>
                </div>
                <div>
                    <p class="pOrg">{{__('strings.organizators.org_title1')}}</p>
                </div>
            </div>
            <div class="organizator1">
                <div>
                    <h5 class="org1"><b>{{__('strings.organizators.org_name2')}}</b></h5>
                </div>
                <div>
                    <p class="pOrg">{{__('strings.organizators.org_title2')}}</p>
                </div>
            </div>
            <div class="organizator2">
                <div>
                    <h5 class="org1"><b>{{__('strings.organizators.org_name3')}}</b></h5>
                </div>
                <div>
                    <p class="pOrg">{{__('strings.organizators.org_title3')}}</p>
                </div>
            </div>
        </div>

    </div>
</section>




<section id="faq" class="accordion-section clearfix mt-3 bg-light" aria-label="Question Accordions">
    <div class="row faq">
        <div class="col-9 questions">
            <h3 class="h3-header mb-5" style="font-family: 'Playfair Display', serif; color: rgb(28,41,79);"><b>{{__('strings.faq.header')}}</b></h3>
            <div class="accordion accordion-flush" id="accordionFlushExample" style="color: rgb(28,41,79);">
                <div class="accordion-item" >
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <b> {{__('strings.faq.q1')}}</b>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><i><b>{{__('strings.faq.a1')}}</b></i></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <b>{{__('strings.faq.q2')}}</b>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><i><b>{{__('strings.faq.a2')}}</b></i></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            <b>{{__('strings.faq.q3')}}</b>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><i><b>{{__('strings.faq.a3')}}</b></i></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            <b>{{__('strings.faq.q4')}}</b>
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><i><b>{{__('strings.faq.a4')}}</b></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" >
    <div class="container">
        <h3 class="h3-header mb-5" style="font-family: 'Playfair Display', serif; color: rgb(28,41,79);"><b>{{__('strings.contacts.header')}}</b></h3>
    </div>
    <div class="row rowFootertop" style="color: rgb(28,41,79);">
        <div class="col-md-12 colFooter">

            <div class="row rowFooter">
                <div class="col-md-4 footercol4">
                    <div class="row footblock1">
                        <div class="col-12 fBlock1">
                            <div class="qwantmail">
                                <div class="mailicon">
                                    <!-- <img src="envelope-fill.svg" alt="mail"></img> -->
                                    <i class="bi bi-envelope-fill"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                                    </svg>
                                </div>
                                <div class="mailHeader">
                                    <h5>{{__('strings.contacts.email')}}</h5>
                                </div>
                                <div class="maillink">
                                    <a href="mailto:info@qwant.kz">{{__('strings.contacts.email_name')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footercol4">
                    <div class="row">
                        <div class="col-12 fBlock1">
                            <div class="qwantaddress">
                                <div class="addressicon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    </svg>
                                </div>
                                <div class="addressHeader">
                                    <h5>{{__('strings.contacts.address')}}</h5>
                                </div>
                                <div class="addresslink">
                                    <a href="https://2gis.kz/nur_sultan/geo/70030076174205719/71.412744%2C51.088566?floor=1&m=71.41339%2C51.088392%2F17.7">
                                        {{__('strings.contacts.address_name')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footercol4">
                    <div class="row">
                        <div class="col-12 fBlock1">
                            <div class="qwantphone">
                                <div class="phoneicon">
                                    <i class="bi bi-telephone-fill"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                    </svg>
                                </div>
                                <div class="phoneHeader">
                                    <h5>{{__('strings.contacts.phone')}}</h5>
                                </div>
                                <div class="phonelink">
                                    <a href="tel:+7 776 134 36 48">+7 776 134 36 48</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row bottomFooter">
            <hr>
            <div class="col-md-4">
                <div class="qwantlogof">
                    <img src="Logo/QWANT-02.png">
                </div>
            </div>
            <div class="col-md-4 centfoot">
                <p>QWANT Digital Programming School ©2021</p>
            </div>
            <div class="col-md-4">
                <div class="row iconrow">
                    <div class="col-1 iconsfooter">
                        <a href="https://www.instagram.com/qwantkz/">
                            <i class="bi bi-instagram"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col-1 iconsfooter">
                        <a href="https://t.me/qwantkz">
                            <i class="bi bi-telegram"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col-1 iconsfooter">
                        <a href="https://www.facebook.com/qwantkz/">
                            <i class="bi bi-facebook"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Footer -->
<footer class="py-5" style="background-color:white;">
    <div class="container">
        <p class="m-0 text-center text-black-50">&copy; 2021 QWANT. All right reserved.</p>
    </div>
    <!-- /.container -->
</footer>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Your application was sent successfully!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Your application was sent successfully! Please, check your email on 20 February. We will send you an invitation to olympiad with instruction
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom JavaScript for this theme -->
<script src="js/scrolling-nav.js"></script>

<!-- Animate on scroll library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Animate on scroll library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></script>

<script>
    AOS.init();
    $(document).ready(function() {
        $('#headerVideoLink').magnificPopup({
            type:'inline',
            midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
        });
    });
</script>

@if(session('success'))
    <!-- Modal -->
    <script>
        $(function() {
            $('#exampleModal').modal('show');
        });
    </script>

    {{--<div class="alert alert-success">--}}
    {{--    {{ session()->get('success') }}--}}
    {{--</div>--}}
@endif

</body>

</html>
