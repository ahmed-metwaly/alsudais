
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a class="active" href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard fa-fw"></i> الرئيسية</a>
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>الاعدادات<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo e(route('setting')); ?>">اعدادات الموقع</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('about')); ?>"> من نحن  </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>الاعضاء<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo e(route('users')); ?>"> عرض الاعضاء</a>
                    </li>
                    <li>
                            <a href="<?php echo e(route('user-add')); ?>">اضافة عضو</a>
                        </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>السليدر<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo e(route('slider')); ?>"> عرض السليدر</a>
                    </li>
                    <li>
                            <a href="<?php echo e(route('slider-add')); ?>">اضافة جديد</a>
                        </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>الخدمات<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo e(route('services')); ?>"> عرض الخدمات</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('service-add')); ?>">اضافة خدمة جديدة</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>فريق العمل<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo e(route('clients')); ?>"> عرض فريق العمل</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('client-add')); ?>">اضافة جديد</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> الفروع<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo e(route('branches')); ?>"> عرض  الفروع</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('branch-add')); ?>">اضافة جديد</a>
                    </li>
                </ul>
            </li>



        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<?php /**PATH C:\laragon\www\alsudais\resources\views/admin/template/side_bar.blade.php ENDPATH**/ ?>