<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socials= Social::get();
        return view('Writer.Accounts.accounts',compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('writer.Accounts.create');
    }

    public function store(Request $request)
    {
    
        $request->validate([

            'link' => 'required|string|max:255',
            'image' => 'required|mimes:png,jpg,jpeg',
            
        ]);
        $filename = null;
        // dd($request->input('category_id'));
        // Handle image upload if provided
        if ($file = $request->file('image')) {
            $filename = time() . '_' . str_replace(' ', '', $file->getClientOriginalName());
            $path = '/images/socials/';
            $file->move(public_path() . $path, $filename);
        }
        // Create the student record

        $writerid= Auth::id();
        Social::create([
            'link' => $request->input('link'),
            'image' => $filename,
            'writer_id' => $writerid,
           
        ]);
        

        // Redirect with status
        return redirect('/accounts')->with('status', 'Links Added Sccessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $socials = Social::findorfail($id);
    
        return view('Writer.Accounts.edit',compact('socials'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'link' => 'required|string',
        'image' => 'required|mimes:png,jpg,jpeg',
      

    ]);

    $socials = Social::findOrFail($id);

    $filename = $socials->image; // Default to existing image

    if ($file = $request->file('image')) {
        if ($socials->image && file_exists(public_path('images/socials/' . $socials->image))) {
            unlink(public_path('images/socials/' . $socials->image));
        }

        $filename = time() . '_' . str_replace(' ', '', $file->getClientOriginalName());
        $path = 'images/socials/';
        
        if (!$file->move(public_path($path), $filename)) {
            \Log::error('Failed to upload new image.');
            return redirect()->back()->with('error', 'Failed to upload new image.');
        }
    }
 
    $writerid=Auth::id();
    $socials->update([
        'link' => $request->input('link'), 
        'image' => $filename,
        'writer_id' => $writerid
       
    ]);

    return redirect('/accounts')->with('status', 'Link Updated Sccessfully');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $socials = Social::findOrFail($id);
        $socials->delete();
        return redirect('/accounts')->with('status', 'Account Removed successfully');
    }
}
