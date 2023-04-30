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
                            <span class="current">@lang('site.how_are')</span>
                        </div><!-- .breadcrumbs -->
                    </h3>
                </div>
            </div>
        </div>
    </div>


    <div class="about container page-wrap">



        <div class="col-sm-12 about-inner" style="">
            <div class="row">
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
            <br>
            <br>
            <br>
            <hr>
            <br><br>
        </div>



        @include('web.form')
    </div>
@endsection
