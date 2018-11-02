<?php

namespace App;

class faq extends Model {
    
    public function scopeQuestions($query)
    {
        return $query->where('answer', null);
    }
    
    public function scopeAnswered($query)
    {
        return $query->where('answer', "!=", null);
    }
    
}
