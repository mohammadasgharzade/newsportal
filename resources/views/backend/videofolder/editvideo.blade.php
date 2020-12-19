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
        
        <form action="{{route('video.update',$video->id)}}" method="POST" enctype="multipart/form-data"> 
            @csrf
           
            <input type="hidden" name="video_id" value="{{$video->id}}">

            <div class="form-group">
                <label>عنوان ویدیو</label>
                <input type="text" id="video_title" name="title" class="form-control" placeholder="عنوان" value="{{$video->title}}">
            </div>
            
            <div class="form-group">
                <label> اسلاگ</label>
                <input type="text" id="slug" name="slug" class="form-control" readonly placeholder="اسلاگ"  value="{{$video->slug}}">
            </div>

            <div class="form-group">
                <label> وضعیت</label>
                <select name="status" class="form-control">

                <option> {{$video->status}}</option>
                    @if($video->status == 'فعال')
                    <option value="پیش نویس ">پیش نویس </option>
                    @else
                    <option value="فعال">فعال</option>
                    @endif
                
                </select>
              
            </div>

            <div class="form-group">
                <label> مجموعه</label>
                <select name="parent_cat[]" id="select2" class="form-control" multiple="multiple">
                @foreach($subcategories as $item)
                <option value="{{$item->id}}" {{ in_array ( $item->title , $selected_cat->toArray() ) ? 'selected' : null }}>{{$item->title}}</option>
                @endforeach
                </select>
              
            </div>
            
            <div class="form-group">
                <label>توضیحات</label>
                <textarea name="descryption" class="form-control" placeholder=" توضیحات" rows="10">{{$video->descryption}}</textarea>
            </div>

            
            <div class="form-group">
                <label> بارگزاری ویدیو</label>
                <!-- <input type="file" class="form-control-image" name="video" value="{{$video->video}}"> -->
               
                @if($video->video != '')
                                <p><input type="file"  accept="video/*" name="image" id="file" onchange="loadFile(event)"
                                style="display: none;"></p>
                                </p>
                                <p>
                                    <video id="output" style="width: 400px;"controls>
                                    <source src="{{asset($video->video)}}">
                                    Your browser does not support HTML video.
                                    </video>                                </p> 
                                <p><label for="file" style="cursor: pointer;" class="btn btn-warning"> بارگزاری ویدیو</label></p>					
                @else
                                <p><input type="file"  accept="video/*"   name="image" id="file" onchange="loadFile(event)"
                                style="display: none;"></p>
                                </p>

                                <p>

                                <video id="output" style="width: 400px;" controls>
                                <source src="{{asset($video->video)}}">
                                Your browser does not support HTML video.
                                </video>           
                                                                </p> 
                                <p><label for="file" style="cursor: pointer;" class="btn btn-warning"> بارگزاری ویدیو</label></p>	
                @endif
            </div>

           <div class="form-group">
                <label> کاور ویدیو</label>
<br>

                <img src="{{asset($video->image)}}" style="width: 200px; height: 200px;margin-bottom: 2%;">
                <input type="file" name="cover" >

           </div>
        
            <div class="form-group pull-left">
                <input type="submit" class="btn btn-primary" value=" ویرایش ویدیو">
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