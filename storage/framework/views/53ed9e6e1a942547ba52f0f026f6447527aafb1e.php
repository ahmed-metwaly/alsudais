<!DOCTYPE html>
<html lang="ar">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo e(url('public/dist/web')); ?>/images/islamiat.ico">

	<title> <?php echo app('translator')->get('site.site_name'); ?> </title>


	<!-- This site is optimized with the Yoast SEO plugin v13.5 - https://yoast.com/wordpress/plugins/seo/ -->
	<meta name="description" content="مكتب محاسبه قانوني للتدقيق وخدمات الزكاة والضريبة" />
	<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<link rel="canonical" href="<?php echo e(url('/')); ?>" />
	<meta property="og:locale" content="ar_AR" />
	<meta property="og:type" content="website" />
	<meta property="og:title"
		content="مكتب السديس محاسب قانوني ، الرياض ، الخبر - مكتب محاسبه قانوني للتدقيق وخدمات الزكاة والضريبة" />
	<meta property="og:description" content="مكتب محاسبه قانوني للتدقيق وخدمات الزكاة والضريبة" />
	<meta property="og:url" content="<?php echo e(url('/')); ?>" />
	<meta property="og:site_name" content="مكتب السديس محاسب قانوني ، الرياض ، الخبر" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="مكتب محاسبه قانوني للتدقيق وخدمات الزكاة والضريبة" />
	<meta name="twitter:title"
		content="مكتب السديس محاسب قانوني ، الرياض ، الخبر - مكتب محاسبه قانوني للتدقيق وخدمات الزكاة والضريبة" />
	<link rel='stylesheet' id='fontawesome_css-css' href='<?php echo e(url("public/dist/web")); ?>/css/font-awesome.css'
		type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap_css-css' href='<?php echo e(url("public/dist/web")); ?>/css/bootstrap.min.css'
		type='text/css' media='all' />
	<link rel='stylesheet' id='sky_css-css' href='<?php echo e(url("public/dist/web")); ?>/css/sky-tabs.css' type='text/css'
		media='all' />
	<link rel='stylesheet' id='owl_css-css' href='<?php echo e(url("public/dist/web")); ?>/css/owl.carousel.css' type='text/css'
		media='all' />
	<link rel='stylesheet' id='fc_css-css' href='<?php echo e(url("public/dist/web")); ?>/css/jquery.fancybox.css' type='text/css'
		media='all' />
	<link rel='stylesheet' id='animate_css-css' href='<?php echo e(url("public/dist/web")); ?>/css/animate.css' type='text/css'
		media='all' />
	<link rel='stylesheet' id='main_css-css' href='<?php echo e(url("public/dist/web")); ?>/css/style.css' type='text/css'
		media='all' />
    <?php if(app()->getLocale() == 'en'): ?>
        <link rel='stylesheet' id='lang-style-css'  href='<?php echo e(url("public/dist/web")); ?>/css/style-en.css?ver=5.4.1' type='text/css' media='all' />
    <?php else: ?>
	<link rel='stylesheet' id='lang-style-css' href='<?php echo e(url("public/dist/web")); ?>/css/style-ar.css' type='text/css'
		media='all' />
    <?php endif; ?>


	<script type='text/javascript' src='<?php echo e(url("public/dist/web")); ?>/js/jquery.js'></script>
	<script type='text/javascript' src='<?php echo e(url("public/dist/web")); ?>/js/jquery-migrate.min.js'></script>
  
    


</head>

