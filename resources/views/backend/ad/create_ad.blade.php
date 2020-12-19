@extends('layouts.backend.master')
@section('content')
<div class="col-sm-12 title">

    <h1><i class="fa fa-bars"></i> افزودن  تبلیغات </h1>


 </div>
        
<form method="post" action="{{route('ad.insert')}}" enctype="multipart/form-data">
@csrf
    <div class="col-sm-12">
       <!-- //# Session # -->
       @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session('message')}}
        </div>
        @endif
        <div class="form-group">
			<label>عنوان تبلیغ</label>
            <input type="text" name="title" class="form-control" placeholder="عنوان" value="{{old('title')}}">
        </div>
        
		<div class="form-group">
			<label>آدرس تبلیغ</label>
            <input type="url"  name="url" class="form-control" placeholder="url"  value="{{old('url')}}" >
        </div>

        <div class="form-group content featured-image">
            <span><i class="fa fa-chevron-down pull-left"></i></span><p> کاور تبلیغ</p><hr>	
            <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
            style="display: none;"></p>
            </p>

            <p><img src="/images/placeholder-photo-o.png" id="output" style="width: 200px;"/></p> 
            <p><label for="file" style="cursor: pointer;" class="btn btn-warning"> بارگزاری تصویر</label></p>					

        </div>
        <div class="form-group">
            <label>موقعیت</label>
            <br>
            <select name="location" class="form-control">
            <option value="leaderboard"> leaderboard</option>
            <option value="sidebar_top"> sidebar_top</option>
            <option value="sidebar_bottom"> sidebar_bottom</option>

            </select>      
         </div>

        <div class="form-group">
            <label>وضعیت</label>
            <br>
            <select name="status" class="form-control">
            <option value="فعال">فعال</option>
            <option value="غیرفعال">غیرفعال </option>
            </select>      
         </div>

         
         <div class="col-sm-12 main-button">
			<button class="btn btn-primary pull-right">ذخیره تبلیغ</button>
		</div>

        <br><br><br>
        <div class="col-lg-12">
         @if ($errors->any())
         @foreach ($errors->all() as $error)
         <ul>
             <li class="btn btn-danger  ">{{$error}}</li>
         </ul>
        @endforeach
        @endif      
          
        </div>
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
	.subcat{
        /* display: none; */
		margin-right: 4%;
	}
</style>

@stop