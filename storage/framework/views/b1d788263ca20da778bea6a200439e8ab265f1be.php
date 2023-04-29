<?php $__env->startSection('title'); ?>
اعدادات الموقع
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
        <?php if(isset($data->id) && $data->id != ''): ?>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    بيانات الموقع
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <form role="form" action="<?php echo e(route('do-setting')); ?>" method="post">
                                
                                <div class="form-group">
                                    <label>هاتف المكتب </label>
                                    <input class="form-control" type="tel" name="phone" value="<?php echo e($data->phone); ?>" required>
                                </div>

                                <div class="form-group">
                                    <label> واتساب </label>
                                    <input class="form-control" type="tel" name="whatsapp" value="<?php echo e($data->whatsapp); ?>" required>
                                </div>

                                <div class="form-group">
                                    <label>اميل المكتب </label>
                                    <input class="form-control" type="email" name="email" value="<?php echo e($data->email); ?>" required>
                                </div>



                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button type="submit" class="btn btn-primary pull-left">حفظ البيانات</button>
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
    <?php else: ?>
    <h3 class="text-center">لا يوجد بيانات لهذه الصفحة</h3>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alsudais/public_html/resources/views/admin/setting/setting.blade.php ENDPATH**/ ?>