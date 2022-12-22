@extends('layouts.app')
@section('title','Edit Menu')
@section('content')
        <body style="background-color:black">
            <h1 style="font-family:algerian;color:black;text-align:center" >Resturante Menu</h1><br>
            <div class="well text-center" style="background-color:rgba(0,0,0,0.3)"> 
                <h3 style="color:rgba(255,255,255,1)">Add a new meal</h3>
                <a href="/items/create" class="btn btn-danger" style="width:150px">GO</a>
            </div>
            <div class="well text-center" style="background-color:rgba(0,0,0,0.4)"> 
                <h3 style="color:rgba(255,255,255,1)">Edit an existed meal</h3>
                <a href="/items/index" class="btn btn-danger" style="width:150px">GO</a>
            </div>
        </body>
@endsection