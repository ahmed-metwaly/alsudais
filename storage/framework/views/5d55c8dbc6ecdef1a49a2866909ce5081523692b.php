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
                            <span class="current"><?php echo app('translator')->get('site.emmpluee'); ?></span>
                        </div><!-- .breadcrumbs -->
                    </h3>
                </div>
            </div>
        </div>
    </div>


    <div class="container contact-page">


        <div class="col-sm-4">
            <a class="img-a" href="#"><img class="img-responsive" src="<?php echo e(url('public/dist/web')); ?>/images/img1.jpg"
                    alt="التوظيف" /></a>
        </div>


        <div class="col-sm-8 ">

            <?php if(session()->has('mOk')): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong><?php echo e(session()->get('mOk')); ?></strong> .
                </div>
            <?php endif; ?>

            <p><?php echo app('translator')->get('site.emp_title'); ?></p>
            <section class="home-form">

                <form action="<?php echo e(route('send-emp')); ?>" method="post" enctype="multipart/form-data" id="recaptcha-submit">
                    <div class="col-md-4 col-xs-12">
                        <input type="text" name="name" class="form-control" required
                            placeholder="<?php echo app('translator')->get('site.name'); ?>" />
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input type="email" class="form-control" name="email" placeholder="<?php echo app('translator')->get('site.email'); ?>" />
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input type="tel" class="form-control" name="phone" required
                            placeholder="<?php echo app('translator')->get('site.contact_phone'); ?>" />
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input type="text" name="service" class="form-control" required
                            placeholder="<?php echo app('translator')->get('site.jop_title'); ?>" />
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div id="upload-file">
                            <input type="file" class="form-control" name="cv" required
                                accept=".gif,.png,.jpg,.jpeg,.rar,.pdf" />
                            <div class="custom-file-upload clearfix"><i class="fa fa-download"></i> <?php echo app('translator')->get('site.cv'); ?> </div>
                        </div>
                    </div>
                    <div class="col-xs-12">

                        <textarea name="message" required cols="40" rows="10" placeholder="<?php echo app('translator')->get('site.dt'); ?>"></textarea>

                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input type="submit" value="<?php echo app('translator')->get('site.send'); ?>" class="g-recaptcha"
                            data-sitekey="6LczU_McAAAAANHXuWOGybQcpp880d9n_oCpIZua" data-callback="onSubmit"
                            data-action='submit' />
                    </div>

                    <input type="hidden" value="" name='_is_man'>
                    <?php echo e(csrf_field()); ?>

                </form>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/alsudais/resources/views/web/emmpluee.blade.php ENDPATH**/ ?>