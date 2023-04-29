@extends('admin.master')

@section('title')
    عرض الاعضاء
@endsection

@section('content')
 
@if(count($data) > 0)
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                عرض بيانات الاعضاء
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>الاسم</th>
                                <th>البريد الاكتروني</th>
                                <th>حالة التفعيل</th>
                                <th>تعديل</th>
                                <th>حذف</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr class="odd gradeX">
                                <td class="center">{{ $item->name }}</td>
                                <td class="center">{{ $item->email }}</td>
                                <td class="center">{{ $item->status == 1 ? 'مفعل' : 'غير مفعل'}}</td>
                                <td class="center"><a href="{{ route('user-edit', $item->id) }}"><i class="fa fa-edit"></i></a></td>
                                <td class="center"><a href="{{ route('user-delete', $item->id) }}"><i class="fa fa-remove"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
                
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@else

<h3 class="text-center">لا يوجد بيانات لهذة الصفحة</h3>

@endif
    

@endsection

