<?php $__env->startSection('content'); ?>
    <style>
        .team-p {
            position: relative !important;
            width: 100%;
            height: 80%;

        }

        .team-p img {
            height: 100%;
        }

        .b-single {
            width: 100% !important;
        }
    </style>
    <div class="page-header" style="background-color: rgba(0, 86, 122, .85);">
        <div class="max-overlay">
            <div class="container">

                <div class="col-sm-12">
                    <h3>
                        <div class="breadcrumbs <?php echo e(app()->getLocale() == 'ar' ? 'pull-right' : ''); ?>"><span itemscope
                                itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo e(url('/')); ?>"
                                    itemprop="url"><span itemprop="title"><?php echo app('translator')->get('site.home'); ?></span></a></span> <span
                                class="sep">›</span>
                            <span class="current"><?php echo app('translator')->get('site.team'); ?></span>
                        </div><!-- .breadcrumbs -->
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="container page-wrap">
        <div class="wrap-all flex">

            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 flex">
                    <div class="b-single cli">

                        <div class="img-links team-p">
                            <img class="img-responsive" src="<?php echo e(url('public/uploads/clients')); ?>/<?php echo e($item->photo); ?>"
                                alt="<?php echo e($item->name); ?>">


                        </div>
                        <div class="exc">

                            <h5 class="job"></h5>
                            <a href="<?php echo e(route('team-one', $item->name)); ?>">
                                <h4 class="ti"><?php echo e($item->name); ?></h4>
                            </a>

                        </div>



                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/alsudais/resources/views/web/team.blade.php ENDPATH**/ ?>