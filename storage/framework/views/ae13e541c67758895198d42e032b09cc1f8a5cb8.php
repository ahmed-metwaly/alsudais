

<?php $__env->startSection('title'); ?>
     النصوص الثابتة
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <nav>
                    <div id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active btn btn-primary" id="nav-ar-tab" data-toggle="pill" href="#nav-ar" role="tab" aria-controls="nav-ar" aria-selected="true">العربية <img src="<?php echo e(url('public/dist/admin/images/sa.png')); ?>" ></a>
                        <a class="nav-item nav-link btn btn-primary" id="nav-en-tab" data-toggle="pill" href="#nav-en" role="tab" aria-controls="nav-en" aria-selected="false">الانجليزية <img src="<?php echo e(url('public/dist/admin/images/en.png')); ?>" ></a>
                    </div>
                </nav>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form role="form" action="<?php echo e(route('do-about')); ?>" enctype="multipart/form-data" method="post">
                            <div class="tab-content" id="nav-tabContent">

                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <div class="tab-pane fade in <?php echo $item->lang == 'ar' ? 'active' : ''; ?>" id="nav-<?php echo e($item->lang); ?>">

                                    <div class="form-group">
                                        <label> عنوان المكتب </label>
                                        <input type="text" name="address[<?php echo e($item->lang); ?>]" class="form-control" value="<?php echo e($item->address); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>   نص من نحن </label>
                                        <textarea  name="about[<?php echo e($item->lang); ?>]" class="editor form-control" rows="10"><?php echo e($item->about); ?></textarea>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label>   نص نبذة عنا </label>
                                        <textarea name="about_footer_index[<?php echo e($item->lang); ?>]" class="form-control" rows="10"><?php echo e($item->about_footer_index); ?></textarea>
                                    </div>
                                        
                                    <div class="form-group">
                                        <label> ميتا ديسكريبشن </label>
                                        <textarea  name="meta_desc[<?php echo e($item->lang); ?>]" class="form-control" rows="10"><?php echo e($item->meta_desc); ?></textarea>
                                    </div>    
                                        
                                    <div class="form-group">
                                        <label> ميتا كيورد </label>
                                        <textarea name="meta_key[<?php echo e($item->lang); ?>]" class="form-control" rows="10"><?php echo e($item->meta_key); ?></textarea>
                                    </div> 
                                </div>
                                <input type="hidden" name="id[<?php echo e($item->lang); ?>]" value="<?php echo e($item->id); ?>">

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <img src="<?php echo e(url('public/uploads/setting')); ?>/<?php echo e($item->photo); ?>" style="width: 150px; height: 150px;" alt="">
                                    </div>
                                </div>
                                    
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> صورة من نحن </label>
                                        <input type="file" name="photo" class="form-control">
                                    </div>
                                </div>

                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button type="submit" class="btn btn-primary pull-left">حفظ البيانات</button>
                                
                            </div>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                   
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alsudais/public_html/resources/views/admin/about/edit.blade.php ENDPATH**/ ?>