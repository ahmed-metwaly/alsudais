

<?php $__env->startSection('title'); ?>
    تعديل الخدمة
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
                        <form role="form" action="<?php echo e(route('service-do-edit')); ?>" enctype="multipart/form-data" method="post">
                            <div class="tab-content" id="nav-tabContent">

                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <div class="tab-pane fade in <?php echo $item->lang == 'ar' ? 'active' : ''; ?>" id="nav-<?php echo e($item->lang); ?>">

                                    <div class="form-group">
                                        <label> اسم الخدمة </label>
                                        <input class="form-control" type="text" name="name[<?php echo e($item->lang); ?>]" value="<?php echo e($item->name); ?>" >
                                    </div>

                                    <div class="form-group">
                                        <label> وصف الخدمة </label>
                                        <textarea name="text[<?php echo e($item->lang); ?>]" class="form-control" rows="10"><?php echo e($item->text); ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label> meta copyrigte </label>
                                        <textarea name="meta_copyrigte[<?php echo e($item->lang); ?>]" class="form-control" rows="10"><?php echo e($item->meta_copyrigte); ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label> meta description </label>
                                        <textarea name="meta_desc[<?php echo e($item->lang); ?>]" class="form-control" rows="10"><?php echo e($item->meta_desc); ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label> meta keyword </label>
                                        <textarea name="meta_key[<?php echo e($item->lang); ?>]" class="form-control" rows="10"><?php echo e($item->meta_key); ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label> meta robots </label>
                                        <textarea name="meta_robots[<?php echo e($item->lang); ?>]" class="form-control" rows="10"><?php echo e($item->meta_robots); ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label> meta DC.title </label>
                                        <textarea name="meta_dc_title[<?php echo e($item->lang); ?>]" class="form-control" rows="10"><?php echo e($item->meta_dc_title); ?></textarea>
                                    </div>

                                    <input type="hidden" name="id[<?php echo e($item->lang); ?>]" value="<?php echo e($item->id); ?>">
                                </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <div class="col-md-12">

                                    <img src="<?php echo e(url('public/uploads/services')); ?>/<?php echo e($item->photo); ?>" style="width: 250px;"> 
                                    <div class="form-group">
                                        <label> الصورة  </label>
                                        <input class="form-control" type="file" name="photo">
                                    </div>

                                    <div class="form-group">
                                        <label> حالة التفعيل </label>
                                        <select name="status" class="form-control">
                                            <option value="1" <?php echo e($item->status == 1 ? 'selected' : ''); ?> >مفعل</option>
                                            <option value="0" <?php echo e($item->status == 0 ? 'selected' : ''); ?> >غير مفعل</option>
                                        </select>
                                    </div>

                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <button type="submit" class="btn btn-primary pull-left">حفظ البيانات</button>
                                </div>

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
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alsudais/public_html/resources/views/admin/services/edit.blade.php ENDPATH**/ ?>