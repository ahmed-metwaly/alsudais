@extends('web.master')

@section('content')
<div class="page-header"
    style="background-image: url({{ url('public/dist/web/images') }}/banner-top2.jpg)">
    <div class="max-overlay">
        <div class="container">
            <div class="col-sm-6">
                <h1 class="title">@lang('site.emmpluee')</h1>
            </div>
            <div class="col-sm-6">
                <h3>
                    <div class="breadcrumbs"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a
                                href="{{ url('/') }}" itemprop="url"><span
                                    itemprop="title">@lang('site.home')</span></a></span> <span class="sep">›</span> <span
                            class="current">@lang('site.emmpluee')</span></div><!-- .breadcrumbs -->
                </h3>
            </div>
        </div>
    </div>
</div>


<div class="container contact-page">


    <div class="col-sm-4">
        <a class="img-a" href="#"><img
                class="img-responsive" src="{{ url('public/dist/web') }}/images/img1.jpg"
                alt="التوظيف" /></a>
    </div>


    <div class="col-sm-8">

        @if(session()->has('mOk'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ session()->get('mOk') }}</strong> .
        </div>
        @endif

        <p>@lang('site.emp_title')</p>
        <div role="form" class="wpcf7" id="wpcf7-f44-p45-o1" lang="ar" dir="rtl">
            <div class="screen-reader-response"></div>
            <form action="{{ route('send-emp') }}" method="post"
                class="wpcf7-form" enctype="multipart/form-data" id="recaptcha-submit">

                <p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" required value=""
                            size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                            aria-required="true" aria-invalid="false" required placeholder="@lang('site.name')" /></span></p>
                <p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value=""
                            size="40" required
                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                            aria-required="true" aria-invalid="false" placeholder="@lang('site.email')" /></span> </p>
                <p><span class="wpcf7-form-control-wrap tel-703"><input type="tel" name="phone" required value="" size="40"
                            class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false"
                            placeholder="@lang('site.contact_phone')" /></span> </p>
                <p><span class="wpcf7-form-control-wrap service"><input type="text" name="service" required value="" size="40"
                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true"
                            aria-invalid="false" placeholder="@lang('site.jop_title')" /></span></p>
                <div id="upload-file">
                    <span class="wpcf7-form-control-wrap file-up"><input type="file" name="cv" required size="40"
                            class="wpcf7-form-control wpcf7-file" accept=".gif,.png,.jpg,.jpeg,.rar,.pdf"
                            aria-invalid="false" /></span></p>
                    <div class="custom-file-upload clearfix"><i class="fa fa-download"></i> @lang('site.cv') </div>
                </div>
                <p><span class="wpcf7-form-control-wrap your-message"><textarea name="message" required cols="40" rows="10"
                            class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                            placeholder="@lang('site.dt')"></textarea></span></p>
                <p><input type="submit" value="@lang('site.send')" class="wpcf7-form-control wpcf7-submit g-recaptcha" data-sitekey="6LczU_McAAAAANHXuWOGybQcpp880d9n_oCpIZua" data-callback="onSubmit" data-action='submit' /></p>
                <div class="wpcf7-response-output wpcf7-display-none"></div>
                <input type="hidden" value="" name='_is_man'>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>

@endsection
