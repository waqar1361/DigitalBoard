<?php

namespace App;

class Document extends Model {
    
    protected $dates = ['issued_at'];
    
    public function getRouteKeyName()
    {
        return "file";
    }
    
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    
    public function scopeNotices($query)
    {
        return $query->where('tags', 'like', "%notice%");
    }
    
    public function scopeNotifications($query)
    {
        return $query->where('tags', 'like', "%notification%");
    }
    
    public static function archives()
    {
        return static::selectRaw("year(issued_at) year, monthname(issued_at) month, count(*) published")
            ->groupBy('month', 'year')
            ->orderByRaw('min(issued_at)')
            ->get();
    }
    
    public static function years()
    {
        return static::selectRaw("year(issued_at) year, count(*) published")
            ->groupBy('year')
            ->orderByRaw('min(year) desc')
            ->get();
    }
    
    public static function months()
    {
        return static::selectRaw("monthname(issued_at) month, count(*) published")
            ->groupBy('month')
            ->orderByRaw('month')
            ->get();
    }
    
    public function limited($limit) {
        $text = $this->subject;
        if (str_word_count($this->subject, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$limit]) . '...';
        }
        return $text;
    }
    
    public function fileSize()
    {
        return round(filesize("storage/" . $this->file . "." . $this->extension) / 1024 ** 2, 2);
    }
    
}
