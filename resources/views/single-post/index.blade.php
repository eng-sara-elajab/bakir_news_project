@extends('layouts.app', ['title' => $post->title])

@section('content')
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="#" class="breadcrumbs__url">الرئيسية</a>
                <i class="ui-arrow-left"></i>
            </li>
            <li class="breadcrumbs__item breadcrumbs__item--current">
                اخبار
            </li>
        </ul>
    </div>
    <div class="main-container container" id="main-container">
        <div class="row">
            <div class="col-lg-12 blog__content mb-72">
                <div class="content-box">
                       <article class="entry mb-0">
                            <div class="single-post__entry-header entry__header">
                                <h1 class="single-post__entry-title">
                                    {{$post->title}}
                                </h1>
                                <div class="entry__meta-holder">
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
                                    <ul class="entry__meta">
                                        {{-- <li class="entry__meta-views">
                                            <i class="ui-eye"></i>
                                            <span>1356</span>
                                        </li> --}}
                                        <li class="entry__meta-comments">
                                            <a href="#">
                                                <i class="ui-chat-empty"></i>{{$comments_count}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- end entry header -->
                            <div class="entry__img-holder">
                                <img src="{{asset('images/'.$post->image)}}" alt="" class="entry__img">
                            </div>
                            <div class="entry__article-wrap">
                                <!-- Share -->
                                <div class="entry__share">
                                    <div class="sticky-col">
                                        <div class="socials socials--rounded socials--large">
                                            <a href="#" title="WhatsApp" target="_blank" aria-label="WhatsApp" style="color:#4FCE5D">
                                                <i class="fab fa-whatsapp" style="width:50px;height:50px" style="color: rgb(0, 191, 243);"></i>
                                            </a>
                                            {{-- <a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                                                <i class="ui-twitter"></i>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div> <!-- share -->
                                <div class="entry__article">
                                    <p>{{$post->body}}</p>
                                </div>
                                <div class="entry-navigation">
                                    <a class="btn btn-lg" href="{{route('single-post.share',$post->id)}}"  style="background-color:#3b9998">
                                        <i class="fa fa-share"></i> Share
                                    </a>
                                </div>
                            </div>
                            <nav class="entry-navigation">
                                <div class="clearfix">
                                    <div class="entry-navigation--right">
                                        <i class="ui-arrow-right"></i>
                                        <span class="entry-navigation__label">المقال السابق</span>
                                        <div class="entry-navigation__link">
                                            <a href="{{route('single-post',$dec_id)}}" rel="next">{{$previous_post->title}}</a>
                                        </div>
                                    </div>
                                    <div class="entry-navigation--left">
                                        <span class="entry-navigation__label">المقال التالي</span>
                                        <i class="ui-arrow-left"></i>
                                        <div class="entry-navigation__link">
                                            <a href="{{route('single-post',$inc_id)}}" rel="prev">{{$next_post->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                            <section class="section related-posts mt-40 mb-0" style="direction: ltr;">
                                <div class="title-wrap title-wrap--line title-wrap--pr">
                                    <h3 class="section-title">مقالات ذات صلة</h3>
                                </div>
                                <div id="owl-posts-3-items" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                                    @foreach($posts as $post)
                                        <article class="entry thumb thumb--size-2">
                                            <div class="entry__img-holder thumb__img-holder">
                                                <div class="bottom-gradient"></div>
                                                <div class="thumb-text-holder">
                                                    <h2 class="thumb-entry-title">
                                                        <a href="{{route('single-post',$post->id)}}">{{$post->title}}</a>
                                                    </h2>
                                                </div>
                                                <a href="{{route('single-post',$post->id)}}" class="thumb-url">
                                                    <img data-src="{{ asset('images/'.$post->image) }}" src="{{ asset('images/'.$post->image) }}" class="entry__img lazyload" alt="" />
                                                </a>
                                            </div>
                                        </article>
                                    @endforeach
                                </div>
                            </section>
                        </article>
                    <!-- Comments -->
                    <div class="entry-comments">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title">التعليقات {{$comments_count}}</h3>
                        </div>
                        <ul class="comment-list">
                            @foreach($comments as $comment)
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="comment-text">
                                            <h6 class="comment-author">{{$comment->auther}}</h6>
                                            <div class="comment-metadata">
                                                <a href="#" class="comment-date">{{$comment->created_at}}</a>
                                            </div>
                                            <p>{{$comment->body}}</p>
                                            {{-- <a href="{{route('replies',$comment->id)}}" class="comment-reply">رد</a> --}}
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div> <!-- end comments -->
                    <!-- Comment Form -->
                    <div id="respond" class="comment-respond">
                        <div class="title-wrap">
                            <h5 class="comment-respond__title section-title">اترك تعليق</h5>
                        </div>
                        <form class="comment-form" method="post" action="{{route('addComment',$post_id)}}">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <p class="comment-form-comment">
                                <label for="body">التعليق</label>
                                <textarea id="body" name="body" rows="5" required="required"></textarea>
                            </p>
                            <div class="row row-20">
                                <div class="col-lg-6">
                                    <label for="auther">الاسم: *</label>
                                    <input name="auther" id="auther" type="text">
                                </div>
                                <div class="col-lg-6">
                                    <label for="comment">البريد الالكتروني: *</label>
                                    <input name="email" id="email" type="email">
                                </div>
                            </div>
                            <p class="comment-form-submit">
                                <input type="submit" class="btn btn-lg btn-color btn-button" value="انشر التعليق">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{ session('id') }}
    </div>
@endsection

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
