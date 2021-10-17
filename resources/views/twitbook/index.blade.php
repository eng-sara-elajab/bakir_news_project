@extends('layouts.app', ['title' => 'باكر نيوز - تويتبوك'])

@section('content')
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="#" class="breadcrumbs__url">الرئيسية</a>
                <i class="ui-arrow-left"></i>
            </li>
            <li class="breadcrumbs__item breadcrumbs__item--current">
                تويتبوك
            </li>
        </ul>
    </div>
    <div class="main-container container" id="main-container">
        <div class="row">
            <div class="col-lg-10 m-auto blog__content mb-72">
                <h1 class="page-title">أخبار</h1>
                <div class="row card-row">
                    @foreach($posts as $post)
                        <div class="col-md-6">
                            <article class="entry card">
                                <div class="entry__img-holder card__img-holder">
                                    <a href="{{route('single-post',$post->id)}}">
                                        <div class="thumb-container thumb-70">
                                            <img data-src="{{asset('images/'.$post->image) }}" src="{{asset('images/'.$post->image)}}" class="entry__img lazyload" alt="" />
                                        </div>
                                    </a>
                                </div>
                                <div class="entry__body card__body">
                                    <div class="entry__header">
                                        <h2 class="entry__title">
                                            <a href="{{route('single-post',$post->id)}}">{{$post->title}}</a>
                                        </h2>
                                        {{-- <ul class="entry__meta">
                                            <li class="entry__meta-author">
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

                                        {{ \Illuminate\Support\Str::limit($post->body, 150, $end = '...') }}
                                        <span class="read-more-show hide_content"><i class="fa fa-angle-down"><a href="{{route('single-post',$post->id)}}">Read more</a></i></span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                    {!! $posts !!}
                </div>
            </div>
        </div>
    </div>
@endsection
