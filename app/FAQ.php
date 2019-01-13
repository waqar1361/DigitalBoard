<?php

namespace App;

use App\Mail\AnswerFaqs;

class FAQ extends Model {
    
    protected $table = 'faqs';
    
    public function scopeQuestions($query)
    {
        return $query->where('answer', null);
    }
    
    public function scopeAnswered($query)
    {
        return $query->where('answer', "!=", null);
    }
    
    public function addView()
    {
        //TODO::Make A event for it
        $this->increment('views');
    }
    
    public function mail()
    {
        Mail::to($this->email)->send(new AnswerFaqs($this));
    }
    
}
