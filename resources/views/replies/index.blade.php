@extends('layouts.app', ['title' => 'الردود'])

@section('content')
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="#" class="breadcrumbs__url">التعليقات</a>
                <i class="ui-arrow-left"></i>
            </li>
            <li class="breadcrumbs__item breadcrumbs__item--current">
                الردود
            </li>
        </ul>
    </div>
    <div class="main-container container" id="main-container">
        <div class="row">
            <div class="col-lg-12 blog__content mb-72">
                <div class="content-box">
                    <!-- Replies -->
                    <div class="entry-reply">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title">الردود</h3>
                        </div>
                        <ul class="reply-list" style="float:right;">
                            @foreach($replies as $reply)
                                <li class="reply">
                                    <div class="reply-body">
                                        <div class="reply-text">
                                            <h6 class="reply-author">{{$reply->admin_name}}</h6>
                                            <div class="reply-metadata">
                                                <a href="#" class="reply-date">{{$reply->created_at}}</a>
                                            </div>
                                            <p>{{$reply->reply}}</p>
                                        </div>
                                    </div>
                                </li><br><br>
                            @endforeach
                        </ul>
                    </div> <!-- end replies -->
                    <!-- Replies Form -->
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <div id="respond" class="reply-respond">
                        <div class="title-wrap">
                            <h5 class="reply-respond__title section-title">أضف رد</h5>
                        </div>
                        <form class="comment-form" method="post" action="{{route('replies',$comment->id)}}">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <div class="row row-20">
                                <div class="col-lg-6">
                                    <label for="admin_name">الاسم: *</label>
                                    <input name="admin_name" id="admin_name" type="text">
                                </div>
                            </div>
                            <p class="reply-form-reply">
                                <label for="reply">الرد</label>
                                <textarea id="reply" name="reply" rows="5" required="required"></textarea>
                            </p>
                            <p class="reply-form-submit">
                                <input type="submit" class="btn btn-lg btn-color btn-button" value="إرسال">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
