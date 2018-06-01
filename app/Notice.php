<?php

namespace App;

class Notice extends Model
{
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    protected $fillable = [
        'title', 'path', 'department_id',
    ];
}
