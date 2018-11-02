<?php

namespace App\Http\Controllers;

use App\Document;
use App\Http\Requests\DocumentFormRequest;
use App\Repositories\Documents;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DocumentController extends Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth')->only(['create', 'store']);
    }
    
    public function show(Document $document)
    {
        return view('document.index', compact('document'));
    }
    
    public function create()
    {
        return view('document.create');
    }
    
    public function store(DocumentFormRequest $request)
    {
        $request->ready();
        $request->persist();
        $request->storeFile();
        
        return redirect('/admin');
    }
    
    public function open(Document $document)
    {
        $path = "storage/" . $document->file . "." . $document->extension;
        
        return response()->file($path);
    }
    
    public function download(Document $document)
    {
        $path = "storage/" . $document->file . "." . $document->extension;
        
        return response()->download($path);
    }
    
    public function browse(Request $request)
    {
        $search = $request->search;
        $type = $request->type;
        $sort = $request->sort;
        $dept = $request->dept;
        $year = $request->year;
        $month = $request->month;
        $find = Document::query();
        
        /***        Archives      ***/
        if ($request->has('month') and $request->month != 'all')
            $find->whereMonth('issued_at', Carbon::parse('1 ' . $request->month)->month);
        if ($request->has('year') and $request->year != 'all')
            $find->whereYear('issued_at', $request->year);
        
        /***        Search      ***/
        if ($search !== null)
        {
            $keywords = explode(' ', $search);
            foreach ($keywords as $key)
            {
                $find->orWhere("tags", "like", "%$key%");
            }
        }
        
        /***        Department      ***/
        if ($dept != 'all')
            $find->where('tags', 'like', "%$dept%");
        
        /***        Type      ***/
        if ($type == 'notice')
            $find->where('type', 'notice');
        if ($type == 'notification')
            $find->where('type', 'notification');
        
        /***     Sort By      ***/
        
        if ($sort == 'latest')
            $find->orderBy("created_at");
        if ($sort == 'oldest')
            $find->orderByDesc("created_at");
        if ($sort == 'alph')
            $find->orderBy('subject');
        
        
        $results = $find->paginate(10);
        
        return view('browse', compact('results', 'search', 'sort', 'dept', 'type', 'year', 'month'));
        
    }
    
}
