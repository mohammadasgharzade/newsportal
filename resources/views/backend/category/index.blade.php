@extends('layouts.backend.master')
@section('content')

<div class="row">

    <div class="col-sm-12 title">
        <h1><i class="fa fa-list-alt"></i> مجموعه ها</h1>
    </div>
    <hr>
    <div class="col-sm-4 cat-form">
        @if(auth()->user()->rule == 'ادمین' ||
            auth()->user()->rule == 'سردبیر' )
            <!-- #######################################################Category Create ############################### -->
        
            <!-- //# Session # -->
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session('message')}}
            </div>
            @endif
            
            <h3 style="color: inherit;"> افزودن مجموعه جدید</h3>
            <form method="post" action="{{route('addcategory')}}">
                @csrf             
                <div class="form-group">
                    <label>عنوان مجموعه</label>
                    <input type="text" name="title" id="category_name" class="form-control" placeholder="عنوان">
                    <p>عنوان برای نمایش به روی وب سایت شما</p>
                </div>

                <div class="form-group">
                <label>اسلاگ</label>
                <input type="text" id="slug" name="slug" class="form-control" placeholder="اسلاگ" readonly>
            </div>

                <div class="form-group">
                    <label>وضعیت</label>
                    <select name="status" class="form-control">
                        <option value="فعال">فعال</option>
                        <option value="پیش نویس ">پیش نویس </option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary pull-right" value="ایجاد مجموعه ">
                </div>
            
            
             <br><br><br>
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <ul>
                <li class="btn btn-danger">{{$error}}</li>
            </ul>
            
            @endforeach
            @endif
            </form>
        
    
       @endif
    </div>
    
  
    
 <!-- #######################################################Category List ############################### -->
 <div class="col-sm-8 cat-view">

<form action="{{route('multipledelete')}}" method="Post">
    @csrf

    <div class="content">
        <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <!-- <th><input type="checkbox" id="select_all"> عنوان</th> -->
                    <th>عنوان</th>
                    <th>وضعیت</th>
                    <th>ایجاد شده در </th>
                    <th>بروزرسانی شده در </th>
                    <th>زیرمجموعه</th>

                    <th>عملیات</th>

                </tr>
            </thead>
            <tbody>
                @foreach($categories as $item)
                <tr>
                    <td>
                        <a href="{{route('editcategory',$item->id)}}">{{$item->title}}</a>
                    </td>

                   
                    <td>{{$item->status}}</td>
                    <td>{{$item->created_at != null ? $item->created_at->diffForHumans() : ' بدون تاریخ' }}</td>
                    <td>{{$item->updated_at != null ? $item->updated_at->diffForHumans() :  '  بروز رسانی نشده است' }}</td>
                   
                    <td>
                       <a href="{{route('subcategory.index',$item->id)}}" class="btn btn-info"> زیر مجموعه</a>
                    </td>
                </td>

                    <td><a href="{{route('category.delete',$item->id)}}" class="btn btn-danger">حذف</a></td>

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
<script>
	function string_to_slug (str) {
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();
  
    // remove accents, swap ñ for n, etc
    var from = "àáãäâèéëêìíïîòóöôùúüûñç·/_,:;";
    var to   = "aaaaaeeeeiiiioooouuuunc------";

    for (var i=0, l=from.length ; i<l ; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    str = str.replace(/[^a-z0-9_\s-ءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/, '') // remove invalid chars
        .replace(/\s+/g, '-') // collapse whitespace and replace by -
        .replace(/-+/g, '-') // collapse dashes
		// .replace(/[^a-z0-9_\s-ءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/, '') ;
		  //persian support
		

    return str;
}
</script>
<script>
	$('#category_name').change(function(){
		var slug = $(this).val();
		$('#slug').val(string_to_slug(slug));
	});
</script>

@stop
@stop