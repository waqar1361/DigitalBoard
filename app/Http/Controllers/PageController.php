<?php

namespace App\Http\Controllers;

use App\Department;
use App\Document;
use App\Notice;
use App\Notification;
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

    public function search( Request $request)
    {
        $q = $request->q;
        if (strlen($q) < 3)
        {
            $results = null;
            return view('search', compact('q', 'results'));
        }

        $keywords = explode(' ', $q);
        $find = Document::query();

        foreach ($keywords as $key){
            if ($key != ("notices" or "notice" or "notification" or "notifications"))
                $find->orWhere("tags", "like", "%$key%");
            if($key == ( "notice" or "notices"))
                $find->where("tags","like", "%$key%");
            if($key == ("notification" or "notifications"))
                $find->where( "tags", "like","%$key%");
        }

        $results = $find->get();


        return view('search', compact('q', 'results'));

    }

}
