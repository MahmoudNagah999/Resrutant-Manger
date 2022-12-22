@extends('layouts.app')
@section('title','Edit Profile')
@section('content')
<body class="EditProfileBody">
    <h1 class="text-center H1">Edit information</h1>
 <div class="profEdit">
     {!! Form::open(['action'=>['UsersController@update',$user->id],'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group pull-left image">
            <label for="image_bath" class="col-md-4 control-label">Image :</label>
            <div class="col-md-6">
                {{Form::file('image_bath')}}
            </div>
        </div>
        <div class="form-group pull-left">
            {{Form::label('name','Name')}} 
            {{Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        <div class="form-group pull-left">
            {{Form::label('email','Email')}} 
            {{Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        <div class="form-group pull-left">
            {{Form::label('password','Password')}} 
            {{Form::password('password', ['class' => 'form-control'])}}
        </div>
        <div class="form-group pull-left">
            {{Form::label('address','Address')}} 
            {{Form::text('address',$user->address,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        <div class="form-group pull-left">
            {{Form::label('phone_number','Phone_number')}} 
            {{Form::text('phone_number',$user->phone_number,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        
        
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection
</body>
   