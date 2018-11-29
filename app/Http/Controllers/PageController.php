<?php

namespace App\Http\Controllers;

use App\Department;
use App\faq;
use Illuminate\Http\Request;

class PageController extends Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth')->except(['index', 'cookies', 'layout']);
    }
    
    public function index()
    {
        if (auth()->check())
            return redirect('admin');
        $items = Department::all()->sortBy('name');
        
        return view('home', compact('items'));
    }
    
    public function admin()
    {
        return view('admin.index');
    }
    
    public function faqs()
    {
        $faqs = faq::latest()->questions()->get();
        
        return view('admin.faqs', compact("faqs"));
    }
    
    public function cookies(Request $request)
    {
        setcookie($request->name, $request->value, time() + (86400 * 30), "/");
        return "Successful";
    }
    
}
