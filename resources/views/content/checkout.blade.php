@extends('layouts.app')
@section('title','Payment')
@section('content')
<body class="PayBody">
    <div class="row mainDiv">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <h1>Payment</h1>
            <div class="well PaymentClass">Your Total Price : {{$TotalPrice}} $</div>
            @if($TotalPrice > 0)
                <form action="checkout" method="POST" id="checkout-form">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" id="address" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="card-name">Card Holder Name</label>
                                <input type="text" id="card-name" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-xs-9">
                            <div class="form-group">
                                <label for="card-number">Credit Card Number</label>
                                <input type="text" id="card-number" class="form-control" placeholder="XXXX XXXX XXXX XXXX" require>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="card-cvc">CVC</label>
                                <input type="text" id="card-cvc" class="form-control" require>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="card-expiry-month">Expiry Date</label>
                                        <input type="text" id="card-expiry-month" class="form-control" placeholder="mm" require>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <input type="text" id="card-expiry-year" class="form-control" placeholder="yy" require>
                                    </div>
                                </div>
                            </div>   
                        </div>
                        
                    </div>
                    {{ csrf_field() }}
                    <!-- <button class="btn btn-success" type="submit">Pay Now</button><br> -->
                    <a href="#" class="btn btn-success">Pay Now</a>
                </form><br><br>
            @else
                <div class="well PaymentClass"><p>There is no items to Buy</p></div>
            @endif 
        </div>
    </div>
@endsection
</body>