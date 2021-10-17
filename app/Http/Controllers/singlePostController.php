<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Reply;
use Illuminate\Support\Facades\DB;

class singlePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $post = Post::where('id', $id)->orderBy('id', 'desc')->get();

        $post = $post[0];
        $post_id = $post->id;
        $posts = Post::where('type','اخبار')->orderby('id', 'desc')->take(5)->get();
        $comments = Comment::where('post_id',$id)->where('is_active',1)->get();
        $comments_count =Comment::where('post_id',$id)->where('is_active',1)->get()->count();
        $newPosts = Post::orderBy('created_at','desc')->take(2)->get();
        $dec_id = $post->id-1;
        if($dec_id<1){
           $dec_id = 1;
        }
        $inc_id = $post->id+1;
        $last_post = Post::where('type','اخبار')->orderby('id', 'desc')->first();
        $last_post_id = $last_post[0];
        $next_post = Post::where('id',$inc_id)->first();

        //new changes for commit

        $previous_post = Post::where('id',$dec_id)->first();

        //return $post;
        return view('single-post.index',compact('post','comments','comments_count','newPosts','posts',
            'dec_id','inc_id','next_post','previous_post','last_post_id','post_id'));
    }

    public function addComment(Request $request,$id){
        $comment = new Comment;
        $comment->auther = $request->auther;
        $comment->email = $request->email;
        $comment->body = $request->body;
        $comment->post_id = $id;
        $comment->save();

        // $data = array('auther'=>$auther,"email"=>$email,"body"=>$body,"post_id"=>$post_id);
        // DB::table('comments')->insert($data);
        return back()->withInput()->with('alert', 'Comment will appear when approved by admin. Thank you.!');
    }

    public function addReply(Request $request,$id){
        $admin_name = $request->input('admin_name');
        $reply = $request->input('reply');
        $comment_id = $id;
        $data = array('admin_name'=>$admin_name,"reply"=>$reply,"comment_id"=>$comment_id);
        DB::table('replies')->insert($data);
        return back()->withInput();
    }

    public function replies($id){
        $replies = Reply::where('comment_id',$id)->get();
        $comment = Comment::where('id',$id)->get();
        return view('replies.index',compact('replies','comment'));
    }

    public function share($id){
        $post = Post::where('id',$id)->get();
        return view('single-post.share',compact('post'));
    }

    public function shared(){
        return view('single-post.index');
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
