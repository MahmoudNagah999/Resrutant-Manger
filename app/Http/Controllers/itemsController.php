<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\item;
use App\cus_order;
use App\Cart;
use Session;
use Auth;

class itemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function showallmenu(){
        $items = item::all();
        return view('content.showallmenu')->with('items',$items);
    }

    public function showbreakfast(){
        // $cusOrder = new cus_order();
        // $cusOrder->cus_id = Auth::user()->id;
        // $cusOrder->save();
        // $foundCusOrder = cus_order::find($cusOrder->cus_id);
        $items = item::all();
        return view('content.breakfast')->with('items',$items);/*->with('foundCusOrder',$foundCusOrder)*/
    }

    public function showlunch(){
        $items = item::all();
        return view('content.lunch')->with('items',$items);
    }
    
    public function showdinner(){
        $items = item::all();
        return view('content.dinner')->with('items',$items);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.Additem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image_bath' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('image_bath')){
            $fileNameWithExt = $request->file('image_bath')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extention = $request->file('image_bath')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extention;
            $path = $request->file('image_bath')->storeAs('public/images/', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.png';
        }

        $item = new Item();
        $item->name = $request->input('name');
        $item->Price = $request->input('Price');
        $item->item_cat_id = $request->input('ItemCat');
        $item->meal_type = $request->input('Mealtype');
        $item->avilabilty = $request->input('avilabilty');
        $item->image_bath = $fileNameToStore;
        $item->save();
        return redirect('/items/create')->with('success','item added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        return view('content.editItem')->with('item',$item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'image_bath' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('image_bath')){
            $fileNameWithExt = $request->file('image_bath')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extention = $request->file('image_bath')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extention;
            $path = $request->file('image_bath')->storeAs('public/images/', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.png';
        }

        $item = Item::find($id);
        $item->name = $request->input('name');
        $item->Price = $request->input('Price');
        $item->item_cat_id = $request->input('item_cat_id');
        $item->meal_type = $request->input('meal_type');
        $item->avilabilty = $request->input('avilabilty');
        $item->image_bath = $fileNameToStore;
        $item->save();
        return redirect('/showallmenu')->with('success','item edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/showallmenu');
    }

    public function addToCart(Request $request, $id){
        $item = item::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        // print_r ($oldCart);
        $cart = new Cart($oldCart);
        $cart->add($item, $item->id);

        $request->session()->put('cart',$cart);
        // dd($request->session()->get('cart'));
        return redirect()->back();
    }

    public function deleteFromCart($item , $id)
    {
        $cart = Session::get('cart');
        $cart->delete($item, $id);
        return redirect()->back();
    }

    public function DestroyAllCart()
    {
        $cart = Session::get('cart');
        $cart->DestroyAllCart();
        return redirect()->back();
    }

    public function GetCart(){
        if(!Session::has('cart')){
            return view('content.submitorder', ['items', null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart); 
        return view('content.submitorder',['items' => $cart->items, 'totalPrice' => $cart->TotalPrice]);
    }

    public function getcheckout(){
        if(!Session::has('cart')){
            return view('content.submitorder');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart); 
        $totlaPrice = $cart->TotalPrice;
        return view('content.checkout', ['items' => $cart->items,'TotalPrice'=>$totlaPrice]);
    }
    
}