<body class="rtl home blog">
	<header>

		<div class="container">
			<div class="col-sm-4 clearfix">
				<div class="logo clearfix">
					<a href="<?php echo e(url('/')); ?>">
					     <?php if(app()->getLocale() == 'ar'): ?>
						<img class="img-responsive"
							src="<?php echo e(url("public/dist/web/images")); ?>/log-ar.jpeg" style="max-width: 108%">
							
							 <?php else: ?>
							 	<img class="img-responsive"
							src="<?php echo e(url("public/dist/web/images")); ?>/log-en.jpeg" style="max-width: 108%">
							 <?php endif; ?>
					</a>
				</div>
			</div>
			<div class="col-sm-8 clearfix">

				<div class="widget qtranxs_widget">
					<ul class="list-unstyled">
                        <?php if(app()->getLocale() == 'ar'): ?>

						<li class="list">
							<a href="<?php echo e(route('lang', 'en')); ?>" title="English (en)"><span><?php echo app('translator')->get('site.lang_name_en'); ?></span></a>
						</li>

                        <?php else: ?>
                            <li class="list">
                                <a href="<?php echo e(route('lang', 'ar')); ?>" title="العربية"><span><?php echo app('translator')->get('site.lang_name_ar'); ?></span></a>
                            </li>
                        <?php endif; ?>
					</ul>
				</div>
				<div class="top-links clearfix">
					<a href="tel:<?php echo e(setting()->phone); ?>"><i class="fa fa-phone" aria-hidden="true"></i>
						<span><?php echo e(setting()->phone); ?></span></a>
					<a href="mailto:<?php echo e(setting()->email); ?>"><i class="fa fa-envelope" aria-hidden="true"></i>
						<span><?php echo e(setting()->email); ?></span></a>
					<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <span> <?php echo e(about()->address); ?>

						</span></a>

				</div>

			</div>
		</div>

		<div class="navbar navbar-default clearfix" role="navigation">
			<div class="container">
				<div class="navbar-header">

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="navbar-collapse row collapse">

					<div class="nav navbar-nav">
						<ul>
                            <li class="page_item page-item-45"><a
                                    href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('site.home'); ?></a>
                            </li>
                            <li class="page_item page-item-14"><a
                                    href="<?php echo e(route('servece')); ?>"><?php echo app('translator')->get('site.service'); ?></a>
                            </li>
                            <li class="page_item page-item-39"><a
                                    href="<?php echo e(route('price')); ?>"><?php echo app('translator')->get('site.price'); ?></a></li>

                            <li class="page_item page-item-88"><a
                                    href="<?php echo e(route('team')); ?>"><?php echo app('translator')->get('site.team'); ?></a></li>

							<li class="page_item page-item-45"><a
									href="<?php echo e(route('emmpluee')); ?>"><?php echo app('translator')->get('site.emmpluee'); ?></a>
							</li>

                            <li class="page_item page-item-2"><a
                                    href="<?php echo e(route('how-are')); ?>"><?php echo app('translator')->get('site.how_are'); ?></a></li>

							<li class="page_item page-item-16"><a
									href="<?php echo e(route('contact')); ?>"><?php echo app('translator')->get('site.contact'); ?></a></li>




						</ul>
					</div>

				</div>
				<!--/.navbar-collapse -->
			</div>
		</div>


	</header>

	<?php echo $__env->yieldContent('content'); ?>

	<footer class="clearfix">
		<div class="container">
			<div class="col-sm-4">
				<div class="title-back">
					<span class="mini-title2"><?php echo app('translator')->get('site.about_footer'); ?></span>

				</div>

				<p class="word"><?php echo e(about()->about_footer_index); ?></p>

			</div>

			<div class="col-sm-4">
				<div class="title-back">
					<span class="mini-title2"><?php echo app('translator')->get('site.service'); ?></span>

				</div>

                <?php $__currentLoopData = services(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<ul class="footer-nav">
					<li><a href="<?php echo e(route('single', $serv->name)); ?>"><?php echo e($serv->name); ?></a></li>

				</ul>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>

			<div class="col-sm-4">
				<div class="title-back">
					<span class="mini-title2"><?php echo app('translator')->get('site.footer_links'); ?></span>

				</div>
				<div class="footer-nav">
					<ul>
						<li class="page_item page-item-45"><a
								href="<?php echo e(route('emmpluee')); ?>"><?php echo app('translator')->get('site.emmpluee'); ?></a>
						</li>

						<li class="page_item page-item-16"><a
								href="<?php echo e(route('contact')); ?>"><?php echo app('translator')->get('site.contact'); ?></a></li>
						<li class="page_item page-item-14"><a
								href="<?php echo e(route('servece')); ?>"><?php echo app('translator')->get('site.service'); ?></a>
						</li>
						<li class="page_item page-item-39"><a
								href="<?php echo e(route('price')); ?>"><?php echo app('translator')->get('site.price'); ?></a></li>
						<li class="page_item page-item-88"><a
								href="<?php echo e(route('team')); ?>"><?php echo app('translator')->get('site.team'); ?></a></li>
						<li class="page_item page-item-2"><a
								href="<?php echo e(route('how-are')); ?>"><?php echo app('translator')->get('site.how_are'); ?></a></li>
					</ul>
				</div>
			</div>

			<div class="clearfix"></div>

			<div class="copy">
				<div class="col-sm-6">
					<p><?php echo app('translator')->get('site.copyright'); ?></p>
				</div>
				<div class="col-sm-6">
					<p>
                        <?php echo app('translator')->get('site.ws4it'); ?>
                        <a href="https://ws4it.com/" target="_blank">
                            <img style="display: inline; margin: 10px;"class="img-responsive"
								src="<?php echo e(url('public/dist/web/images')); ?>/copy.png">
                        </a>
                    </p>
				</div>

			</div>

		</div>

	</footer>
	</div> <!-- /container -->
	<script type='text/javascript' src='<?php echo e(url("public/dist/web")); ?>/js/bootstrap.min.js'></script>
	<script type='text/javascript' src='<?php echo e(url("public/dist/web")); ?>/js/owl.carousel.js'></script>
	<script type='text/javascript' src='<?php echo e(url("public/dist/web")); ?>/js/sticky-header.js'></script>
	<script type='text/javascript' src='<?php echo e(url("public/dist/web")); ?>/js/typed.js'></script>
	<script type='text/javascript' src='<?php echo e(url("public/dist/web")); ?>/js/jquery.fancybox.js'></script>
	<script type='text/javascript' src='<?php echo e(url("public/dist/web")); ?>/js/imagesloaded.pkgd.min.js?ver=1.0.0'></script>
	<script type='text/javascript' src='<?php echo e(url("public/dist/web")); ?>/js/isotope.pkgd.min.js?ver=1.0.0'></script>
	<script type='text/javascript' src='<?php echo e(url("public/dist/web")); ?>/js/viewportchecker.js'></script>
	<script type='text/javascript' src='<?php echo e(url("public/dist/web")); ?>/js/theme.js'></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-101507648-1"></script>
  
  <script src="https://www.google.com/recaptcha/api.js"></script>
  
<script>
  
 function onSubmit(token) {
        document.getElementById("recaptcha-submit").submit();
      }
  
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-101507648-1');
</script>
	
</body>

</html>
<?php /**PATH /home/alsudais/public_html/resources/views/web/master.blade.php ENDPATH**/ ?>