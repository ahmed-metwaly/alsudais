@extends('admin.master')

@section('title')
    اضافة فرع
@endsection

@section('content')
<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <nav>
                    <div id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active btn btn-primary" id="nav-ar-tab" data-toggle="pill" href="#nav-ar" role="tab" aria-controls="nav-ar" aria-selected="true">العربية <img src="{{ url('public/dist/admin/images/sa.png') }}" ></a>
                        <a class="nav-item nav-link btn btn-primary" id="nav-en-tab" data-toggle="pill" href="#nav-en" role="tab" aria-controls="nav-en" aria-selected="false">الانجليزية <img src="{{ url('public/dist/admin/images/en.png') }}" ></a>
                    </div>
                </nav>            
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form role="form" action="{{ route('branch-do-add') }}" enctype="multipart/form-data" method="post">
                         
                            <div class="tab-content" id="nav-tabContent">

                                @foreach (['ar', 'en'] as $lang)
                                
                                <div class="tab-pane fade in <?php echo $lang == 'ar' ? 'active' : ''; ?>" id="nav-{{ $lang }}">
          
                                    <div class="form-group">
                                        <label> اسم الفرع </label>
                                        <input class="form-control" type="text" name="name[{{ $lang }}]">
                                    </div>

                                    <div class="form-group">
                                        <label> العنوان </label>
                                        <input class="form-control" type="text" name="address[{{ $lang }}]" >
                                    </div>

                                    <div class="form-group">
                                        <label> المدير </label>
                                        <input class="form-control" type="text" name="manger[{{ $lang }}]" >
                                    </div>

                                </div>
                                @endforeach


                                    <div class="form-group">
                                        <label> الجوال </label>
                                        <input class="form-control" type="text" name="phone">
                                    </div>

                                    <div class="form-group">
                                        <label> الاميل </label>
                                        <input class="form-control" type="text" name="email">
                                    </div>

                                    <div class="form-group">
                                        <label> اللوكيشن </label>
                                        <input class="form-control" type="text" name="location">
                                    </div>


                                <div class="form-group">
                                    <label> حالة التفعيل </label>
                                    <select name="status" class="form-control">
                                        <option value="1">مفعل</option>
                                        <option value="0">غير مفعل</option>
                                    </select>
                                </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
@endsection