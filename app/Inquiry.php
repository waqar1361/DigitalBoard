<?php

namespace App;

use App\Mail\AnswerInquiry;

class Inquiry extends Model {
    
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
        Mail::to($this->email)->send(new AnswerInquiry($this));
    }
    
}
