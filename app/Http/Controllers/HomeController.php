<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\vlog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $currentCategory=false;
        $lang = Session::get('locale');
        
        $currentLanguage;
       if($lang == 'am')
       $currentLanguage = 2;
       if($lang == 'en')
       $currentLanguage = 1;

        $blogs = Blog::where('status', '=', '1')->where('language_id', $currentLanguage)->orderBy('created_at', 'desc')->take(4)->get();
     
        return view('home.index', compact(['blogs']));
    }
    public function vlogList($title)
    {

        $currentCategory = Category::where('title', $title)->first();
        $categories = Category::all();
         
    $vlogs11 = vlog::where('status', 1)->where('categories_id', $currentCategory->id)->paginate(10);
     
    $blogs = Blog::where('status', '1')->orderBy('created_at', 'desc')->limit(4)->get();
        return view('home.category_vlog_list', compact(['vlogs11', 'blogs', 'categories','currentCategory' ]));
    }
public function blogList()
{
    $currentCategory=false;
    $lang = Session::get('locale');
    $currentLanguage;
   if($lang == 'am')
   $currentLanguage = 2;
   if($lang == 'en')
   $currentLanguage = 1;
$categories = Category::all();
    $blogs1 = Blog::where('status', '1')->where('language_id', $currentLanguage)->orderBy('created_at', 'desc')->paginate(10);
    $blogs = Blog::where('status', '1')->orderBy('created_at', 'desc')->limit(4)->get();
    return view('home.blog_list', compact(['blogs', 'blogs1','currentCategory', 'categories']));
}
public function blogCategory($title)
{
    $currentCategory = Category::where('title', $title)->first();
    

    $lang = Session::get('locale');
    $currentLanguage;
   if($lang == 'am')
   $currentLanguage = 2;
   if($lang == 'en')
   $currentLanguage = 1;
$categories = Category::all();
    $blogs1 = Blog::where('status', '1')->where('language_id', $currentLanguage)->where('categories_id', $currentCategory->id)->orderBy('created_at', 'desc')->paginate(10);
    $blogs = Blog::where('status', '1')->orderBy('created_at', 'desc')->limit(4)->get();
    return view('home.blog_list', compact(['blogs', 'blogs1', 'categories', 'currentCategory']));
}

public function blogDetail($id)
{
    $blog = Blog::findOrFail($id);
    $categoryId = $blog->categories_id;
    $relatedBlogs = Blog::where('categories_id',$categoryId)->get();
    $blogs = Blog::where('status', '1')->orderBy('created_at', 'desc')->limit(4)->get();
    return view('home.blog_detail', compact(['blogs', 'blog', 'relatedBlogs']));
}
    public function setLang($lang)
    {
        if($lang == "am")
        App::setLocale('am');
        else if($lang == "en")
        App::setLocale('en');
        //  dd(App::getLocale());
      
        Session::put("locale", App::getLocale());

        return redirect()->back();
    }
}
