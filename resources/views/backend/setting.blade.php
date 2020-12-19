@extends('layouts.backend.master')
@section('content')
<div class="row">
		<div class="col-sm-12 title">
            <h1 class="pull-right"><i class="fa fa-bars"></i> تنظیمات</h1>
		</div>
		<div class="col-sm-4"> 
       <!-- //# Session # -->
       @if(Session::has('message'))
        <div class="alert alert-success alert-dismissable fade in">
            <a href="#" class="close" data-dissmiss="alert">&times;</a>
            {{Session('message')}}
        </div>
        @endif
        @if($data == NULL )
        <form method="post" action="{{route('addsetting')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="model" value="{{encrypt('App\Setting')}}">
            <input type="hidden" name="tbl" value="{{encrypt('settings')}}">
		  <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" class="collapsed" ><span><p>لوگو</p><i class="fa fa-chevron-down float-left" ></i> </span> </a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
            <div class="panel-body">
              <div class="col-sm-12 panel-bordered-box">

                    <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                    style="display: none;"></p>
                    </p>
              </div> 
              <p><img src="/images/placeholder-photo-o.png" id="output" style="width: 76px; height: 76px;"/></p> 
                    <p><label for="file" style="cursor: pointer;" class="btn btn-warning"> بارگزاری تصویر</label></p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed" aria-expanded="false"><span> <p class="pull-right"> درباره ما</p><i class="fa fa-chevron-down" class="pull-left"></i></span></a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
            <div class="panel-body">
              <div class="col-sm-12 panel-bordered-box">
              <textarea name="about" rows="10" class="form-control"></textarea>
              </div> 
              
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed" aria-expanded="false"> <span><p  class="pull-right">شبکه های اجتماعی</p><i class="fa fa-chevron-down"  class="pull-left"></i></span></a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse" aria-expanded="false">
            <div class="panel-body">

                  <div id="socialFieldgroup" >
                      <div class="form-group">
                          <label>شبکه های اجتماعی</label>
                              <input type="text" name="social[]" class="form-control">         
                      </div>
                  </div> 
                  <div style="color: red; border-style: dotted; margin-bottom: 2%;">
                      <h5 style="font-weight: bolder; font-size: 20px;">توجه</h5>
                      <h5 style="font-size: 17px;">لطفا فیلد شبکه های اجتماعی را مانند نمونه زیر پر کنید</h5>
                      <h5 style="text-align: center; font-size: 17px; font-weight: bold;">آدرس سایت<strong></strong>  | نام سایت </h5>
                   </div>   
                  <div class="text-left">
                      <span class="btn btn-danger" id="addsocialField"><i class="fa fa-plus"></i></span>
                  </div>
                
                <div class="form-group">
                  <div class="alert alert-danger noshow" id="socialalert">
                      <Strong>متاسفم</Strong> فیلد بیش تری نمیتوانید بسازید
                  </div>
                </div>

            </div>
          </div>
        </div>

        <div class="form-group">
                <input type="submit" class="btn btn-info" value=" اعمال تنظیمات" style="margin-top: 2%;">
            </div>
        </form>
        @section('scripts')
<!-- Social Links -->
<script>
var socialcounter =1;
$('#addsocialField').click(function(){
  socialcounter++;
  if(socialcounter > 5){
    $('#socialalert').removeClass('noshow');
    return;
  }
  newDiv = $(document.createElement('div')).attr("class","form-group");
newDiv.html('<input type="text" name="social[]" class="form-control"></div>');
newDiv.appendTo('#socialFieldgroup');
})

</script>
@stop
<!-- ///////////////This should be else  -->
@else

<form method="POST" action="{{route('updatesetting',$data->id)}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="model" value="{{encrypt('App\Setting')}}">
            <input type="hidden" name="tbl" value="{{encrypt('settings')}}">
		  <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" class="collapsed" ><span><p class="pull-right">لوگو</p><i class="fa fa-chevron-down" class="pull-left"></i> </span> </a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
            <div class="panel-body">
              <div class="col-sm-12 panel-bordered-box">

              @if(!empty($data->image))
                <p><img src="/settings/{{$data->image}}" id="output" style="width:76px;height:76px;"></p>
                <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                <p><label for="file" style="cursor: pointer;" class="btn btn-warning"> جایگزینی تصویر</label></p>
                @else
                <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                <p><label for="file" style="cursor: pointer;"> بارگزاری تصویر</label></p>
                <p><img id="output" style="width:76px;height:76px;"/></p>              
                  @endif
              
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed" aria-expanded="false"><p class="pull-right"> درباره ما</p><span><i class="fa fa-chevron-down" class="pull-left"></i></span> </a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
            <div class="panel-body">
              <div class="col-sm-12 panel-bordered-box">
              <textarea name="about" rows="10" class="form-control">{{$data->about}}</textarea>
              </div> 
              
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed" aria-expanded="false"> <span><p  class="pull-right">شبکه های اجتماعی</p><i class="fa fa-chevron-down"  class="pull-left"></i></span></a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse" aria-expanded="false">
            <div class="panel-body">

                  <div id="socialFieldgroup" >
                      <div class="form-group">
                      @foreach($data->social as $links)
                        <div class="form-group">
                            <input type="text" name="social[]" class="form-control socialCount" value="{{$links}} ">
                        </div>
                    @endforeach
                   
                   
                  </div>    
                  </div>
                    <div style="color: red; border-style: dotted; margin-bottom: 2%;">
                      <h5 style="font-weight: bolder; font-size: 20px;">توجه</h5>
                      <h5 style="font-size: 17px;">لطفا فیلد شبکه های اجتماعی را مانند نمونه زیر پر کنید</h5>
                      <h5 style="text-align: center; font-size: 17px; font-weight: bold;">آدرس سایت<strong> </strong>  | نام سایت </h5>
                   </div>
                  <div class="text-left">
                      <span class="btn btn-danger" id="addsocialField"><i class="fa fa-plus"></i></span>
                  </div>
                
                <div class="form-group">
                  <div class="alert alert-danger noshow" id="socialalert">
                      <Strong>متاسفم</Strong> فیلد بیش تری نمیتوانید بسازید
                  </div>
                </div>

            </div>
          </div>
        </div>
</div>
        <div class="form-group">
                <input type="submit" class="btn btn-info" value=" اعمال تنظیمات" style="margin-top: 2%;">
            </div>
        </form>
        @section('scripts')
<!-- Social Links -->
<script>
var socialcounter =$('.socialCount').length;
$('#addsocialField').click(function(){

  socialcounter++;
  if(socialcounter > 5){
    $('#socialalert').removeClass('noshow');
    return;
  }
 newDiv = $(document.createElement('div')).attr("class","form-group");
newDiv.html('<input type="text" name="social[]" class="form-control"></div>');
newDiv.appendTo('#socialFieldgroup');
})


</script>
@stop
@endif
      </div>       
		</div>
  </div>
  
@stop


<style>
        .noshow{display:none;}

        .card{
            text-align: right !important;
        }
        .card-header{
            margin-top: 0em;
            margin-right: 0em;
        }
    </style>