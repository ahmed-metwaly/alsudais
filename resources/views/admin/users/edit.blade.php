@extends('admin.master')

@section('title')
    تعديل بيانات العضو 
@endsection

@section('content')
<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               تعديل بيانات العضو
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form role="form" action="{{ route('user-do-edit') }}" method="post">
                            
                            <div class="form-group">
                                <label> الاسم </label>
                                <input class="form-control" type="text" name="name" value="{{ $data->name }}" required>
                            </div>

                            <div class="form-group">
                                <label> الاميل </label>
                                <input class="form-control" type="email" name="email" value="{{ $data->email }}" required>
                            </div>

                            <div class="form-group">
                                <label> كلمة المرور </label>
                                <input class="form-control" type="password" name="password" >
                            </div>

                            <div class="form-group">
                                <label> حالة التفعيل </label>
                                <select name="status" class="form-control">
                                    <option value="1" {{ $data->status == 1 ? 'selected' : '' }} >مفعل</option>
                                    <option value="0"{{ $data->status == 0 ? 'selected' : '' }} >غير مفعل</option>
                                </select>
                            </div>

                            <input type="hidden" name="id" value="{{ $data->id }}">
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
@endsection