@extends('frontend._layouts.main')
 @section('content')
 <img id="bg-main" src="/assets/img/vaccine.jpg" alt="Cover Image" style=" position: absolute;height: 100%; width: 100%;" />
<div class="container text-center" 
        style="position: absolute;text-align: center!important;
            display: flex;
            justify-content: center;
            align-items: center;
            align-self: center;
            height: 84vh;">
        <div class="card border-dark"style="width: 60%; padding: 41px; font-size: 33px;    margin-left: 20%;">
        <p>Successfully Submitted</p>
        <p>Thank you {{Auth::user()->name}}!</p>
        <a  class="btn btn-primary "style="font-size: 20px;align-self: center;"href="{{route('system.logout')}}">Home</a>

        </div>
</div>
@stop
