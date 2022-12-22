@extends('layouts.app')
@section('title','All Menu')
@section('content')

<body class="veiwallBody">
    <h1 class="text-center">Menu Items</h1>
    @if (count($items)>0)
        @foreach ($items as $item)
    
        <div class="ShowMenu">
            <div class="row">
                <div class="col-md-4 col-sm-4"> 
                <img src="/storage/images/{{$item->image_bath}}">
                </div>
                <div class="col-md-8 col-sm-8">
                <p>Item Name : <b>{{$item->name}}</b></p>
                <p>Item Price :  <b>{{$item->Price}}</b> $ </p>
                @if($item->meal_type==1)
                    <p>Item Type :  <b>Breakfast</b></p>
                @elseif($item->meal_type==2)
                    <p>Item Type :  <b>Lunch</b></p>
                @elseif($item->meal_type==3)
                    <p>Item Type :  <b>Dinner</b></p>
                @endif
                @if($item->item_cat_id==1)
                    <p>Item Category :  <b>Meal</b></p>
                @elseif($item->item_cat_id==2)
                    <p>Item Category :  <b>Drinks</b></p>
                @elseif($item->item_cat_id==3)
                    <p>Item Category :  <b>Dessert</b></p>
                @endif
                <p>
                    Avilability : @if($item->avilabilty == 1)<b>Avilable</b>
                    @else<b>Not available</b>
                    @endif
                </p>
                </div>
            </div><hr>
            {!! Form::open(['action'=>['itemsController@destroy',$item->id],'method'=>'POST'] )!!}
            {{Form::hidden('_method','DELETE')}}
            <a href="/items/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
            {!! Form::close() !!}
        </div>
    
@endforeach

            
    @else
    <b>No Items Found</b>
    @endif

@endsection
</body>
    