@extends('layouts.app')
@section('title','Menu')
@section('content')
        <body class="MenuBody">
            <h1 class="MenuH1">Food Categories</h1><br>
            <div class="well text-center MenuBox"> 
                <h3>Breakfast.</h3>
                <a href="/content/breakfast" class="btn btn-danger">Order</a>
            </div>
            <div class="well text-center MenuBox"> 
                <h3>Lunch.</h3>
                <a href="/content/lunch" class="btn btn-danger">Order</a>
            </div>
            <div class="well text-center MenuBox"> 
                <h3>Dinner.</h3>
                <a href="/content/dinner" class="btn btn-danger">Order</a>
            </div>
        </body>
@endsection