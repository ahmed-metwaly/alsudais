

<?php $__env->startSection('content'); ?>

<div class="main">
    <div class="slider">
        <div id="owl-carousel1" class="owl-carousel">

            <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="item">
                <img class="img-responsive" src="<?php echo e(url('public/uploads/slider')); ?>/<?php echo e($item->photo); ?>"
                    alt="سلايدر 2 graphic">
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
    <div class="container">
        <div class="col-sm-3 contact clearfix">
            <h3><?php echo app('translator')->get('site.price_order'); ?></h3>
            <?php if(session()->has('mOk')): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong><?php echo e(session()->get('mOk')); ?></strong> .
                </div>
            <?php endif; ?>
            <div role="form" class="wpcf7" id="wpcf7-f6-o1" lang="ar" dir="rtl">
                <div class="screen-reader-response"></div>
                <form action="<?php echo e(route('add-price')); ?>" method="post" class="wpcf7-form" id="recaptcha-submit">
                  
                  
                      
                 
                    <p><span class="wpcf7-form-control-wrap your-name">
                            <input type="text" name="name" value=""
                                size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                required placeholder="<?php echo app('translator')->get('site.name'); ?>" /></span></p>
                    <p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value=""
                                size="40"
                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                 required placeholder="<?php echo app('translator')->get('site.email'); ?>" /></span> </p>
                    <p><span class="wpcf7-form-control-wrap tel-703"><input type="tel" name="phone" value="" size="40"
                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                 placeholder="<?php echo app('translator')->get('site.contact_phone'); ?>" /></span> </p>
                    <p><span class="wpcf7-form-control-wrap service"><input type="text" name="service" value=""
                                size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                               required aria-invalid="false" placeholder="<?php echo app('translator')->get('site.serv'); ?>" /></span></p>
                    <p><span class="wpcf7-form-control-wrap your-subject"><input type="text" name="subject"
                                value="" size="40" class="wpcf7-form-control wpcf7-text"
                                placeholder="<?php echo app('translator')->get('company'); ?>" /></span></p>
                    <p><span class="wpcf7-form-control-wrap your-message"><textarea name="message" cols="40"
                                rows="10" class="wpcf7-form-control wpcf7-textarea"
                                placeholder="<?php echo app('translator')->get('site.message_dt'); ?>" required></textarea></span></p>
                  
               
                 	
                  
                  
                    <p>
                  
                      <input type="submit" value="<?php echo app('translator')->get('site.send'); ?>" class="wpcf7-form-control wpcf7-submit g-recaptcha" data-sitekey="6LczU_McAAAAANHXuWOGybQcpp880d9n_oCpIZua" data-callback="onSubmit" data-action='submit'/>
                  
                  </p>
                  
                    <div class="wpcf7-response-output wpcf7-display-none"></div>

                    <input type="hidden" name="_is_man" value="">

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                      
                       
   
                </form>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alsudais/public_html/resources/views/web/index.blade.php ENDPATH**/ ?>