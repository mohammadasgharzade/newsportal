@extends('layouts.backend.master')
@section('content')
<div class="container">
    <div class="row col-lg-12">
    <div class="col-sm-12 title">
        <h1><i class="fa fa-user-plus"></i>  افزودن کاربر جدید</h1>
    </div>
        <!-- //# Session # -->
        @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session('message')}}
        </div>
        @endif
        
        <form action="{{route('user.update',$user->id)}}" method="POST"> 
            @csrf
           
            <div class="form-group">
                <label>   *نام و نام خانوادگی  </label>
                <input type="text" name="name" class="form-control" placeholder="نام" value="{{$user->name}}">
            </div>
          
            <div class="form-group">
                <label>  *ایمیل  </label>
                <input type="Email" name="email" class="form-control" placeholder="ایمیل" value="{{$user->email}}">
            </div>

          <div class="form-group">
                <label>  *رمز ورود  </label>
                <input type="Password" name="password" class="form-control" placeholder="رمز ورود" value="{{$user->password}}">
            </div>
            
          
            
            <div class="form-group">
                <label>  سطح دسترسی </label>
                <select name="rule" class="form-control">
              
                <option> {{$user->rule}}</option>
                    @if($user->rule == 'سردبیر')
                        <option value="ویراستار"> ویراستار </option>
                        <option value="ادمین"> ادمین </option>
                    @elseif($user->rule == 'ویراستار')
                        <option value="سردبیر"> سردبیر </option>
                        <option value="ادمین"> ادمین </option>
                    @else
                        <option value="سردبیر"> سردبیر </option>
                        <option value="ویراستار"> ویراستار </option>          
                    @endif
                </select>
              
            </div>

            <div class="form-group">
                <label> وضعیت</label>
                <select name="status" class="form-control">
                <option> {{$user->status}}</option>
                    @if($user->status == 'فعال')
                    <option value="غیر فعال"> غیر فعال </option>
                    @else
                    <option value="فعال">فعال</option>
                    @endif
                </select>
              
            </div>

        
            <div class="form-group pull-left">
                <input type="submit" class="btn btn-primary" value="ایجاد">
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


@stop

@stop