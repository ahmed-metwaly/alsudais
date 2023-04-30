@extends('web.master')

@section('content')
    <div class="owl-carousel1">
        <img class="img-responsive" src="{{ url('public/uploads/slider') }}/logosddod.png" alt="alsudais">

        <div class="slider-links">
            <a href="{{ route('price') }}">
                &nbsp;
                @lang('site.price')
                &nbsp;
                <span>
                    <i class="bi bi-arrow-left-short"></i>
                </span>
            </a>
            <a href="tel:{{ setting()->phone }}" class="col_now">
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
                        <?php $i = 1; ?>
                        @foreach (services() as $service)
                            <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6 service-root  {{ $i < 3 ? 'hidden-xs' : '' }}">
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
                            <?php $i++; ?>
                        @endforeach
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
                    <h2>@lang('site.how_are')</h2>
                    <p>{{ about()->about }}</p>
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>
    @include('web.form')
@endsection
