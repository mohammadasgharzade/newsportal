@extends('layouts.backend.master')
@section('content')
<div class="row">
    <div class="col-sm-12 title">
        <h1><i class="fa fa-bars"></i> اخبار
        @if(auth()->user()->rule != 'ویراستار')
        <a href="/admin/postcreate" class="btn btn-sm btn-default">افزودن خبر جدید</a>
        @endif
        </h1>
    </div>

    <div class="col-sm-12" style="margin-bottom: 3%;">
        همه({{$allposts}}) | <a href="#">منتشر شده ({{$published}})</a>
      </div>
 <!-- #######################################################Post List ############################### -->
 <div class="col-sm-12">

<form action="{{route('multipledelete')}}" method="Post">
    @csrf

    <div class="content posttable">
        <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <!-- <th><input type="checkbox" id="select_all"> عنوان</th> -->
                    <th>عنوان</th>
                    <th>وضعیت</th>
                    <th>ایجاد شده در </th>
                    <th>بروزرسانی شده در </th>
                    <th>مجموعه</th>
                    <th>عملیات</th>

                </tr>
            </thead>
            <tbody>
               @foreach($posts as $item)
            <tr>
                    <td>
                        <a href="{{route('editpost',$item->id)}}">{{$item->title}}</a>
                    </td>
                    <td>{{$item->status}}</td>
                    <td>{{$item->created_at != null ? $item->created_at->diffForHumans() : ' بدون تاریخ' }}</td>
                    <td>{{$item->updated_at != null ? $item->updated_at->diffForHumans() :  '  بروز رسانی نشده است' }}</td>
                    <td>
                    @foreach($item->categories as $cat)
                    , {{$cat->title}} 
                    @endforeach
                    </td>
                    <td><a href="{{route('deletepost',$item->id)}}" class="btn btn-danger">حذف</a></td>


            </tr>
               @endforeach
            </tbody>
        </table>
            
</form>
</div>

</div>
</div>
</div>


</div>
   

@section('scripts')

@stop

<style>
    .posttable{
        margin-top: 0%;
    }
</style>
@stop