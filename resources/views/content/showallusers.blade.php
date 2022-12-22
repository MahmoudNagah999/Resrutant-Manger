@extends('layouts.app')
@section('title','All Users')
@section('content')
<body class="ShowBody">
    <h1 class="headerH1">Users</h1>
    <div class="NumOfUser text-center pull-right">
        { 1 } Users
    </div>
    @if (count($users)>1)
        @foreach ($users as $user)
            @if ($user->id!=Auth::user()->id)
                <div class="well text-center">
                    <h2 class="nam">Name : <b>{{$user->name}}</b></h2>
                    <h2>E-mail :  <b>{{$user->email}}</b></h2>
                    <h2>
                        Role : @if($user->role_id == 1)<b>Admin</b>
                        @elseif($user->role_id == 2)<b>Customer</b>
                        @endif
                    </h2>
                    <hr>
                    {!! Form::open(['action'=>['UsersController@destroy',$user->id],'method'=>'POST'] )!!}
                    {{Form::hidden('_method','DELETE')}}
                    <a href="/users/{{$user->id}}/edit" class="btn btn-primary">Edit</a>
                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                    {!! Form::close() !!}
                </div>
            @endif
        @endforeach
        
            
    @else
    <b>No users Found</b>
    @endif

@endsection
</body>
   