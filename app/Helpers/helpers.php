<?php

if (!function_exists("flash")) {
    function flash($message, $method = "notify" )
    {
        session()->flash('message', $message);
        session()->flash('method', $method);
    }
}

if (!function_exists('months')) {
    function months()
    {
        $months = [];
        for ($i = 1; $i <= 12; $i++)
        {
            array_push($months, date('F', mktime(0, 0, 0, $i, 10)));
        }
    
        return $months;   
    }
}

//if (!function_exists('Docs')) {
//    function Docs()
//    {
//        return new DocumentRepository;
//    }
//}