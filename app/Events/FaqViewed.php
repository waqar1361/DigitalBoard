<?php

namespace App\Events;

use App\FAQ;
use Illuminate\Foundation\Events\Dispatchable;

class FaqViewed {
    
    use Dispatchable;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(FAQ $FAQ)
    {
        if ( ! $this->isViewed($FAQ))
        {
            $FAQ->views += 1;
            $FAQ->save();
            $this->storeInSession($FAQ);
        }
    }
    
    private function isViewed($FAQ)
    {
        $viewed = request()->session()->get('faqViewed', []);
        if ($viewed === null)
        {
            return false;
        }
        if (array_key_exists($FAQ->id, $viewed))
            return true;
    }
    
    private function storeInSession($FAQ)
    {
        $viewed = request()->session()->get('faqViewed', []);
        $viewed[$FAQ->id] = "viewed";
        request()->session()->put("faqViewed", $viewed);
    }
    
    
}
