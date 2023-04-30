@extends('web.master')

@section('content')
    <div class="page-header" style="background-color: rgba(0, 86, 122, .85);">
        <div class="max-overlay">
            <div class="container">

                <div class="col-sm-12">
                    <h3>
                        <div class="breadcrumbs {{ app()->getLocale() == 'ar' ? 'pull-right' : '' }}"><span itemscope
                                itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ url('/') }}"
                                    itemprop="url"><span itemprop="title">@lang('site.home')</span></a></span> <span
                                class="sep">›</span>
                            <span class="current"> @lang('site.price')</span>
                        </div><!-- .breadcrumbs -->
                    </h3>
                </div>
            </div>
        </div>
    </div>


    <div class="container  contact-page">


        <div class="col-sm-4">
            <a class="img-a" href="#"><img class="img-responsive" src="{{ url('public/dist/web/images') }}/img1.jpg"
                    alt="طلب عرض أسعار" /></a>
        </div>


        <div class="col-sm-8">

            @if (session()->has('mOk'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong>{{ session()->get('mOk') }}</strong> .
                </div>
            @endif

            <h2><strong>@lang('site.price_first')</strong>
            </h2>
            <h2></h2>

            <h2><strong>@lang('site.price_end')</strong></h2>

            @include('web.form')
        </div>
    </div>
@endsection
