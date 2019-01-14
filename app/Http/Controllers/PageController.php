<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class PageController extends Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        return view('home')->with([
            'notices'       => Document::latest()->notices()->take(7)->get(),
            'notifications' => Document::latest()->notifications()->take(7)->get()
        ]);
    }
    
    public function cookies(Request $request)
    {
        setcookie($request->name, $request->value, time() + (86400 * 30), "/");
        
        return "Successful";
    }
    
}
