<?php

namespace App\Http\Controllers;

use App\Department;
use App\Document;
use Illuminate\Http\Request;

class UserController extends Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }
    
    public function home()
    {
        return view('users.home');
    }
    
    public function departments()
    {
        return view('users.departments');
    }
    
    public function bookmarks()
    {
        return view('users.bookmarks');
    }
    
    public function updateSettings(Request $request)
    {
        auth()->user()->notify = 0;
        
        if ($request->notify)
        {
            auth()->user()->notify = 1;
        }
        
        auth()->user()->save();
        
        flash('Your settings saved','notify3');
        
        return back();
    }
    
    
    public function followDepartment(Department $department)
    {
        $department->users()->attach(auth()->id());
        flash($department->name . ' department successfully  followed','notify3');
        
        return back();
    }
    
    public function unfollowDepartment(Department $department)
    {
        $department->users()->detach(auth()->id());
        flash($department->name . ' department successfully  unfollowed','notify3');
        
        return back();
    }
    
    public function bookmarkAttach(Document $document)
    {
        $document->users()->attach(auth()->id());
        flash('Saved','notify3');
    
        return back();
    }
    
    public function bookmarkDetach(Document $document)
    {
        $document->users()->detach(auth()->id());
        flash('Removed','notify3');
    
        return back();
    }
    
}
