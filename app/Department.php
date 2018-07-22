<?php

namespace App;

class Department extends Model
{
    /*
     * @overRide
     */
    public $timestamps = false;
    protected $fillable = ['name','type'];

    public function getRouteKeyName()
    {
        return 'name';
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


    public function scopeDepts($query,$type)
    {
        return $query->where('type', $type)->orderBy('name')->get();
    }

}
