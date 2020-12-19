@extends('layouts.backend.master')
@section('content')

<div class="row">

    <div class="col-sm-12 title">
        <h1><i class="fa fa-tag"></i> زیرمجموعه ها</h1>
    </div>
  <hr>
 <!-- #######################################################Category List ############################### -->
 <div class="col-sm-4 cat-view">

        <!-- //# Session # -->
        @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session('message')}}
        </div>
        @endif
        
        <h3 style="color: inherit;"> ویرایش   تگ </h3>
        <form method="post" action="{{route('tag.update',$tag->id)}}">
            @csrf           
  
            <div class="form-group">
                <label>عنوان </label>
                <input type="text" name="name"  class="form-control" placeholder="عنوان" value="{{$tag->name}}">
            </div>



            <div class="form-group">
                <input type="submit" class="btn btn-primary pull-left" value="ویرایش تگ ">
            </div>

        </form>

        <br><br><br><br><br><br>
         @if ($errors->any())
         @foreach ($errors->all() as $error)
         <ul>
             <li class="btn btn-danger">{{$error}}</li>
         </ul>
         
         @endforeach
        @endif
</div>

</div>
</div>
</div>


</div>
   

@section('scripts')


@stop
@stop