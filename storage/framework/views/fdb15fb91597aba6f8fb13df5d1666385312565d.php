<?php $__env->startSection('content'); ?>
    <div class="owl-carousel1">
        <img class="img-responsive" src="<?php echo e(url('public/uploads/slider')); ?>/logosddod.png" alt="alsudais">

        <div class="slider-links">
            <a href="<?php echo e(route('price')); ?>">
                &nbsp;
                <?php echo app('translator')->get('site.price'); ?>
                &nbsp;
                <span>
                    <i class="bi bi-arrow-left-short"></i>
                </span>
            </a>
            <a href="tel:<?php echo e(setting()->phone); ?>" class="col_now">
                &nbsp;
                <?php echo app('translator')->get('site.col_now'); ?>
                &nbsp;
                <span>
                    <i class="bi bi-telephone-plus"></i>
                </span>
            </a>
        </div>
    </div>

    <div class="clearfix"></div>

    <div>
        <div class="container">
            <section class="home-services">
                <div class="services-items">
                    <div class="row">
                        <?php $i = 1; ?>
                        <?php $__currentLoopData = services(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6 service-root  <?php echo e($i < 3 ? 'hidden-xs' : ''); ?>">
                                <div class="service-item">
                                    <div class="item-img">
                                        <img src="<?php echo e(url('public/uploads/services')); ?>/<?php echo e($service->photo); ?>"
                                            alt="">
                                    </div>
                                    <h3><?php echo e($service->name); ?></h3>
                                    <p><?php echo e(substr($service->name, 0, 50)); ?></p>
                                    <a href="<?php echo e(route('single', $service->name)); ?>"><?php echo app('translator')->get('site.show_service'); ?> </a>
                                </div>
                            </div>
                            <?php $i++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="clearfix"></div>

    <section class="who-are container-fluid ">
        <div class="who-are-content container">
            <div class="row">
                <div class="col-md-5 col-sm-5 hidden-xs">
                    <div class="col-md-6 col-sm-6">
                        <div class="col-md-12 col-sm-12">
                            <img src="<?php echo e(url('public/uploads/slider')); ?>/index1.png" alt="">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <img src="<?php echo e(url('public/uploads/slider')); ?>/index3.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 hidden-sm hidden-md">
                        <img src="<?php echo e(url('public/uploads/slider')); ?>/index2.png" alt="">
                    </div>
                </div>
                <div class="col-md-7 col-sm-7">
                    <h2><?php echo app('translator')->get('site.how_are'); ?></h2>
                    <p><?php echo e(about()->about); ?></p>
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>
    <?php echo $__env->make('web.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/alsudais/resources/views/web/index.blade.php ENDPATH**/ ?>