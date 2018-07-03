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
        $govt_depts = Department::depts('govt');
        $semi_govt_depts = Department::depts('semi-govt');
        $pvt_depts = Department::depts('private');

        return view('Dept.list', compact('govt_depts','semi_govt_depts','pvt_depts'));
    }

    public function create()
    {
        return view('Dept.create');
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
