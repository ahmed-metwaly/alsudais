@extends('web.master')

@section('content')

<div class="page-header"
    style="background-image: url({{ url('public/dist/web/images') }}/banner-top2.jpg)">
    <div class="max-overlay">
        <div class="container">
            <div class="col-sm-6">
                <h1 class="title"> @lang('site.how_are')</h1>
            </div>
            <div class="col-sm-6">
                <h3>
                    <div class="breadcrumbs"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a
                                href="{{ url('/') }}" itemprop="url"><span
                                    itemprop="title">@lang('site.home')</span></a></span> <span class="sep">›</span> <span
                            class="current">@lang('site.how_are')</span></div><!-- .breadcrumbs -->
                </h3>
            </div>
        </div>
    </div>
</div>


<div class="about container page-wrap">



    <div class="col-sm-12 about-inner">
        <div class="col-sm-6">
            <p>
                <h2>{{ about()->about }}</h2>
            </p>

        </div>
        <div class="col-sm-6">
            <img class="img-responsive" src="{{ url('public/uploads/setting') }}/{{ about()->photo }}"
                alt="من نحن graphic">
        </div>

    </div>
</div>

@endsection
