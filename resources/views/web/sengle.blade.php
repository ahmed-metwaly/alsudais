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
                            <span class="current">خدمات ضريبة القيمة المضافة</span>
                        </div><!-- .breadcrumbs -->
                    </h3>
                </div>
            </div>
        </div>
    </div>


    <div class="container page-wrap" style="padding-bottom: 0">
        <div class="row" style="overflow: hidden;">

            <div class="body-single">

                <div class="col-sm-4">
                    <img class="img-responsive" src="{{ url('public/uploads/services') }}/{{ $data->photo }}"
                        alt="{{ $data->name }}" />
                </div>
                <div class="col-sm-8">
                    <p>
                        {!! $data->text !!}
                    </p>

                </div>
                <hr />
            </div>

        </div>

        <hr>
    </div>

    @include('web.form')
@endsection
