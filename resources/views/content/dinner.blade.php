@extends('layouts.app')
@section('title','Dinner')
@section('content')
        <body class="DinnerBody">
        <div>
            <h1 class="DinnerH1">Make Your Dinner</h1><br>
        </div>
            @if(count($items)>0)
                @foreach($items as $item)
                    @if($item->meal_type == 3 && $item->avilabilty == 1)
                        <div class="item">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img src="/storage/images/{{$item->image_bath}}">
                                </div>
                                <div class="col-md-6 col-sm-6 boxes">
                                    <h3>Name : {{$item->name}}</h3>
                                    <h3>Price : {{$item->Price}} $</h3><hr>
                                    <!-- <label>Amount : </label>
                                    <input style="color:black;width:50px;border:1px solid black;border-radius:10px" type="text"> -->
                                    <a href="{{route('addToCart', ['id' => $item->id])}}" role="button" class="btn btn-danger"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Order</a>

                                </div>
                                <!-- <div Class="col-md-2 col-sm-2">
                                </div> -->
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                <p>No Breakfast items found</p>
            @endif
        </body>
@endsection