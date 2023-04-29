@extends('admin.master')

@section('title')
    اضافة خدمه
@endsection

@section('content')
<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <nav>
                    <div id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active btn btn-primary" id="nav-ar-tab" data-toggle="tab" href="#nav-ar" role="tab" aria-controls="nav-ar" aria-selected="true">العربية <img src="{{ url('public/dist/admin/images/sa.png') }}" ></a>
                        <a class="nav-item nav-link btn btn-primary" id="nav-en-tab" data-toggle="pill" href="#nav-en" role="tab" aria-controls="nav-en" aria-selected="false">الانجليزية <img src="{{ url('public/dist/admin/images/en.png') }}" ></a>
                    </div>
                </nav>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form role="form" action="{{ route('service-do-add') }}" enctype="multipart/form-data" method="post">
                            
                            <div class="tab-content" id="nav-tabContent">

                                @foreach (['ar', 'en'] as $lang)
                                
                                <div class="tab-pane fade in <?php echo $lang == 'ar' ? 'active' : ''; ?>" id="nav-{{ $lang }}">
                                   
                                    <div class="form-group">
                                        <label> اسم الخدمة </label>
                                        <input class="form-control" type="text" name="name[{{ $lang }}]">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label> وصف الخدمة </label>
                                        <textarea name="text[{{ $lang }}]" class="form-control" rows="10"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label> meta copyrigte </label>
                                        <textarea name="meta_copyrigte[{{ $lang }}]" class="form-control" rows="10"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label> meta description </label>
                                        <textarea name="meta_desc[{{ $lang }}]" class="form-control" rows="10"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label> meta keyword </label>
                                        <textarea name="meta_key[{{ $lang }}]" class="form-control" rows="10"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label> meta robots </label>
                                        <textarea name="meta_robots[{{ $lang }}]" class="form-control" rows="10"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label> meta DC.title </label>
                                        <textarea name="meta_dc_title[{{ $lang }}]" class="form-control" rows="10"></textarea>
                                    </div>
                                   
                                </div>
                                
                                @endforeach

                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label> الصورة  </label>
                                        <input class="form-control" type="file" name="photo">
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