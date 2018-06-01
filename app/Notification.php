<?php

namespace App;

class Notification extends Model
{
    public function Department()
    {
        return $this->belongsTo(Department::class);
    }

    protected $fillable = ['title','path','dept_id'];

}
