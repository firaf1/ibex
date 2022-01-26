<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   
   public function index()
   {
      return view('admin.user');
   }


public function profile()
{
 return view('admin.profile');
}
   public function vlog()
   {
      return view('admin.vlog');
   }
   public function blog()
   {
     return view('admin.blog');
   }
}
