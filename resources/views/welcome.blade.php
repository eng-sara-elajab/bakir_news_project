@extends('layouts.app', ['title' => 'باكر نيوز - الرئيسية'])

@section('content')
    <div class="container">
        <div class="trending-now">
        <span class="trending-now__label">
          <i class="ui-flash"></i>
          <span class="trending-now__text d-lg-inline-block d-none">الاخبار العاجلة</span>
        </span>
            <div class="newsticker">
                <ul class="newsticker__list">
                    @foreach($breaking_news as $breaking_new)
                        <li class="newsticker__item"><a href="{{route('single-post',$breaking_new->id)}}" class="newsticker__item-url">{{$breaking_new->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="newsticker-buttons">
                <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-left"></i></button>
                <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-right"></i></button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-center pt-48 pb-24">
            <a href="#">
                <img src="{{asset('images/advertise.jpg')}}" alt="" width="100%">
            </a>
        </div>
    </div>
    <div class="container">
        <section class="section mb-0 mt-5">
            {{-- <div class="title-wrap title-wrap--line title-wrap--pr">
                <h3 class="section-title">الاخبار الهامة</h3>
            </div> --}}
            <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside" style="direction: ltr;">
                @foreach($importants as $important)
                    <article class="entry thumb thumb--size-2">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/{{$important->image}}')">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="{{route('single-post',$important->id)}}">{{$important->title}}</a>
                                </h2>
                            </div>
                            <a href="{{route('single-post',$important->id)}}" class="thumb-url"></a>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
    </div>
    <div class="main-container container pt-24" id="main-container">
        <div class="row">
            <div class="col-lg-8 blog__content">
                <section class="section tab-post mb-16">
                    <div class="title-wrap title-wrap--line" style="margin-bottom: 14px; padding-top: 25px;">
                        <h3 class="section-title">اخبار</h3>
                    </div>
                    <div class="tabs__content tabs__content-trigger tab-post__tabs-content">
                        <div class="tabs__content-pane tabs__content-pane--active">
                            <div class="row card-row">
                                @foreach($posts as $post)
                                    <div class="col-md-6 d-block d-xl-none">
                                        <article class="entry thumb thumb--size-2">
                                            <div class="entry__img-holder thumb__img-holder" style="background-image: url('{{ asset('images/'.$post->image) }}');">
                                                <div class="bottom-gradient"></div>
                                                <div class="thumb-text-holder thumb-text-holder--1">
                                                    <h2 class="thumb-entry-title">
                                                        <a href="{{route('single-post',$post->id)}}">{{$post->title}}</a>
                                                    </h2>
                                                </div>
                                                <a href="{{route('single-post',$post->id)}}" class="thumb-url"></a>
                                            </div>
                                        </article>
                                    </div>

                                    <div class="col-sm-6 d-none d-xl-block">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="{{route('single-post',$post->id)}}">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="{{ asset('images/'.$post->image) }}" src="{{ asset('images/'.$post->image) }}" class="entry__img lazyload" alt="" />
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="entry__body card__body text-right">
                                                <div class="entry__header">
                                                    <h2 class="entry__title">
                                                        <a href="{{route('single-post',$post->id)}}">{{$post->title}}</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-date">
                                                            {{$post->created_at}}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <aside class="col-lg-4 sidebar sidebar--right">
                <div class="title-wrap title-wrap--line" style="margin-bottom: 14px; padding-top: 25px;">
                    <h3 class="section-title">راي</h3>
                </div>
                <aside class="widget widget-popular-posts">
                    <ul class="post-list-small">
                        @foreach($openions as $openion)
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="{{route('single-post',$openion->id)}}">
                                                <img data-src="images/{{$openion->image}}" src="images/{{$openion->image}}" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="{{route('single-post',$openion->id)}}">{{$openion->title}}</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <a href="#">{{$openion->auther}}</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                -
                                            </li>
                                            <li class="entry__meta-date">
                                                {{$openion->created_at}}
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        @endforeach
                    </ul>
                </aside>

                <aside class="widget widget-socials d-none d-lg-block">
                    <h4 class="widget-title">تجدنا ايضاً في مواقع التواصل الإجتماعي</h4>
                    <div class="socials socials--wide socials--large">
                        <div class="row row-16">
                            <div class="col">
                                <a class="social social-facebook" href="https://www.facebook.com/backermews/" title="facebook" target="_blank" aria-label="facebook">
                                    <i class="ui-facebook"></i>
                                    <span class="social__text">فيس بوك</span>
                                </a>
                                {{-- <a class="social social-youtube" href="https://www.youtube.com/" title="youtube" target="_blank" aria-label="youtube">
                                    <i class="ui-youtube"></i>
                                    <span class="social__text">يوتيوب</span>
                                </a> --}}
                            </div>
                            <div class="col">
                                <a class="social social-twitter" href="https://twitter.com/backernews1" title="twitter" target="_blank" aria-label="twitter">
                                    <i class="ui-twitter"></i>
                                    <span class="social__text">تويتر</span>
                                </a>
                                {{-- <a class="social social-instagram" href="https://www.instagram.com/" title="instagram" target="_blank" aria-label="instagram">
                                    <i class="ui-instagram"></i>
                                    <span class="social__text">انستجرام</span>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </aside>

            </aside>
        </div>
        <div class="text-center pb-48">
            <a href="#">
                <img src="{{asset('images/advertise.jpg')}}" alt="" width="100%">
            </a>
        </div>
        <section class="section mb-0 text-right">
            <div class="row">
                <div class="col-md-6">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title">اقتصاد</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            @foreach($new_economics as $new_economic)
                                <article class="entry thumb thumb--size-2">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/{{$new_economic->image}}')">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder thumb-text-holder--1">
                                            <h2 class="thumb-entry-title">
                                                <a href="{{route('single-post',$new_economic->id)}}">{{$new_economic->title}}</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <a href="#">{{$new_economic->auther}}</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    {{$new_economic->created_at}}
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{route('single-post',$new_economic->id)}}" class="thumb-url"></a>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                        <div class="col-lg-6">
                            <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                                @foreach($economics as $economic)
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="{{route('single-post',$economic->id)}}">{{$economic->title}}</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title">رياضة</h3>
                    </div>
                    <div class="row">
                        @foreach($new_sports as $new_sport)
                            <div class="col-lg-6">
                                <article class="entry thumb thumb--size-2">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/{{$new_sport->image}}');">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder thumb-text-holder--1">
                                            <h2 class="thumb-entry-title">
                                                <a href="{{route('single-post',$new_sport->id)}}">{{$new_sport->title}}</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <a href="#">{{$new_sport->auther}}</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    {{$new_sport->created_at}}
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{route('single-post',$new_sport->id)}}" class="thumb-url"></a>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                        {{-- <div class="col-lg-6">
                            <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                                @foreach($sports as $sport)
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="{{route('single-post',$sport->id)}}">{{$sport->title}}</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                @endforeach
                            </ul>
                        </div> --}}
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 order-2 order-md-1">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title">حوادث ومنوعات</h3>
                    </div>
                    <div class="row">
                        @foreach($collections as $collection)
                            <div class="col-lg-6">
                                <article class="entry thumb thumb--size-2">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/{{$collection->image}}');">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder thumb-text-holder--1">
                                            <h2 class="thumb-entry-title">
                                                <a href="{{route('single-post',$collection->id)}}">{{$collection->title}}</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <a href="#">{{$collection->auther}}</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    {{$collection->created_at}}
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{route('single-post',$collection->id)}}" class="thumb-url"></a>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-6 order-1 order-md-2">
                    <div class="title-wrap title-wrap--line">
                        <h3 class="section-title">تويتبوك</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            @foreach($new_twit_books as $new_twit_book)
                                <article class="entry thumb thumb--size-2">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('images/{{$new_twit_book->image}}');">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder thumb-text-holder--1">
                                            <h2 class="thumb-entry-title">
                                                <a href="{{route('single-post',$new_twit_book->id)}}">{{$new_twit_book->title}}</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <a href="#">{{$new_twit_book->auther}}</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    {{$new_twit_book->created_at}}
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{route('single-post',$new_twit_book->id)}}" class="thumb-url"></a>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                        <div class="col-lg-6">
                            <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                                @foreach($twit_books as $twit_book)
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry">
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="{{route('single-post',$twit_book->id)}}">{{$twit_book->title}}</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>
@endsection
