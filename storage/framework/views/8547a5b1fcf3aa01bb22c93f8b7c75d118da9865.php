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
                            <span class="current"> <?php echo app('translator')->get('site.price'); ?></span>
                        </div><!-- .breadcrumbs -->
                    </h3>
                </div>
            </div>
        </div>
    </div>


    <div class="container  contact-page">


        <div class="col-sm-4">
            <a class="img-a" href="#"><img class="img-responsive" src="<?php echo e(url('public/dist/web/images')); ?>/img1.jpg"
                    alt="طلب عرض أسعار" /></a>
        </div>


        <div class="col-sm-8">

            <?php if(session()->has('mOk')): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong><?php echo e(session()->get('mOk')); ?></strong> .
                </div>
            <?php endif; ?>

            <h2><strong><?php echo app('translator')->get('site.price_first'); ?></strong>
            </h2>
            <h2></h2>

            <h2><strong><?php echo app('translator')->get('site.price_end'); ?></strong></h2>

            <?php echo $__env->make('web.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/alsudais/resources/views/web/price.blade.php ENDPATH**/ ?>