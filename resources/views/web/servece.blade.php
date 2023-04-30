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
                            <span class="current">@lang('site.service')</span>
                        </div><!-- .breadcrumbs -->
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container page-wrap" style="padding-bottom: 0">
        <div class="wrap-all flex">


            <section class="home-services">
                <div class="services-items">
                    <div class="row">
                        <br>
                        <br>
                        @foreach ($data as $service)
                            <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6 service-root  hidden-xs">
                                <div class="service-item">
                                    <div class="item-img">
                                        <img src="{{ url('public/uploads/services') }}/{{ $service->photo }}"
                                            alt="">
                                    </div>
                                    <h3>{{ $service->name }}</h3>
                                    <p>{{ substr($service->name, 0, 50) }}</p>
                                    <a href="{{ route('single', $service->name) }}">@lang('site.show_service') </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>



        </div>
        <hr>
    </div>

    @include('web.form')
@endsection
