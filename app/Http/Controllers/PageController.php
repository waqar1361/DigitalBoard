<?php

namespace App\Http\Controllers;

use App\Department;
use App\Document;
use App\Notice;
use App\Notification;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller {
    
    public function index()
    {
        if (auth()->check())
            return redirect('admin');
        $items = Department::all()->sortBy('name');
        
        return view('home', compact('items'));
    }
    
    public function aboutUs()
    {
        return view('about');
    }
    
    public function contactUs()
    {
        return view('contact');
    }
    
    public function admin()
    {
        return view('admin.index');
    }
    
}
