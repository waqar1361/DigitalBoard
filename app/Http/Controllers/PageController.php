<?php

namespace App\Http\Controllers;

use App\Department;
use App\faq;

class PageController extends Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth')->except('index');
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
    
}
