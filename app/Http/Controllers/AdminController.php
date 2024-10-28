<?php


namespace App\Http\Controllers;
use App\Http\Models;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\User;
use App\Models\Writer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
public function index()
    {

        $posts= Posts::get();
        return view('Admin.posts',compact('posts'));
    }
    public function destroy($id)
    {
        $posts = Posts::findOrFail($id);
        $posts->delete();
        return redirect('admin/post')->with('status', 'Blog Deleted successfully');
    }
    public function edit(int $id)
    {
        $posts = Posts::findorfail($id);
        return view('Admin.editStatus',compact('posts'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
           
    
        ]);
    
        $posts = Posts::findOrFail($id);
        $posts->update([
            'status' => $request->input('status'),
        ]);
    
        return redirect('admin/post')->with('status', 'status Updated Sccessfully');
    }
 
    public function Users(){
        $users = User::all();
        return view('Admin.Users.users',compact('users'));
    }
    public function editUser(int $id)
    {
        $users = User::findorfail($id);
        return view('Admin.Users.edit',compact('users'));
    }

    public function updateUser(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string', // Required, min 3 chars, only letters and spaces
        'email' => 'required|email|unique:users,email,' . $id, // Required, valid email, unique except current writer
    ]);
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $users = User::findOrFail($id);
    $users->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
     
    ]);
    return redirect('admin/user')->with('status', 'User Updated Successfully');
}
public function destroyUser($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('admin/user')->with('status', 'User Deleted successfully');
    }




    public function Writers()
{
    $writers = Writer::all();
    return view('Admin.Writers.writers', compact('writers'));
}

public function editWriter(int $id)
{
    $writer = Writer::findorfail($id);
    return view('Admin.Writers.edit', compact('writer')); 
}

public function updateWriter(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image upload
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
        'email' => $request->input('email'), 
        'description' => $request->input('description'),
        'image' => $filename,
    ]);

    return redirect('admin/writer')->with('status', 'Writer updated successfully'); 
}
public function destroyWriter($id)
{
    $writer = Writer::findOrFail($id);
    $writer->delete();
    return redirect('admin/writer')->with('status', 'Writer deleted successfully');
}



public function editAdmin($id){
    $admin = Admin::findorfail($id);
    return view('Admin.editAuthor', compact('admin'));


}
public function  updateAdmin(Request $request, $id){
    $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    $admin = Admin::findOrFail($id);
    $filename = null;
    if ($file = $request->file('image')) {
        $filename = time() . '_' . str_replace(' ', '', $file->getClientOriginalName());
        $path = '/images/Admins/';
        $file->move(public_path() . $path, $filename);
    }
   
    $admin->update([

        'image' => $filename,
    ]);

    return redirect('/admin/post')->with('status', 'Admin updated successfully'); 
}

}

