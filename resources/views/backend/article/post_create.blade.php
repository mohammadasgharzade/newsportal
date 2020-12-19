@extends('layouts.backend.master')
@section('content')
<div class="col-sm-10 title">

    <h1><i class="fa fa-bars"></i> افزودن خبر جدید </h1>


 </div>
        
<form method="post" action="{{route('addpost')}}" enctype="multipart/form-data">
@csrf
    <div class="col-sm-9">
        
       <!-- //# Session # -->
       @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session('message')}}
        </div>
        @endif
        <div class="form-group">
			<label>عنوان خبر</label>
            <input type="text" id="post_title" name="title" class="form-control" placeholder="عنوان خبر" value="{{old('title')}}">
		</div>
		<div class="form-group">
			<label>نامک(اسلاگ)</label>
            <input type="text" id="slug" name="slug" class="form-control" placeholder="نامک(اسلاگ)" readonly value="{{old('slug')}}" >
        </div>

        <div class="form-group">
            <label> متای خبر</label>
            <textarea class="form-control" name="meta" rows="3"  placeholder="متا ">{{old('meta')}}</textarea>
            <!-- <input type="text" name="meta" class="form-control" placeholder="متا " value="{{old('meta')}}"> -->
		</div>

        <div class="form-group">
            <textarea class="form-control" id="summary-ckeditor" name="descryption" rows="15">{{old('descryption')}}</textarea>
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
                        <option value="فعال">فعال</option>
                        <option value="پیش نویس">پیش نویس</option>
                     </select>      
                    </div>
               
              

                <div class="form-group">
                <label>تگ</label>
                    <select name="tags[]" id="tag_select2" class="form-control" multiple="multiple">
                    @foreach($tags as $tag)
                   <option value="{{$tag->name}}">{{$tag->name}}</option>
                    @endforeach
                </select>
                </div>
                 <div class="row">
					<div class="col-sm-12 main-button">
						<button class="btn btn-primary pull-left">انتشار خبر</button>
					</div>
				</div>	
			</div>
		

		<!-- ####################### Category Content ######################3 -->

		<div class="content cat-content">
			 <span class="pull-left"><i class="fa fa-chevron-down"></i></span><p>مجموعه ها </p><hr>	

             @foreach($categories as $item)
             @if($item->subcategories->count() > 0)

             <p><label><input  class="category cat{{$item->id}}" type="checkbox" name="category[]" value="{{$item->id}}"  > {{$item->title}}</label></p>
              
             <div  id="subcat{{$item->id}}"  class="subcategory moveright"  style="display: none">
                  @foreach($item->subcategories as $submenu)
                <p><label><input class="sub{{$item->id}}" type="checkbox" name="submenu[]" value="{{$submenu->id}}" > {{$submenu->title}}</label></p>
                @endforeach
             </div>
               
             @else
                  
                    <p><label><input class="category" type="checkbox" name="category[]" value="{{$item->id}}"  > {{$item->title}}</label></p>
                    

             @endif
             @endforeach
			
		</div>
	
	
		<!-- ####################### FeaturedImage Content ######################3 -->

					<div class="content featured-image">
							 <span class="pull-left"><i class="fa fa-chevron-down"></i></span><p> کاور خبر</p><hr>	
							 <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                                style="display: none;"></p>
                                </p>
                    
                                 <p><img src="/images/placeholder-photo-o.png" id="output" style="width: 100%;"/></p> 
                                <p><label for="file" style="cursor: pointer;" class="btn btn-warning"> بارگزاری تصویر</label></p>					
                        
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


<!-- <script>
function chkcat(){
    var category = document.getElementsByClassName('category');
    
        if(category[0].checked){

        document.getElementById('hidden').style.display = "block";
        }
        else{
        document.getElementById('hidden').style.display = "none";
        }

}
</script> -->

<!-- <script>

function cat(){
    var category = document.getElementsByClassName('category');
    var subcategory = document.getElementsByClassName('subcategory');

    for (let i = 0; i < category.length; i++) {
       console.log(category[i]);
    }
}
</script> -->

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