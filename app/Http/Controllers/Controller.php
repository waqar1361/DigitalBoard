<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function __construct()
    {
        if (empty($_COOKIE['theme']))
        {
            setcookie('theme', 'light', time() + (86400 * 30), "/");
            $_COOKIE['theme'] = 'light';
        }
        
        $this->middleware('after');
    }
    
}
