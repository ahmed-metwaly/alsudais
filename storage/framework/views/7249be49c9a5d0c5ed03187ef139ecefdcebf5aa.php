<?php $__env->startSection('title'); ?>
    تعديل بيانات العضو 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               تعديل بيانات العضو
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form role="form" action="<?php echo e(route('user-do-edit')); ?>" method="post">
                            
                            <div class="form-group">
                                <label> الاسم </label>
                                <input class="form-control" type="text" name="name" value="<?php echo e($data->name); ?>" required>
                            </div>

                            <div class="form-group">
                                <label> الاميل </label>
                                <input class="form-control" type="email" name="email" value="<?php echo e($data->email); ?>" required>
                            </div>

                            <div class="form-group">
                                <label> كلمة المرور </label>
                                <input class="form-control" type="password" name="password" >
                            </div>

                            <div class="form-group">
                                <label> حالة التفعيل </label>
                                <select name="status" class="form-control">
                                    <option value="1" <?php echo e($data->status == 1 ? 'selected' : ''); ?> >مفعل</option>
                                    <option value="0"<?php echo e($data->status == 0 ? 'selected' : ''); ?> >غير مفعل</option>
                                </select>
                            </div>

                            <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alsudais/public_html/resources/views/admin/users/edit.blade.php ENDPATH**/ ?>