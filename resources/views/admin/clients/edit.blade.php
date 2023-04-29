@extends('admin.master')

@section('title')
    تعديل موظف
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
                        <form role="form" action="{{ route('client-do-edit') }}" enctype="multipart/form-data" method="post">
                            <div class="tab-content" id="nav-tabContent">

                                <?php
                                $status = '';
                                $photo = '';    
                                    
                                ?>

                                @foreach ($data as $item)
                                
                                    <div class="tab-pane fade in <?php echo $item->lang == 'ar' ? 'active' : ''; ?>" id="nav-{{ $item->lang }}">
            
                                        <div class="form-group">
                                            <label> الاسم </label>
                                            <input class="form-control" type="text" value="{{ $item->name }}" name="name[{{ $item->lang }}]" >
                                        </div>

                                        <div class="form-group">
                                            <label> الوصف </label>
                                            <textarea rows="10" class="form-control" type="text" name="text[{{ $item->lang }}]" >{{ $item->text }}</textarea>
                                        </div>

                                    </div>
                                    <input type="hidden" name="id[{{ $item->lang }}]" value="{{ $item->id }}">

                                    <?php 
                                    
                                    $status = $item->status;

                                     $photo = $item->photo;
                                    
                                    ?>

                                @endforeach

                                <div class="form-group">
                                    <label> الصورة </label>
                                    <input class="form-control" type="file" name="photo" >
                                </div>

                                <div class="form-group">
                                    <label> حالة التفعيل </label>
                                    <select name="status" class="form-control">
                                        <option value="1" {{ $status == 1 ? 'selected' : '' }} >مفعل</option>
                                        <option value="0" {{ $status == 0 ? 'selected' : '' }} >غير مفعل</option>
                                    </select>
                                </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-primary pull-left">حفظ البيانات</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                   <div class="col-md-2">
                       <img src="{{ url('public/uploads/clients') }}/{{ $photo }}" style="width:100%; height:100%; border:1px solid #ccc; padding:3px;"  class="image rounded" alt="">
                   </div>
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