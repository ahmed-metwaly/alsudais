<?php echo $__env->make('admin.template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" target="_blanck" href="<?php echo e(route('home')); ?>">السديس محاسبون قانونيون</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-left">
            
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="<?php echo e(route('user-edit', auth()->user()->id)); ?>"><i class="fa fa-user fa-fw"></i> <?php echo e(auth()->user()->name); ?></a>
                    </li>
                  
                    <li class="divider"></li>
                    <li><a href="<?php echo e(route('logout')); ?>"><i class="fa fa-sign-out fa-fw"></i> تسجيل الخروج</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->


        <?php echo $__env->make('admin.template.side_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $__env->yieldContent('title'); ?></h1>
            </div>
            <div class="col-lg-12">
                <?php if(count($errors) > 0 ): ?> 
                <div class="alert alert-danger" role="alert">
                   <ul>
                    <?php $__currentLoopData = $errors->messages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($arr[0]); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </ul>
                </div>
                <?php endif; ?>

                <?php if(Session::get('mOk') != '' ): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('mOk')); ?>

                </div>
                <?php endif; ?>

                <?php if( Session::get('mNo') != ''): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e(Session::get('mNo')); ?>

                </div>
                <?php endif; ?>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">

            <?php echo $__env->yieldContent('content'); ?>

        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php echo $__env->make('admin.template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/alsudais/public_html/resources/views/admin/master.blade.php ENDPATH**/ ?>