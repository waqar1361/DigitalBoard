<?php

namespace App\Repositories;


use App\Document;
use Carbon\Carbon;

class DocumentRepository {
    
    public function archives()
    {
        return Document::selectRaw("year(issued_at) year, monthname(issued_at) month, count(*) published")
                       ->allowed()
                       ->groupBy('month', 'year')
                       ->orderByRaw('min(issued_at)')
                       ->get();
    }
    
    public function years()
    {
        return Document::selectRaw("year(issued_at) name, count(*) published")
                       ->allowed()
                       ->groupBy('name')
                       ->orderByRaw('min(name) desc')
                       ->get();
    }
    
    public function search()
    {
        $query = Document::allowed();
        $search = request()->search;
        $type = request()->type;
        $sort = request()->sort;
        $dept = request()->dept;
        
        
        /***        Search      ***/
        if ($search !== null)
        {
            $keywords = explode(' ', $search);
            foreach ($keywords as $key)
            {
                $query->orWhere("tags", "like", "%$key%");
            }
        }
        
        /***        Archives      ***/
        if (request()->has('month') and request()->month != 'all' and request()->month != null)
            $query->whereMonth('issued_at', Carbon::parse('1 ' . request()->month)->month);
        if (request()->has('year') and request()->year != 'all' and request()->year != null)
            $query->whereYear('issued_at', request()->year);
        
        /***        Department      ***/
        if ($dept != 'all')
            $query->where('tags', 'like', "%$dept%");
        
        /***        Type      ***/
        if ($type == 'notice')
            $query->where('type', 'notice');
        if ($type == 'notification')
            $query->where('type', 'notification');
        
        /***     Sort By      ***/
        
        if ($sort == 'latest')
            $query->orderBy("created_at");
        if ($sort == 'oldest')
            $query->orderByDesc("created_at");
        if ($sort == 'alph')
            $query->orderBy('subject');
        
        
        return $query;
    }
    
    public function chartData()
    {
        $query = Document::selectRaw("year(issued_at) year, count(*) published")
                         ->groupBy('year')
                         ->orderBy('year');
        $labels = $query->pluck('year');
        $values = $query->pluck('published');
        
        return collect(['labels' => $labels, 'values' => $values,])->toJson();;
        
    }
    
}