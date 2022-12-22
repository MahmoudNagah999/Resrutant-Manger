@extends('layouts.app')
@section('title','Profile')
@section('content')
<body class="profileBody">

    <div class="card">
        <div class="Prof">
            <header>
                <img src="/storage/images/{{Auth::user()->image_bath}}" alt="noImage"/>
            </header>
            
            <h3>Name : {{Auth::user()->name}}</h3>

            <p {{ $errors->has('name') ? ' has-error' : '' }}>Email : {{Auth::user()->email}}</p>
            <p {{ $errors->has('name') ? ' has-error' : '' }}>Phone Number : {{Auth::user()->phone_number}}</p>
            <p {{ $errors->has('name') ? ' has-error' : '' }}>Address : {{Auth::user()->address}}</p>
            <hr>
            <div class="text-center">
                <h2>Adminstration Control Panel : </h2><br>
                <a href="/users/{{Auth::user()->id}}/edit" class="btn btn-primary">Edite profile</a><br><br>
                <a href="/items/create" class="btn btn-success">Add new item</a>
                <a href="/showallmenu" class="btn btn-success">View menu</a>
                <a href="/showallusers" class="btn btn-success">View Users</a>
            </div>
        </div>
    </div>
@endsection
</body>
