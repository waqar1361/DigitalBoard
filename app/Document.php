<?php

namespace App;

use App\Events\DocumentPublished;

class Document extends Model {
    
    protected $dates = ['issued_at'];
    
    protected $dispatchesEvents = ['created' => DocumentPublished::class,];
    
    public function getRouteKeyName()
    {
        return "file";
    }
    
    /*
     *      RELATIONSHIPS
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
    /*
     *      COMPUTED ATTRIBUTES
     */
    public function getFilePathAttribute()
    {
        return "storage/{$this->file}.{$this->extension}";
    }
    
    public function getShortNameAttribute()
    {
        if (str_word_count($this->subject, 0) > 3)
        {
            $words = str_word_count($this->subject, 2);
            $pos = array_keys($words);
            $text = substr($this->subject, 0, $pos[3]) . '...';
            
            return $text;
        }
        
        return $this->subject;
    }
    
    public function getFileSizeAttribute()
    {
        return round(filesize($this->file_path) / 1024 ** 2, 2);
    }
    
    public function isBookmarked()
    {
        return (bool) $this->users()->where('id', auth()->id())->count();
    }
    
    /*
     *      Scopes Queries
     */
    public function scopeAllowed($query)
    {
        return $query->where('published', 1)
                     ->where('blocked', 0);
    }
    
    public function scopeBlocked($query)
    {
        return $query->where('blocked', 1);
    }
    
    public function scopeNotices($query)
    {
        return $query->where('tags', 'like', "%notice%")
                     ->allowed();
    }
    
    public function scopeNotifications($query)
    {
        return $query->where('tags', 'like', "%notification%")
                     ->allowed();
    }
    
    public function scopePending($query)
    {
        return $query->where('published', 0);
    }
    
}
