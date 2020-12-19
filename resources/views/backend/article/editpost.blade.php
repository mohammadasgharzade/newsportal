@extends('layouts.backend.master')
@section('content')
<div class="col-sm-10 title">

    <h1><i class="fa fa-bars"></i> ویرایش خبر  </h1>


 </div>
        
<form method="post" action="{{route('updatepost',$post->id)}}" enctype="multipart/form-data">
@csrf
    <div class="col-sm-9">
        
       <!-- //# Session # -->
       @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session('message')}}
        </div>
        @endif

        <input type="hidden" name="post_id" value="{{$post->id}}">
        <div class="form-group">
			<label>عنوان خبر</label>
            <input type="text" id="post_title" name="title" class="form-control" placeholder="عنوان خبر" value="{{$post->title}}">
		</div>
		<div class="form-group">
			<label>نامک(اسلاگ)</label>
            <input type="text" id="slug" name="slug" class="form-control" placeholder="نامک(اسلاگ)" readonly value="{{$post->slug}}" >
        </div>
        
        <div class="form-group">
			<label> متای خبر</label>
            <input type="text" name="meta" class="form-control" placeholder="متا " value="{{$post->meta}}">
		</div>

        <div class="form-group">
            <textarea class="form-control" id="summary-ckeditor" name="descryption" rows="15">{!! $post->descryption !!}</textarea>
            <div class="col-sm-12 word-count">تعداد حروف : 0</div>
        </div>

        <div class="col-12">
@if ($errors->any())
         @foreach ($errors->all() as $error)
         <ul>
             <li class="btn btn-danger form-control ">{{$error}}</li>
         </ul>
         
         @endforeach
        @endif      
          
</div>
    </div>

	<div class="col-sm-3">
		<!-- ####################### Publish Content ######################3 -->

		<div class="content publish-box">
				 <span class="pull-left"><i class="fa fa-chevron-down"></i></span><p>انتشار </p><hr>	
				
			
                    <div class="form-group">
                        <label>وضعیت</label>
                        <br>
                      <select name="status" class="form-control">
                        <option value="{{$post->status}}" selected> {{$post->status}}</option>
                        @if($post->status == 'فعال')
                        <option value="پیش نویس ">پیش نویس </option>
                        @else
                        <option value="فعال">فعال</option>
                        @endif
                     </select>      
                    </div>
               
              

                <div class="form-group">
                <label>تگ</label>
                    <select name="tags[]" id="tag_select2" class="form-control" multiple="multiple">
                            @foreach($tags as $tag)
                                <option value="{{$tag->name}}" {{in_array($tag->name,$selected_tag->toArray() ) ? 'selected' : null}} > {{$tag->name}}</option>
                            @endforeach

                </select>
                </div>
                 <div class="row">
					<div class="col-sm-12 main-button">
						<button class="btn btn-primary pull-left">به روزرسانی خبر</button>
					</div>
				</div>	
			</div>
		

		<!-- ####################### Category Content ######################3 -->

		<div class="content cat-content">
			 <span class="pull-left"><i class="fa fa-chevron-down"></i></span><p>مجموعه ها </p><hr>	

             @foreach($categories as $item)
             @if($item->subcategories->count() > 0)

                @if( in_array ( $item->title , $selected_cat->toArray() ))

                    <p><label><input   class="category cat{{$item->id}}" type="checkbox" name="category[]" value="{{$item->id}}" checked> {{$item->title}}</label></p>
                    
                        @foreach($item->subcategories as $submenu)
                        @if(in_array($submenu->title,$selected_subcat->toArray()) )
                        <div  id="subcat{{$item->id}}"  class="subcategory moveright" >
                            <p><label><input class="sub{{$item->id}} sub_cat[]" type="checkbox" name="submenu[]" value="{{$submenu->id}}" checked> {{$submenu->title}}</label></p>
                        </div>
                        @else
                            <div id="subcat{{$item->id}}"  class="subcategory moveright">
                            <p><label><input class="sub{{$item->id}} sub_cat[]" type="checkbox" name="submenu[]" value="{{$submenu->id}}" > {{$submenu->title}}</label></p>

                            </div>

                        
                        @endif
                        @endforeach
                    
                @else
                    <p><label><input   class="category cat{{$item->id}}" type="checkbox" name="category[]" value="{{$item->id}}"> {{$item->title}}</label></p>

                    @foreach($item->subcategories as $submenu)
                        @if(in_array($submenu->title,$selected_subcat->toArray()) )
                        <div  id="subcat{{$item->id}}"  class="subcategory moveright" >
                            <p><label><input class="sub{{$item->id}} sub_cat[]" type="checkbox" name="submenu[]" value="{{$submenu->id}}" checked> {{$submenu->title}}</label></p>
                        </div>
                        @else
                            <div id="subcat{{$item->id}}"  class="subcategory moveright"  style="display: none;">
                            <p><label><input class="sub{{$item->id}} sub_cat[]" type="checkbox" name="submenu[]" value="{{$submenu->id}}" > {{$submenu->title}}</label></p>

                            </div>

                        
                        @endif
                        @endforeach
                        
                @endif
             @else
                    <p><label><input class="category" type="checkbox" name="category[]" value="{{$item->id}}"  {{ in_array ( $item->title , $selected_cat->toArray() ) ? 'checked' : null }} >{{$item->title}}</label></p>                
             @endif
             @endforeach
			
		</div>
	
	
		<!-- ####################### FeaturedImage Content ######################3 -->

					<div class="content featured-image">
							 <span class="pull-left"><i class="fa fa-chevron-down"></i></span><p> کاور خبر</p><hr>	
							
                             @if($post->cover != '')
                                <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                                style="display: none;"></p>
                                </p>
                                <p><img src="{{asset($post->cover)}}" id="output" style="width: 200px;"/></p> 
                                <p><label for="file" style="cursor: pointer;" class="btn btn-warning"> بارگزاری تصویر</label></p>					
                            @else
                                <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                                style="display: none;"></p>
                                </p>

                                <p><img src="/images/placeholder-photo-o.png" id="output" style="width: 200px;"/></p> 
                                <p><label for="file" style="cursor: pointer;" class="btn btn-warning"> بارگزاری تصویر</label></p>	
                            @endif
                </div>
  </div>
</form>
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
	$('#post_title').change(function(){
		var slug = $(this).val();
		$('#slug').val(string_to_slug(slug));
	});
</script>




  <!-- Select 2  -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {
    $('#tag_select2').select2({
      dir: "rtl",
      placeholder: "انتخاب تگ",
      tags: true,
      allowClear: true
    });
   
      });
     
    </script>

<script>
  $(document).ready(function() {
      var category = getElementsByClassName('category');
if ($(category).is(':checked')) {
    $('.subcategory' + '#subcat' + id).css('display', 'block'); 
}
  });
$(".category").click(function(e){
    var id = $(this).val();
    // alert(id);
    var target = '.subcategory';
   
    if ($('input.cat'+ id).is(':checked')) {
        $(target + '#subcat' + id).css('display', 'block');
    }else
    {
         $(target + '#subcat' + id).css('display', 'none');
         $('.sub' + id).prop('checked', false)
    }


  


});
</script>
@stop
<style>
	label{
		text-align: right !important;
	}
	.moveright{
        /* display: none; */
		margin-right: 4%;
	}
</style>

@stop