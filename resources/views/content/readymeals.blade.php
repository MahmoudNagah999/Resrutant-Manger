<!DOCTYPE html>
@extends('layouts.app')
@section('content')<head>
        <style>
            body{
                background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.4)),url('../images/5.jpg');
                background-size:cover;
                height:900px;
            }
            select{
                    padding:8px 5px;
                    width:450px;
                    color:#333333;
                    background-color:#eeeeee;
                    border:1px solid #dddddd;
                    cursor:pointer;
                    border-radius:5px;
                    text-align:center
            }
            select:focus,
            select:hover{
                outline:none;
                border:1px solid black;
            }
        </style>
    </head>
    <body>
        <h1 style="color:#fff;text-align:center" >Choose a Meal</h1><br>
        <div style="text-align:center">
        <a href="#" class="btn btn-primary" style="width:150px">Make Order</a>
        </div>
    </body>
@endsection