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

    public function notices()
    {
        return $this->hasMany(Notice::class);
    }

    public function Notifications()
    {
        return $this->hasMany(Notification::class);
    }


    public static function scopeDepts($query,$type)
    {
        return $query->where('type', $type)->orderBy('name')->get();
    }

}
