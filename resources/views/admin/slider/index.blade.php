@extends('admin.master')

@section('title')
    عرض السليدر
@endsection

@section('content')



@if(count($data) > 0)
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                صور السليدر
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الصوره </th>
                                <th>حالة التفعيل</th>
                                <th>تعديل</th>
                                <th>حذف</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr class="odd gradeX">
                                <td class="center">{{ $item->id }}</td>
                                <td class="center"><img style="width:150px" width="100" height="100" src="{{ url('public/uploads/slider') }}/{{ $item->photo }}" alt=""></td>
                                <td class="center">{{ $item->status == 1 ? 'مفعل' : 'غير مفعل'}}</td>
                                <td class="center"><a href="{{ route('slider-edit', $item->relate) }}"><i class="fa fa-edit"></i></a></td>
                                <td class="center"><a href="{{ route('slider-delete', $item->relate) }}"><i class="fa fa-remove"></i></a></td>
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