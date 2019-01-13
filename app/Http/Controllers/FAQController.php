<?php

namespace App\Http\Controllers;

use App\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth:admin')->except([
            "index",
            'show',
            'createQuestion',
            'storeQuestion',
        ]);
    }
    
    public function index()
    {
        $faqs = FAQ::latest('views')->answered()->get();
        
        return view('faqs.index', compact("faqs"));
    }
    
    public function show(FAQ $faq)
    {
        $faq->addView();
        
        return view('faqs.show', compact("faq"));
    }
    
    public function faqs()
    {
        $faqs = FAQ::latest()->questions()->get();
        $archives = FAQ::latest()->answered()->take(10)->get();
        
        return view('admin.faqs', compact("faqs", 'archives'));
    }
    
    public function createQuestion()
    {
        return view('faqs.create');
    }
    
    public function storeQuestion(Request $request)
    {
        FAQ::create($request->validate([
            'name'     => "required|min:3|string",
            'email'    => "required|email",
            'question' => "required|string|min:5",
        ]));
        
        return redirect('/');
    }
    
    public function createAnswer(FAQ $faq)
    {
        return view('admin.faq', compact("faq"));
    }
    
    public function storeAnswer(Request $request, FAQ $faq)
    {
        $answer = $request->validate([
            'answer' => "required|string|min:5",
        ]);
        $faq->update(compact('answer'));
        $faq->mail();
        
        return redirect()->back();
    }
    
}
