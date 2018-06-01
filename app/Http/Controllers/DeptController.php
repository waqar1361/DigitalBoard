<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DeptController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        $items = Department::all()->sortBy('name');

        return view('Dept.list', compact('items'));
    }

    public function create()
    {
        return view('Dept.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:4'
        ]);
        $new_dept =  new Department(request(['name']));
        $new_dept->save();
        return ["added successfully"];
    }


}
