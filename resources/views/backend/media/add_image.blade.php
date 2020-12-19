@extends('layouts.backend.master')
@section('content')
<div class="container">
    <div class="row col-lg-12">

        <!-- //# Session # -->
        @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session('message')}}
        </div>
        @endif
        
        <form action="{{route('create_image')}}" method="POST" enctype="multipart/form-data"> 
            @csrf

           
            <div class="form-group">
                <label>عنوان تصویر</label>
                <input type="text" id="image_title" name="title" class="form-control" placeholder="عنوان">
            </div>
            
            <div class="form-group">
                <label> اسلاگ</label>
                <input type="text" id="slug" name="slug" class="form-control" readonly placeholder="اسلاگ">
            </div>


            <div class="form-group">
                <label> مجموعه</label>
                <select name="parent_cat[]" id="select2" class="form-control" multiple="multiple">
                    @foreach($imagecategory as $cat)
                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                    @endforeach
                </select>
              
            </div>
            
            <div class="form-group">
                <label> وضعیت</label>
                <select name="status" class="form-control">

                    <option value="پیش نویس ">پیش نویس </option>
                    <option value="فعال">فعال</option>
                
                </select>
              
            </div>

            
            <div class="form-group">
                <label>توضیحات</label>
                <textarea name="descryption" class="form-control" placeholder=" توضیحات" rows="10"></textarea>
            </div>

            
            <div class="form-group">
                <label> بارگزاری تصاویر</label>
                <input type="file" class="form-control-image" name="image[]" multiple>
            </div>
        
            <div class="form-group pull-left">
                <input type="submit" class="btn btn-primary" value="افزودن گالری">
            </div>
        </form>
        @if ($errors->any())
         @foreach ($errors->all() as $error)
         <ul>
             <li class="btn btn-danger">{{$error}}</li>
         </ul>
         
         @endforeach
        @endif
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
	$('#image_title').change(function(){
		var slug = $(this).val();
		$('#slug').val(string_to_slug(slug));
	});
</script>

@stop

@stop