<?php $__env->startSection('content'); ?>

<div class="page-header"
    style="background-image: url(<?php echo e(url('public/dist/web/images')); ?>/banner-top2.jpg)">
    <div class="max-overlay">
        <div class="container">
            <div class="col-sm-6">
                <h1 class="title"> <?php echo app('translator')->get('site.how_are'); ?></h1>
            </div>
            <div class="col-sm-6">
                <h3>
                    <div class="breadcrumbs"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a
                                href="<?php echo e(url('/')); ?>" itemprop="url"><span
                                    itemprop="title"><?php echo app('translator')->get('site.home'); ?></span></a></span> <span class="sep">›</span> <span
                            class="current"><?php echo app('translator')->get('site.how_are'); ?></span></div><!-- .breadcrumbs -->
                </h3>
            </div>
        </div>
    </div>
</div>


<div class="about container page-wrap">



    <div class="col-sm-12 about-inner">
        <div class="col-sm-6">
            <p>
                <h2><?php echo e(about()->about); ?></h2>
            </p>

        </div>
        <div class="col-sm-6">
            <img class="img-responsive" src="<?php echo e(url('public/uploads/setting')); ?>/<?php echo e(about()->photo); ?>"
                alt="من نحن graphic">
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alsudais/public_html/resources/views/web/how-are.blade.php ENDPATH**/ ?>