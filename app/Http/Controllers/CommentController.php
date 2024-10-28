<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


            public function index()
        {
            $comments = Comment::with('replies')->where('parent_id', null)->get(); 
            return view('User.article', compact('comments'));
        }


        public function displayComments(){
            $comments = Comment::with('replies')->get();
            return view('Admin.commentsDisplay',compact('comments'));
        }
     public function show($id)
     {
         $Comments = Comment::with('comments.user')->findOrFail($id); 
         return view('User.article', compact('comments'));
     }
     
     public function store(Request $request)
     {
         $request->validate([
             'body' => 'required',
             'post_id' => 'required|exists:posts,id', 
             'parent_id' => 'nullable|exists:comments,id',
         ]);
     
         if(auth()->check())
         {
             $input = $request->all();
             $input['user_id'] = auth()->id(); 
             $input['parent_id'] = $request->parent_id;
     
             Comment::create($input);
         
             return back()->with('success', 'Comment added successfully!');
         }
         else 
         {
             return view('auth.login');
         }
     }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeReply(Request $request, $commentId)
    {
        // dd($request->all());
        // Validate the request data
        $request->validate([
            'body' => 'required|string',
            'post_id' => 'nullable|exists:posts,id',
            'parent_id' => 'nullable|exists:comments,id',
        ]);
        $comment = Comment::find($commentId);
        if ($comment) {
            $reply = Comment::create([
                'body' => $request->body,
                'user_id' => auth()->id(),
                'post_id' => $comment->post_id,
                'parent_id' => $commentId,
                
            ]);
        }
       
        if ($reply) {
            return redirect()->back()->with('success', 'Reply added successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to add reply. Please try again.');
        }
    }
    
    

  
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroyComment($id)
    {
        $comments=Comment::findorfail($id)->delete();
        return redirect()->back()->with('success', 'Comment Deleted Successfully',compact('comments'));
    

    }
}
