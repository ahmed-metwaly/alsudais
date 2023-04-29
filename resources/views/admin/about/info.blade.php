@extends('admin.master')

@section('title')
      من نحن
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
                        <form role="form" action="{{ route('do-info') }}" enctype="multipart/form-data" method="post">
                            <div class="tab-content" id="nav-tabContent">

                                @foreach ($data as $item)
                                
                                <div class="tab-pane fade in <?php echo $item->lang == 'ar' ? 'active' : ''; ?>" id="nav-{{ $item->lang }}">

                                    <div class="form-group">
                                        <label> عنوان من نحن {{ $item->lang }}</label>
                                        <input type="text" name="about_title[{{ $item->lang }}]" value="{{ $item->about_title }}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label> نص من نحن </label>
                                        <textarea  name="about_content[{{ $item->lang }}]" class="editor form-control" rows="10">{{ $item->about_content }}</textarea>
                                    </div>
                                    
                                    <div class="alert alert-success">
                                        
                                        <div class="form-group">
                                            <label> عنوان الميزه الاولي {{ $item->lang }}</label>
                                            <input type="text" name="one_title[{{ $item->lang }}]" value="{{ $item->one_title }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label> نص الميزة الاولي </label>
                                            <textarea  name="one_content[{{ $item->lang }}]" class="editor form-control" rows="10">{{ $item->one_content }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label> عنوان الميزه الثانية {{ $item->lang }}</label>
                                            <input type="text" name="tow_title[{{ $item->lang }}]" value="{{ $item->tow_title }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label> نص الميزة الثانية </label>
                                            <textarea  name="tow_content[{{ $item->lang }}]" class="editor form-control" rows="10">{{ $item->tow_content }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label> عنوان الميزه الثالة {{ $item->lang }}</label>
                                            <input type="text" name="three_title[{{ $item->lang }}]" value="{{ $item->three_title }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label> نص الميزة الثالة </label>
                                            <textarea  name="three_content[{{ $item->lang }}]" class="editor form-control" rows="10">{{ $item->three_content }}</textarea>
                                        </div>
                                    </div>

                                    <div class="alert alert-info">
                                        <div class="form-group">
                                            <label> نص ليش تختار وسائل برمجية ؟</label>
                                            <textarea  name="why_content[{{ $item->lang }}]" class="editor form-control" rows="10">{{ $item->why_content }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label> الخطوات {{ $item->lang }}</label>
                                            <textarea  name="why_items[{{ $item->lang }}]" class="editor form-control" rows="10">{{ $item->why_items }}</textarea>
                                        </div>
                                    </div>
    
                                <input type="hidden" name="id[{{ $item->lang }}]" value="{{ $item->id }}">
                                </div>
                                @endforeach
                                
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