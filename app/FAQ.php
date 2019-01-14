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
    
    public function mail()
    {
        Mail::to($this->email)->send(new AnswerFaqs($this));
    }
    
}
