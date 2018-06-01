<?php

namespace App\Http\Controllers;

use App\Notice;
use App\Department;
use App\Notification;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }
    public function create()
    {
        return view('admin.create');
    }

    public function list ()
    {
        $items = Department::all();
        $keys = array_keys($items->toArray()[0]);
        return view('departments', compact('keys','items'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'upload_file' => 'required|mimes:pdf|max:1024',
            'title' => 'required|min:4|String',
            'type' => 'required',
            'dept_id' => 'required',
        ]);
        $fileName = date('mdYHis').'.'.request()->upload_file->getClientOriginalExtension();
        $request->upload_file->storeAs('public',$fileName);
        $path = "/storage/" . $fileName;
        $title = $request->title;
        $dept_id = $request->dept_id;
        $data = ['title' =>$title ,'path' => $path,'dept_id' => $dept_id];

        switch ($request->type)
        {
            case 'notice':
                Notice::create($data);
                break;
            case 'notification':
                Notification::create($data);
                break;
        }

        return redirect('/admin');
    }

}
