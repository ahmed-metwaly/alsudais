<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ url('public/dist/web') }}/images/islamiat.ico">

    <title> @lang('site.site_name') </title>


    <!-- This site is optimized with the Yoast SEO plugin v13.5 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description" content="مكتب محاسبه قانوني للتدقيق وخدمات الزكاة والضريبة" />
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="{{ url('/') }}" />
    <meta property="og:locale" content="ar_AR" />
    <meta property="og:type" content="website" />
    <meta property="og:title"
        content="مكتب السديس محاسب قانوني ، الرياض ، الخبر - مكتب محاسبه قانوني للتدقيق وخدمات الزكاة والضريبة" />
    <meta property="og:description" content="مكتب محاسبه قانوني للتدقيق وخدمات الزكاة والضريبة" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:site_name" content="مكتب السديس محاسب قانوني ، الرياض ، الخبر" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="مكتب محاسبه قانوني للتدقيق وخدمات الزكاة والضريبة">
    <meta name="twitter:title"
        content="مكتب السديس محاسب قانوني ، الرياض ، الخبر - مكتب محاسبه قانوني للتدقيق وخدمات الزكاة والضريبة">
    <link rel='stylesheet' id='bootstrap_css-css' href='{{ url("public/dist/web") }}/css/bootstrap.min.css'
        type='text/css' />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
    <link rel='stylesheet' href='{{ url("public/dist/web") }}/css/style.css' type='text/css'>

    @if(app()->getLocale() == 'en')
    {{--
    <link rel='stylesheet' id='lang-style-css' href='{{ url("public/dist/web") }}/css/style-en.css' type='text/css'>
    --}}
    @endif
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

<body dir="rtl">


<div class="overlay"></div>

    <header>



        <div class="container header-nav">
            <nav>
                <ul>
                    <li>
                        <a class="" href="{{ route('home')  }}">@lang('site.home')</a>
                    </li>
                    <li class=""><a href="{{ route('servece') }}">@lang('site.service')</a>
                    </li>
                    <li class=""><a href="{{ route('price') }}">@lang('site.price')</a></li>

                    <li class=""><a href="{{ route('team') }}">@lang('site.team')</a></li>

                    <li class=""><a href="{{ route('emmpluee')  }}">@lang('site.emmpluee')</a>
                    </li>

                    <li class=""><a href="{{ route('how-are') }}">@lang('site.how_are')</a></li>

                    <li class=""><a href="{{ route('contact') }}">@lang('site.contact')</a></li>

                    <li class=""><a href="{{ route('contact') }}">EN</a></li>
                </ul>
            </nav>

        </div>


        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                @if(app()->getLocale() == 'ar')
                                <img class="img-responsive" src="{{ url("public/dist/web/images") }}/log-ar.jpeg"
                                    alt="@lang('site.site_name') ">
                                @else
                                <img class="img-responsive" src="{{ url("public/dist/web/images") }}/log-en.jpeg"
                                    alt="@lang('site.site_name') ">
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-9 hidden-xs hidden-lg header-side-nav">
                        <a class="side-nav pull-left">
                            <i class=" fa fa-bars " aria-hidden="true" style="display: block;"></i>
                        </a>
                    </div>
                    <div class="col-sm-9 hidden-xs hidden-sm hidden-md">

                        <div class="navbar navbar-default" role="navigation">

                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse row collapse ">
                                <div class="nav navbar-nav">
                                    <ul>
                                        <li class="nav active">
                                            <a class="" href="{{ route('home')  }}">@lang('site.home')</a>
                                        </li>
                                        <li class=""><a href="{{ route('servece') }}">@lang('site.service')</a>
                                        </li>
                                        <li class=""><a href="{{ route('price') }}">@lang('site.price')</a></li>

                                        <li class=""><a href="{{ route('team') }}">@lang('site.team')</a></li>

                                        <li class=""><a href="{{ route('emmpluee')  }}">@lang('site.emmpluee')</a>
                                        </li>

                                        <li class=""><a href="{{ route('how-are') }}">@lang('site.how_are')</a></li>

                                        <li class=""><a href="{{ route('contact') }}">@lang('site.contact')</a></li>

                                        <li class=""><a href="{{ route('contact') }}">EN</a></li>


                                    </ul>
                                </div>

                                <!--/.navbar-collapse -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <div class="footer-bg hidden-xs">
        <div class="bg"></div>
    </div>

    <div class="btn-back-to-top hidden-xs">
        <button type="button" id="btn-back-to-top">
            <i class="bi bi-arrow-up-short"></i>
        </button>
    </div>

    <footer class="clearfix hidden-xs">
        <div class="container">

            <div class="col-sm-4">
                <div class="title-back">
                    <span class="mini-title2">@lang('site.contact_us')</span>
                </div>

                <ul class="footer-nav">
                    <li>
                        <span>
                            <i class="fa fa-whatsapp"></i>
                        </span>
                        <a href="#">0548779895</a>
                    </li>
                    <li>
                        <span>
                            <i class="fa fa-envelope-o"></i>
                        </span>
                        <a href="#">info@alsudaiscpa.com</a>
                    </li>

                    <li>
                        <span>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </span>
                        <p>جدة حي مشرفة . شارع التضامن العربي
                            مركز التضامن العربي . الدور الرابع . مكتب ٤٠١</p>
                    </li>

                </ul>

            </div>

            <div class="col-sm-4">
                <div class="title-back">
                    <span class="mini-title2">@lang('site.footer_links')</span>

                </div>
                <div class="footer-nav">
                    <ul>
                        <li class="page_item page-item-45"><a href="{{ route('emmpluee') }}">@lang('site.emmpluee')</a>
                        </li>

                        <li class="page_item page-item-16"><a href="{{ route('contact') }}">@lang('site.contact')</a>
                        </li>
                        <li class="page_item page-item-14"><a href="{{ route('servece') }}">@lang('site.service')</a>
                        </li>
                        <li class="page_item page-item-39"><a href="{{ route('price') }}">@lang('site.price')</a></li>
                        <li class="page_item page-item-88"><a href="{{ route('team') }}">@lang('site.team')</a></li>

                    </ul>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="title-back">
                    <span class="mini-title2">@lang('site.copy')</span>

                </div>
                <div class="footer-nav">
                    <ul>
                        <li>
                            <h4>جميع الحقوق محفوظة 2023</h4>
                            <br>
                            <img src="{{ url('public/dist/web/images/metwaly.dev.png') }}" alt="">
                        </li>
                    </ul>
                </div>
            </div>

            <div class="clearfix"></div>


        </div>

    </footer>

