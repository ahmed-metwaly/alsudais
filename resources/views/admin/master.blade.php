@include('admin.template.header')

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
            <a class="navbar-brand" target="_blanck" href="{{ route('home') }}">السديس محاسبون قانونيون</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-left">
            
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{ route('user-edit', auth()->user()->id) }}"><i class="fa fa-user fa-fw"></i> {{ auth()->user()->name }}</a>
                    </li>
                  
                    <li class="divider"></li>
                    <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-fw"></i> تسجيل الخروج</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->


        @include('admin.template.side_bar')

        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">@yield('title')</h1>
            </div>
            <div class="col-lg-12">
                @if(count($errors) > 0 ) 
                <div class="alert alert-danger" role="alert">
                   <ul>
                    @foreach($errors->messages() as $arr)
                        <li>{{ $arr[0] }}</li>
                    @endforeach
                   </ul>
                </div>
                @endif

                @if(Session::get('mOk') != '' )
                <div class="alert alert-success" role="alert">
                    {{ Session::get('mOk') }}
                </div>
                @endif

                @if( Session::get('mNo') != '')
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('mNo') }}
                </div>
                @endif

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">

            @yield('content')

        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

@include('admin.template.footer')
