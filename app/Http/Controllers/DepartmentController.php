<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('department.index');
    }

    public function create()
    {
        return view('department.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:3',
            'type' => 'required'
        ]);
        Department::create([
            'name' => request()->name,
            'type' => request()->type
            ]);
        return ["added successfully"];
    }


}
