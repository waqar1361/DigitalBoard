<?php

namespace App\Http\Controllers;

use App\Document;
use App\Http\Requests\DocumentFormRequest;
use App\Repositories\Documents;
use Illuminate\Http\Request;

class DocumentController extends Controller {

    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store']);
    }

    public function index( Request $request, Documents $documents )
    {
        if ( $request->has(['year', 'month']) )
            $rows = $documents->filter($request->only(['year', 'month']));
        if ( $request->notices )
            $rows = $documents->notices($request->dept);
        if ( $request->notifications )
            $rows = $documents->notifications($request->dept);
        if ( !isset($rows) )
            $rows = Document::latest()->get();

        return view('document.index', compact('rows'));

    }

    public function browse( Document $document )
    {
        return view('document.index', compact('document'));
    }

    public function create()
    {
        return view('document.create');
    }

    public function store( DocumentFormRequest $request )
    {
        $request->ready();
        $request->persist();
        $request->storeFile();

        return redirect('/admin');
    }


    public function show( Document $document )
    {
        $path = "storage/" . $document->file . ".pdf";

        return response()->file($path);
    }

    public function download( Document $document )
    {
        $path = "storage/" . $document->file . ".pdf";

        return response()->download($path);
    }

    public function edit( Document $document )
    {
        //
    }


    public function update( Request $request, Document $document )
    {
        //
    }

    public function destroy( Document $document )
    {
        //
    }
}
