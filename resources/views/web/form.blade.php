<section class="home-form">
    <div class="row">
        @if (\Request::route()->getName() != 'price' && \Request::route()->getName() != 'how-are')
            <div class="col-lg-5 hidden-xs hidden-sm hidden-md">
                <img class="img-responsive" src="{{ url('public/dist/web/images') }}/form-bg.png" alt="">
            </div>
        @endif
        <div
            class="col-md-12 col-lg-{{ \Request::route()->getName() != 'price' && \Request::route()->getName() != 'how-are' ? '7' : '12' }}">
            @if (\Request::route()->getName() != 'price')
                <h2> @lang('site.price') </h2>
            @endif
            <form action="{{ route('add-price') }}" method="post" id="recaptcha-submit">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <input class="form-control" type="text" name="name" required
                            placeholder="@lang('site.name')">
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input class="form-control" type="email" name="email" required
                            placeholder="@lang('site.email')">
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input class="form-control" type="tel" name="phone" required
                            placeholder="@lang('site.contact_phone')">
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input class="form-control" type="text" name="service" required
                            placeholder="@lang('site.serv')">
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input class="form-control" type="text" name="subject" placeholder="@lang('site.company')">
                    </div>


                    <div class="col-md-12 col-sm-12 ">
                        <textarea name="message" required cols="40" rows="10" placeholder="@lang('site.message_dt') "></textarea>
                    </div>


                    <input type="hidden" name="_is_man" value="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="submit" value="@lang('site.send')" class="g-recaptcha submit"
                            data-sitekey="6LczU_McAAAAANHXuWOGybQcpp880d9n_oCpIZua" data-callback="onSubmit">
                    </div>
                </div>
        </div>
        </form>

    </div>
</section>
