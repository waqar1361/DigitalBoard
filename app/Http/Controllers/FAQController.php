<?php

namespace App\Http\Controllers;

use App\faq;
use App\Mail\answer;
use Illuminate\Http\Request;

class FAQController extends Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth:admin')->except([
            "index",
            'createQuestion',
            'storeQuestion',
        ]);
    }
    
    public function index()
    {
        $faqs = faq::latest()->answered()->get();
        
        return view('faqs.index', compact("faqs"));
    }
    
    public function show(faq $faq)
    {
        return view('faqs.show', compact("faq"));
    }
    
    public function faqs()
    {
        $faqs = faq::latest()->questions()->get();
        
        return view('admin.faqs', compact("faqs"));
    }
    
    public function createQuestion()
    {
        return view('faqs.create');
    }
    
    public function storeQuestion(Request $request)
    {
        $request->validate([
            'name'     => "required|min:3|string",
            'email'    => "required|email",
            'question' => "required|string|min:5",
        ]);
        
        faq::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'question' => $request->question,
        ]);
        
        return redirect('/');
    }
    
    public function createAnswer(faq $faq)
    {
        return view('admin.faq', compact("faq"));
    }
    
    public function storeAnswer(Request $request, faq $faq)
    {
//        return $faq;
        $request->validate([
            'answer' => "required|string|min:5",
        ]);
        
        $faq->update([
            'answer' => $request->answer
        ]);
        
        
        \Mail::to($faq->email)->send(new answer($faq));
        
        return redirect()->back();
    }
    
}
