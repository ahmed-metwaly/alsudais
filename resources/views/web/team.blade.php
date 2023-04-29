@extends('web.master')

@section('content')
<style>
    .team-p {
        position: relative !important;
        width: 100%;
        height: 80%;

    }
    .team-p img {
        height: 100%;
    }
    .b-single{
        width: 100% !important;
    }
</style>
<div class="page-header"
    style="background-image: url({{ url('public/dist/web/images') }}/banner-top2.jpg)">
    <div class="max-overlay">
        <div class="container">
            <div class="col-sm-6">
                <h1 class="title">@lang('site.team')</h1>
            </div>
            <div class="col-sm-6">
                <h3>
                    <div class="breadcrumbs"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a
                                href="{{ url('/') }}" itemprop="url"><span
                                    itemprop="title">@lang('site.home')</span></a></span> <span class="sep">›</span> <span
                            class="current">@lang('site.team')</span></div><!-- .breadcrumbs -->
                </h3>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="container page-wrap">
    <div class="wrap-all flex">

        @foreach($data as $item)

        <div class="col-md-3 flex">
            <div class="b-single cli">


                <div class="exc">

                    <h5 class="job"></h5>
                    <a
                        href="{{ route('team-one',$item->name ) }}">
                        <h4 class="ti">{{ $item->name }}</h4>
                    </a>

                </div>

                <div class="img-links team-p">
                    <img class="img-responsive" src="{{ url('public/uploads/clients') }}/{{ $item->photo }}"
                        alt="{{ $item->name }}">


                </div>

            </div>
        </div>

        @endforeach

    </div>
</div>
@endsection
