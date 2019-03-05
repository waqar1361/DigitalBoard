<?php

namespace App\Http\Controllers;

use App\Events\InquiryViewed;
use App\Inquiry;
use App\Mail\AnswerInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiriesController extends Controller
{
    
    public function __construct() {
        parent::__construct();
        $this->middleware('auth:admin')->except([
            "index",
            'show',
            'createQuestion',
            'storeQuestion',
        ]);
    }
    
    public function index() {
        $inquiries = Inquiry::latest('views')->answered()->get();
        
        return view('inquiries.index', compact("inquiries"));
    }
    
    public function show(Inquiry $inquiry) {
        InquiryViewed::dispatch($inquiry);
        
        return view('inquiries.show', compact("inquiry"));
    }
    
    public function Inquiries() {
        $inquiries = Inquiry::latest()->questions()->get();
        $archives = Inquiry::latest()->answered()->take(10)->get();
        
        return view('admin.inquiries', compact("inquiries", 'archives'));
    }
    
    public function createQuestion() {
        return view('inquiries.create');
    }
    
    public function storeQuestion(Request $request) {
        Inquiry::create($request->validate([
            'name'     => "required|min:3|string",
            'email'    => "required|email",
            'question' => "required|string|min:5",
        ]));
        flash("Your question Submitted, Answer will be delivered in 2-3 business days");
        
        return back();
    }
    
    public function createAnswer(Inquiry $inquiry) {
        return view('admin.inquiry', compact("inquiry"));
    }
    
    public function storeAnswer(Request $request, Inquiry $inquiry) {
        $data = $request->validate([
            'answer' => "required|string|min:5",
        ]);
        $inquiry->update($data);
        Mail::to($inquiry->email)->send(new AnswerInquiry($inquiry));
        flash("Answered");
        
        return redirect()->back();
    }
    
}
