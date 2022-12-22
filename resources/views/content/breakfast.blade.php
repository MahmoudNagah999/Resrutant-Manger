@extends('layouts.app')
@section('title','BreakFast')
@section('content')
        <body class="BreakfastBody">
            <form method="POST" action="{{action('order_itemsController@store')}}">
            {{ csrf_field() }}
                <div>
                    <h1>Make Your Breakfast</h1><br>
                </div>
                @if(count($items)>0)
                    @foreach($items as $item)
                        @if($item->meal_type == 1 && $item->avilabilty == 1)
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <img src="/storage/images/{{$item->image_bath}}">
                                    </div>
                                    <div class="col-md-6 col-sm-6 boxes">
                                        <input name="name" type="hidden" value="{{$item->name}}">
                                        <h3>Name : {{$item->name}}</h3>
                                        <h4>Price : {{$item->Price}} $</h4><hr>
                                        <!-- <label for="amount">Amount : </label> -->
                                        <!-- <input id="amount" name="amount" type="text" value=" " style="color:black;width:70px;border:1px solid black;border-radius:10px"> -->
                                        <!-- <input name="cus_id" type="hidden" value="{{Auth::user()->id}}">
                                        <input name="item_id" type="hidden" value="{{$item->id}}">
                                        <input name="item_price" type="hidden" value="{{$item->price}}"> -->
                                        <a href="{{route('addToCart', ['id' => $item->id])}}" 
                                        role="button" class="btn btn-danger">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>Add To Order</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @else
                    <p>No Breakfast items found</p>
                @endif
            </form>
        </body>
@endsection