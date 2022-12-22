@extends('layouts.app')
@section('title','Home')
@section('content')
    <body class="HomeBody">
        <div class="hedding">
            <h1>Welcome " <span>{{Auth::user()->name}}</span> " To <b>ParcDesPrinces</b> Restaurant website</h1>
            <h3>Here You can find and order whatever you want from Different types of the food </h3>
        </div>
        <div id="cf">
            <div class="bottom">
                <div class="Homeitem">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img src="/images/breakfast.jpg">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>Name : Eggs and Bacon</h4>
                            <h4>Description :</h4><p>A light meal for breakfast you can eat and get your energy up and ready to GO</p>
                            <h4>Price : <a href="/menu">Go to Menu</a></h4>
                        </div>
                    </div>
                </div>
                <div class="Homeitem">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img src="images/steak.jfif">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>Name : Steak</h4>
                            <h4>Description :</h4><p>A delicious meal for Lunch made of tasty meat you can eat and get your energy up and ready to GO</p>
                            <h4>Price : <a href="/menu">Go to Menu</a></h4>
                        </div>
                    </div>
                </div>
                <div class="Homeitem">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img  src="images/pizza.jfif">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>Name : Pizza</h4>
                            <h4>Description :</h4><p>Pizza is a very delicious food you can eat and get your energy up and ready to GO</p>
                            <h4>Price : <a href="/menu">Go to Menu</a></h4>
                        </div>
                    </div>
                </div>
                <div class="Homeitem">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img src="/images/drinks.jfif">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>Name : Hot & Cold Drinks</h4>
                            <h4>Description :</h4><p>There is a lots of drinks that you order and get your energy up and ready to GO</p>
                            <h4>Price : <a href="/menu">Go to Menu</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="top">
                <div class="Homesecond">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img src="/images/hamburger.jpg">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>Name : Hamburger</h4>
                            <h4>Description :</h4><p>A light meal for Dinner you can eat and get your energy up and ready to GO</p>
                            <h4>Price : <a href="/menu">Go to Menu</a></h4>
                        </div>
                    </div>
                </div>
                <div class="Homesecond">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img src="images/Sushi.jpg">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>Name : Sushi</h4>
                            <h4>Description :</h4><p>A tasty dish of Sushi  to enjoy and get your energy up and ready to GO</p>
                            <h4>Price : <a href="/menu">Go to Menu</a></h4>
                        </div>
                    </div>
                </div>
                <div class="Homesecond">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img src="images/SmookedFish.jpg">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>Name : Smooked Fish</h4>
                            <h4>Description :</h4><p>A tasty dish of Smoked Fish to enjoy and get your energy up and ready to GO</p>
                            <h4>Price : <a href="/menu">Go to Menu</a></h4>
                        </div>
                    </div>
                </div>
                <div class="Homesecond">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img src="/images/Lasagna.jpg">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4>Name : Lasagna</h4>
                            <h4>Description :</h4><p>A tasty dish of Lasagna to enjoy and get your energy up and ready to GO</p>
                            <h4>Price : <a href="/menu">Go to Menu</a></h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
@endsection