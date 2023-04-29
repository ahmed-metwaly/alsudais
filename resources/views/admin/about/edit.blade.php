@extends('admin.master')

@section('title')
     النصوص الثابتة
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
                        <form role="form" action="{{ route('do-about') }}" enctype="multipart/form-data" method="post">
                            <div class="tab-content" id="nav-tabContent">

                                @foreach ($data as $item)
                                
                                <div class="tab-pane fade in <?php echo $item->lang == 'ar' ? 'active' : ''; ?>" id="nav-{{ $item->lang }}">

                                    <div class="form-group">
                                        <label> عنوان المكتب </label>
                                        <input type="text" name="address[{{ $item->lang }}]" class="form-control" value="{{  $item->address }}">
                                    </div>

                                    <div class="form-group">
                                        <label>   نص من نحن </label>
                                        <textarea  name="about[{{ $item->lang }}]" class="editor form-control" rows="10">{{ $item->about }}</textarea>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label>   نص نبذة عنا </label>
                                        <textarea name="about_footer_index[{{ $item->lang }}]" class="form-control" rows="10">{{ $item->about_footer_index }}</textarea>
                                    </div>
                                        
                                    <div class="form-group">
                                        <label> ميتا ديسكريبشن </label>
                                        <textarea  name="meta_desc[{{ $item->lang }}]" class="form-control" rows="10">{{ $item->meta_desc }}</textarea>
                                    </div>    
                                        
                                    <div class="form-group">
                                        <label> ميتا كيورد </label>
                                        <textarea name="meta_key[{{ $item->lang }}]" class="form-control" rows="10">{{ $item->meta_key }}</textarea>
                                    </div> 
                                </div>
                                <input type="hidden" name="id[{{ $item->lang }}]" value="{{ $item->id }}">

                                @endforeach

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <img src="{{ url('public/uploads/setting') }}/{{ $item->photo }}" style="width: 150px; height: 150px;" alt="">
                                    </div>
                                </div>
                                    
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> صورة من نحن </label>
                                        <input type="file" name="photo" class="form-control">
                                    </div>
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