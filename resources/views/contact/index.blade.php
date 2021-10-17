<!DOCTYPE html>
<html lang="en">
    <head>
        <title>باكر نيوز - تواصل معنا</title>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}" />
        <link rel='icon' href='{{asset("images/favicon.png")}}' type='image/png'/>
        <script src="{{asset('js/lazysizes.min.js')}}"></script>
        <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist){
              alert(msg);
            }
        </script>
    </head>

    <body class="style-default style-rounded">
        <!-- Preloader -->
        <div class="loader-mask">
            <div class="loader">
                <div></div>
            </div>
        </div>
        <!-- Bg Overlay -->
        <div class="content-overlay"></div>
        <header class="sidenav" id="sidenav">
            <div class="sidenav__close">
                <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
                    <i class="ui-close sidenav__close-icon"></i>
                </button>
            </div>
            <nav class="sidenav__menu-container">
                <ul class="sidenav__menu" role="menubar">
                    <li><a href="/" class="sidenav__menu-url">الرئيسية</a></li>
                    <li><a href="/news" class="sidenav__menu-url">أخبار</a></li>
                    <li><a href="/economics" class="sidenav__menu-url">إقصاد</a></li>
                    <li><a href="/opinions" class="sidenav__menu-url">رأي</a></li>
                    <li><a href="/sports" class="sidenav__menu-url">رياضة</a></li>
                    <li><a href="/collections" class="sidenav__menu-url">حوادث ومنوعات</a></li>
                    <li><a href="/twitbook" class="sidenav__menu-url">تويتبوك</a></li>
                    <li><a href="/contact" class="sidenav__menu-url">تواصل معنا</a></li>
                </ul>
            </nav>
            <div class="socials sidenav__socials">
                <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
                    <i class="ui-facebook"></i>
                </a>
                <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
                    <i class="ui-twitter"></i>
                </a>
                <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
                    <i class="ui-youtube"></i>
                </a>
                <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
                    <i class="ui-instagram"></i>
                </a>
            </div>
        </header>
        <main class="main oh" id="main">
            <div class="top-bar d-none d-lg-block">
                <div class="container">
                    <div class="row pt-1">
                        <div class="col-lg-6 text-right">
                            <ul class="top-menu">
                                <li><a href="#"></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="socials nav__socials socials--nobase socials--white justify-content-end">
                                <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
                                    <i class="ui-facebook"></i>
                                </a>
                                <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
                                    <i class="ui-twitter"></i>
                                </a>
                                <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
                                    <i class="ui-youtube"></i>
                                </a>
                                <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
                                    <i class="ui-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <header class="nav">
                <div class="nav__holder nav--sticky">
                    <div class="container relative">
                        <div class="flex-parent">
                            <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
                                <span class="nav-icon-toggle__box">
                                    <span class="nav-icon-toggle__inner"></span>
                                </span>
                            </button>
                            <a href="/" class="logo">
                                <h3>باكرنيوز</h3>
                            </a>
                            <nav class="flex-child nav__wrap d-none d-lg-block">
                                <ul class="nav__menu">
                                    <li>
                                        <a href="/">الرئيسية</a>
                                    </li>
                                    <li>
                                        <a href="/news">أخبار</a>
                                    </li>
                                    <li>
                                        <a href="/economics">إقتصاد</a>
                                    </li>
                                    <li>
                                        <a href="/opinions">رأي</a>
                                    </li>
                                    <li>
                                        <a href="/sports">رياضة</a>
                                    </li>
                                    <li>
                                        <a href="/collections">حوادث ومنوعات</a>
                                    </li>
                                    <li>
                                        <a href="/twitbook">تويتبوك</a>
                                    </li>
                                    <li class="active">
                                        <a href="/contact">تواصل معنا</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="nav__right">
                                <div class="nav__right-item nav__search">
                                    <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                                        <i class="ui-search nav__search-trigger-icon"></i>
                                    </a>
                                    <div class="nav__search-box" id="nav__search-box">
                                        <form class="nav__search-form">
                                            <input type="text" placeholder="ادخل نص البحث" class="nav__search-input" style="padding-right: 50px;">
                                            <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                                                <i class="ui-search nav__search-icon"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="container">
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="/" class="breadcrumbs__url">الرئيسية</a>
                        <i class="ui-arrow-left"></i>
                    </li>
                    <li class="breadcrumbs__item breadcrumbs__item--current">
                        تواصل معنا
                    </li>
                </ul>
            </div>
            <div class="main-container container" id="main-container">
                <div class="blog__content mb-72">
                    <h1 class="page-title">تواصل معنا</h1>
                    <div class="row justify-content-center">
                        <div class="col-lg-8 m-auto">
                            <form class="contact-form mt-30 mb-30" method="post" enctype="multipart/form-data" action="{{route('contact')}}">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact-name">
                                            <label for="name">الاسم</label>
                                            <input name="name" id="name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-email">
                                            <label for="email">البريدك الالكتروني</label>
                                            <input name="email" id="email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="contact-subject">
                                            <label for="address">العنوان</label>
                                            <input name="address" id="address" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="contact-content">
                                            <label for="content">الرسالة</label>
                                            <textarea id="content" name="content" rows="7" required="required"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-lg btn-color btn-button" value="ارسال الرسالة">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer footer--dark text-right">
                <div class="container">
                    <div class="footer__widgets">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <aside class="widget widget-logo">
                                    <a href="#" class="footer-logo">
                                        <h3>باكرنيوز</h3>
                                    </a>
                                    <div class="socials socials--large socials--rounded mb-24">
                                        <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                                        <a href="#" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                                        <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                                        <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <aside class="widget widget_nav_menu">
                                    <h4 class="widget-title">الأقسام</h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul>
                                                <li><a href="/">الرئيسية</a></li>
                                                <li><a href="/news">أخبار</a></li>
                                                <li><a href="/economics">إقتصاد</a></li>
                                                <li><a href="/opinions">رأي</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <ul>
                                                <li><a href="/sports">رياضة</a></li>
                                                <li><a href="/collections">حوادث ومنوعات</a></li>
                                                <li><a href="/twitbook">تويتبوك</a></li>
                                                <li><a href="/contact">تواصل معنا</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <aside class="widget widget-popular-posts">
                                    <h4 class="widget-title">الاخبار الهامة</h4>
                                    <ul class="post-list-small">
                                        <li class="post-list-small__item">
                                            <article class="post-list-small__entry clearfix">
                                                <div class="post-list-small__img-holder">
                                                    <div class="thumb-container thumb-100">
                                                        <a href="#">
                                                            <img data-src="{{asset('img/content/post_small/post_small_1.jpg')}}" src="{{asset('images/best2.jpg')}}" alt="" class="post-list-small__img--rounded lazyload">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-list-small__body">
                                                    <h3 class="post-list-small__entry-title">
                                                        <a href="#">يهرولون – صلاح عووضة</a>
                                                    </h3>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <a href="#">نصر الدين الماس</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            -
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            1 ديسمبر 2019
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </li>
                                        <li class="post-list-small__item">
                                            <article class="post-list-small__entry clearfix">
                                                <div class="post-list-small__img-holder">
                                                    <div class="thumb-container thumb-100">
                                                        <a href="#">
                                                            <img data-src="{{asset('images/best1.jpg')}}" src="{{asset('images/best1.jpg')}}" alt="" class="post-list-small__img--rounded lazyload">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-list-small__body">
                                                    <h3 class="post-list-small__entry-title">
                                                        <a href="#">تورّط لجنة تعويضات حكومية في بيع ”203″ قطعة أرض بأمدرمان</a>
                                                    </h3>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <a href="#">نصر الدين الماس</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            -
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            1 ديسمبر 2019
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                        <p class="copyright" style="direction: ltr;">
                            © 2019 backernews | Powered by <a href="#">EnayaTech</a>
                        </p>
                    </div>
                </div>
            </footer>
            <div id="back-to-top">
                <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
            </div>
        </main> <!-- end main-wrapper -->
        <!-- jQuery Scripts -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/easing.min.js')}}"></script>
        <script src="{{asset('js/owl-carousel.min.js')}}"></script>
        <script src="{{asset('js/flickity.pkgd.min.js')}}"></script>
        <script src="{{asset('js/twitterFetcher_min.js')}}"></script>
        <script src="{{asset('js/jquery.newsTicker.min.js')}}"></script>
        <script src="{{asset('js/modernizr.min.js')}}"></script>
        <!--
        1. Generate your key here - https://developers.google.com/maps/documentation/javascript/get-api-key
        2. Paste your key in the script below.
        -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoQ3_zzRfW-hYspkwr5kvwCwLPGZsN4nw"></script>
        <script src="{{asset('js/gmap3.min.js')}}"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <!-- Google Map -->
        <script type="text/javascript">
            $(document).ready( function(){
                var gmapDiv = $("#google-map");
                var gmapMarker = gmapDiv.attr("data-address");
                gmapDiv.gmap3({
                    zoom: 16,
                    address: gmapMarker,
                    oomControl: true,
                    navigationControl: true,
                    scrollwheel: false,
                    styles: [
                        {
                            "featureType":"all",
                            "elementType":"all",
                            "stylers":[
                                { "saturation":"0" }
                            ]
                        }]
                })
                    .marker({
                        address: gmapMarker,
                        icon: "img/map_pin.png"
                    })
                    .infowindow({
                        content: "V Tytana St, Manila, Philippines"
                    })
                    .then(function (infowindow) {
                        var map = this.get(0);
                        var marker = this.get(1);
                        marker.addListener('click', function() {
                            infowindow.open(map, marker);
                        });
                    });
            });
        </script>
    </body>
</html>
