<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        return view('department.index');
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'full_name' => 'nullable',
            'type' => 'required'
        ]);
        
        Department::create($data);
        
        return ["added successfully"];
    }
    
}
