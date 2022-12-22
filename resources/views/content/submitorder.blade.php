@extends('layouts.app')
@section('title','Ckeckout')
@section('content')
<body class="CartBody">
    @if(Session::has('cart'))
    <h1>Your Order</h1><hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                @if(count($items) > 0)
                    @foreach($items as $item)
                        @if( $item['qnt'] > 0 )
                            <li class="list-group-item"> 
                                <span class="badge">Quantity : {{$item['qnt']}}</span>
                                <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Item Name : {{$item['item']['name']}}</strong>
                                <span class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4 SubmitOrderItems"> Price : {{$item['price']}} $</span>
                                <div>
                                    <a href="{{route('deleteFromCart', ['item' => $item['item'] ,'id' => $item['item']['id']])}}" class="btn btn-danger btn-xs DeleteOrderItems">Remove item</a>
                                </div>
                                <!-- <div class="button-group">
                                    <button type="button"
                                    class="btn btn-primary btn-xs dropdown-toggle"
                                    data-toggle="dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul calss="dropdown-menu">
                                        <li><a htef="#"></a></li>
                                    </ul>
                                </div> -->
                                
                            </li>
                        @endif
                    @endforeach
                @else
                    <div class="well"><h2>There are no items at the Cart</h2></div>
                @endif
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h4>Total Price : {{$totalPrice}} $</h4>    
            </div>            
            <hr><hr>
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="destroyAllCart" class="btn btn-danger pull-right">Delete All Order</a>   
                <a href="/content/checkout" type="button" class="btn btn-success">Pay & Chechout</a>    
            </div>
            
        </div>
    @else
    
        <div class="well NoOrders">
           <strong>There are no items in the cart</strong>    
        </div>
    @endif
    
@endsection
</body>