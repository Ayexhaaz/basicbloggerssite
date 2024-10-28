<?php


namespace App\Http\Controllers;
use App\Http\Models;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Category;
use App\Models\Social;
use App\Models\Writer;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');     
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        $posts= Posts::get();
        $socials= Social::get();
        $categories= Category::get();
        return view('User.index',compact('posts','categories','socials'));       
    }
    public function admin()
    {
        return view('Admin.dashboard');

    }
    public function writer()
    {
        $posts= Posts::get();
        return view('Writer.writer',compact('posts'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
     public function author($id){
        $writer= Writer::where('id',$id)->get();
        $posts= Posts::where('writer_id', $id)->get();
        $socials= Social::get();
        $categories= Category::get();
        return view('User.author',compact('posts','categories','socials','writer'));

     }

     public function editWriter(int $id)
{
    $writer = Writer::findOrFail($id);
    return view('Writer.editAuthor', compact('writer')); 
}

public function updateWriter(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required', 
        'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        
    ]);

    $writer = Writer::findOrFail($id);
    $filename = null;
    // dd($request->input('category_id'));
    // Handle image upload if provided
    if ($file = $request->file('image')) {
        $filename = time() . '_' . str_replace(' ', '', $file->getClientOriginalName());
        $path = '/images/writers/';
        $file->move(public_path() . $path, $filename);
    }
   
    $writer->update([
        'name' => $request->input('name'),
        'description' => $request->input('description'), 
        'image'=> $filename,
       
    ]);

    return redirect('/writer')->with('status', 'Writer updated successfully'); 
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(); 
        return view('writer.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $request->validate([

            'title' => 'required|string|max:255',
            'category_id'=>'required',
            'image' => 'required|mimes:png,jpg,jpeg',
            'sdescription' => 'required|string|max:25',
            'description' => 'required|string|max:255',
            'status' => 'required|string|max:15',
            'writer-id' => 'nullable',
        ]);
        $filename = null;
        // dd($request->input('category_id'));
        // Handle image upload if provided
        if ($file = $request->file('image')) {
            $filename = time() . '_' . str_replace(' ', '', $file->getClientOriginalName());
            $path = '/images/blogs/';
            $file->move(public_path() . $path, $filename);
        }
        // Create the student record

        $writerId = Auth::id();
        Posts::create([
            'title' => $request->input('title'),
            'category_id' => $request->input('category_id'),
            'sdescription' => $request->input('sdescription'),
            'image' => $filename,
            'description' => $request->input('description'),
            'status' => $request->input('status'),
            'writer_id' => $writerId,

        ]);
        

        // Redirect with status
        return redirect('/writer')->with('status', 'Blog Added Sccessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $posts = Posts::findorfail($id);
        $categories = Category::all(); 
        return view('Writer.edit',compact('posts','categories'));
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
        'title' => 'required|string|max:255',
        'category_id'=>'required',
        'image' => 'required|mimes:png,jpg,jpeg',
        'sdescription' => 'required|string|max:25',
        'description' => 'required|string|max:255',
        'status' => 'required|string|max:15',
        'writer-id' => 'nullable',

    ]);

    $posts = Posts::findOrFail($id);

    $filename = $posts->image; // Default to existing image

    if ($file = $request->file('image')) {
        if ($posts->image && file_exists(public_path('images/blogs/' . $posts->image))) {
            unlink(public_path('images/blogs/' . $posts->image));
        }

        $filename = time() . '_' . str_replace(' ', '', $file->getClientOriginalName());
        $path = 'images/blogs/';
        
        if (!$file->move(public_path($path), $filename)) {
            \Log::error('Failed to upload new image.');
            return redirect()->back()->with('error', 'Failed to upload new image.');
        }
    }
    $writerId = Auth::id();
    
    $posts->update([
        'title' => $request->input('title'),
        'category_id' => $request->input('category_id'),
        'sdescription' => $request->input('sdescription'),
        'image' => $filename,
        'description' => $request->input('description'),
        'status' => $request->input('status'),
        'writer_id' => $writerId,
    ]);

    return redirect('/writer')->with('status', 'Blog Updated Sccessfully');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Posts::findOrFail($id);
        $posts->delete();
        return redirect('/writer')->with('status', 'Blog Deleted successfully');
    }
}

