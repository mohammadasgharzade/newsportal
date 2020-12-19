@extends('layouts.backend.master')
@section('content')
<div class="row">
    <div class="col-sm-12 title">
        <h1><i class="fa fa-bars"></i> تبلیغات</h1>
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
                    <th>تیلیغ</th>
                    <th>عنوان</th>
                    <th>وضعیت</th>
                    <th>آدرس</th>
                    <th>موقعیت</th>
                    <th>ایجاد شده در </th>
                    <th>بروزرسانی شده در </th>
                    <th>عملیات</th>

                </tr>
            </thead>
            <tbody>
               @foreach($ads as $item)
            <tr>
                    <td>
                      <img src="{{asset($item->image)}}" alt="ad_image" width="200">
                    </td>
                    <td>
                        <a href="{{route('ad.edit',$item->id)}}">{{$item->title}}</a>
                    </td>
                    <td>{{$item->status}}</td>
                    <td>{{$item->url}}</td>
                    <td>{{$item->location}}</td>
                   

                    <td>{{$item->created_at != null ? $item->created_at->diffForHumans() : ' بدون تاریخ' }}</td>
                    <td>{{$item->updated_at != null ? $item->updated_at->diffForHumans() :  '  بروز رسانی نشده است' }}</td>
                   
                    <td><a href="{{route('ad.delete',$item->id)}}" class="btn btn-danger">حذف</a></td>


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