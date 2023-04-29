
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
                <a class="active" href="{{ route('dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> الرئيسية</a>
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>الاعدادات<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('setting') }}">اعدادات الموقع</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"> من نحن  </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>الاعضاء<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('users') }}"> عرض الاعضاء</a>
                    </li>
                    <li>
                            <a href="{{ route('user-add') }}">اضافة عضو</a>
                        </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>السليدر<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('slider') }}"> عرض السليدر</a>
                    </li>
                    <li>
                            <a href="{{ route('slider-add') }}">اضافة جديد</a>
                        </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>الخدمات<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('services') }}"> عرض الخدمات</a>
                    </li>
                    <li>
                        <a href="{{ route('service-add') }}">اضافة خدمة جديدة</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>فريق العمل<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('clients') }}"> عرض فريق العمل</a>
                    </li>
                    <li>
                        <a href="{{ route('client-add') }}">اضافة جديد</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> الفروع<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('branches') }}"> عرض  الفروع</a>
                    </li>
                    <li>
                        <a href="{{ route('branch-add') }}">اضافة جديد</a>
                    </li>
                </ul>
            </li>



        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
