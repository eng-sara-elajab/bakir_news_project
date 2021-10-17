@extends('layouts.app', ['title' => 'باكر نيوز - اخبار'])

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
            <div class="col-lg-10 m-auto blog__content mb-72">
                <h1 class="page-title">اخبار</h1>
                <div class="row card-row">
                    <div class="col-md-6">
                        <article class="entry card">
                            <div class="entry__img-holder card__img-holder">
                                <a href="/single-post">
                                    <div class="thumb-container thumb-70">
                                        <img data-src="{{asset('images/last1.jpg')}}" src="{{asset('images/last1.jpg')}}" class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="entry__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="#">الجنيه السوداني يسجل تراجعاً جديداً أمام الدولار</a>
                                    </h2>
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
                                <div class="entry__excerpt">
                                    <p>الجريدة: قوى الحرية: الموازنة لا تعبّر عن الشعب السوداني شحّ الوقود يهدّد الموسم الزراعي الشتوي بولاية النيل الأبيض قطوعات بالكهرباء في نيالا لعدم سداد مديونيات الشركة التركية مئات الآلاف يحتلفون بذكرى الثورة و”حمدوك” يعد بمحاسبة ...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="entry card">
                            <div class="entry__img-holder card__img-holder">
                                <a href="/single-post">
                                    <div class="thumb-container thumb-70">
                                        <img data-src="{{asset('images/last2.jpeg')}}" src="{{asset('images/last2.jpeg')}}" class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="entry__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="#">التجارة تتراجع أمام ازمة الخبز وتبحث تحديد تكلفة جديدة لجوال الدقيق</a>
                                    </h2>
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
                                <div class="entry__excerpt">
                                    <p>الخرطوم:باكرنيوز أصدرت نيابة المال العام بولاية البحر الأحمر، أمر قبض في مواجهة رئيس الوزراء السابق محمد طاهر ايلا. ووجٌِه الأمر الصادر في السادس عشر من الشهر الجاري  لأي رجل شرطة بتنفيذ أمر القبض على المذكور ...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="entry card">
                            <div class="entry__img-holder card__img-holder">
                                <a href="/single-post">
                                    <div class="thumb-container thumb-70">
                                        <img data-src="{{asset('images/last3.jpg')}}" src="{{asset('images/last3.jpg')}}" class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="entry__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="#">قشة ما تعتر ليكم – حيدر المكاشفي</a>
                                    </h2>
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
                                <div class="entry__excerpt">
                                    <p>التيار: جهاز لتشويش المكالمات بمقرّ إقامة المخلوع بسجن كوبر مناوي للتيّار: بعد تشاد نسعى لضم مصرو إثيوبيا لوساطة السلام عشيّة تصدير الذهب..الدولار يوالي هبوطه الحرية والتغيير تطلب من الوساطة استبعاد غير حاملي السلاح من التفاوض ...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="entry card">
                            <div class="entry__img-holder card__img-holder">
                                <a href="/single-post">
                                    <div class="thumb-container thumb-70">
                                        <img data-src="{{asset('images/last4.jpg')}}" src="{{asset('images/last4.jpg')}}" class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="entry__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="#">المريخ يتغلب على الفلاح عطبرة بثنائية</a>
                                    </h2>
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
                                <div class="entry__excerpt">
                                    <p>الخرطوم – باكر نيوز انتقدت وزيرة التعليم العالي انتصار صغيرون تدهور الاوضاع في مؤسسات التعليم العالي، وقالت إن التوسع جاء على حساب الجودة، وشددت على أن وزارتها تعتزم وضع أسس متينة تساعد الحكومة الديمقراطية بنهاية ...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <!-- Pagination -->
                <nav class="pagination">
                    <span class="pagination__page pagination__page--current">1</span>
                    <a href="#" class="pagination__page">2</a>
                    <a href="#" class="pagination__page">3</a>
                    <a href="#" class="pagination__page">4</a>
                    <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-left"></i></a>
                </nav>
            </div>
        </div>
    </div>
@endsection
