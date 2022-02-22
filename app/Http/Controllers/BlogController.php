<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $languages = Language::all();
       return view('admin.add_blog', compact(['categories', 'languages']));
    }
public function store(Request $request)
{
    // dd($request->all());
    $this->validate($request, [
        'title' => 'required|unique:blogs',
        
        'image' => 'required',
        'language' => 'required',
        'category' => 'required',
        'des' => 'required',
    ]);

    
   
      
    
    // User Validation check
     
    $blogs = new Blog();
        $blogs->title = $request->title;
      
        
        $blogs->user_id = Auth::user()->id;
        $blogs->language_id = $request->language;
        $blogs->description = $request->des;
        $blogs->categories_id = $request->category;
        $blogs->status = 1;
        $tempImage = 'ibex-blogs-' . time() . '.' . $request->image->extension();
        $request->image->storeAs('Blog_image/', $tempImage, 'public');
        $blogs->image = "storage/Blog_image/" . $tempImage;
        $blogs->save();
        return redirect()->route('blog')->with('blogAdded', 'Vlog Successfully Added');
 
}

public function uploadProfile(Request $request)
{
    $this->validate($request, [
        'file' => 'required|mimes:png,jpg,jpeg,|max:2048'
    ]);
    $blogs = User::findOrFail(Auth::user()->id);
    $tempImage = 'IBEX-' . time() . '.' . $request->file->extension();
    $request->file->storeAs('Agent_Profile/', $tempImage, 'public');
    $blogs->photo = "storage/Agent_Profile/" . $tempImage;
    $blogs->save();
    return redirect()->route('profile')->with('blogAdded11111', 'Vlog Successfully Added');
}



    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
       
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
       
            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();
       
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
       
            //Upload File
            $request->file('upload')->storeAs('Ck_picture/uploads', $filenametostore, 'public');
  
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
              
            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
    public function edit($id)
    {
        $blogs = Blog::find($id);
        $categories = Category::all();
        $languages = Language::all();
      return view('admin.edit_blog', compact(['blogs','categories','id', 'languages']));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        //  dd($id);
        $this->validate($request, [
            'title' => 'required|unique:blogs,title,'. $id,
            'language' => 'required',
            'category' => 'required',
            'des' => 'required',
        ]);
         $blogs = Blog::find($id);
       
         $blogs->title = $request->title;
        
         $blogs->categories_id = $request->category;
         $blogs->language_id = $request->language;
         $blogs->description = $request->des;
         if($request->image != null){
            $tempImage = 'ibex-blogs-' . time() . '.' .  $request->image->extension();
            $request->image->storeAs('Video_Thumblain/', $tempImage, 'public');
            $blogs->image = "storage/Video_Thumblain/" . $tempImage;
         }
if($blogs->save()){

    return redirect()->route('blog')->with('blogUpdate', 'Blogs  updated!');
}


    }
}
