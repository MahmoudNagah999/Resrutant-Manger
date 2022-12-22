<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function showallusers(){
        $users = User::all();
        return view('content.showallusers')->with('users',$users); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user = User::find($id);
        return view('content.editprofile')->with('user',$user);
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

            $fileNameToStore = 'noimage.jpg';
        }


        $user = User::find($id);
        $user->name = $request->input('name');
        $user->image_bath = $fileNameToStore;
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->Phone_number = $request->input('phone_number');
        $user->address = $request->input('address');
        
        // if($user->role_id==1){
        //     $user->role_id = 1;
        // }else{
        //     $user->role_id = 2;
        // }

        $user->save();
        return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
