<?php

namespace App\Http\Controllers;

use App\Department;
use App\Notice;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;

class baseController extends Controller {

    public function index()
    {
        if (auth()->check()){return redirect('/admin');}
        $items = Department::all()->sortBy('name');
        return view('index', compact('items'));
    }

    public function departments()
    {
        $items = Department::all()->sortBy('name');
        $keys = array_keys($items->toArray()[0]);
        return view('departments', compact('keys','items'));
    }

    public function notice(Department $dept)
    {
        $notices = $dept->notices;
        return view('Dept.notice' ,compact('notices'));
    }

    public function notification(Department $dept)
    {
        $notifications = $dept->notifications;
        return view('Dept.notification' ,compact('notifications'));
    }


    public function search()
    {
        return view('search');
    }


}
