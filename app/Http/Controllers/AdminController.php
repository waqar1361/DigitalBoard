<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labels = Document::oldest()->year()->pluck('year');
        $values = Document::oldest()->year()->pluck('published');
        $data = json_encode([
            'labels' => $labels,
            'values' => $values,
        ]);
        return view('admin.dashboard',compact('data'));
    }
    
    public function createDepartment()
    {
        return view('department.create');
    }
    
    public function createDocument()
    {
        return view('document.create');
    }
    
}
