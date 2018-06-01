<?php

namespace App;

class Department extends Model
{
    public function notices()
    {
        return $this->hasMany(Notice::class);
    }

    public function Notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'name';
    }


}
