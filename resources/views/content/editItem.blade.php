@extends('layouts.app')
@section('title','Edit Items')
@section('content')
    <h1>Edit Menu Item</h1>
    {!! Form::open(['action'=>['itemsController@update',$item->id],'method'=>'POST','enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('image','Image')}} 
            {{Form::file('image_bath')}}
        </div>
        <div class="form-group">
            {{Form::label('name','Name')}} 
            {{Form::text('name',$item->name,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        <div class="form-group">
            {{Form::label('Price','Price')}} 
            {{Form::text('Price',$item->Price,['class'=>'form-control','placeholder'=>'title'])}}
        </div><hr>
        <div>
            {{Form::label('meal_type','Meal type')}}<br>
            {{Form::label('breakfast','breakfast')}} 
            {{Form::radio('meal_type', '1')}}
            {{Form::label('lunch','lunch')}} 
            {{Form::radio('meal_type', '2')}}     
            {{Form::label('dinner','dinner')}} 
            {{Form::radio('meal_type', '3')}}     
        </div><hr>
        <div>
            {{Form::label('item_cat_id','Item Category')}}<br>
            {{Form::label('meal','meal')}} 
            {{Form::radio('item_cat_id', '1')}}
            {{Form::label('drinks','drinks')}} 
            {{Form::radio('item_cat_id', '2')}}     
            {{Form::label('dessert','dessert')}} 
            {{Form::radio('item_cat_id', '3')}}     
        </div><hr>
        <div>
            {{Form::label('avilabilty','Avilabilty')}}<br>
            {{Form::label('Yes','Yes')}} 
            {{Form::radio('avilabilty', '1')}}
            {{Form::label('No','No')}} 
            {{Form::radio('avilabilty', '2')}} 
        </div><hr>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection