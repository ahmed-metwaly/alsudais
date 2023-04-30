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
                            <span class="current"><?php echo app('translator')->get('site.contact_us'); ?></span>
                        </div><!-- .breadcrumbs -->
                    </h3>
                </div>
            </div>
        </div>
    </div>






    <div class="main-map clearfix">

        <?php if(session()->has('mOk')): ?>
            <div class="container">
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong><?php echo e(session()->get('mOk')); ?></strong> .
                </div>
            </div>
        <?php endif; ?>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="#jeddah" aria-controls="jeddah" role="tab" data-toggle="tab"> جدة </a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"> الخبر </a>
            </li>
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                    الرياض </a></li>
        </ul>

        <!-- Tab panes -->
        <div class="container">
            <div class="tab-content">

                <?php if(isset($data[0]) && isset($data[0]->id) && $data[0]->id != ''): ?>
                    <div role="tabpanel" class="tab-pane active" id="home">

                        <div class="col-sm-12">
                            <iframe src="<?php echo e($data[0]->location); ?>" width="600" height="450" frameborder="0"
                                style="border:0" allowfullscreen></iframe>
                        </div>

                        <div class="col-sm-12">
                            <h3></h3>


                            <div class="col-sm-3 contacts clearfix">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p><?php echo e($data[0]->address); ?></p>

                            </div>
                            <div class="col-sm-3 contacts clearfix">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p><?php echo e($data[0]->phone); ?></p>
                            </div>
                            <div class="col-sm-3 contacts clearfix">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p><?php echo e($data[0]->email); ?></p>
                            </div>

                            <div class="col-sm-3 contacts clearfix">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <p> <?php echo e($data[0]->manger); ?> </p>

                            </div>

                        </div>

                    </div>
                <?php endif; ?>


                <?php if(isset($data[1]) && isset($data[1]->id) && $data[1]->id != ''): ?>
                    <div role="tabpanel" class="tab-pane" id="profile">

                        <div class="col-sm-12">
                            <h3></h3>
                            <div class="col-sm-12">
                                <iframe src="<?php echo e($data[1]->location); ?>" width="600" height="450" frameborder="0"
                                    style="border:0" allowfullscreen></iframe>
                            </div>

                            <div class="col-sm-3 contacts clearfix">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p><?php echo e($data[1]->address); ?></p>

                            </div>
                            <div class="col-sm-3 contacts clearfix">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p><?php echo e($data[1]->phone); ?></p>
                            </div>
                            <div class="col-sm-3 contacts clearfix">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p><?php echo e($data[1]->email); ?></p>
                            </div>

                            <div class="col-sm-3 contacts clearfix">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <p> <?php echo e($data[1]->manger); ?></p>

                            </div>

                        </div>

                    </div>
                <?php endif; ?>




                <?php if(isset($data[2]) && isset($data[2]->id) && $data[2]->id != ''): ?>
                    <div role="tabpanel" class="tab-pane" id="jeddah">

                        <div class="col-sm-12">
                            <h3></h3>



                            <div class="col-sm-12">
                                <iframe src="<?php echo e($data[2]->location); ?>" width="600" height="450" frameborder="0"
                                    style="border:0" allowfullscreen></iframe>
                            </div>

                            <div class="col-sm-3 contacts clearfix">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p><?php echo e($data[2]->address); ?></p>

                            </div>
                            <div class="col-sm-3 contacts clearfix">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p><?php echo e($data[2]->phone); ?></p>
                            </div>
                            <div class="col-sm-3 contacts clearfix">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p><?php echo e($data[2]->email); ?></p>
                            </div>

                            <div class="col-sm-3 contacts clearfix">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <p><?php echo e($data[2]->manger); ?></p>

                            </div>

                        </div>

                    </div>
                <?php endif; ?>



                <div class="clearfix"></div>
            </div>
        </div>



    </div>

    <?php echo $__env->make('web.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/alsudais/resources/views/web/contact.blade.php ENDPATH**/ ?>