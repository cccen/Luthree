@extends('layouts.default')
@section('title','首页')
@section('content')
   <div class="jumbotron">
       <h3>Hello CBRC</h3>
       <p class="lead">
           您现在看到的是<a href="#">Laravel第三个代码</a>
       </p>
       <p>
           才第三遍
       </p>
       <p>
           <a class="btn btn-success btn-lg" href="{{route('signup')}}" role="button">现在注册</a>
       </p>
   </div>
@stop