<?php

namespace App\Http\Controllers;

use App\Department;
use App\Notice;
use App\Notification;
use Illuminate\Http\Request;


class HomeController extends Controller {

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
        return view('document.home');
    }

    public function create()
    {
        return view('document.create');
    }

    public function list()
    {
        $items = Department::all();
        $keys = array_keys($items->toArray()[0]);

        return view('departments', compact('keys', 'items'));
    }

    public function upload( Request $request )
    {
        $request->validate([
            'upload_file'   => 'required|mimes:pdf|max:1024',
            'subject'       => 'required|min:4',
            'tags'          => 'required|string',
            'type'          => 'required|in:notice,notification',
            'department' => 'required|exists:departments,id',
            'issued_at'     => 'required|date',
        ]);

        $pdf = $request->upload_file;
        $fileName = microtime();


        $tags = $request->tags;
        $tags .= " , ".$request->subject;
        $tags .= ", ".$request->type;
        $tags .= ", ".Department::find($request->department_id)->name;
        $tags .= ", ".$request->issued_at;
        $data = [
            'subject' => $request->subject,
            'file' => $fileName,
            'tags' => $tags,
            'issued_at' => $request->issued_at,
            'department_id' => $request->department_id,
        ];

        switch ($request->type)
        {
            case 'notice':
                Notice::create($data);
                break;
            case 'notification':
                Notification::create($data);
                break;
        }
        $pdf->storeAs('public', $fileName . "." . request()->upload_file->getClientOriginalExtension());

        return redirect('/document');
    }

}
