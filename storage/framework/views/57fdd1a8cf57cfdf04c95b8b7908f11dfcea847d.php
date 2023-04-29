<?php $__env->startSection('content'); ?>
<div class="page-header"
    style="background-image: url(<?php echo e(url('public/dist/web/images')); ?>/banner-top2.jpg)">

    <div class="max-overlay">
        <div class="container">
            <div class="col-sm-6">
                <h1 class="title">خدمات ضريبة القيمة المضافة</h1>
            </div>
            <div class="col-sm-6">
                <h3>
                    <div class="breadcrumbs"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a
                                href="<?php echo e(url('/')); ?>" itemprop="url"><span
                                    itemprop="title"><?php echo app('translator')->get('site.home'); ?></span></a></span> <span class="sep">›</span> <span
                            class="current">خدمات ضريبة القيمة المضافة</span></div><!-- .breadcrumbs -->
                </h3>
            </div>
        </div>
    </div>
</div>


<div class="container page-wrap">
    <div class="row" style="overflow: hidden;">



        <div class="body-single">

            <div class="col-sm-4">
                <img class="img-responsive" src="<?php echo e(url('public/uploads/services')); ?>/<?php echo e($data->photo); ?>"
                    alt="<?php echo e($data->name); ?>" />
            </div>
            <div class="col-sm-8">
                <p>
                    <?php echo $data->text; ?>

                </p>

            </div>
            <hr />
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\alsudais\resources\views/web/sengle.blade.php ENDPATH**/ ?>