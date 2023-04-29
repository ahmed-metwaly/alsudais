@extends('web.master')

@section('content')
<div class="owl-carousel1">
    <img class="img-responsive" src="{{ url('public/uploads/slider') }}/logosddod.png" alt="alsudais">

    <div class="slider-links">
        <a href="#">
            &nbsp;
            @lang('site.price')
            &nbsp;
            <span>
                <i class="bi bi-arrow-left-short"></i>
            </span>
        </a>
        <a href="#" class="col_now">
            &nbsp;
            @lang('site.col_now')
            &nbsp;
            <span>
                <i class="bi bi-telephone-plus"></i>
            </span>
        </a>
    </div>
</div>

<div class="clearfix"></div>

<div>
    <div class="container">
        <section class="home-services">
            <div class="services-items">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6 service-root">
                        <div class="service-item">
                            <div class="item-img">
                                <img src="{{ url('public/uploads/slider') }}/budget.png" alt="">
                            </div>
                            <h3>التدقيق الداخلي</h3>
                            <p>هذا نص تجريبى يتم تغييره لاحقآ من لوحه تحكم الموقع</p>
                            <a href="#">عرض الخدمة</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6 service-root">
                        <div class="service-item">
                            <div class="item-img">
                                <img src="{{ url('public/uploads/slider') }}/budget.png" alt="">
                            </div>
                            <h3>التدقيق الداخلي</h3>
                            <p>هذا نص تجريبى يتم تغييره لاحقآ من لوحه تحكم الموقع</p>
                            <a href="#">عرض الخدمة</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6 service-root  hidden-xs">
                        <div class="service-item">
                            <div class="item-img">
                                <img src="{{ url('public/uploads/slider') }}/budget.png" alt="">
                            </div>
                            <h3>التدقيق الداخلي</h3>
                            <p>هذا نص تجريبى يتم تغييره لاحقآ من لوحه تحكم الموقع</p>
                            <a href="#">عرض الخدمة</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6 service-root  hidden-xs">
                        <div class="service-item">
                            <div class="item-img">
                                <img src="{{ url('public/uploads/slider') }}/budget.png" alt="">
                            </div>
                            <h3>التدقيق الداخلي</h3>
                            <p>هذا نص تجريبى يتم تغييره لاحقآ من لوحه تحكم الموقع</p>
                            <a href="#">عرض الخدمة</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="clearfix"></div>

<section class="who-are container-fluid ">
    <div class="who-are-content container">
        <div class="row">
            <div class="col-md-5 col-sm-5 hidden-xs">
                    <div class="col-md-6 col-sm-6">
                            <div class="col-md-12 col-sm-12">
                                <img src="{{ url('public/uploads/slider') }}/index1.png" alt="">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <img src="{{ url('public/uploads/slider') }}/index3.png" alt="">
                            </div>
                    </div>
                    <div class="col-md-6 hidden-sm hidden-md">
                        <img src="{{ url('public/uploads/slider') }}/index2.png" alt="">
                    </div>
            </div>
            <div class="col-md-7 col-sm-7">
                <h2>من نحن</h2>
                <p>يوفر مكتبن السديس محاسب قانوني خدمات التدقيق والمراجعة، كما يوفر خدمات الزكاة والضريبة بجميع انواعها،
                    كما يقدم خدمات
                    الإستشارات والفحوص النافية للجهالة وخدمات مسك الدفاتر والحسابات. نسعد بخدمتكم في مقر مكاتبنا في
                    الرياض والخبر وجدة.</p>
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>

<section class="home-form">
    <div class="row">
        <div class="col-lg-5 hidden-xs hidden-sm hidden-md">
            <img class="img-responsive" src="{{ url('public/dist/web/images') }}/form-bg.png" alt="">
        </div>
        <div class="col-md-12 col-lg-7">
            <h2>طلب عرض اسعار</h2>
            <form action="{{ route('add-price') }}" method="post" id="recaptcha-submit">
<div class="row">
                    <div class="col-md-4 col-xs-12">
                        <input class="form-control" type="text" name="name" required placeholder="@lang('site.name')">
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input class="form-control" type="email" name="email" required
                            placeholder="@lang('site.email')">
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input class="form-control" type="tel" name="phone" required
                            placeholder="@lang('site.contact_phone')">
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input class="form-control" type="text" name="service" required
                            placeholder="@lang('site.serv')">
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input class="form-control" type="text" name="subject" placeholder="@lang('site.company')">
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 ">
                    <textarea name="message" required cols="40" rows="10"
                        placeholder="@lang('site.message_dt') "></textarea>
                </div>


                <input type="hidden" name="_is_man" value="">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">


<div class="col-md-12 col-sm-12 col-xs-12">
                <input type="submit" value="@lang('site.send')" class="g-recaptcha submit"
                    data-sitekey="6LczU_McAAAAANHXuWOGybQcpp880d9n_oCpIZua" data-callback="onSubmit">
</div>
</div>
            </form>

    </div>
</section>


@endsection
