@extends('web.master')

@section('content')
<div class="page-header"
    style="background-image: url({{ url('public/dist/web/images') }}/img1.jpg)">

    <div class="max-overlay">
        <div class="container">
            <div class="col-sm-6">
                <h1 class="title">@lang('site.contact_us')</h1>
            </div>
            <div class="col-sm-6">
                <h3>
                    <div class="breadcrumbs"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a
                                href="{{ url('/') }}" itemprop="url"><span
                                    itemprop="title">@lang('site.home')</span></a></span> <span class="sep">›</span> <span
                            class="current">@lang('site.contact_us')</span></div><!-- .breadcrumbs -->
                </h3>
            </div>
        </div>
    </div>
</div>






<div class="main-map clearfix">

    @if(session()->has('mOk'))
        <div class="container">
            <div class="alert alert-success alert-dismissible" role="alert">
                <strong>{{ session()->get('mOk') }}</strong> .
            </div>
        </div>
    @endif

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a href="#jeddah" aria-controls="jeddah" role="tab" data-toggle="tab"> جدة </a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"> الخبر </a>
        </li>
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                الرياض </a></li>
    </ul>

    <!-- Tab panes -->
    <div class="container">
        <div class="tab-content">

            @if(isset($data[0]) && isset($data[0]->id) && $data[0]->id != '')
            <div role="tabpanel" class="tab-pane active" id="home">

                <div class="col-sm-12">
                    <iframe
                        src="{{ $data[0]->location }}"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> </div>

                <div class="col-sm-12">
                    <h3></h3>


                    <div class="col-sm-3 contacts clearfix">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>{{ $data[0]->address }}</p>

                    </div>
                    <div class="col-sm-3 contacts clearfix">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p>{{ $data[0]->phone }}</p>
                    </div>
                    <div class="col-sm-3 contacts clearfix">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <p>{{ $data[0]->email }}</p>
                    </div>

                    <div class="col-sm-3 contacts clearfix">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <p> {{ $data[0]->manger }} </p>

                    </div>

                </div>

            </div>

            @endif


            @if(isset($data[1]) && isset($data[1]->id) && $data[1]->id != '')
            <div role="tabpanel" class="tab-pane" id="profile">

                <div class="col-sm-12">
                    <h3></h3>
                    <div class="col-sm-12">
                        <iframe
                            src="{{$data[1]->location}}"
                            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    <div class="col-sm-3 contacts clearfix">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>{{$data[1]->address}}</p>

                    </div>
                    <div class="col-sm-3 contacts clearfix">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p>{{$data[1]->phone}}</p>
                    </div>
                    <div class="col-sm-3 contacts clearfix">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <p>{{$data[1]->email}}</p>
                    </div>

                    <div class="col-sm-3 contacts clearfix">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <p> {{$data[1]->manger}}</p>

                    </div>

                </div>

            </div>

            @endif




            @if(isset($data[2]) && isset($data[2]->id) && $data[2]->id != '')

            <div role="tabpanel" class="tab-pane" id="jeddah">

                <div class="col-sm-12">
                    <h3></h3>



                    <div class="col-sm-12">
                        <iframe
                            src="{{ $data[2]->location }}"
                            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    <div class="col-sm-3 contacts clearfix">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>{{ $data[2]->address }}</p>

                    </div>
                    <div class="col-sm-3 contacts clearfix">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p>{{ $data[2]->phone }}</p>
                    </div>
                    <div class="col-sm-3 contacts clearfix">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <p>{{ $data[2]->email }}</p>
                    </div>

                    <div class="col-sm-3 contacts clearfix">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <p>{{ $data[2]->manger }}</p>

                    </div>

                </div>

            </div>

            @endif



            <div class="clearfix"></div>
        </div>
    </div>



</div>



<div class="container contact-page">

    <div class="col-sm-12">


        <div role="form" class="wpcf7" id="wpcf7-f6-p16-o1" lang="ar" dir="rtl">
            <div class="screen-reader-response"></div>
            <form action="{{ route('add-price') }}" method="post" class="wpcf7-form" id="recaptcha-submit">

                <p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" required value=""
                            size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                            aria-required="true" aria-invalid="false" placeholder="@lang('site.name')" /></span></p>
                <p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" required value=""
                            size="40"
                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                            aria-required="true" aria-invalid="false" placeholder="@lang('site.email')" /></span> </p>
                <p><span class="wpcf7-form-control-wrap tel-703"><input type="tel" name="phone" required value="" size="40"
                            class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false"
                            placeholder="@lang('site.contact_phone')" /></span> </p>
                <p><span class="wpcf7-form-control-wrap service"><input type="text" name="service" required value="" size="40"
                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true"
                            aria-invalid="false" placeholder="@lang('site.serv')" /></span></p>
                <p><span class="wpcf7-form-control-wrap your-subject"><input type="text" name="ubject" value=""
                            size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"
                            placeholder="@lang('site.company')" /></span></p>
                <p><span class="wpcf7-form-control-wrap your-message"><textarea name="message" required cols="40" rows="10"
                            class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"

                            placeholder="@lang('site.message_dt')"></textarea></span></p>

                <input type="hidden" name="_is_man" value="">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">



                <p>
                  <input type="submit" value="@lang('site.send')" class="wpcf7-form-control wpcf7-submit g-recaptcha" data-sitekey="6LczU_McAAAAANHXuWOGybQcpp880d9n_oCpIZua" data-callback="onSubmit" data-action='submit'/>

              </p>
                <div class="wpcf7-response-output wpcf7-display-none"></div>

            </form>
        </div>
    </div>

</div>
@endsection
