

<?php $__env->startSection('content'); ?>

<div class="page-header"
    style="background-image: url(<?php echo e(url('public/dist/web/images')); ?>/banner-top2.jpg)">
    <div class="max-overlay">
        <div class="container">
            <div class="col-sm-6">
                <h1 class="title"><?php echo app('translator')->get('site.price'); ?></h1>
            </div>
            <div class="col-sm-6">
                <h3>
                    <div class="breadcrumbs"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a
                                href="<?php echo e(url('/')); ?>" itemprop="url"><span
                                    itemprop="title"><?php echo app('translator')->get('site.home'); ?></span></a></span> <span class="sep">›</span> <span
                            class="current">  <?php echo app('translator')->get('site.price'); ?></span></div><!-- .breadcrumbs -->
                </h3>
            </div>
        </div>
    </div>
</div>


<div class="container  contact-page">


    <div class="col-sm-4">
        <a class="img-a"
            href="#"><img
                class="img-responsive" src="<?php echo e(url('public/dist/web/images')); ?>/img1.jpg"
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
        <div role="form" class="wpcf7" id="wpcf7-f6-p39-o1" lang="ar" dir="rtl">
            <div class="screen-reader-response"></div>
          
            <form action="<?php echo e(route('add-price')); ?>" method="post" class="wpcf7-form" id="recaptcha-submit">
              
                <p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" required value=""
                            size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                            aria-required="true" aria-invalid="false" placeholder="<?php echo app('translator')->get('site.name'); ?>" /></span></p>
                <p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" required value=""
                            size="40"
                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                            aria-required="true" aria-invalid="false" placeholder="<?php echo app('translator')->get('site.email'); ?>" /></span> </p>
                <p><span class="wpcf7-form-control-wrap tel-703"><input type="tel" name="phone" required value="" size="40"
                            class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false"
                            placeholder="<?php echo app('translator')->get('site.contact_phone'); ?>" /></span> </p>
                <p><span class="wpcf7-form-control-wrap service"><input type="text" name="service" required value="" size="40"
                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true"
                            aria-invalid="false" placeholder="<?php echo app('translator')->get('site.serv'); ?>" /></span></p>
                <p><span class="wpcf7-form-control-wrap your-subject"><input type="text" name="subject" value=""
                            size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"
                            placeholder="<?php echo app('translator')->get('site.company'); ?>" /></span></p>
                <p><span class="wpcf7-form-control-wrap your-message"><textarea name="message" required cols="40" rows="10"
                            class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                            placeholder="<?php echo app('translator')->get('site.message_dt'); ?> "></textarea></span></p>
              
              
                <p>
                
                  <input type="submit" value="<?php echo app('translator')->get('site.send'); ?>" class="wpcf7-form-control wpcf7-submit g-recaptcha" data-sitekey="6LczU_McAAAAANHXuWOGybQcpp880d9n_oCpIZua" data-callback="onSubmit" data-action='submit' />
                
               </p>

                <input type="hidden" name="_is_man" value="">

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                
              
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alsudais/public_html/resources/views/web/price.blade.php ENDPATH**/ ?>