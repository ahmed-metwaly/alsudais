@extends('web.master')

@section('content')


    <div class="page-header" style="background-image: url({{ url('public/dist/web/images') }}/banner-top2.jpg)">

        <div class="max-overlay">
            <div class="container">
                <div class="col-sm-6"><h1 class="title">{{ $data->name }}</h1></div>
                <div class="col-sm-6"><h3><div class="breadcrumbs"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                <a href="{{ url('/') }}" itemprop="url"><span itemprop="title">@lang('site.home')</span></a>
                            </span> <span class="sep">›</span> <span class="current">{{ $data->name }}</span></div><!-- .breadcrumbs --></h3></div>
            </div>
        </div>
    </div>

    <div class="container page-wrap">
        <div class="row" style="overflow: hidden;">
            <div class="body-single">
                <div class="col-sm-4">
                    <img class="img-responsive" src="{{ url('public/uploads/clients') }}/{{ $data->photo }}" alt="{{ $data->name }}">
                </div>

                <div class="col-sm-8">
                    <p>{{ $data->text }}</p>
                </div>
                <hr />
            </div>
        </div>
    </div>

@endsection
