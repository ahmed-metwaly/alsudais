<?php $__env->startSection('title'); ?>
    عرض الخدمات
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<?php if(count($data) > 0): ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                الخدمات
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم </th>
                                <th>حالة التفعيل</th>
                                <th>تعديل</th>
                                <th>حذف</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX">
                                <td class="center"><?php echo e($item->id); ?></td>
                                <td class="center"><?php echo e($item->name); ?></td>
                                <td class="center"><?php echo e($item->status == 1 ? 'مفعل' : 'غير مفعل'); ?></td>
                                <td class="center"><a href="<?php echo e(route('service-edit', $item->relate)); ?>"><i class="fa fa-edit"></i></a></td>
                                <td class="center"><a href="<?php echo e(route('service-delete', $item->relate)); ?>"><i class="fa fa-remove"></i></a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
                
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<?php else: ?>

<h3 class="text-center">لا يوجد بيانات لهذة الصفحة</h3>

<?php endif; ?>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/alsudais/resources/views/admin/services/index.blade.php ENDPATH**/ ?>