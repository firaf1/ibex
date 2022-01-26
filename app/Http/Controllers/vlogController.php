<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\vlog;
use App\Models\Category;
use App\Models\Language;
use Illuminate\Http\Request;

class vlogController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $languages = Language::all();
       return view('admin.add_vlog', compact(['categories', 'languages']));
    }
public function store(Request $request)
{
    // dd($request->all());
    $this->validate($request, [
        'title' => 'required|unique:vlogs',
        'video' => 'required',
        'thumblain' => 'required',
        'language' => 'required',
        'category' => 'required',
        'des' => 'required',
    ]);

    
   
      
    
    // User Validation check
     
    $vlog = new vlog();
        $vlog->title = $request->title;
        $vlog->video = $request->video;
        $vlog->thumbnail = $request->thumblain;
        $vlog->user_id = "2";
        $vlog->language_id = $request->language;
        $vlog->description = $request->des;
        $vlog->categories_id = $request->category;
        $vlog->status = 1;
        $tempImage = 'ibex-vlog-' . time() . '.' . $request->thumblain->extension();
        $request->thumblain->storeAs('Video_Thumblain/', $tempImage, 'public');
        $vlog->thumbnail = "storage/Video_Thumblain/" . $tempImage;
        $vlog->save();
        return redirect()->route('vlog')->with('vlogAdded', 'Profile updated!');
 
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
        $vlog = vlog::find($id);
        $categories = Category::all();
        $languages = Language::all();
      return view('admin.edit_vlog', compact(['vlog','categories','id', 'languages']));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        //  dd($id);
        $this->validate($request, [
            'title' => 'required|unique:vlogs,title,'. $id,
            'video' => 'required',
             
            'language' => 'required',
            'category' => 'required',
            'des' => 'required',
        ]);
         $vlog = vlog::find($id);
         
         $vlog->title = $request->title;
         $vlog->video = $request->video;
         $vlog->categories_id = $request->category;
         $vlog->language_id = $request->language;
         $vlog->description = $request->summaryckeditor;
         if($request->thumblain != null){
            $tempImage = 'ibex-vlog-' . time() . '.' .  $request->thumblain->extension();
            $request->thumblain->storeAs('Video_Thumblain/', $tempImage, 'public');
            $vlog->thumbnail = "storage/Video_Thumblain/" . $tempImage;
         }
if($vlog->save()){

    return redirect()->route('vlog')->with('status', 'Vlog updated!');
}


    }
     
}
