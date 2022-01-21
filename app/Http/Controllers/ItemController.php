<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('item.list');
    }
    public function sells()
    {
        return view('sells.sells');
    }
public function YourRequest()
{
    return view('request.your-request');
}
    public function request()
    {
        return view('request.request');
    }
}
