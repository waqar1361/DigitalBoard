<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
    
    use Notifiable;
    
    
    protected $fillable = [
        'name', 'email', 'password', 'notify',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /*
     *      RelationShips
     */
    public function departments()
    {
        return $this->belongsToMany(Department::class)->orderBy('name');
    }
    
    public function bookmarks()
    {
        return $this->belongsToMany(Document::class);
    }
    
    
    public function documents()
    {
        if ( ! $this->departments()->count())
            return [];
        $find = Document::query();
        foreach ($this->departments as $dept)
        {
            $find->orWhere('department_id', $dept->id);
        }
        
        return $find->get();
    }
    
    public function suggestions()
    {
        return Department::whereDoesntHave('users', function ($query) {
            $query->where('user_id', $this->id);
        })->orderBy('name')->get();
    }
    
    public function scopeNotifiable($query)
    {
        return $query->where('notify', 1);
    }
}
