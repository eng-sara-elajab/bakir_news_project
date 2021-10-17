<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;



class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertform(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $address = $request->input('address');
        $content = $request->input('content');
        $data = array('name'=>$name,"email"=>$email,"address"=>$address,"content"=>$content);
        DB::table('messages')->insert($data);
        $newPosts = Post::orderBy('created_at','desc')->take(2)->get();
        // echo "Record inserted successfully.<br/>";
        // echo '<a href = "/contact.index">Click Here</a> to go back.';
        return back()->with('newPosts')->with('alert', 'Thank you for contacting us.!');
    }

    public function insert(Request $request){

    }


    public function index()
    {
        $newPosts = Post::orderBy('created_at','desc')->take(2)->get();
        return view('contact.index',compact('newPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
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
