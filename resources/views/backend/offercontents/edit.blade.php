@extends('layouts.backend.master')
@section('content')
<div class="col-sm-12 title">

    <h1><i class="fa fa-bars"></i> ویرایش  مطلب پیشنهادی </h1>


 </div>
        
<form method="post" action="{{route('offercontent.update',$content->id)}}" enctype="multipart/form-data">
@csrf
    <div class="col-sm-12">
        
       <!-- //# Session # -->
       @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session('message')}}
        </div>
        @endif
        <div class="form-group">
			<label>عنوان </label>
            <input type="text"  name="title" class="form-control" placeholder="عنوان " value="{{$content->title}}">
		</div>
     
        <div class="form-group">
			<label>آدرس Url </label>
            <input type="url"  name="url" class="form-control" placeholder="آدرس" value="{{$content->url}}">
		</div>

        <div class="form-group">
                        <label>وضعیت</label>
                        <br>
                      <select name="status" class="form-control">
                        <option>{{$content->status}}</option>
                            @if($content->status != 'فعال')
                            <option value="فعال">فعال</option>
                            @else
                            <option value="پیش نویس">پیش نویس</option>
                            @endif
                     </select>      
       </div>

       <div class="form-group content featured-image">
            <span><i class="fa fa-chevron-down pull-left"></i></span><p> کاور مطلب</p><hr>	
            
            @if($content->cover)
            <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
            style="display: none;"></p>
            </p>
            <p><img src="{{asset($content->cover)}}" id="output" style="width: 200px;"/></p> 
            <p><label for="file" style="cursor: pointer;" class="btn btn-warning"> بارگزاری تصویر</label></p>					
            @else
            <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
            style="display: none;"></p>
            </p>

            <p><img src="/images/placeholder-photo-o.png" id="output" style="width: 200px;"/></p> 
            <p><label for="file" style="cursor: pointer;" class="btn btn-warning"> بارگزاری تصویر</label></p>	
            @endif
        </div>
       
       <div class="row">
					<div class="col-sm-12 main-button">
						<button class="btn btn-primary pull-left"> به روز رسانی</button>
					</div>
       </div>	
       
        <div class="col-4">
        @if ($errors->any())
         @foreach ($errors->all() as $error)
         <ul>
             <li class="btn btn-danger form-control ">{{$error}}</li>
         </ul>
         

         @endforeach
        @endif      
          
</div>
    </div>

</form>
</div>

</div>

        

@section('scripts')


@stop
<style>
	label{
		text-align: right !important;
	}
</style>

@stop