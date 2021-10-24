<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @isset($title)
            {{$title}}
        @endisset
    </title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">

    <link rel='icon' href='{{asset("images/favicon.png")}}' type='image/png'/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" >

    <script src="{{asset('js/lazysizes.min.js')}}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

</head>

<body class="bg-light style-default style-rounded">

<div class="loader-mask">
    <div class="loader">
        <div></div>
    </div>
</div>


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
        <a class="social social-facebook" href="https://www.facebook.com/backermews/" target="_blank" aria-label="facebook">
            <i class="ui-facebook"></i>
        </a>
        <a class="social social-twitter" href="https://twitter.com/backernews1" target="_blank" aria-label="twitter">
            <i class="ui-twitter"></i>
        </a>
        {{-- <a class="social social-youtube" href="https://www.youtube.com/" target="_blank" aria-label="youtube">
            <i class="ui-youtube"></i>
        </a>
        <a class="social social-instagram" href="https://www.instagram.com/" target="_blank" aria-label="instagram">
            <i class="ui-instagram"></i>
        </a> --}}
    </div>
</header>

<main class="main oh" id="main">

    <div class="top-bar d-none d-lg-block">
        <div class="container">
            <div class="row pt-1">

                <div class="col-lg-6 text-right">
                    <ul class="top-menu">
                        <li><a href="/contact">تواصل معنا</a></li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <div class="socials nav__socials socials--nobase socials--white justify-content-end">
                        <a class="social social-facebook" href="https://www.facebook.com/backermews/" target="_blank" aria-label="facebook">
                            <i class="ui-facebook"></i>
                        </a>
                        <a class="social social-twitter" href="https://twitter.com/backernews1" target="_blank" aria-label="twitter">
                            <i class="ui-twitter"></i>
                        </a>
                        {{-- <a class="social social-youtube" href="https://www.youtube.com/" target="_blank" aria-label="youtube">
                            <i class="ui-youtube"></i>
                        </a>
                        <a class="social social-instagram" href="https://www.instagram.com/" target="_blank" aria-label="instagram">
                            <i class="ui-instagram"></i>
                        </a> --}}
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

                            <li class="active">
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

                            <li>
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
                                <form class="nav__search-form" method="post" action="{{route('search')}}">
                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <input type="text" name="search" placeholder="ادخل نص البحث" class="nav__search-input" style="padding-right: 50px;">
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
    <div>
        @yield('content')
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
                                <a href="https://www.facebook.com/backermews/" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                                <a href="https://twitter.com/backernews1" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                                {{-- <a href="https://www.youtube.com/" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                                <a href="https://www.instagram.com/" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a> --}}
                            </div>
                        </aside>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <aside class="widget widget_nav_menu">
                            <h4 class="widget-title">الاقسام</h4>
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
                            <h4 class="widget-title">الإخبار الهامة</h4>
                            <ul class="post-list-small">
                                @foreach($newPosts as $post)
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry clearfix">
                                            <div class="post-list-small__img-holder">
                                                <div class="thumb-container thumb-100">
                                                    <a href="{{route('single-post',$post->id)}}">
                                                        <img data-src="{{ asset('images/'.$post->image) }}" src="{{ asset('images/'.$post->image) }}"alt="" class="post-list-small__img--rounded lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="{{route('single-post',$post->id)}}">{{$post->title}}</a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    {{-- <li class="entry__meta-author">
                                                        <a href="{{route('single-post',$post->id)}}">{{$post->auther}}</a>
                                                    </li> --}}
                                                    <li class="entry__meta-date">
                                                        -
                                                    </li>
                                                    <li class="entry__meta-date">
                                                        {{$post->created_at}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                @endforeach
                                {{-- {{!! $posts !!}} --}}
                            </ul>
                        </aside>
                    </div>

                </div>
                <p class="copyright" style="direction: ltr;">
                    © 2019 backernews | Powered by <a href="http://enayatech.com/">EnayaTech</a>
                </p>
            </div>
        </div>
    </footer>

    <div id="back-to-top">
        <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

</main>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/easing.min.j')}}s"></script>
<script src="{{asset('js/owl-carousel.min.js')}}"></script>
<script src="{{asset('js/flickity.pkgd.min.js')}}"></script>
<script src="{{asset('js/twitterFetcher_min.js')}}"></script>
<script src="{{asset('js/jquery.newsTicker.min.js')}}"></script>
<script src="{{asset('js/modernizr.min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>

</body>
</html>
