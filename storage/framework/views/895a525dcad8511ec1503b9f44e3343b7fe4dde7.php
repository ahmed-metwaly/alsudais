<?php $__env->startSection('content'); ?>
<div class="page-header"
    style="background-image: url(<?php echo e(url('public/dist/web/images')); ?>/banner-top2.jpg)">
    <div class="max-overlay">
        <div class="container">
            <div class="col-sm-6">
                <h1 class="title"><?php echo app('translator')->get('site.service'); ?></h1>
            </div>
            <div class="col-sm-6">
                <h3>
                    <div class="breadcrumbs"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a
                                href="<?php echo e(url('/')); ?>" itemprop="url"><span
                                    itemprop="title"><?php echo app('translator')->get('site.home'); ?></span></a></span> <span class="sep">›</span> <span
                            class="current"><?php echo app('translator')->get('site.service'); ?></span></div><!-- .breadcrumbs -->
                </h3>
            </div>
        </div>
    </div>
</div>

<div class="container page-wrap">
    <div class="wrap-all flex">


        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 flex">
            <div class="b-single cli">
                <div class="img-links ">
                    <a class="img-a" href="<?php echo e(route('single', $service->name)); ?>">
                        <img class="img-responsive"
                            src="<?php echo e(url('public/uploads/services')); ?>/<?php echo e($service->photo); ?>"
                            alt="<?php echo e($service->name); ?>" /></a>


                </div>

                <div class="exc" style="text-align: center; border-bottom: 5px solid #ddd;">
                    <a href="<?php echo e(route('single', $service->name)); ?>">
                        <h4><?php echo e($service->name); ?></h4>
                    </a>
                    <!--<p>يقدم مكتبنا العديد من الخدمات في ضريبة القيمة المضافة، والتي تشمل: التمثل الضريبي تطبيق ضريبة القيمة المضافة للمنشاءات. المساعدة في اعداد الإقرارات...</p>-->
                </div>

            </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\alsudais\resources\views/web/servece.blade.php ENDPATH**/ ?>