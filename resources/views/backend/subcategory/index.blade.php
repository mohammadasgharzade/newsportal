@extends('layouts.backend.master')
@section('content')

<div class="row">

    <div class="col-sm-12 title">
        <h1><i class="fa fa-list-alt"></i> مجموعه ها</h1>
    </div>
    <div class="col-sm-4 cat-form">
    @if(auth()->user()->rule == 'ادمین' ||
        auth()->user()->rule == 'سردبیر' )
            <!-- #######################################################Subcategory Create ############################### -->
            <!-- //# Session # -->
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session('message')}}
            </div>
            @endif
            
            <h3 style="color: inherit;"> افزودن  زیر مجموعه </h3>
            <form method="post" action="{{route('addsubcategory')}}">
                @csrf             
                <input type="hidden" name="cat_id" value="{{$category->id}}">
                
                <div class="form-group">
                    <label>عنوان </label>
                    <input type="text" name="title" id="category_name" class="form-control" placeholder="عنوان">
                        <p> عنوان زیر مجموعه</p>
                </div>

                <div class="form-group">
                <label>اسلاگ</label>
                <input type="text" id="slug" name="slug" class="form-control" placeholder="اسلاگ" readonly>
            </div>

                <div class="form-group">
                    <label>مجموعه والد</label>
                    <select name="parent_cat[]" id="select2" class="form-control" multiple="multiple">
                        @foreach($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                        @endforeach
                    </select>
                    <p>مجموعه ی والد خود را برای زیرمجموعه انتخاب کنید</p>
                </div> 

                <div class="form-group">
                    <label>وضعیت</label>
                    <select name="status" class="form-control">
                        <option value="فعال">فعال</option>
                        <option value="پیش نویس ">پیش نویس </option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary pull-right" value="ایجاد زیر مجموعه ">
                </div>
            </form>

            <br><br><br><br><br><br>
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <ul>
                <li class="btn btn-danger">{{$error}}</li>
            </ul>
            
            @endforeach
            @endif

        @endif    
    </div>


    
 <!-- #######################################################Subcategory List ############################### -->
 <div class="col-sm-8 cat-view">

<form action="{{route('multipledelete')}}" method="Post">
    @csrf

    <div class="content">
        <table id="myTable" class="table table-striped">
            
   
            <thead>
                    <li class="pull-right" style="font-size: 18px;" > زیر مجموعه های : {{$category->title}} </li>
                    <br>
                    <hr>
                <tr>
                    <!-- <th><input type="checkbox" id="select_all"> عنوان</th> -->
                    <th>عنوان</th>
                    <th>وضعیت</th>
                    <th>ایجاد شده در </th>
                    <th>بروزرسانی شده در </th>

                    <th>عملیات</th>

                </tr>
            </thead>
            <tbody>
            @if(count($category->subcategories) > 0)
                @foreach($category->subcategories as $item)
                <tr>
                    <td>
                        <a href="{{route('editsubcategory',[$item->id,$category->id])}}">{{$item->title}}</a>
                    </td>

                   
                  
                    <td>{{$item->status}}</td>
                    <td>{{$item->created_at != null ? $item->created_at->diffForHumans() : ' بدون تاریخ' }}</td>
                    <td>{{$item->updated_at != null ? $item->updated_at->diffForHumans() :  '  بروز رسانی نشده است' }}
                   
                   
                </td>

                    <td><a href="{{route('subcat.delete',[$item->id,$category->id])}}" class="btn btn-danger">حذف</a></td>

                </tr>
                @endforeach
               @endif
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

<script>
function checkbox(){

    var chk = document.getElementByClassName('category');

    for(var i=0;i<=chk.length;i++){
    if(ck[i].checked)
    {
        document.querySelector(".subcategory").style.backgroundColor = "red";

    }

    }
    
    }



</script>