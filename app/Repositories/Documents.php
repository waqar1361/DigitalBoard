<?php


namespace App\Repositories;


use App\Department;
use App\Document;
use Carbon\Carbon;

class Documents {
    public function filter($filters)
    {
        $month = Carbon::parse($filters['month'] )->month;
       $year = $filters['year'];

        return Document::latest()
            ->whereMonth('issued_at', $month)
            ->whereYear('issued_at', $year)
            ->get();
    }

    public function notices($name)
    {
        if (!$name)
            return Document::latest()->notices()->get();

        $id = Department::where('name',$name)->get()->first()->id;
        return Document::latest()->where('department_id',$id)->notices()->get();
    }

    public function notifications($name)
    {
        if (!$name)
            return Document::latest()->notifications()->get();

        $id = Department::where('name',$name)->get()->first()->id;
        return Document::latest()->where('department_id',$id)->notifications()->get();
    }
}