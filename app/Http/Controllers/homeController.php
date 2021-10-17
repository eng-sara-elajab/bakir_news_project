<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->take(4);
        $newPosts = Post::orderBy('created_at','desc')->take(2)->get();
        $openions = Post::where('type','رأي')->take(7)->get();
        $importants = DB::table('posts')->orderBy('created_at', 'desc')->take(4)->get();
        $twit_books = Post::where('type','تويتبوك')->take(4)->get();
        $new_twit_books = DB::table('posts')->where('type','تويتبوك')->orderBy('created_at', 'desc')->take(1)->get();
        $collections = Post::where('type','حوادث ومنوعات')->take(2)->get();
        // $sports = Post::where('type','رياضة')->take(4)->get();
        $new_sports = Post::where('type','رياضة')->orderBy('created_at', 'desc')->take(2)->get();
        $economics = Post::where('type','اقتصاد')->take(4)->get();
        $new_economics = DB::table('posts')->where('type','اقتصاد')->orderBy('created_at', 'desc')->take(1)->get();
        $breaking_news = DB::table('posts')->orderBy('created_at', 'desc')->take(4)->get();
        return view('welcome',compact('posts','openions','twit_books','importants',
            'new_twit_books','collections','new_sports','economics','new_economics','breaking_news','newPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function search(){
        $search=request('search');
        $posts = Post::where('title', 'LIKE', '%' . $search . '%')->orWhere('body','LIKE','%'.$search.'%')->paginate(8);

        $types = [];

        foreach($posts as $row){
            if(isset($types[$row->type])){
                $counter  =  $types[$row->type]['count'];
                $counter = $counter + 1;
                $types[$row->type]['count'] = $counter;
            }else {
                $types[$row->type] = ['name' => $row->type, 'count' => 0];
            }
        }

        $max = [];

        foreach($types as $row){

            if(count($max)){

                if($row['count'] > $max['count']){

                    $max = $row;

                }

            }else {

                $max = $row;

            }

        }

        $side_posts = Post::where('type', $max['name'])->get();

        return view('search-result.index',compact('posts','side_posts', 'max'));
     }
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
