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
        if ( auth()->check() )
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

    public function search( Request $request )
    {
        $search = $request->search;
        $type = $request->type;
        $sort = $request->sort;
        $dept = $request->dept;
        $find = Document::query();
        /***        Search      ***/
        if ( $search !== null )
        {
            $keywords = explode(' ', $search);
            foreach ($keywords as $key)
            {
                $find->orWhere("tags", "like", "%$key%");
            }
        }

        /***        Department      ***/
        if ($dept != 'all')
            $find->where('tags','like', "%$dept%" );

        /***        Type      ***/
        if ($type == 'notice')
            $find->where('type','notice');
        if ($type == 'notification')
            $find->where('type','notification');

        /***     Sort By      ***/

        if ($sort == 'latest')
            $find->orderBy("created_at");
        if ($sort == 'oldest')
            $find->orderByDesc("created_at");
        if ($sort == 'alph')
            $find->orderBy('subject');


        $results = $find->get();

        return view('search', compact( 'results','search','sort','dept','type'));

    }

}
