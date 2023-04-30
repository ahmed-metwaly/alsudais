<?php $__env->startSection('content'); ?>
    <div class="page-header" style="background-color: rgba(0, 86, 122, .85);">
        <div class="max-overlay">
            <div class="container">

                <div class="col-sm-12">
                    <h3>
                        <div class="breadcrumbs <?php echo e(app()->getLocale() == 'ar' ? 'pull-right' : ''); ?>"><span itemscope
                                itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo e(url('/')); ?>"
                                    itemprop="url"><span itemprop="title"><?php echo app('translator')->get('site.home'); ?></span></a></span> <span
                                class="sep">›</span>
                            <span class="current"><?php echo app('translator')->get('site.service'); ?></span>
                        </div><!-- .breadcrumbs -->
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container page-wrap" style="padding-bottom: 0">
        <div class="wrap-all flex">


            <section class="home-services">
                <div class="services-items">
                    <div class="row">
                        <br>
                        <br>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6 service-root  hidden-xs">
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
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </section>



        </div>
        <hr>
    </div>

    <?php echo $__env->make('web.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/alsudais/resources/views/web/servece.blade.php ENDPATH**/ ?>