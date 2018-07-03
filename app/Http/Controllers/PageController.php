<?php

namespace App\Http\Controllers;

use App\Department;
use App\Notice;
use App\Notification;
use Illuminate\Http\Request;

class PageController extends Controller {

    public function index()
    {
        if (auth()->check())
            return redirect('admin');
        $items = Department::all()->sortBy('name');
        return view('index', compact('items'));
    }

    public function aboutUs()
    {
        return view('about');
    }

    public function contactUs()
    {
        return view('contact');
    }

    public function departments()
    {
        $items = Department::all()->sortBy('name');
        $keys = array_keys($items->toArray()[0]);

        return view('departments', compact('keys', 'items'));
    }

    public function notices()
    {
        $notices = Notice::latest()
            ->paginate(12);
        if (request()->has('dept'))
        {
            $notices = Notice::latest()
                ->where('department_id', request()->dept)
                ->paginate(12);
            $dept = Department::find(request()->dept)->name;
        }
        return view('notice', compact('notices','dept'));
    }


    public function notifications()
    {
        $notifications = Notification::latest()
            ->paginate(12);
        if (request()->has('dept'))
        {
            $notifications = Notification::latest()
                ->where('department_id', request()->dept)
                ->paginate(12);
            $dept = Department::find(request()->dept)->name;
        }
        return view('notification', compact('notifications','dept'));
    }

    public function pdf( $dept, $path )
    {
        return response()->file("storage/" . $path . ".pdf");
    }

    public function download( $path )
    {
        return response()->download("storage/" . $path . ".pdf");
    }

    public function byDept( Department $dept )
    {
        $notices = $dept->notices()->get();
        $notifications = $dept->notifications()->get();
        $name = $dept->name;

        return view('byDept', compact('notices', 'notifications', 'name'));
    }

    public function search( Request $request)
    {
        if ($request->has('notices'))
        {

        }
        if ($request->has('notification'))
        {

        }
        $q = $request->q;
        return view('search',compact('q'));
    }

}
