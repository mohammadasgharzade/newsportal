@extends('layouts.backend.master')
@section('content')

<div class="row">

    <div class="col-sm-12 title">
        <h1><i class="fa fa-list-alt"></i> زیرمجموعه ها</h1>
    </div>
  <hr>
 <!-- #######################################################Category List ############################### -->
 <div class="col-sm-12 cat-view">

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
                    <th>عملیات</th>

                </tr>
            </thead>
            <tbody>
                @foreach($subcategories as $item)

                <tr>
                    <td>
                        {{$item->title}}
                    </td>

                   
                    <td>{{$item->status}}</td>
                    <td>{{$item->created_at != null ? $item->created_at->diffForHumans() : ' بدون تاریخ' }}</td>
                    <td>{{$item->updated_at != null ? $item->updated_at->diffForHumans() :  '  بروز رسانی نشده است' }}</td>
                   
                </td>

                    <td><a href="{{route('subshow.delete',$item->id)}}" class="btn btn-danger">حذف</a></td>

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