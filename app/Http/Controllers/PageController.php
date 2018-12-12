<?php

namespace App\Http\Controllers;

use App\Department;
use App\faq;
use Illuminate\Http\Request;

class PageController extends Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        return view('home');
    }
    
    public function cookies(Request $request)
    {
        setcookie($request->name, $request->value, time() + (86400 * 30), "/");
        return "Successful";
    }
    
}
