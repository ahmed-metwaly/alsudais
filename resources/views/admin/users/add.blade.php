@extends('admin.master')

@section('title')
    اضافة عضو
@endsection

@section('content')
<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                بيانات العضو
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form role="form" action="{{ route('user-do-add') }}" method="post">
                            
                            <div class="form-group">
                                <label> الاسم </label>
                                <input class="form-control" type="text" name="name" required>
                            </div>

                            <div class="form-group">
                                <label> الاميل </label>
                                <input class="form-control" type="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label> كلمة المرور </label>
                                <input class="form-control" type="password" name="password" required>
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