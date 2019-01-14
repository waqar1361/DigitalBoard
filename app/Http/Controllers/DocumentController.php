<?php

namespace App\Http\Controllers;

use App\Department;
use App\Document;
use App\Events\DocumentDownloaded as DownloadEvent;
use App\Events\DocumentViewed as ViewEvent;
use App\Http\Requests\DocumentFormRequest;
use App\Repositories\DocumentRepository;

class DocumentController extends Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth:admin')->only(['create', 'store']);
    }
    
    public function show(Document $document)
    {
        abort_if($document->blocked, 503);
        
        return view('document.index', compact('document'));
    }
    
    public function create()
    {
        return view('document.create');
    }
    
    public function store(DocumentFormRequest $request)
    {
        $request->ready();
        $document = $request->persist();
        $request->storeFile($document->filepath);
        
        return redirect('/admin/dashboard');
    }
    
    public function open(Document $document)
    {
        abort_if($document->blocked, 503);
        ViewEvent::dispatch($document);
        
        return response()->file($document->file_path);
    }
    
    public function download(Document $document)
    {
        abort_if($document->blocked, 503);
        DownloadEvent::dispatch($document);
        
        return response()->download($document->file_path);
    }
    
    public function browse(DocumentRepository $repository)
    {
        return view('browse')
            ->with([
                       'total'       => $repository->search()->count(),
                       'results'     => $repository->search()->paginate(9)
                                                   ->appends(request()->query()),
                       'departments' => Department::orderBy('name')->get(),
                       'years'       => $repository->years(),
                   ]);
    }
    
}