{{-- moble menu --}}
    <div class="fixed-footer hidden-lg hidden-md hidden-sm">
        <ul>
            <li>
                <a class="" href="{{ route('home')  }}"> <i class="fa fa-home"></i> @lang('site.home')</a>
            </li>
            <li>
                <a href="{{ route('price') }}"> <i class="far fa-clipboard"></i> @lang('site.price')</a>
            </li>
            <li>
                <a href="{{ route('contact') }}"> <i class="fa fa-phone"></i> @lang('site.contact')</a>
            </li>

            <li>
                <a class="side-nav">
                    <i class=" fa fa-bars " aria-hidden="true" style="display: block;"></i>
                    <span>@lang('site.menu')</span>
                </a>
            </li>
        </ul>
    </div>

    </div> <!-- /container -->

    <script type='text/javascript' src='{{ url("public/dist/web") }}/js/jquery.js'></script>
    {{-- <script type='text/javascript' src='{{ url("public/dist/web") }}/js/jquery-migrate.min.js'></script> --}}
    <script type='text/javascript' src='{{ url("public/dist/web") }}/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='{{ url("public/dist/web") }}/js/main.js'></script>

    <script src="https://kit.fontawesome.com/3f450c5001.js" crossorigin="anonymous"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-101507648-1"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script>


        function onSubmit(token) {
        document.getElementById("recaptcha-submit").submit();
        }

    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-101507648-1');


    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
    scrollFunction();
    };

    function scrollFunction() {

        var screenHeight = document.body.scrollHeight;
        var scrollLimit = (screenHeight * 50 / 100);
    if (
    document.body.scrollTop > scrollLimit ||
    document.documentElement.scrollTop > scrollLimit
    ) {
    mybutton.style.display = "block";
    } else {
    mybutton.style.display = "none";
    }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }

    </script>

</body>

</html>
