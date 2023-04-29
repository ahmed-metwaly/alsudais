@extends('web.master')

@section('content')
<div class="page-header"
    style="background-image: url({{ url('public/dist/web/images') }}/banner-top2.jpg)">
    <div class="max-overlay">
        <div class="container">
            <div class="col-sm-6">
                <h1 class="title">@lang('site.service')</h1>
            </div>
            <div class="col-sm-6">
                <h3>
                    <div class="breadcrumbs"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a
                                href="{{ url('/') }}" itemprop="url"><span
                                    itemprop="title">@lang('site.home')</span></a></span> <span class="sep">›</span> <span
                            class="current">@lang('site.service')</span></div><!-- .breadcrumbs -->
                </h3>
            </div>
        </div>
    </div>
</div>

<div class="container page-wrap">
    <div class="wrap-all flex">


        @foreach($data as $service)
        <div class="col-md-4 flex">
            <div class="b-single cli">
                <div class="img-links ">
                    <a class="img-a" href="{{ route('single', $service->name) }}">
                        <img class="img-responsive"
                            src="{{ url('public/uploads/services') }}/{{ $service->photo }}"
                            alt="{{ $service->name }}" /></a>


                </div>

                <div class="exc" style="text-align: center; border-bottom: 5px solid #ddd;">
                    <a href="{{ route('single', $service->name) }}">
                        <h4>{{ $service->name }}</h4>
                    </a>
                    <!--<p>يقدم مكتبنا العديد من الخدمات في ضريبة القيمة المضافة، والتي تشمل: التمثل الضريبي تطبيق ضريبة القيمة المضافة للمنشاءات. المساعدة في اعداد الإقرارات...</p>-->
                </div>

            </div>
        </div>

        @endforeach

    </div>
</div>
@endsection
