@extends('admin.master')

@section('title')
اعدادات الموقع
@endsection

@section('content')

<div class="row">
        @if(isset($data->id) && $data->id != '')
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    بيانات الموقع
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <form role="form" action="{{ route('do-setting') }}" method="post">
                                
                                <div class="form-group">
                                    <label>هاتف المكتب </label>
                                    <input class="form-control" type="tel" name="phone" value="{{ $data->phone }}" required>
                                </div>

                                <div class="form-group">
                                    <label> واتساب </label>
                                    <input class="form-control" type="tel" name="whatsapp" value="{{ $data->whatsapp }}" required>
                                </div>

                                <div class="form-group">
                                    <label>اميل المكتب </label>
                                    <input class="form-control" type="email" name="email" value="{{ $data->email }}" required>
                                </div>



                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-primary pull-left">حفظ البيانات</button>
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
    @else
    <h3 class="text-center">لا يوجد بيانات لهذه الصفحة</h3>
    @endif

@endsection