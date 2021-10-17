@extends('layouts.app', ['title' => 'باكر نيوز - نتائج البجث'])

@section('content')
    <div class="main-container container pt-40" id="main-container">
        <!-- Content -->
        <div class="row">
            <!-- Posts -->
            <div class="col-lg-8 blog__content mb-72">
                <h1 class="page-title">نتائج البحث</h1>

                @foreach($posts as $post)
                    <article class="entry card post-list">
                        <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image:url('images/{{$post->image}}')">
                            {{-- <a href="/single-post" class="thumb-url"></a> --}}
                            <img src="{{asset('images/'.$post->image)}}" alt="" class="entry__img">
                        </div>
                        <div class="entry__body post-list__body card__body">
                            <div class="entry__header">
                                <h2 class="entry__title">
                                    <a href="{{route('single-post',$post->id)}}">{{$post->title}}</a>
                                </h2>
                                <ul class="entry__meta">
                                    {{-- <li class="entry__meta-author">
                                        <a href="#">{{$post->auther}}</a>
                                    </li> --}}
                                    <li class="entry__meta-date">
                                        -
                                    </li>
                                    <li class="entry__meta-date">
                                        {{$post->created_at}}
                                    </li>
                                </ul>
                            </div>
                            <div class="entry__excerpt">
                                <p>{{$post->body}}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
                {!! $posts !!}
            </div> <!-- end posts -->
            <aside class="col-lg-4 sidebar sidebar--right">
                <div class="title-wrap title-wrap--line" style="margin-bottom: 14px; padding-top: 25px;">
                <h3 class="section-title">{{$max['name']}}</h3>
                </div>
                <aside class="widget widget-popular-posts">
                    <ul class="post-list-small">
                        @foreach($side_posts as $side_post)
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="#">
                                                <img data-src="{{asset('images/'.$side_post->image)}}" src="{{asset('images/'.$side_post->image)}}" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="#">{{$side_post->title}}</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <a href="#">{{$side_post->auther}}</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                -
                                            </li>
                                            <li class="entry__meta-date">
                                                {{$side_post->created_at}}
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        @endforeach
                    </ul>
                </aside>
                <aside class="widget widget-socials">
                    <h4 class="widget-title">تجدنا ايضاً في مواقع التواصل الإجتماعي</h4>
                    <div class="socials socials--wide socials--large">
                        <div class="row row-16">
                            <div class="col">
                                <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                                    <i class="ui-facebook"></i>
                                    <span class="social__text">فيس بوك</span>
                                </a>
                                <a class="social social-youtube" href="#" title="youtube" target="_blank" aria-label="youtube">
                                    <i class="ui-youtube"></i>
                                    <span class="social__text">يوتيوب</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                                    <i class="ui-twitter"></i>
                                    <span class="social__text">تويتر</span>
                                </a>
                                <a class="social social-instagram" href="#" title="instagram" target="_blank" aria-label="instagram">
                                    <i class="ui-instagram"></i>
                                    <span class="social__text">انستجرام</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>
            </aside>
        </div>
    </div>
@endsection
