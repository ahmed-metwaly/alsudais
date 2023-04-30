<section class="home-form">
    <div class="row">
        <?php if(\Request::route()->getName() != 'price' && \Request::route()->getName() != 'how-are'): ?>
            <div class="col-lg-5 hidden-xs hidden-sm hidden-md">
                <img class="img-responsive" src="<?php echo e(url('public/dist/web/images')); ?>/form-bg.png" alt="">
            </div>
        <?php endif; ?>
        <div
            class="col-md-12 col-lg-<?php echo e(\Request::route()->getName() != 'price' && \Request::route()->getName() != 'how-are' ? '7' : '12'); ?>">
            <?php if(\Request::route()->getName() != 'price'): ?>
                <h2> <?php echo app('translator')->get('site.price'); ?> </h2>
            <?php endif; ?>
            <form action="<?php echo e(route('add-price')); ?>" method="post" id="recaptcha-submit">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <input class="form-control" type="text" name="name" required
                            placeholder="<?php echo app('translator')->get('site.name'); ?>">
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input class="form-control" type="email" name="email" required
                            placeholder="<?php echo app('translator')->get('site.email'); ?>">
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input class="form-control" type="tel" name="phone" required
                            placeholder="<?php echo app('translator')->get('site.contact_phone'); ?>">
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input class="form-control" type="text" name="service" required
                            placeholder="<?php echo app('translator')->get('site.serv'); ?>">
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input class="form-control" type="text" name="subject" placeholder="<?php echo app('translator')->get('site.company'); ?>">
                    </div>


                    <div class="col-md-12 col-sm-12 ">
                        <textarea name="message" required cols="40" rows="10" placeholder="<?php echo app('translator')->get('site.message_dt'); ?> "></textarea>
                    </div>


                    <input type="hidden" name="_is_man" value="">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">


                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="submit" value="<?php echo app('translator')->get('site.send'); ?>" class="g-recaptcha submit"
                            data-sitekey="6LczU_McAAAAANHXuWOGybQcpp880d9n_oCpIZua" data-callback="onSubmit">
                    </div>
                </div>
        </div>
        </form>

    </div>
</section>
<?php /**PATH /Applications/MAMP/htdocs/alsudais/resources/views/web/form.blade.php ENDPATH**/ ?>