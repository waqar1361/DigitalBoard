<?php

namespace App;

class Department extends Model {
    
    public $timestamps = false;
    
    public function getRouteKeyName()
    {
        return 'name';
    }
    /*
     *      RelationShips
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
    
    public function notices()
    {
        return $this->hasMany(Document::class)->notices();
    }
    
    public function notifications()
    {
        return $this->hasMany(Document::class)->notifications();
    }
    
    /*
     *      Scopes
     */
    public function scopeDepts($query, $type)
    {
        return $query->where('type', $type)->orderBy('name')->get();
    }
    
}
