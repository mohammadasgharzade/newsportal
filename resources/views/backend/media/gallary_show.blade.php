@extends('layouts.backend.master')
@section('content')


<div class="container mt-2">
    <div class="row">

    @if($post)
    <div class="row col-sm-12">
        
        <!-- //# Session # -->
        @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session('message')}}
        </div>
        @endif
        <form action="{{route('gallary.update',$post->id)}}" method="POST" enctype="multipart/form-data"> 
                @csrf
                <div class="form-group">
                    <label>عنوان تصویر</label>
                    <input type="text" id="image_title" name="title" class="form-control" placeholder="عنوان" value="{{$post->title}}">
                </div>
                
                <div class="form-group">
                    <label> اسلاگ</label>
                    <input type="text" id="slug" name="slug" class="form-control" readonly placeholder="اسلاگ" value="{{$post->slug}}">
                </div>

                
            <div class="form-group">
                <label> مجموعه</label>
                <select name="parent_cat[]" id="select2" class="form-control" multiple="multiple">
                @foreach($imagecategory as $item)
                <option value="{{$item->id}}" {{ in_array ( $item->title , $selected_cat->toArray() ) ? 'selected' : null }}>{{$item->title}}</option>
                @endforeach
                </select>
              
            </div>
                <div class="form-group">
                    <label> وضعیت</label>
                    <select name="status" class="form-control">
                    <option> {{$post->status}}</option>
                    @if($post->status == 'فعال')
                    <option value="پیش نویس ">پیش نویس </option>
                    @else
                    <option value="فعال">فعال</option>
                    @endif
                    
                    </select>
                
                </div>
                
                <div class="form-group">
                    <label>توضیحات</label>
                    <textarea name="descryption" class="form-control" placeholder=" توضیحات" rows="10">{{$post->descryption}}</textarea>
                </div>
                <div class="form-group">
                <input type="submit" class="btn btn-primary pull-right" style="margin-bottom: 5%; margin-left: 1%;" value="به روزرسانی">   
                </div>
      
    </div>
    <hr>
    <div class="container">
                <input type="file" class="form-control-image pull-left" name="image[]" multiple style="margin-bottom: 3%;"> 
</div>

</form>
@if ($errors->any())
         @foreach ($errors->all() as $error)
         <ul>
             <li class="btn btn-danger">{{$error}}</li>
         </ul>
         
         @endforeach
 @endif

    @foreach($post->images as $image)

    

            <div class="col-md-4">
                <div class="card mb-2 box-shadow">
                 
                        <img class="card-img-top" style="width: 100% ; height: 200px; background-size: cover;" src="{{asset($image->image)}}" alt="Card image cap">
                        <div class="card-body" style="background-color: #E4E4E9; margin-bottom: 2%;">
                        <a href="{{route('image.delete',$image->id)}}" class="btn btn-danger" style="margin-top: 2%; margin-bottom: 2%; margin-right: 2%;" >حذف</a>
                       </div>
                </div>
            </div>
            <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                <div class="card">
                  
                    <img src="{{asset($image)}}" class="card-img-top" alt="gallary" width="100%">
                 
             <div class="card-body" style="background-color: #E4E4E9; margin-bottom: 2%;">
                 <a href="#" class="btn btn-danger" style="margin-top: 2%; margin-bottom: 2%; margin-right: 2%;" >حذف</a>
             </div>

                </div>
            </div> -->

            @endforeach
    @else
        <h1 class="text-danger">تصویری آپلود نشده است</h1>
    @endif

    
    </div>
</div>
@stop