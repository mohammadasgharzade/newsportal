@extends('layouts.backend.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="{{asset(auth()->user()->avatar)}}" style="width: 150px;height: 150px; border-radius: 50%; float: right;">
            <h2> پروفایل  {{auth()->user()->name}} </h2>
            <!-- //# Session # -->
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session('message')}}
                </div>
                @endif
            <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="avatar">به روز رسانی تصویر پروفایل</label>
                    <input type="file" name="avatar">
                    <input type="submit" value="به روزرسانی" class="pull-left btn btn-sm btn-primary">

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
</div>
@stop

