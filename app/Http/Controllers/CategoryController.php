<?php


namespace App\Http\Controllers;
use App\Http\Models;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{

    public function category()
    {
        $categories= Category::get();
        return view('Admin.Categories.category',compact('categories'));
    }
    public function showCategory($id){
        $category=  Category::findorfail($id);
        $posts = Posts::where('category_id', $id)->get();

        $totalPost = $posts->count();
        return view('User.category',compact('category','posts','totalPost'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Categories.create');
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

            'name' => 'required|string|max:255',
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);
    
        $filename = null;

        // Handle image upload if provided
        if ($file = $request->file('image')) {
            $filename = time() . '_' . str_replace(' ', '', $file->getClientOriginalName());
            $path = '/images/blogs/';
            $file->move(public_path() . $path, $filename);
        }
        // Create the categories
        Category::create([
            'name' => $request->input('name'),
            'image' => $filename,

        ]);
        

        // Redirect with status
        return redirect('category/admin')->with('status', 'Category Added Sccessfully');
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
        $categories = Category::findorfail($id);
        return view('Admin.Categories.edit',compact('categories'));
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
        'name' => 'required|string|max:255',
        'image' => 'nullable|mimes:png,jpg,jpeg',
       

    ]);

    $categories = Category::findOrFail($id);

    $filename = $categories->image; // Default to existing image

    if ($file = $request->file('image')) {
        if ($categories->image && file_exists(public_path('images/blogs/' . $categories->image))) {
            unlink(public_path('images/blogs/' . $categories->image));
        }

        $filename = time() . '_' . str_replace(' ', '', $file->getClientOriginalName());
        $path = 'images/blogs/';
        
        if (!$file->move(public_path($path), $filename)) {
            \Log::error('Failed to upload new image.');
            return redirect()->back()->with('error', 'Failed to upload new image.');
        }
    }
   
    $categories->update([
        'name' => $request->input('name'),
        'image' => $filename,
     
    ]);
    return redirect('category/admin')->with('status', 'Categories Updated Sccessfully');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Category::findOrFail($id);
        $posts->delete();
        return redirect('category/admin')->with('status', 'Category Deleted successfully');
    }
}

