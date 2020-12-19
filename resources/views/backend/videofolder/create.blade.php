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
        
        <form action="{{route('video_create')}}" method="POST" enctype="multipart/form-data"> 
            @csrf
           
            <div class="form-group">
                <label>عنوان ویدیو</label>
                <input type="text" id="video_title" name="title" class="form-control" placeholder="عنوان">
            </div>
            
            <div class="form-group">
                <label> اسلاگ</label>
                <input type="text" id="slug" name="slug" class="form-control" readonly placeholder="اسلاگ">
            </div>

            <div class="form-group">
                <label> وضعیت</label>
                <select name="status" class="form-control">

                    <option value="پیش نویس ">پیش نویس </option>
                    <option value="فعال">فعال</option>
                
                </select>
              
            </div>

            <div class="form-group">
                <label> مجموعه</label>
                <select name="parent_cat[]" id="select2" class="form-control" multiple="multiple">
                    @foreach($subcategories as $subcat)
                   <option value="{{$subcat->id}}">{{$subcat->title}}</option>
                    @endforeach
                </select>
              
            </div>
            
            <div class="form-group">
                <label>توضیحات</label>
                <textarea name="descryption" class="form-control" placeholder=" توضیحات" rows="10"></textarea>
            </div>

            
            <div class="form-group">
                <label> بارگزاری ویدیو</label>
                <input type="file" accept="video/*" class="form-control-image" name="video" >
            </div>
        
            <div  class="form-group">
            <label> کاور ویدیو </label>
							 
							 <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                                style="display: none;"></p>
                                </p>
                    
                                 <p><img src="/images/placeholder-photo-o.png" id="output" style="width: 100px; height: 100px;"/></p> 
                                <p><label for="file" style="cursor: pointer;" class="btn btn-warning"> بارگزاری تصویر</label></p>					
                        
                    </div>


            <div class="form-group pull-left">
                <input type="submit" class="btn btn-primary" value="افزودن ویدیو">
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
	$('#video_title').change(function(){
		var slug = $(this).val();
		$('#slug').val(string_to_slug(slug));
	});
</script>

@stop

@stop